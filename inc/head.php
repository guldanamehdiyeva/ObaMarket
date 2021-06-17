<?php
$script = explode('/', $_SERVER['SCRIPT_NAME']);
$checkFileName = end($script);
$isIndex = strpos($_SERVER['SCRIPT_NAME'], 'index');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Private pages(such as files) should be noindex. Remove on public pages -->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <title>obamarket.az</title>

    <!--Swiper plugin-->
    <link rel="stylesheet" href="../css/vendor/swiper.min.css">

    

    <!--Timer Countdown plugin-->
    <link rel="stylesheet" href="../css/vendor/jquery.countdown.css">

    <!--Selectric plugin-->
    <link rel="stylesheet" href="../css/vendor/selectric.css">

    <!--Micromodal plugin-->
    <link rel="stylesheet" href="../css/vendor/micromodal.min.css">

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

   

    <!--Bootstrap Grid-->
    <link rel="stylesheet" href="../css/vendor/bootstrap-grid.css">

    <!--Style css-->
    <link rel="stylesheet" href="../css/style.css">

    
    
</head>
<body>