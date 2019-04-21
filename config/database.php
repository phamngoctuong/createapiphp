<?php  
	class Database {
		private static  $host = 'localhost';
		private  static $db_name = 'api_db';
		private  static $username = 'root';
		private  static $password = '';
		private  $conn;
		// get the database connection
		public function getConnection() {
			$this->conn = null;
			$this->conn = mysqli_connect(self::$host,self::$username,self::$password,self::$db_name);
			// Check connection
			if (mysqli_connect_errno())	{
			  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}else {
				echo "Success";
			}
			return $this->conn;
		}
	}
	$hi = new Database;
	$hi -> getConnection();
?>