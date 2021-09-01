<?php
include 'products.php';
?>
<div class="advertising"></div>
<div class="showcase middle-section">
    <p class="special-offer">Специальное предложение</p>
    <div class="case-row">
        <?php        
        foreach ($products as $product){
            echo'
            
                <div class="card">
                    <img src="' . $product[image] . '" alt="" class="photo-computer">
                    <a href="/productCard.php?id=' . $product[id] . '" class="showcase-name">' . $product[name].'</a>
                    <p class="showcase-price">' . $product[price] . ' грн.</p>
                    <a href="#" class="showcase-button">Купить</a>
                </div>
                ';
        }    
        ?>
    </div>
    <!-- </div> -->
</div>