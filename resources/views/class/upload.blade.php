@extends('layouts.full')

@section('content')
    <div class="row">
        <form class="form-horizontal" enctype="multipart/form-data" action="{{ url('class/file') }}" method="post" role="form">
            <legend>上传文件</legend>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="" class="col-lg-3 control-label">文件</label>
                <div class="col-lg-9">
                    <input type="file" name="upfile"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary btn-sm">上传</button>
                    @if (count($errors) > 0)
                        <span id="helpBlock" class="help-block text-danger" style="color: red">{!! implode('<br>', $errors->all()) !!}</span>
                    @endif
                </div>
            </div>

        </form>

    </div>
@endsection

