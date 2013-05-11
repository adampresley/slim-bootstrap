<?php

	class StringHelper {
		public function formatPhone($source) {
			return preg_replace("/(\d{3})(\d{3})(\d{4})/i", "($1) $2-$3", $source);
		}

		public function formatZip($source) {
			$result = $source;

			if (strlen($source) > 5) {
				$result = preg_replace("/(\d{5})(\d{1,4})/i", "$1-$2", $source);
			}

			return $result;
		}

		public function stripNonNumeric($source) {
			return preg_replace("/[^0-9]+/i", "", $source);
		}

		public function validEmail($email) {
			return filter_var($email, FILTER_VALIDATE_EMAIL);
		}
	}

?>