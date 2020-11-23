<?php
/**
 * @var array $products
 * @var array $categories
 */
?>
<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и
        горнолыжное снаряжение.</p>
    <ul class="promo__list">
        <!--заполните этот список из массива категорий-->
        <?php foreach ($categories as $category) : ?>
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="#"><?= $category; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
        <!--заполните этот список из массива с товарами-->
        <?php foreach ($products as $product): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= $product["img"] ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= $product["category"] ?></span>
                    <h3 class="lot__title"><a class="text-link" href="#"><?= $product["title"] ?></a>
                    </h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= amount_formatting($product["price"]) ?></span>
                        </div>
                        <div class="lot__timer timer">
                            <?php date_default_timezone_set('Europe/Moscow'); ?>
                            <?php
                            $data_1 = "23.11.2020";
                            $data_2 = "24.11.2020";
                            $data_sec_1 = strtotime("23.11.2020");
                            $data_sec_2= strtotime("24.11.2020");
                            $data_hour = ($data_sec_2 -  $data_sec_1) / 3600;
                            $data_minute = ($data_sec_2 -  $data_sec_1) / 360;
                            echo $data_hour .':' . $data_minute;
                            ?>

                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

