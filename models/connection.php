<?php

class Connection{
	public function connect(){
		$link = new PDO("mysql:host=localhost;dbname=ip;port=3307", "root", "");
		$link -> exec("set names utf8");
		return $link;
	}

}