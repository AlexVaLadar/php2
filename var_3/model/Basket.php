<?
	include_once 'PDO.php';

	class Basket extends SQL {

		public $order_id, $product_id, $user_id, $count, $status;

		public function getBasket($user_id) {

			return parent::select('order_tab', 'id_user', $user_id, true);
		}

		public function addProduct($product_id, $user_id, $count) {

			$object = [
				'id_good' => $product_id,
				'id_user' => $user_id,
				'count' => strip_tags($count)
			];
			
			parent::insert('order_tab', $object);
			return 'Товар успешно добавлен в корзину!';
		}
	}