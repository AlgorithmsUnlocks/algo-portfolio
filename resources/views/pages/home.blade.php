<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{$seo->title}}</title>
    <meta name="description" content="{{$seo->description}}"/>
    <meta name="keywords" content="{{$seo->keywords}}"/>

    <meta name="og:site_name" content="{{$seo->ogSiteName}}"/>
    <meta name="og:url" content="{{$seo->ogUrl}}"/>
    <meta name="og:title" content="{{$seo->ogTitle}}"/>
    <meta name="og:image" content="{{$seo->ogImage}}"/>
    <meta name="og:description" content="{{$seo->ogDescription}}"/>

</head>
<body>

 <h1> This is home page </h1>

<?php
echo "<pre>";
print_r($seo);

?>
</body>
</html>
