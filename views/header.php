<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>CONNER CONNECT</title>
	<link rel="stylesheet" href="/style.css">
	<link rel="stylesheet" href="/fontawesome/css/all.css">
	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/script.js"></script>
	<script type="text/javascript" src="./nse_files/js/HuskyEZCreator.js" charset="utf-8"></script>
</head>
<body>
	<header>
		
		<div id="nav-top">
			<ul id="nav-top-link">
				<?php if(isset($_SESSION['user']) && $_SESSION['user']->id == "admin") : ?>	
					<li><a href="/upload">상품등록</a></li>
					<li><a href="/">관리페이지</a></li>
					<li><a href="/">고객센터</a></li>
					<li class="name"><?= $_SESSION['user']->name ?>님</li>
					<li><button><a href="/logout">로그아웃</a></button></li>
				<?php elseif(isset($_SESSION['user'])) : ?>
					<li><a href="/">마이페이지</a></li>
					<li><a href="/">고객센터</a></li>
					<li class="name"><?= $_SESSION['user']->name ?>님</li>
					<li><button><a href="/logout">로그아웃</a></button></li>
				<?php else :?>
					<li><a href="/register">회원가입</a></li>
					<li><a href="/">고객센터</a></li>
					<li><button><a href="/login">로그인</a></button></li>
				<?php endif; ?>
			</ul>
		</div>
		

		<div id="nav-title">
			<a href="/">
				<img src="/img/logo.png" alt="logo">
			</a>
			<div class="search_box">
				<input type="text">
				<button><img src="/img/btn_search.png" alt="search"></button>
			</div>
			<ul class="nav-title-cart">
				<li>
					<a href="/">
						<img src="/img/like.png" alt="like">
						<strong>찜한상품</strong>
					</a>
				</li>
				<li>
					<a href="/">
						<img src="/img/cart.png" alt="cart">
						<strong>장바구니</strong>
					</a>
				</li>
			</ul>
		</div>

		<div id="nav-bottom">
			<div class="nav-in">
				<button id="open-all"><i class="fas fa-bars"></i></button>
				<ul id="category">
					<li>
						<a href="/main1">부채 / 슬로건</a>
						<ul class="sub">
							<li>
								<i class="fas fa-square"></i>
								<a href="/main1&sub='보이그룹'">보이그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main1&sub='걸그룹'">걸그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main1&sub='남자 솔로'">남자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main1&sub='여자 솔로'">여자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main1&sub='힙합 / 래퍼'">힙합 / 래퍼</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main1&sub='밴드'">밴드</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/main2">스티커 / 떡메</a>
						<ul class="sub">
							<li>
								<i class="fas fa-square"></i>
								<a href="/main2&sub='보이그룹'">보이그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main2&sub='걸그룹'">걸그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main2&sub='남자 솔로'">남자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main2&sub='여자 솔로'">여자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main2&sub='힙합 / 래퍼'">힙합 / 래퍼</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main2&sub='밴드'">밴드</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/main3">키링 / 목걸이 / 팔찌</a>
						<ul class="sub">
							<li>
								<i class="fas fa-square"></i>
								<a href="/main3&sub='보이그룹'">보이그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main3&sub='걸그룹'">걸그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main3&sub='남자 솔로'">남자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main3&sub='여자 솔로'">여자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main3&sub='힙합 / 래퍼'">힙합 / 래퍼</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main3&sub='밴드'">밴드</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/main4">폰 케이스</a>
						<ul class="sub">
							<li>
								<i class="fas fa-square"></i>
								<a href="/main4&sub='보이그룹'">보이그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main4&sub='걸그룹'">걸그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main4&sub='남자 솔로'">남자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main4&sub='여자 솔로'">여자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main4&sub='힙합 / 래퍼'">힙합 / 래퍼</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main4&sub='밴드'">밴드</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/main5">에코백</a>
						<ul class="sub">
							<li>
								<i class="fas fa-square"></i>
								<a href="/main5&sub='보이그룹'">보이그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main5&sub='걸그룹'">걸그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main5&sub='남자 솔로'">남자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main5&sub='여자 솔로'">여자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main5&sub='힙합 / 래퍼'">힙합 / 래퍼</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main5&sub='밴드'">밴드</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/main6">달력 / 노트</a>
						<ul class="sub">
							<li>
								<i class="fas fa-square"></i>
								<a href="/main6&sub='보이그룹'">보이그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main6&sub='걸그룹'">걸그룹</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main6&sub='남자 솔로'">남자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main6&sub='여자 솔로'">여자 솔로</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main6&sub='힙합 / 래퍼'">힙합 / 래퍼</a>
							</li>
							<li>
								<i class="fas fa-square"></i>
								<a href="/main6&sub='밴드'">밴드</a>
							</li>
						</ul>
					</li>
				</ul>

				<ul id="logo-nav">
					<li>
						<a href="/">
							<div><img src="/img/new.png" alt="new"></div>
							<span>신상상품</span>
						</a>
					</li>
					<li>
						<a href="/">
							<div><img src="/img/best.png" alt="best"></div>
							<span>베스트셀러</span>
						</a>
					</li>
					<li>
						<a href="/">
							<div><img src="/img/most-like.png" alt="most"></div>
							<span>인기상품</span>
						</a>
					</li>
					<li>
						<a href="/all">
							<div><img src="/img/all.png" alt="all"></div>
							<span>모든상품</span>
						</a>
					</li>
					<li>
						<a href="/">
							<div><img src="/img/about.png" alt="about"></div>
							<span>사이트 소개</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<div id="all-ca">
		<button id="close-all">
			<i class="fas fa-times"></i>
		</button>
		<div class="allmenu">
			<div class="allmenu-top allcontent">
				<div>
					<div><h3>부채 / 슬로건</h3></div>
					<ul>
						<li><a href="/main1&sub='보이그룹'">보이그룹</a></li>
						<li><a href="/main1&sub='걸그룹'">걸그룹</a></li>
						<li><a href="/main1&sub='남자 솔로'">남자 솔로</a></li>
						<li><a href="/main1&sub='여자 솔로'">여자 솔로</a></li>
						<li><a href="/main1&sub='힙합 / 래퍼'">힙합 / 래퍼</a></li>
						<li><a href="/main1&sub='밴드'">밴드</a></li>
					</ul>
				</div>
				<div>
					<div><h3>스티커 / 떡메</h3></div>
					<ul>
						<li><a href="/main2&sub='보이그룹'">보이그룹</a></li>
						<li><a href="/main2&sub='걸그룹'">걸그룹</a></li>
						<li><a href="/main2&sub='남자 솔로'">남자 솔로</a></li>
						<li><a href="/main2&sub='여자 솔로'">여자 솔로</a></li>
						<li><a href="/main2&sub='힙합 / 래퍼'">힙합 / 래퍼</a></li>
						<li><a href="/main2&sub='밴드'">밴드</a></li>
					</ul>
				</div>
				<div>
					<div><h3>키링/목걸이/팔찌</h3></div>
					<ul>
						<li><a href="/main3&sub='보이그룹'">보이그룹</a></li>
						<li><a href="/main3&sub='걸그룹'">걸그룹</a></li>
						<li><a href="/main3&sub='남자 솔로'">남자 솔로</a></li>
						<li><a href="/main3&sub='여자 솔로'">여자 솔로</a></li>
						<li><a href="/main3&sub='힙합 / 래퍼'">힙합 / 래퍼</a></li>
						<li><a href="/main3&sub='밴드'">밴드</a></li>
					</ul>
				</div>
				<div>
					<div><h3>폰케이스</h3></div>
					<ul>
						<li><a href="/main4&sub='보이그룹'">보이그룹</a></li>
						<li><a href="/main4&sub='걸그룹'">걸그룹</a></li>
						<li><a href="/main4&sub='남자 솔로'">남자 솔로</a></li>
						<li><a href="/main4&sub='여자 솔로'">여자 솔로</a></li>
						<li><a href="/main4&sub='힙합 / 래퍼'">힙합 / 래퍼</a></li>
						<li><a href="/main4&sub='밴드'">밴드</a></li>
					</ul>
				</div>
				<div>
					<div><h3>에코백</h3></div>
					<ul>
						<li><a href="/main5&sub='보이그룹'">보이그룹</a></li>
						<li><a href="/main5&sub='걸그룹'">걸그룹</a></li>
						<li><a href="/main5&sub='남자 솔로'">남자 솔로</a></li>
						<li><a href="/main5&sub='여자 솔로'">여자 솔로</a></li>
						<li><a href="/main5&sub='힙합 / 래퍼'">힙합 / 래퍼</a></li>
						<li><a href="/main5&sub='밴드'">밴드</a></li>
					</ul>
				</div>
				<div>
					<div><h3>달력 / 노트</h3></div>
					<ul>
						<li><a href="/main6&sub='보이그룹'">보이그룹</a></li>
						<li><a href="/main6&sub='걸그룹'">걸그룹</a></li>
						<li><a href="/main6&sub='남자 솔로'">남자 솔로</a></li>
						<li><a href="/main6&sub='여자 솔로'">여자 솔로</a></li>
						<li><a href="/main6&sub='힙합 / 래퍼'">힙합 / 래퍼</a></li>
						<li><a href="/main6&sub='밴드'">밴드</a></li>
					</ul>
				</div>
			</div>
			<div class="allmenu-bottom allcontent">
				<div>
					<div><h3>스페셜</h3></div>
					<ul>
						<li><a href="/">신상상품</a></li>
						<li><a href="/">베스트셀러</a></li>
						<li><a href="/">인기상품</a></li>
						<li><a href="/all">모든상품</a></li>
					</ul>
				</div>
				<div>
					<div><h3>고객센터</h3></div>
					<ul>
						<li><a href="/">공지사항</a></li>
					</ul>
				</div>
				<div>
					<div><h3>마이페이지</h3></div>
					<ul>
						<li><a href="/">주문배송</a></li>
						<li><a href="/">장바구니</a></li>
						<li><a href="/">위시리스트</a></li>
						<li><a href="/">구매상품</a></li>
						<li><a href="/">내가 쓴 글</a></li>
						<li><a href="/">내가 단 댓글</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
