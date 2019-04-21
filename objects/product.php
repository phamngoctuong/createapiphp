<?php  
	class Product {
		private $conn;
		private $table_name = 'products';
		public $id;
		public $name;
		public $description;
		public $price;
		public $category_id;
		public $category_name;
		public $created;
		public function __construct($db) {
			$this->conn = $db;
		}
		public function read() {
			$read = array();
			$query = "SELECT c.name, p.id, p.name, p.description, p.price, p.category_id, p.created FROM products p LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.created DESC";
			$result = mysqli_query($this->conn,$query);
			while ($row = mysqli_fetch_array($result)) {
			 	$read[] = $row;    
			}
			return $read;
		}
	}
	// get database connection
	include_once '../config/database.php';
	// instantiate product object
	$database = new Database();
	$db = $database->getConnection();
	$product = new Product($db);
	echo '<pre>';
		print_r($product -> read());
	echo '</pre>';
?>