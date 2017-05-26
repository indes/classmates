@include('layouts.head')
<main class="container">
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <form class="form-horizontal" action="{{ url('/auth/login') }}" method="post" role="form">
                    <legend><a href="{{url('/')}}">同学录</a>/<small>登录</small></legend>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password" required>
                            @if (count($errors) > 0)
                                <span id="helpBlock" class="help-block text-danger" style="color: red">{!! implode('<br>', $errors->all()) !!}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="{{url('auth/signup')}}" class="btn btn-info btn-sm">注册</a>
                            <button type="submit" class="btn btn-primary btn-sm">登录</button>
                        </div>
                    </div>
            </form>

        </div>
    </div>

</main>
@include('layouts.footer')