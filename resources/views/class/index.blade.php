@extends('layouts.full')

@section('content')
    <div class="row">
        <div class="col-md-4" role="complementary">
            @include('class.sidebar')
        </div>
        <div class="col-md-8" role="main">

            <div class="row">

                    @foreach($class->Journals as $journal)
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
            </div>

        </div>
    </div>
@endsection

