@extends('layouts.full')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" enctype="multipart/form-data" action="" method="post" role="form">
                {{--<legend>个人</legend>--}}
                <strong style="font-size: 29px">添加班级</strong>
                <br>
                <br>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">班级名</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="classname" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-lg-3 control-label">专业</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="major" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary btn-sm">添加</button>
                        @if (count($errors) > 0)
                            <span id="helpBlock" class="help-block text-danger" style="color: red">{!! implode('<br>', $errors->all()) !!}</span>
                        @endif
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

