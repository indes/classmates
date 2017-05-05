<div class="container">
    <nav class="navbar navbar-default site-nav navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{'/'}}">同学录</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" action="{{url('search')}}" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" id="navbarInput-01" type="search" placeholder="Search" name="q" required="required">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn"><span class="fui-search"></span></button>
                                 </span>
                            </div>
                        </div>
                    </form>
                    <li class="
                    @if($info['active']=='index')
                            active
                    @endif
                    "><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> 首页<span class="sr-only">(current)</span></a></li>
                    {{--<li><a href="#"><span class="glyphicon glyphicon-inbox"></span>--}}
                            {{--通知--}}
                            {{--<span class="navbar-new">2</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="
                    @if($info['active']=='class')
                            active
                    @endif
                    "><a href="{{url('class')}}">
                            <span class="glyphicon glyphicon-tree-deciduous"></span>
                            班级
                        </a>
                    </li>
                    <li class="
                    @if($info['active']=='file')
                            active
                    @endif
                    "><a href="{{url('class/file')}}">
                            <span class="glyphicon glyphicon-hdd"></span>
                            文件
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> {{ session('user')->username }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('home')}}">我的主页</a></li>
                            <li><a href="#">我的动态</a></li>
                            <li><a href="{{url('class')}}">我的班级</a></li>
                            <li><a href="{{url('class\file')}}">文件分享</a></li>

                            <li class="divider"></li>
                            <li><a href="{{url('account\set\profile')}}">资料修改</a>
                            <li><a href="{{url('account\set\pwd')}}">修改密码</a></li>
                            <li><a href="{{url('exit')}}">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
