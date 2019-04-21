<?php
class Database{
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "api_db";
    private $username = "root";
    private $password = "";
    public $conn;
    // get the database connection
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
// Sử dụng PDO: http://hoclaptrinhweb.org/lap-trinh/hoc-php/255-bai-11-thao-tac-voi-csdl-trong-php-thong-qua-pdo.html
// https://viblo.asia/p/pdo-trong-php-khai-niem-va-nhung-thao-tac-co-ban-57rVRq59R4bP
?>