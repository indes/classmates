@include('layouts.head')

<main class="container">
    <div class="row">
        <div class="col-md-12" role="main">


            <META HTTP-EQUIV="REFRESH" CONTENT="5; URL={{$rdurl or url('/')}}">
            <script  type="text/javascript">

                function delayURL(url) {
                    var delay = document.getElementById("time").innerHTML;
                    if (delay > 0) {
                        delay--;
                        document.getElementById("time").innerHTML = delay
                    } else {
                        {{--window.top.location.href = url--}}
                    }
                    setTimeout("delayURL('" + url + "')", 1000)
                }

            </script>
            <div class="text-center" style="padding-top: 40px">

                <h4>{{$msg}}</h4>
                <span id="time" style="color: red;">5</span>
                秒钟之后页面自动
                <a href="{{$rdurl or url('home')}}">跳转</a>
            </div>


            <script type="text/javascript">
                delayURL("{{$rdurl or url('home')}}");
            </script>

        </div>
    </div>

</main>

@include('layouts.footer')



