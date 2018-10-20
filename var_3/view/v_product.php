<script>
	window.onload = function() {
		document.getElementById('buy').onclick = function() {
			document.getElementById('buy').style.display = "none";
			document.getElementById('buying_form').style.display = "block";
		};
	}
</script>
<div class="product">
	<h1><span><?= $product["title"] ?></span></h1>
	<img src="<?= $product["full_src"] ?>" alt="Изображение" title="<?= $product["title"] ?>" target="_blank">
	<span class="content"><?= $product["description"] ?></span>
	<h3><?= $product["price"] ?> $</h3>
	<?php
		if ($user_id) {
			echo "<input type='button' id='buy' value='Купить'>
			<div id='buying_form'>
				<span>Количество товара</span>
				<form method='post' name='buying_form'>
					<input type='number' name='count' required>
					<input type='submit' name='button' value='Добавить в корзину'>
				</form>
			</div>";
		}
	?>
</div>
<?php if(isset($text)){echo "<script>document.write('$text')</script>";} ?>