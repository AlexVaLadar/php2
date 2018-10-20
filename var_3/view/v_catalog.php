<main>
	<div style="width:80%; align-items:center; text-align:center">
	<?php
		if (isset($catalog)) {
			foreach ($catalog as $product) {
				echo '<div class="photo"><p><a href="index.php?c=page&act=product&id=' . $product["id"] . '"><img src="'. $product["small_src"] . '" alt="Изображение" title="'. $product["title"] . '">'. $product["title"] . '</a></p>
				</div>';
			}
		}
	?>
	</div>
</main>