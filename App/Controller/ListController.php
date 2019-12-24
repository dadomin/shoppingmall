<?php

namespace Damin\Controller;

Use Damin\DB;

class ListController extends MasterController {
	public function all()
	{	
		$sql = "SELECT * FROM shopping_pro";
		$list = DB::fetchAll($sql);
		$this->render("all", ["list"=>$list]);
	}

	public function main1()
	{	
		$sub = isset($_GET['sub']) ? $_GET['sub'] : null;
		if($sub==null){
			$sql = "SELECT * FROM `shopping_pro` WHERE main = '부채 / 슬로건'";
			$list = DB::fetchAll($sql);
			$title = "부채 / 슬로건";
			$this->render("list", ["list"=>$list, "title" => $title]);
			exit;
		}
		$sub = explode("'", $sub)[1];
		if($sub == "힙합/ 래퍼"){
			$sub = "힙합 / 래퍼";
		}

		$sql2 = "SELECT * FROM `shopping_pro` WHERE main = '부채 / 슬로건' AND sub = ?";
		$list2 = DB::fetchAll($sql2, [$sub]);
		$title = "부채 / 슬로건";
		$this->render("list", ["list"=>$list2, "title" => $title]);
	}

	public function main2()
	{
		$sub = isset($_GET['sub']) ? $_GET['sub'] : null;
		if($sub==null){
			$sql = "SELECT * FROM `shopping_pro` WHERE main = '스티커 / 떡메'";
			$list = DB::fetchAll($sql);
			$title = "스티커 / 떡메";
			$this->render("list2", ["list"=>$list, "title" => $title]);
			exit;
		}
		$sub = explode("'", $sub)[1];
		if($sub == "힙합/ 래퍼"){
			$sub = "힙합 / 래퍼";
		}
		$sql2 = "SELECT * FROM `shopping_pro` WHERE main = '스티커 / 떡메' AND sub = ?";
		$list2 = DB::fetchAll($sql2, [$sub]);
		$title = "스티커 / 떡메";
		$this->render("list2", ["list"=>$list2, "title" => $title]);
	}

	public function main3()
	{
		$sub = isset($_GET['sub']) ? $_GET['sub'] : null;
		if($sub==null){
			$sql = "SELECT * FROM `shopping_pro` WHERE main = '키링 / 목걸이 / 팔찌'";
			$list = DB::fetchAll($sql);
			$title = "키링 / 목걸이 / 팔찌";
			$this->render("list3", ["list"=>$list, "title" => $title]);
			exit;
		}
		$sub = explode("'", $sub)[1];
		if($sub == "힙합/ 래퍼"){
			$sub = "힙합 / 래퍼";
		}
		$sql2 = "SELECT * FROM `shopping_pro` WHERE main = '키링 / 목걸이 / 팔찌' AND sub = ?";
		$list2 = DB::fetchAll($sql2, [$sub]);
		$title = "키링 / 목걸이 / 팔찌";
		$this->render("list3", ["list"=>$list2, "title" => $title]);
	}

	public function main4()
	{
		$sub = isset($_GET['sub']) ? $_GET['sub'] : null;
		if($sub==null){
			$sql = "SELECT * FROM `shopping_pro` WHERE main = '폰 케이스'";
			$list = DB::fetchAll($sql);
			$title = "폰 케이스";
			$this->render("list4", ["list"=>$list, "title" => $title]);
			exit;
		}
		$sub = explode("'", $sub)[1];
		if($sub == "힙합/ 래퍼"){
			$sub = "힙합 / 래퍼";
		}
		$sql2 = "SELECT * FROM `shopping_pro` WHERE main = '폰 케이스' AND sub = ?";
		$list2 = DB::fetchAll($sql2, [$sub]);
		$title = "폰 케이스";
		$this->render("list4", ["list"=>$list2, "title" => $title]);
	}
	
	public function main5()
	{
		$sub = isset($_GET['sub']) ? $_GET['sub'] : null;
		if($sub==null){
			$sql = "SELECT * FROM `shopping_pro` WHERE main = '에코백'";
			$list = DB::fetchAll($sql);
			$title = "에코백";
			$this->render("list5", ["list"=>$list, "title" => $title]);
			exit;
		}
		$sub = explode("'", $sub)[1];
		if($sub == "힙합/ 래퍼"){
			$sub = "힙합 / 래퍼";
		}
		$sql2 = "SELECT * FROM `shopping_pro` WHERE main = '에코백' AND sub = ?";
		$list2 = DB::fetchAll($sql2, [$sub]);
		$title = "에코백";
		$this->render("list5", ["list"=>$list2, "title" => $title]);
	}

	public function main6()
	{
		$sub = isset($_GET['sub']) ? $_GET['sub'] : null;
		if($sub==null){
			$sql = "SELECT * FROM `shopping_pro` WHERE main = '달력 / 노트'";
			$list = DB::fetchAll($sql);
			$title = "달력 / 노트";
			$this->render("list6", ["list"=>$list, "title" => $title]);
			exit;
		}
		$sub = explode("'", $sub)[1];
		if($sub == "힙합/ 래퍼"){
			$sub = "힙합 / 래퍼";
		}
		$sql2 = "SELECT * FROM `shopping_pro` WHERE main = '달력 / 노트' AND sub = ?";
		$list2 = DB::fetchAll($sql2, [$sub]);
		$title = "달력 / 노트";
		$this->render("list6", ["list"=>$list2, "title" => $title]);
	}
}