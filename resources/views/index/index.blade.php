@extends('layouts.ls')
@section('sidebar')
    @parent
    @include('index.sidebar')
@endsection

@section('content')
    <div class="card-n">
        <p>
            有什么新鲜事想告诉大家?
        </p>
        <form class="form-horizontal" action="{{ url('/home') }}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <textarea class="form-control" rows="4" name="pbinfo" required></textarea>
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
                            <img src="{{url('avatar').'/'.$journal->id}}" alt="" class="avatar-m">
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

