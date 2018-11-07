<?php
Class model{

	// extends this Class in a Class want for to connect with the data base
	protected $db;

	public function __construct(){
		global $db;
		$this->db = $db;
	}
}
?>