<?php
	class db{
		private $dbtype		="mysql";
		private $host		="localhost";
		private $dbname		="users";
		private $username	="root";
		private $password	="";
		private $dbConnection;

		protected function getConnected(){
			$this->dbConnection = new PDO($this->dbtype . ':host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
		}

		protected function __query__($query){
			return $this->dbConnection->query($query);
		}

		protected function closeConnection(){
			$this->dbConnection = null;
		}
	}

	class dbManager extends db // ADTs
	{
		function __construct(){
			$this->getConnected();
		}

		function __destruct(){
			$this->closeConnection();
		}

		public function doQuery($query, $assocArr=false, $fetchAll=true){

			switch ($assocArr) {
				case true:
					switch ($fetchAll) {
						case false:
							return $this->__query__($query)->fetch(PDO::FETCH_ASSOC);
						
						default:
							return $this->__query__($query)->fetchAll(PDO::FETCH_ASSOC);
					}
				
				default:
					$this->__query__($query);
					break;
			}

		}
	}
?>