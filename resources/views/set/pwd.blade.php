@extends('layouts.full')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <form class="form-horizontal" action="{{ url('/account/set/pwd') }}" method="post" role="form">
                <legend>设置/<small>修改密码</small></legend>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label">原密码</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="oldpassword">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label">新密码</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="newpassword">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label">确认新密码</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="rnewpassword">
                        @if (count($errors) > 0)
                            <span id="helpBlock" class="help-block text-danger" style="color: red">{!! implode('<br>', $errors->all()) !!}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-3">
                        <button type="reset" class="btn btn-default btn-sm">重填</button>
                        <button type="submit" class="btn btn-primary btn-sm">修改</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

