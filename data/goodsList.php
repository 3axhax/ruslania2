<?php

require_once (ROOT.'/model/goods.php');

$goodsList = [];
$goodsList[] = new Goods('Котенок Шмяк. Как порадовать папу', '/img/goods/01.jpg', 'Скоттон Роб', 2017, 12, false);
$goodsList[] = new Goods('Наши', '/img/goods/02.jpg', 'Давлатов С.', 2017, 9, 'sale');
$goodsList[] = new Goods('Стихи и сказки в рисунках В. Лебедева', '/img/goods/03.jpg', 'Маршак С., Михалков С.', 2017, 18, 'new');


?>