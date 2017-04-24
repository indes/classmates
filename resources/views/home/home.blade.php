@extends('layouts.ls')
@section('sidebar')
    @parent
    <div class="sidebar">
        <div class="infobox">
            <div class="avatar-n">
                <img src="{{url('img/avatar.jpg')}}" alt="头像" class="img-circle center-block">
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
                        文件
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')


    @if ($journal->count)
        一共{{$journal->count}}条动态

        @foreach($journal as $j)


            <div class="card-n">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="{{url('img/avatar.jpg')}}" alt="" class="avatar-m">
                        </div>
                        <div class="feed-msg">
                            <p>
                                <strong><a href="{{url('home/')}}/{{$user->id}}">{{$user->userName}}</a></strong>
                                <br>
                                <small>发布于 {{$j->jPublishDate}}</small>
                            </p>
                        </div>
                    </div>

                    <div class="detail">
                        {{$j->jData}}
                    </div>
                </div>
            </div>



        @endforeach

    @else
        一共0条动态
    @endif


        <div>
            {!! $journal->render() !!}

        </div>
@endsection

