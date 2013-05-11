<?php

	class CookieHelper {
		protected $expiration;

		public function __construct() {
			$this->expiration = time() + 60 * 60 * 24;		// 1 day
		}

		public function cookieExists($key) {
			return !empty($_COOKIE[$key]);
		}
		
		public function deleteCookie($key) {
			setcookie($key, "", time() - 3600);
		}
		
		public function getCookie($key) {
			return $_COOKIE[$key];
		}

		public function setCookie($key, $value) {
			setcookie($key, $value, $this->expiration);
		}

	}

?>