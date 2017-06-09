@extends('layouts.full')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-push-2">

            <form class="form-horizontal" enctype="multipart/form-data" action="" method="post" role="form">
                <legend>个人资料修改</legend>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">头像</label>
                    <div class="col-lg-9">
                        <input type="file" name="stuimg"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                    <div class="col-lg-9">
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">昵称</label>
                    <div class="col-lg-9">
                        <input type="" class="form-control" name="name" value="{{$user->userName}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">个人简介</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="4" name="bio">{{$user->stuBio}}</textarea>
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
                        <select class="form-control" name="classid">
                            @foreach($sc as $r)
                                <option value="{{$r->classid}}"
                                        @if($user->stuClassId==$r->classid)
                                        selected
                                        @endif
                                >{{$r->className}}</option>
                            @endforeach
                        </select>
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

