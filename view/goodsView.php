<div class="span10 listgoods">
    <h1 class="titlename">Товары категории: Книги</h1>
    <hr>
    <?= ($goodsList) ? '' : '<h1>Список товаров отсутствует</h1>'?>
    <ul class="items">
        <?php foreach($goodsList as $goods):?>
        <li>
            <div class="row">
                <a class="item__column item__img" href="#">
                    <img height="241" src="<?=$goods->img?>">
                    <?=($goods->status == 'sale') ? '<div class="status-block sale">Акция</div>' : ''?>
                    <?=($goods->status == 'new') ? '<div class="status-block new">Новинка</div>' : ''?>

                </a>

                <div class="item__column item__info">
                    <a href="#" class="item__title"><?=$goods->name?></a>
                    <div class="authors m-top">
                        Автор(ы):
                        <a href="#" class="cprop"><?=$goods->author?></a>
                    </div>
                    <div><span class="langs">Язык: Русский</span></div>
                    <div><span>Год выхода: <a href="#">2017</a></span></div>
                    <br/>
                    <span class="nameprop m-top">Издатель:</span>
                    <a class="cprop" href="#">Клевер-Медиа-Групп</a>
                    <div class="desc_text m-top">Что вас ждет под обложкой: Разве можно спокойно смотреть, как грустит твой любимый папа? Нет, Шмяк должен немедленно...</div>
                    <div class="m-top">ISBN: 9785906838087</div>
                    Переплет: Переплет
                </div>

                <div class="item__column item__price">
                    <p class="item__price-title">Цена:<br />
                        <span class="item__price-count"><?=$goods->price?> €</span>
                    </p>
                </div>
            </div>
        </li>
        <?php endforeach;?>
    </ul>