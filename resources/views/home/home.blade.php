@extends('layouts.ls')
@section('sidebar')
    @parent
    @include('index.sidebar')
@endsection
@section('content')


    @if ($journal->count)
        一共{{$journal->count}}条动态

        @foreach($journal as $j)


            <div class="card-n">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="{{url('avatar').'/'.$user->id}}" alt="" class="avatar-m">
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

