<!doctype html>
<html lang="zh-cn">
<head>
    <?php
        if (!isset($info)){
            $info=Array();
            $info['title']=null;
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="max-age">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{$info['title']?$info['title'].' - ':''}}同学录
    </title>
    <script src="{{url('/')}}/js/jquery.min.js"></script>
    <script src="{{url('/')}}/js/flat-ui.min.js"></script>
    <link rel="stylesheet" href="{{url('/')}}/css/normalize.css">
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>

    <link href="{{url('/')}}/css/bootstrapValidator.css" rel="stylesheet">
    <script src="{{url('/')}}/js/bootstrapValidator.js"></script>

    <link rel="stylesheet" href="{{url('/')}}/css/flat-ui.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/style.css">

</head>
<body>