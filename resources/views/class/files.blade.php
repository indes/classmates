@extends('layouts.full')

@section('content')
    <div class="row">
        <h4>文件列表</h4>

        @if($files->count())
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>文件名</th>
                    <th>大小</th>
                    <th>上传者</th>
                    <th>上传日期</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)

                <tr id="{{$file->fileid}}">
                    <td>{{$file->name}}</td>
                    <td>{{number_format($file->size/1024,2)}} KB</td>

                    <td>{{$file->userid}}</td>
                    <td>{{$file->created_at}}</td>
                    <td>
                        <a href="{{url('class/file').'/'.$file->fileid}}">
                            <i class="glyphicon glyphicon-cloud-download"></i>
                        </a>
                        &nbsp;
                        <a href="javascript:void(0);" onclick="delfile({{$file->fileid}})">
                            <i class="glyphicon glyphicon-remove-sign"></i>
                        </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        @else
            没有文件
        @endif

    </div>
    <script>
        function delfile(fileid)
        {
            var r=confirm("确认删除该文件？");
            if (r==true){
                //使用ajax方式删除文件
                var obj=$.ajax({
                    url:'{{url('class/file')}}/'+fileid,
                    type:'DELETE',
                    async:true,    //或false,是否异步
                    data:{
                        _token:"{{csrf_token()}}",
                    },
                    success:function(result){
                        if(result.status==1){
                            alert("删除成功！");
                            $("tr#"+result.fileid).remove();
                        }else{
                            alert("删除失败！错误信息："+result.errmsg);
                        }
                    }
                });
            }

        }
    </script>
@endsection

