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