<<?php 
class Sql extends PDO {

	private $conn;

	public function __construct (){

		$this->conn =  new PDO ("mysql:dbname=dbphp7;host=localhost;","root","");

	}

	private function setParams ($statments ,$parameters = array()){

		foreach ($parameters as $key => $value) {

			$this->setParam($key , $value);
		}
	}


	private function setParam($statments , $key , $value) {

			$statments->bindParan($key , $value);
	}



	public function query ($rawQwery , $params = array()){

		$stmt = $this->conn->prepare($rawQwery);
		$this->setParams($stmt ,$params);
		$stmt->execute();
		return $stmt;

	}

	public function select ($rawQuery , $params = array()):array{

		$stmt = $this->query($rawQuery,$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

 ?>