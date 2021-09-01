<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>MyStore</title>
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/productPageStyle.css">
	<link rel="shortcur icon" href="image/logo.ico">
</head>

<body>
	<?php
		include 'header.php';
        include_once 'products.php';
        $isExists = false;

        foreach ($products as $product) {
            if($product['id'] == $_GET['id']){
                $isExists = true;
                echo '  <div class="product-name">
                            <div>
                                <p class="name">'.$product['name'].'</p>
                            </div>
                            <div>
                                <p class="cod">КОД ТОВАРУ: U0534415</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="computer-img">
                                <img src="image/computer.png" alt="0">
                            </div>
                            <div>
                                <p class="reviews">отзывы</p>
                                <p class="price-text">Цена:</p>
                                <p class="price">99 999 грн</p>
                                <p class="bonus">+895 бонусов</p>
                                <button class="buy">Купить</button>
                                <p class="line">______________________</p>
                                <img src="image/heart.png" alt="0" class="heart">
                                <img src="image/libra2.png" alt="1" class="libra">
                                <img src="image/timer.png" alt="1" class="timer">
                                <p class="payment">Оплата</p>
                                <p class="payment-text">Наличная, Безналичная, VISA/Mastercard</p>
                                <p class="payment">Обмен / возврат</p>
                                <p class="payment-text">Обмен / возврат товара в течении 14 дней</p>
                                <p class="payment-text">Гарантия: 12 месяцов</p>
                            </div>
                            <div>
                                <p class="delivery">Доставка:</p>
                                <p class="delivery-text">Самовывоз<br> из магазина COMP</p>
                                <p class="delivery-price">бесплатно</p>
                                <p class="delivery-text">В отделение<br> службы доставки</p>
                                <p class="delivery-price">Стоимость - 35.00 <br> грн</p>
                                <p class="delivery-text">Курьером Brain по<br> адресу</p>
                                <p class="delivery-price">бесплатно</p>
                            </div>
                            <div>
                                <p class="location">Ваш город: Днепр</p>
                                <p class="time">сегодня (10.07),<br> после 12:30</p>
                                <a href="">Магазин на карте</a>
                                <p class="time">передадим в доставку<br> завтра (в воскресенье 11.07)</p>
                                <a href="">Отделение на карте</a>
                                <p class="time">послезавтра (в понедельник<br> 12.07), после 10:00)</p>
                            </div>
                            <div class="characteristics-description">
                                <div>
                                    <p class="characteristics">ХАРАКТЕРИСТИКИ</p>
                                    <nobr>
                                        <p class="characteristics2">Основные характеристики</p>
                                    </nobr>
                                    <nobr>
                                        <p class="characteristics-text">Серия (модельный ряд) --> Lenovo IdeaPad Gaming</p>
                                    </nobr>
                                    <p class="characteristics2">Дисплей</p>
                                    <no 12:05:45 От Игорь : br>
                                        <p class="characteristics-text">Диагональ дисплея --> 15.6 "</p>
                                        </nobr>
                                        <!-- <a href="" class="characteristics-all">все характеристики</a> -->
                                </div>
                                <div>
                                    <p class="description">ОПИСАНИЕ</p>
                                    <nobr>
                                        <p class="description-text">Окунись в игровые миры</p>
                                    </nobr>
                                </div>
                            </div>
                        </div>';
                    break;
            }
        }
        if (!$isExists) {
            echo "error";
        }    
    ?>


	<?php
        include 'footer.php';
	?>
	<script src="script/main.js"></script>
</body>

</html>