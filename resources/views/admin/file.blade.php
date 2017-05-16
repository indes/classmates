
@extends('layouts.full')

@section('content')
    <div class="row">
        <strong style="font-size: 29px">文件管理</strong>
        @if($files->count())
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>文件名</th>
                    <th>大小</th>
                    <th>上传者</th>
                    <th>所属班级</th>
                    <th>上传日期</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)

                    <tr id="{{$file->fileid}}">
                        <td>{{$file->name}}</td>
                        <td>{{number_format($file->size/1024,2)}} KB</td>
                        <td>{{$file->stuName}}{{$file->userName?'('.$file->userName.')':''}}</td>
                        <td>{{$file->className}}</td>
                        <td>{{$file->created_at}}</td>
                        <td>
                            <a href="{{url('class/file').'/'.$file->fileid}}" title="下载">
                                <i class="glyphicon glyphicon-cloud-download"></i>
                            </a>
                            &nbsp;
                            <a href="javascript:void(0);" onclick="delfile({{$file->fileid}})" title="删除">
                                <i class="glyphicon glyphicon-trash"></i>
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
                    async:true,
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

