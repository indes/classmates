@extends('layouts.full')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-push-2">

            <form class="form-horizontal" action="{{ url('/account/set/profile') }}" method="post" role="form">
                <legend>个人信息设置</legend>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                    <div class="col-lg-9">
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">昵称</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="name" value="{{$user->userName}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">个人简介</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="bio" value="{{$user->stuBio}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">真实姓名</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="rname" value="{{$user->stuName}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">性别</label>
                    <div class="col-lg-9">
                        <input type="radio" name="sex" value="male" checked>男&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="sex" value="female">女
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">班级</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="class" value="{{$class->className}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">学号</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="stunum" value="{{$user->stuNum}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">QQ</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="QQ" value="{{$user->stuQQ}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">手机号</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="phone" value="{{$user->stuPhone}}">
                    </div>
                </div>

                <div class="form-group">

                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="reset" class="btn btn-default btn-sm">重填</button>
                        <button type="submit" class="btn btn-primary btn-sm">提交</button>
                        @if (count($errors) > 0)
                            <span id="helpBlock" class="help-block text-danger" style="color: red">{!! implode('<br>', $errors->all()) !!}</span>
                        @endif
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
