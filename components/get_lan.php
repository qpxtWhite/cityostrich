<?php
	Function get_lang(){
		$lang = 'en';
		if(isset($_COOKIE['language'])){
			$cookie_lang = $_COOKIE['language'];
			switch($cookie_lang){
				case 'zh':
					$lang = 'zh';
					break;
				case 'en':
					$lang = 'en';
					break;
				default:
					$lang = 'en';
					break;
			}
		} else if($_SERVER['HTTP_ACCEPT_LANGUAGE']){
			$http_lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			if(preg_match('/zh/i', $http_lang)){
				$lang = 'zh';
			} else if(preg_match('/en/i', $http_lang)){
				$lang = 'en';
			} else {
				$lang = 'en';
			}
		} else {
			$lang = 'en';
		}
		return $lang;
	}
?>