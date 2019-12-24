<?php

namespace Damin\Controller;

use Damin\DB;

class LoginController extends MasterController {
	public function index()
	{
		$this->render("login", []);
	}

	public function login()
	{	
		if (isset($_SESSION['user'])) {
			DB::msgAndBack("로그아웃을 하고 다시 로그인 해주세요.");
			exit;
		}

		$id = $_POST['id'];
		$pass = $_POST['pass'];
		$sql = "SELECT * FROM shopping_user WHERE id =? AND pass = PASSWORD(?)";
		
		$user = DB::fetch($sql, [$id, $pass]);
		if(!$user){
			DB::msgAndBack("아이디나 비밀번호가 잘못되었습니다.");
			exit;
		}

		$_SESSION['user'] = $user;

		DB::msgAndGo("로그인되었습니다.", "/");
	}

	public function logout()
	{
		unset($_SESSION['user']);
		DB::msgAndGo("로그아웃되었습니다.", "/");
	}

	public function register()
	{	
		if (isset($_SESSION['user'])) {
			DB::msgAndBack("로그아웃을 하고 회원가입을 해주세요.");
			exit;
		}
		$this->render("register", []);
	}

	public function ok()
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		if($id == "" || $name == "" || $password == "" || $password2 == ""){
			DB::msgAndBack("모든 칸을 다 채워주세요. 필수입력사항입니다.");
			exit;
		}
		if($password != $password2){
			DB::msgAndBack("비밀번호와 비밀번호 확인란의 값이 다릅니다.");
			exit;
		}
		$sql = "INSERT INTO shopping_user (`id`, `name`, `pass`) VALUES (?,?,PASSWORD(?))";
		$cnt = DB::query($sql, [$id, $name, $password]);
		if($cnt == true){
			DB::msgAndGo("회원가입이 성공적으로 이루어졌습니다.", "/register_suc");
		}else {
			DB::msgAndBack("회원가입에 실패하였습니다.");
			exit;
		}
	}

	public function suc()
	{
		if (isset($_SESSION['user'])) {
			DB::msgAndBack("로그아웃을 하고 회원가입을 해주세요.");
			exit;
		}
		$this->render("regi_suc", []);
	}
}