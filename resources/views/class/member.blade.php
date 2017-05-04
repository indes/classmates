@extends('layouts.full')

@section('content')
    <div class="row">
        <div class="col-md-4" role="complementary">
            @include('class.sidebar')
        </div>
        <div class="col-md-8" role="main">
            本班级共有{{$class->members->count()}}个成员

            <div class="row">
                @foreach ($class->members as $member)
                    <div class="card-n col-md-6">
                        <div class="feed-detail">
                            <div class="authorinfo">
                                <div class="feed-avatar">
                                    <img src="{{url('/avatar').'/'.$member->id}}" alt="" class="avatar-m">
                                </div>
                                <div class="feed-msg">
                                    <p>
                                        <strong>
                                            <a href="{{url('home')}}\{{$member->id}}">
                                                {{$member->stuName}}&nbsp;
                                                @if($member->userName)
                                                    ({{$member->userName}})
                                                @endif
                                            </a></strong>
                                        <br>
                                        <small>
                                        </small>
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

