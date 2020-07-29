<?php 
namespace App\DB;
abstract class Sql {
	protected $conn;
	public function __construct() {
		$host = getenv('MYSQL_HOST');
        $dbname = getenv('MYSQL_DBNAME');
        $port = getenv('MYSQL_PORT');
        $user = getenv('MYSQL_USER');
        $pass = getenv('MYSQL_PASSWORD');
		$dsn = "mysql:host={$host};dbname={$dbname}";
		$this->conn = new \PDO($dsn, $user, $pass);
		$this->pdo->exec("SET CHARACTER SET utf8");
		$this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
	}
	private function setParams($statement, $parameters = array()) {
		foreach ($parameters as $key => $value) {
			$this->bindParam($statement, $key, $value);
		}
	}
	private function bindParam($statement, $key, $value) {
		$statement->bindParam($key, $value);
	}
	public function query($rawQuery, $params = array()) {
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
	}
	public function select($rawQuery, $params = array()):array {
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}
?>