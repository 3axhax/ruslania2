<!doctype html>
<html>
<head>
    <title>Page title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/core.css" rel="stylesheet">
</head>
<body>

<?php
define('ROOT', dirname(__FILE__));
require_once (ROOT. '/model/goods.php');
require_once (ROOT. '/data/goodsList.php');
require_once (ROOT. '/view/goodsView.php');
?>
</body>

