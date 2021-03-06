<?php
	header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
	header("Pragma: no-cache"); // HTTP 1.0.
	header("Expires: 0"); // Proxies.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}} | {{$page}}</title>
    <link href="{{ URL::asset('css/root.css') }}" rel="stylesheet" />
	<link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
</head>

<body class="<?php echo isset($class) ? $class : "default"; ?>" > 
    <div class="loading"><img src="{{ URL::asset('img/loading.gif') }}" alt="loading-img"></div>