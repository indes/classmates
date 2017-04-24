@extends('layouts.full')

@section('content')
    <h3> “ {{$res['key']}} ”的搜索结果：</h3>
    <br>

    <h4>{{$res['u']->count()}}个用户</h4>
    <hr>

    @foreach($res['u'] as $u)

        <div class="card-n">
            <div class="feed-detail">
                <div class="authorinfo">
                    <div class="feed-avatar">
                        <img src="{{url('img/avatar.jpg')}}" alt="" class="avatar-m">
                    </div>
                    <div class="feed-msg">
                        <p>
                            <strong><a href="{{url('home')}}/{{$u->id}}">{{$u->stuName}}{{$u->userName?'('.$u->userName.')':''}}</a></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <br>
    <h4>{{$res['c']->count()}}个班级</h4>
    <hr>

    @foreach($res['c'] as $c)

        <div class="card-n">
            <div class="feed-detail">
                <div class="authorinfo">
                    <div class="feed-msg">
                        <p>
                            <strong><a href="{{url('home')}}/{{$c->id}}">{{$c->className}}</a></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <br>
    <h4>{{$res['j']->count()}}条动态</h4>
    <hr>
    @foreach($res['j'] as $journal)
            <div class="card-n">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="{{url('img/avatar.jpg')}}" alt="" class="avatar-m">
                        </div>
                        <div class="feed-msg">
                            <p>
                                <strong><a href="{{url('home')}}/{{$journal->id}}">{{$journal->stuName}}{{$journal->userName?'('.$journal->userName.')':''}}</a></strong>
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

@endsection

