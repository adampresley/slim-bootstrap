<?php

require("Service.php");
require("DAO.php");

/*
 * Required services go here.
 */
require("../lib/com/helper/CookieHelper.php");
require("../lib/com/helper/DateTimeHelper.php");
require("../lib/com/helper/StringHelper.php");

class Factory {
	private $db;

	public function __construct($db) {
		$this->db = $db;
	}

	public function getCookieHelper() {
		return new CookieHelper();
	}
	
	public function getDateTimeHelper() {
		return new DateTimeHelper();
	}
	
	public function getStringHelper() {
		return new StringHelper();
	}
}

?>
