
@extends('layouts.full')

@section('content')
    <div class="row">
        <strong style="font-size: 29px">班级管理</strong>
        <a href="{{url('admin/classadd')}}" class="btn btn-primary btn-sm" style="margin-left: 80%"><i class="glyphicon glyphicon-plus"></i>增加班级</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>班级名</th>
                    <th>专业</th>
                    <th>成员数量</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach($classes as $r)

                <tr id="{{$r->classid}}">
                    <td>{{$r->className}}</td>
                    <td>{{$r->major}}</td>
                    <td>{{$r->count}}</td>
                    <td>
                        <a href="{{url('admin/class').'/'.$r->classid}}">修改信息</a>
                        <a href="javascript:void(0);"
                        onclick="
                        @if($r->count!=0)
                                delerr();
                        @else
                                classdel({{$r->classid}});
                        @endif
                        "
                        >删除班级</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <script>
        function delerr() {
            alert("班级中成员数不为0，无法删除！");
        }
        function classdel(id) {
            var r=confirm("确认删除该班级？");
            if (r==true){
                window.location.href="{{url('admin/classdel')}}/"+id;
            }
        }
    </script>
@endsection

