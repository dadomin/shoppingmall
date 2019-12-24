<?php

namespace Damin\Controller;

use Damin\DB;

class UploadController extends MasterController 
{
	public function index()
	{
		if (!isset($_SESSION['user'])) {
			DB::msgAndBack("로그인을 하고 이용해주세요.");
			exit;
		}
		if($_SESSION['user']->id != "admin") {
			DB::msgAndBack("관리자만 이용하실 수 있습니다.");
			exit;
		}
		$sql = "SELECT COUNT(*) AS cnt FROM shopping_pro";
		$cnt = DB::fetch($sql)->cnt + 1;
		$this->render("upload", ["num" => $cnt]);
	}

	public function up()
	{	
		if (!isset($_SESSION['user'])) {
			DB::msgAndBack("로그인을 하고 이용해주세요.");
			exit;
		}
		if($_SESSION['user']->id != "admin") {
			DB::msgAndBack("관리자만 이용하실 수 있습니다.");
			exit;
		}

		$name = $_POST['name'];
		$main = $_POST['main'];
		$sub = $_POST['sub'];
		$price = $_POST['price'];
		$cnt = $_POST['cnt'];
		$content = $_POST['content'];
		$file = null;

		if(($_FILES['upload']['name']) != null){
    		$file = $_FILES['upload'];
		}	

		if($file != null){
		    if(strncmp("image/", $file['type'], 6) != 0){
		       DB::msgAndBack("이미지 파일만 업로드할 수 있습니다.");
		        exit;
		    }
		}

		if($name == "" || $main == "" || $sub == "" || $price == "" || $cnt == "" || $file == ""){
			DB::msgAndBack("필수값이 비어있습니다.");
			exit;
		}		

		$sql = "INSERT INTO shopping_pro (`title`,`main`,`sub`,`price`,`cnt`,`img`,`content`, `wdate`) VALUES (?,?,?,?,?,?,?,NOW())";

		$id = DB::lastId();
		$cnt = DB::query($sql, [$name, $main,$sub,$price,$cnt,'/upimg/'.$id,$content]);

		$id2 = DB::lastId();
		$root = "upimg/".$id2;
		move_uploaded_file($file['tmp_name'], $root);
		$sql2 = "UPDATE shopping_pro SET img = ? WHERE id = ?";
		DB::query($sql2, ['/upimg/'.$id2, $id2]);
		if($cnt == 1){
		    DB::msgAndGo("글 작성이 완료되었습니다.", "/");
		}else{
		    DB::msgAndBack("오류가 발생했습니다");
		}

	}
}