<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" href="<?php echo asset('css/didi.css')?>" type="text/css">
</head>
<body>
<header>
@include('layout.header')
</header>
<ul>
@section('sidebar')
<li>HTML</li>
<li>CSS</li>
<li>JS</li>
@show
</ul>
<div class="container">
@yield('content')
</div>
</body>
</html>