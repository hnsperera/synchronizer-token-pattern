<?php
	class Token {
		public static function generate_token($session_id){
			$_SESSION['token'] = md5($session_id);
			return $_SESSION['token'];
			//return $_SESSION['token'] = base64encode(openssl_random_pseudo_bytes(32));
		}

		public static function check_token($token){
			if(isset($_SESSION['token']) && $token === $_SESSION['token']){
				unset($_SESSION['token']);
				return true;
			}
			else{
				return false;
			}
		}
	}
?>