@extends('layouts.full')

@section('content')
    <script  type="text/javascript">

        function delayURL(url) {
            var delay = document.getElementById("time").innerHTML;
            if (delay > 0) {
                delay--;
                document.getElementById("time").innerHTML = delay
            } else {
                window.top.location.href = url
            }
            setTimeout("delayURL('" + url + "')", 1000)
        }

    </script>

    <span id="time" style="background: red;font-size:18px;">8</span>

    秒钟之后自动跳转，如果不跳转，请点击下面链接

    <a href="{{$rdurl or url('/')}}">主题列表</a>

    <script type="text/javascript">
        delayURL("{{$rdurl or url('/')}}");
    </script>

@endsection

