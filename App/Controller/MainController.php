<?php

namespace Damin\Controller;

use Damin\DB;

class MainController extends MasterController {

	public function index()
	{	
		$sql = "SELECT COUNT(*) AS cnt FROM `shopping_user`";
		$cnt = DB::fetch($sql)->cnt;
		if($cnt == 0){
			$this->setData();
		}

		$sql2 = "SELECT * FROM shopping_pro ORDER BY buy LIMIT 20";
		$list1 = DB::fetchAll($sql2);

		$sql3 = "SELECT * FROM shopping_pro ORDER BY wdate DESC LIMIT 20"; 
		$list2 = DB::fetchAll($sql3);

		$this->render("main", ["best"=>$list1, "new"=>$list2]);
	}

	private function setData()
	{
		$sql = "INSERT INTO `shopping_user` (`id`,`name`,`pass`) VALUES (?, ?, PASSWORD(?))";
		$id = "admin";
		$name = "관리자";
		$pass = "1234";
		$data = [$id, $name, $pass];
		DB::query($sql, $data);
	}
}