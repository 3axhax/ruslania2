<!doctype html>
<html>
<head>
    <title>Page title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/core.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <link href="/css/slick-theme.css" rel="stylesheet">
</head>
<body>

<?php
define('ROOT', dirname(__FILE__));
require_once (ROOT. '/model/goods.php');
require_once (ROOT. '/data/goodsList.php');
require_once (ROOT. '/view/sliderView.php');
?>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/slider.js"></script>
</body>