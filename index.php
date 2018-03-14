<?php
define('ROOT', dirname(__FILE__));
require_once (ROOT. '/model/goods.php');
require_once (ROOT. '/model/language.php');
$lang = new Language();
require_once (ROOT. '/data/goodsList.php');
?>
<!doctype html>
<html lang="<?=mb_strtolower($lang->language)?>">
<head>
    <title>Page title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/core.css" rel="stylesheet">
</head>
<body>

<?php

require_once (ROOT. '/view/language.php');
require_once (ROOT. '/view/goodsView.php');
?>
</body>

