
@extends('layouts.full')

@section('content')
    <h3>后台管理</h3>
    <ul id="myTabs" class="nav nav-tabs" role="tablist">
        <li role="presentation" class=""><a href="#user" id="user-tab" role="tab" data-toggle="tab" aria-controls="user" aria-expanded="true">用户管理</a></li>
        <li role="presentation" class="active"><a href="#journal" role="tab" id="journal-tab" data-toggle="tab" aria-controls="journal" aria-expanded="false">动态管理</a></li>
        <li role="presentation" class=""><a href="#class" role="tab" id="class-tab" data-toggle="tab" aria-controls="class" aria-expanded="false">班级管理</a></li>
        <li role="presentation" class=""><a href="#file" role="tab" id="file-tab" data-toggle="tab" aria-controls="file" aria-expanded="false">文件管理</a></li>
    </ul>

    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="user" aria-labelledby="user-tab">
            user
        </div>
        <div role="tabpanel" class="tab-pane fade" id="journal" aria-labelledby="journal-tab">
2
        </div>
        <div role="tabpanel" class="tab-pane fade" id="class" aria-labelledby="class-tab">
3
        </div>
        <div role="tabpanel" class="tab-pane fade" id="file" aria-labelledby="file-tab">
4
        </div>
    </div>
    <script>
        $('#myTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
@endsection

