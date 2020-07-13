<?php
class Database {

	private $connection;
	private $query;
	private $results = [];
	public function __construct()
	{
		$this->connect();
	}
	public function connect(){
		$namaserver = 'localhost';
        $userdb = 'root';
        $passdb = '';
        $namadb = 'admin_abkd';

		$this->connection = mysqli_connect($namaserver, $userdb, $passdb, $namadb);
		
		if(mysqli_connect_error()){
			die("Database failed to connect ".mysqli_connect_error().mysqli_connect_errno());
		}
	}
	public function query($sql){
		return $this->query = mysqli_query($this->connection,$sql) or die(mysqli_error($this->connection));
	}
	public function close(){
		mysqli_close($this->connection);
	}
	public function fetch(){
		if(gettype($this->query) == 'boolean'){
			return $this->query;
		}
		if($this->query->num_rows > 0){
			while ($row = mysqli_fetch_assoc($this->query)){
				array_push($this->results,(object)$row);
			}
		}
		return $this->results;
	}

}
?>