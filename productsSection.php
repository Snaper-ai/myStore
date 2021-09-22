<?php
include 'products.php';

$courusel_path = $_SERVER['DOCUMENT_ROOT'] .'/image/carousel/';
$courusel_images = scandir($courusel_path);

?>
<div class="advertising"></div>
<div class="showcase middle-section">
	<div class="courusel">
		<?php
		foreach ($courusel_images as $image_name){
			if (end(explode('.',$image_name) ) == 'jpg') {
				echo '<img class="toFront" src="/image/carousel/'.$image_name.'" alt="">';
				# code...
			}
			};
		?>

	</div>
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