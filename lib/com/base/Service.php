<?php

class Service {
	protected $db;
	protected $factory;

	public function __construct($db, $factory) {
		$this->db = $db;
		$this->factory = $factory;
	}

	public function listQualify($list, $qualifier, $delimiter = ",") {
		$exploded = explode($delimiter, $list);
		$result = "";

		for ($i = 0; $i < count($exploded); $i++) {
			$result .= sprintf("%s%s%s", $qualifier, $exploded[$i], $qualifier);
			if ($i < count($exploded) - 1) $result .= ",";
		}

		return $result;
	}
}

?>