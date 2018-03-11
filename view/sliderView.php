<div class="container">
    <h1 class="titlename">Товары категории: Рекомендации</h1>
    <hr>
    <?= ($goodsList) ? '' : '<h1>Список товаров отсутствует</h1>'?>
    <div class="slider custom-slider">
        <?php foreach ($goodsList as $goods):?>
        <div class="item">
            <a href="#" class="slider__img-block">
            <img src="<?=$goods->img?>" alt="" height="100" class="slider__img">
            <?=($goods->status == 'sale') ? '<div class="slider__item-status status-block sale">Акция</div>' : ''?>
            <?=($goods->status == 'new') ? '<div class="slider__item-status status-block new">Новинка</div>' : ''?>
            </a>
            <div class="slider__desc">
                <h3 class="slider-item__title"><?=$goods->name?></h3>
                <p class="slider-item__price"><?=$goods->price?> €</p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>