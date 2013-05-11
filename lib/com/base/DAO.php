<?php

class DAO {
	protected $db;
	protected $factory;

	public function __construct($db, $factory) {
		$this->db = $db;
		$this->factory = $factory;
	}

	public function query($sql) {
		$qry = $this->db->query($sql);

		if ($this->db->errno != 0) {
			error_log("Query exception: " . $this->db->error);
			error_log("Last query: " . $sql);
			throw new Exception("Query exception: " . $this->db->error);
		}

		return $qry;
	}

	public function escape($str) {
		return $this->db->real_escape_string($str);
	}
	
	public function fetchAll($qry) {
		$result = array();

		while ($row = $qry->fetch_assoc()) $result[] = $row;
		$qry->free();
		
		return $result;
	}

	public function fetchOne($qry) {
		$row = $qry->fetch_assoc();
		$qry->free();

		return $row;
	}

	public function lastInsertId() {
		return $this->db->insert_id;
	}
}

?>