@extends('layouts.full')

@section('content')
    <div class="row">
        <h4>上传文件</h4>
        <form class="form-horizontal" enctype="multipart/form-data" action="{{ url('class/file') }}" method="post" role="form">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="" class="col-lg-2 control-label"></label>
                <div class="col-lg-6">
                    <input type="file" name="upfile"/>
                </div>
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-primary btn-sm">上传</button>
                    @if (count($errors) > 0)
                        <span id="helpBlock" class="help-block text-danger" style="color: red">{!! implode('<br>', $errors->all()) !!}</span>
                    @endif
                </div>
            </div>


        </form>

    </div>
@endsection

