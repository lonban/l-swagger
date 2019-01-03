<?php

use Lswagger\Classes\PathClasses;
use Lswagger\Classes\FileClasses;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>api文档生成</title>
    <link rel="stylesheet" href="{{PathClasses::lSwaggerAsset('assets/css/init.css')}}">
</head>
<body>
@yield('content')
{{--@section('content')

@show--}}
</body>
</html>