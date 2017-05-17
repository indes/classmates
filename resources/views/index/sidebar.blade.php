<div class="sidebar">
    <div class="infobox">
        <div class="avatar-n">
            <img src="{{url('avatar')}}/{{$user->id}}" alt="头像" class="img-circle center-block">
        </div>
        <h6 class="username">{{$user->stuName}}{{$user->userName?'('.$user->userName.')':''}}</h6>
        <div class="row" style="text-align: center">
            <div class="col-md-6 col-xs-12">
                <a href="{{url('home')}}">
                    <p class="p-infonum">{{$user->jcount}}</p>
                    动态
                </a>
            </div>
            <div class="col-md-6 col-xs-12">
                <a href="{{url('class/members')}}">
                    <p class="p-infonum">{{$user->classcount}}</p>
                    同学
                </a>
            </div>
            {{--<div class="col-md-4 col-xs-12">--}}
            {{--<a href="#">--}}
            {{--<p class="p-infonum">100</p>--}}
            {{--好友--}}
            {{--</a>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

<div class="sidebar">
    <div class="infobox">
        <div class="row">
            @if($user->userName)
                <span class="col-md-4 col-xs-8 col-md-offset-1 text-primary">昵称:</span>
                <span class="col-md-4 col-xs-8 ">{{$user->userName}}</span>
            @endif
            @if($user->stuName)
                <span class="col-md-4 col-xs-8 col-md-offset-1 text-primary">真实姓名:</span>
                <span class="col-md-4 col-xs-8">{{$user->stuName}}</span>
            @endif

            <span class="col-md-4 col-xs-8 col-md-offset-1 text-primary">性别:</span>
            <span class="col-md-4 col-xs-8">
                @if($user->stuSex=='male')
                    男
                @else
                    女
                @endif
            </span>
            @if($user->stuQQ)
                <span class="col-md-4 col-xs-8 col-md-offset-1 text-primary">QQ:</span>
                <span class="col-md-4 col-xs-8">{{$user->stuQQ}}</span>
            @endif
            @if($user->email)
                <span class="col-md-4 col-xs-8 col-md-offset-1 text-primary">电子邮箱:</span>
                <span class="col-md-4 col-xs-8">{{$user->email}}</span>
            @endif

            @if($user->stuPhone)
                <span class="col-md-4 col-xs-8 col-md-offset-1 text-primary">手机号:</span>
                <span class="col-md-4 col-xs-8">{{$user->stuPhone}}</span>
            @endif

            @if($user->stuBio)
                <span class="col-md-4 col-xs-8 col-md-offset-1 text-primary">个人简介:</span>
                <span class="col-md-10 col-xs-8 col-md-offset-1">&nbsp;&nbsp;&nbsp;&nbsp;{{$user->stuBio}}</span>
            @endif

        </div>
    </div>
</div>