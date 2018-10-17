<?

	include_once 'PDO.php';

	class Product extends SQL {

		public $product_id, $product_image, $product_title, $product_content, $product_price;

		public function getAllProducts() {

			return parent::select('good');
		}

		public function getProduct($product_id) {

			return parent::select('good', 'id', $product_id);
		}
	}