@include('layouts.head')
<main class="container">
    <div class="row">
        <div class="col-md-6 col-md-push-2">

            <form class="form-horizontal" action="{{ url('/auth/signup') }}" method="post" role="form" id="singupForm">
                <legend><a href="{{url('/')}}">同学录</a>/<small>注册</small></legend>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">Email*</label>
                    <div class="col-lg-9">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label">密码*</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="Password" required pattern="^[\d_a-zA-Z]{6,18}$" title="6-18位，只能是字母、数字和下划线">
                        <small>6-18位，只能是字母、数字和下划线</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-3 control-label">确认密码*</label>
                    <div class="col-lg-9">
                        <input type="password" class="form-control" name="confirmPassword" required pattern="^[\d_a-zA-Z]{6,18}$" title="6-18位，只能是字母、数字和下划线">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">真实姓名*</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
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
                            <option value="{{$r->classid}}">{{$r->className}}</option>
                            @endforeach
                        </select>

                    </div>

                </div>

                <div class="form-group">

                    <div class="col-lg-9 col-lg-offset-3">
                        <a href="{{url('auth/login')}}" class="btn btn-info btn-sm">已有账号？登录</a>
                        <button type="submit" class="btn btn-primary btn-sm">提交注册</button>
                        @if (count($errors) > 0)
                            <span id="helpBlock" class="help-block text-danger" style="color: red">{!! implode('<br>', $errors->all()) !!}</span>
                        @endif
                    </div>
                </div>

            </form>
        </div>
    </div>
    </main>
@include('layouts.footer')