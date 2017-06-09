@extends('layouts.full')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" action="{{ url('/admin/pwd').'/'.$id}}" method="post" role="form">
                <strong style="font-size: 29px">密码修改</strong>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label">新密码</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="newpassword" required pattern="^[\d_a-zA-Z]{6,18}$" title="6-18位，只能是字母、数字和下划线">
                        <small>6-18位，只能是字母、数字和下划线</small>

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label">确认新密码</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="rnewpassword" required pattern="^[\d_a-zA-Z]{6,18}$" title="6-18位，只能是字母、数字和下划线">
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

