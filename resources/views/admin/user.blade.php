
@extends('layouts.full')

@section('content')
    <div class="row">
        <strong style="font-size: 29px">用户管理</strong>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>用户id</th>
                    <th>昵称</th>
                    <th>真实姓名</th>
                    <th>所属班级</th>
                    <th>用户级别</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $r)
                    <tr id="{{$r->id}}">
                        <td>{{$r->id}}</td>
                        <td>{{$r->userName}}</td>
                        <td>{{$r->stuName}}</td>
                        <td>{{$r->className}}</td>
                        <td>{{$r->isadmin?'管理员':'普通用户'}}</td>
                        <td>
                            <a href="{{url('admin/profile').'/'.$r->id}}">修改资料</a>
                            <a href="{{url('admin/pwd').'/'.$r->id}}">修改密码</a>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
    </div>
@endsection

