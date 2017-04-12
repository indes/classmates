<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页-同学录</title>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/flat-ui.min.js"></script>
    <link rel="stylesheet" href="./style/normalize.css">
    <!--<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>-->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="./style/pure-min.css">-->
    <script src="./js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./css/flat-ui.css">
    <link rel="stylesheet" href="./style/style.css">

</head>
<body>

<div class="container">
    <nav class="navbar navbar-default site-nav navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">同学录</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">

                </ul>


                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" action="#" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn"><span class="fui-search"></span></button>
                                 </span>
                            </div>
                        </div>
                    </form>
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> 首页<span class="sr-only">(current)</span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-inbox"></span>
                        通知
                        <span class="navbar-new">2</span>
                    </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span> 张三
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>



<main class="container">
    <div class="row">
        <div class="col-md-12" role="complementary">
            <div class="sidebar">
                <div class="infobox">
                    <div class="avatar-n">
                        <img src="./img/avatar.jpg" alt="头像" class="img-circle center-block">
                    </div>
                    <h6 class="username">金轮法王</h6>

                    <div class="row" style="text-align: center">
                        <div class="col-md-4 col-xs-12">
                            <a href="#">
                                <p class="p-infonum">8</p>
                                动态
                            </a>

                        </div>
                        <div class="col-md-4 col-xs-12">
                            <a href="#">
                                <p class="p-infonum">34</p>
                                同学
                            </a>

                        </div>
                        <div class="col-md-4 col-xs-12">
                            <a href="#">
                                <p class="p-infonum">100</p>
                                好友
                            </a>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-md-12" role="main">

            <div class="card-n">
                <p>
                    有什么新鲜事想告诉大家?
                </p>
                <div class="form-group">
                    <textarea class="form-control" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">发布</button>
            </div>


            <div class="card-n">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="./img/avatar.jpg" alt="" class="avatar-m">
                        </div>
                        <div class="feed-msg">
                            <p>
                                <strong><a href="#">马化腾</a></strong>
                                <br>
                                <small>发布于 2015/12/12 12:12</small>
                            </p>
                        </div>
                    </div>

                    <div class="detail">
                        <samp>This text is meant to be treated as sample output from a computer program.</samp>
                        【混音后期必备-一节课教你使用压缩器】压缩无论在混音还是在编曲中，都是必用的效果器之一，那么压缩器是如何使用的？如何根据不同的情况使用不同的压缩器？4月9号晚上8点，由混音班讲师彭彭为你揭秘！上课地址
                    </div>
                </div>
            </div>
            <div class="card-n">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="./img/avatar.jpg" alt="" class="avatar-m">
                        </div>
                        <div class="feed-msg">
                            <p>
                                <strong><a href="#">马化腾</a></strong>
                                <br>
                                <small>发布于 2015/12/12 12:12</small>
                            </p>
                        </div>
                    </div>

                    <div class="detail">
                        <samp>This text is meant to be treated as sample output from a computer program.</samp>
                        【混音后期必备-一节课教你使用压缩器】压缩无论在混音还是在编曲中，都是必用的效果器之一，那么压缩器是如何使用的？如何根据不同的情况使用不同的压缩器？4月9号晚上8点，由混音班讲师彭彭为你揭秘！上课地址
                    </div>
                </div>
            </div>
            <div class="card-n">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="./img/avatar.jpg" alt="" class="avatar-m">
                        </div>
                        <div class="feed-msg">
                            <p>
                                <strong><a href="#">马化腾</a></strong>
                                <br>
                                <small>发布于 2015/12/12 12:12</small>
                            </p>
                        </div>
                    </div>

                    <div class="detail">
                        <samp>This text is meant to be treated as sample output from a computer program.</samp>
                        【混音后期必备-一节课教你使用压缩器】压缩无论在混音还是在编曲中，都是必用的效果器之一，那么压缩器是如何使用的？如何根据不同的情况使用不同的压缩器？4月9号晚上8点，由混音班讲师彭彭为你揭秘！上课地址
                    </div>
                </div>
            </div>
            <div class="card-n">
                <div class="feed-detail">
                    <div class="authorinfo">
                        <div class="feed-avatar">
                            <img src="./img/avatar.jpg" alt="" class="avatar-m">
                        </div>
                        <div class="feed-msg">
                            <p>
                                <strong><a href="#">马化腾</a></strong>
                                <br>
                                <small>发布于 2015/12/12 12:12</small>
                            </p>
                        </div>
                    </div>

                    <div class="detail">
                        <samp>This text is meant to be treated as sample output from a computer program.</samp>
                        【混音后期必备-一节课教你使用压缩器】压缩无论在混音还是在编曲中，都是必用的效果器之一，那么压缩器是如何使用的？如何根据不同的情况使用不同的压缩器？4月9号晚上8点，由混音班讲师彭彭为你揭秘！上课地址
                    </div>
                </div>
            </div>


            <div>
                <ul class="pagination">
                    <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
                    <li class="active"><a href="#fakelink">1</a></li>
                    <li><a href="#fakelink">2</a></li>
                    <li><a href="#fakelink">3</a></li>
                    <li><a href="#fakelink">4</a></li>
                    <li class="pagination-dropdown dropup">
                        <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fui-triangle-up"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#fakelink">10–20</a></li>
                            <li><a href="#fakelink">20–30</a></li>
                            <li><a href="#fakelink">40–50</a></li>
                        </ul>
                    </li>
                    <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
                </ul>
            </div>
        </div>
    </div>

</main>

<!--<footer class="footer">-->
<!--<div class="container">-->
<!--<p style="text-align: center">© Gulp 中文网 2015<a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a> | 京公网安备11010802014853</p>-->
<!--</div>-->
<!--</footer>-->
</body>
<script src="./js/application.js"></script>
<script>
    jQuery(function($) {
        $(document).ready( function() {
            $('.dropdown-toggle').dropdown()
        });
    });

</script>
</html>