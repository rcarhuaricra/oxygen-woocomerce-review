<?php
global $product;
$rating_1 = $product->get_rating_count(1);
$rating_2 = $product->get_rating_count(2);
$rating_3 = $product->get_rating_count(3);
$rating_4 = $product->get_rating_count(4);
$rating_5 = $product->get_rating_count(5);

?>
<div class="review-wawa">
	<div class="review-wawa-info">
		<h1>	
			<?php 
			$cantidad = $product->get_average_rating();
			echo number_format((float)round( $cantidad ,2, PHP_ROUND_HALF_DOWN),1,'.',',');
			?>
		</h1>
		<div class="star-rating" role="img" aria-label="Valorado en 3.00 de 5">
			<span style="width:60%">Valorado 
				<strong class="rating">3.00</strong>
				sobre 5 basado en 
				<span class="rating">4</span> 
				puntuaciones de clientes
			</span>
		</div>
		<p>
			<?php 
			$count =  $product->get_review_count();
			if($count == 0){
				echo "Sin valoraciones";
			}else if($count == 1){
				echo $count." valoración";
			}else{
				echo $count." valoraciones";
				
			}
			?> 
		</p>
	</div>
	<div class="review-wawa-count">
		<ul>
			<li>5 <span class="total"><i style="width: <?php echo (100*$rating_5)/$count; ?>%"></i></span> </li>
			<li>4 <span class="total"><i style="width: <?php echo (100*$rating_4)/$count; ?>%"></i></span> </li>
			<li>3 <span class="total"><i style="width: <?php echo (100*$rating_3)/$count; ?>%"></i></span> </li>
			<li>2 <span class="total"><i style="width: <?php echo (100*$rating_2)/$count; ?>%"></i></span> </li>
			<li>1 <span class="total"><i style="width: <?php echo (100*$rating_1)/$count; ?>%"></i></span> </li>
		</ul>
	</div>
</div>
