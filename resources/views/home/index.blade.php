@extends('layouts.ls')
@section('sidebar')
    @parent
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
@endsection

@section('content')
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
@endsection

