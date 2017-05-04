@extends('layouts.full')

@section('content')
    <div class="row">
        <h4>文件列表</h4>

        @if($files->count())
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>文件名</th>
                    <th>大小</th>
                    <th>上传者</th>
                    <th>上传日期</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)

                <tr>
                    <td>{{$file->name}}</td>
                    <td>{{number_format($file->size/1024,2)}} KB</td>

                    <td>{{$file->userid}}</td>
                    <td>{{$file->created_at}}</td>
                    <td>
                        <a href="{{url('class/file').'/'.$file->fileid}}">
                            <i class="glyphicon glyphicon-cloud-download"></i>
                        </a>
                        &nbsp;
                        <i class="glyphicon glyphicon-remove-sign"></i>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        @else
            没有文件
        @endif

    </div>
@endsection

