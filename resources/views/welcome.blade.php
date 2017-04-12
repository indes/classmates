
@extends('layouts.ls')


@section('sidebar')
    @parent

    <p>这边会附加在主要的侧边栏。</p>
@endsection

@section('content')
    <p>这是我的主要内容。</p>
@endsection