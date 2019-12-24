<section id="login-box">
	<div class="login-title">
		<img src="/img/crown.png" alt="crown">
		<h3>LOGIN</h3>
	</div>
	<div class="login-qu">
		<div class="login-o">
			<h3>회원이세요?</h3>
		</div>
		<div class="login-x">
			<a href="/register">비회원이세요?</a>
		</div>
	</div>

	<form class="login-go" action="/signin" method="POST">
		<div>
			<input class="login-effect" type="text" required name="id">	
			<label>아이디</label>
			<span class="focus-border"></span>
		</div>
		<div>
			<input type="password" class="login-effect" required name="pass">
			<label>비밀번호</label>
			<span class="focus-border"></span>
		</div>
		<button class="login-btn">로그인</button>
	</form>
</section>