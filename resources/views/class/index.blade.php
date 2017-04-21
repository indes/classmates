@extends('layouts.full')

@section('content')
    <div class="row">
        <div class="col-md-4" role="complementary">
            <div class="sidebar">
                <div class="infobox"  style="text-align: center">
                    <h6 class="username">{{$class->className}}</h6>
                </div>
                <div class="row" style="text-align: center">
                    <div class="col-md-4 col-xs-12">
                        <a href="#">
                            <p class="p-infonum">8</p>
                            动态
                        </a>

                    </div>
                    <div class="col-md-4 col-xs-12">
                        <a href="#">
                            <p class="p-infonum">{{$class->members->count()}}</p>
                            成员
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
        <div class="col-md-8" role="main">
            <div class="row">
                @foreach ($class->members as $member)
                    <div class="card-n col-md-6">
                        <div class="feed-detail">
                            <div class="authorinfo">
                                <div class="feed-avatar">
                                    <img src="./img/avatar.jpg" alt="" class="avatar-m">
                                </div>
                                <div class="feed-msg">
                                    <p>
                                        <strong><a href="{{url('home')}}\{{$member->id}}">{{$member->id}}</a></strong>
                                        <br>
                                        <small>发布于 2015/12/12 12:12</small>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach
            </div>

        </div>
    </div>
@endsection

