<?php

class DataBase{
	public $host = DB_HOST;
	public $username = DB_USER;
	public $password = DB_PASS;
	public $db_name = DB_NAME;
	
	public $link;
	public $error;
	
	/*
	* Class Constructor
	*/
	
	public function __construct(){
	
	//Call connect function
	$this->connect();
	
	
}	

	
	
	/*
	*
	*/
	public function connect(){
	
		$this->link = new mysqli($this->host, $this->username, $this->password,$this->db_name);
		
		if(!$this->link){
			$this->error = "Connection Failed:".$this->link->connect_error;
			return false;
			
			
		}
	}
	
	
	/*
	 * Select
	 */
	
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows>0){
			
			return $result;
			
		}else {
			return false;
			
		}
		
		
	
	}
}