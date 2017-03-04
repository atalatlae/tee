<?php

class Session
{
	public function __construct() {
		session_start();
	}

	public function setVar($name, $value) {
		if ($name != '') {
			$_SESSION[$name] = $value;
		}
	}

	public function getVar($name) {
		if ($name != '' && isset($_SESSION[$name]) ) {
			return $_SESSION[$name];
		}
		return null;
	}

	public function destroy() {
		unset($_SESSION);
		session_destroy();
	}
}
