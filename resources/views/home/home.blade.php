@extends('layouts.ls')
@section('sidebar')
    @parent
    @include('index.sidebar')
@endsection
@section('content')
    @if ($journal->count)

        @foreach($journal as $j)
            <div class="card-n" id="{{$j->id}}">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="{{url('avatar').'/'.$user->id}}" alt="" class="avatar-m">
                        </div>
                        <div class="feed-msg">
                            <p>
                                <strong><a href="{{url('home/')}}/{{$user->id}}">{{$user->userName}}</a></strong>
                                <br>
                                <small>
                                    发布于 {{$j->jPublishDate}}

                                    @if(session('user')->id==$user->id)
                                    <a href="javascript:void(0);" onclick="delJ({{$j->id}})" title="删除此条动态">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                    @endif

                                </small>
                            </p>
                        </div>
                        <div>
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

    <script>
        function delJ(jid)
        {
            var r=confirm("确认删除该文件？");
            if (r==true){
                //使用ajax方式删除文件
                var obj=$.ajax({
                    url:'{{url('del')}}/'+jid,
                    type:'GET',
                    async:true,
                    data:{
                    },
                    success:function(result){
                        if(result.status==1){
                            alert("删除成功！");
                            window.location.reload();//刷新页面
                        }else{
                            alert("删除失败");
                        }
                    }
                });
            }
        }
    </script>
@endsection

