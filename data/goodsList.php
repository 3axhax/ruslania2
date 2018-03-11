<?php

require_once (ROOT.'/model/goods.php');

$goodsList = [];
$goodsList[] = new Goods('Котенок Шмяк. Как порадовать папу', '/img/goods/01.jpg', 'Скоттон Роб', 2017, 12, false);
$goodsList[] = new Goods('Наши', '/img/goods/02.jpg', 'Давлатов С.', 2017, 9, 'sale');
$goodsList[] = new Goods('Стихи и сказки в рисунках В. Лебедева', '/img/goods/03.jpg', 'Маршак С., Михалков С.', 2017, 18, 'new');
$goodsList[] = new Goods('Что бы ни случилось', '/img/goods/04.jpg', 'Глиори Д.', 2017, 18, false);
$goodsList[] = new Goods('Овощи, фрукты, ягоды. Познавательные наклейки', '/img/goods/05.jpg', '', 2016, 1, 'sale');
$goodsList[] = new Goods('Секреты спокойствия "ленивой мамы"', '/img/goods/06.jpg', 'Быкова А.', 2017, 6, 'new');
$goodsList[] = new Goods('Большая книга про вас и вашего ребенка', '/img/goods/07.jpg', 'Петрановская Л.', 2017, 5, false);
?>