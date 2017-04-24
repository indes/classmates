@extends('layouts.ls')
@section('sidebar')
    @parent
    <div class="sidebar">
        <div class="infobox">
            <div class="avatar-n">
                <img src="./img/avatar.jpg" alt="头像" class="img-circle center-block">
            </div>
            <h6 class="username">{{$user->stuName}}{{$user->userName?'('.$user->userName.')':''}}</h6>

            <div class="row" style="text-align: center">
                <div class="col-md-4 col-xs-12">
                    <a href="{{url('home')}}">
                        <p class="p-infonum">8</p>
                        动态
                    </a>
                </div>
                <div class="col-md-4 col-xs-12">
                    <a href="{{url('class')}}">
                        <p class="p-infonum">34</p>
                        同学
                    </a>
                </div>
                <div class="col-md-4 col-xs-12">
                    <a href="#">
                        <p class="p-infonum">100</p>
                        好友
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card-n">
        <p>
            有什么新鲜事想告诉大家?
        </p>
        <form class="form-horizontal" action="{{ url('/home') }}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <textarea class="form-control" rows="4" name="pbinfo"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 90%">发布</button>
        </form>
    </div>

    @if($journals)
        @foreach($journals as $journal)

            <div class="card-n">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="{{url('img/avatar.jpg')}}" alt="" class="avatar-m">
                        </div>
                        <div class="feed-msg">
                            <p>
                                <strong><a href="{{url('home')}}/{{$journal->id}}">{{$journal->userName}}</a></strong>
                                <br>
                                <small>发布于 {{$journal->jPublishDate}}</small>
                            </p>
                        </div>
                    </div>

                    <div class="detail">
                        {{$journal->jData}}
                    </div>
                </div>
            </div>

        @endforeach
    @endif

    <div>
        {!! $journals->render() !!}
    </div>
@endsection

