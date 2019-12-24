<section id="register-box">
	<div class="register-title">
		<img src="/img/join.png" alt="join">
	</div>
	<form action="/signup" method="post">
		<div class="register-form">
			<ul>
				<li>
					<p>아이디</p>
					<div>
						<input type="text" placeholder="아이디를 입력해주세요." name="id">
						<span></span>
					</div>
				</li>
				<li>
					<p>비밀번호</p>
					<div>
						<input type="password" placeholder="비밀번호를 입력해주세요." name="password">
						<span></span>
					</div>
				</li>
				<li>
					<p>비밀번호 확인</p>
					<div>
						<input type="password" placeholder="비밀번호를 다시 입력해주세요." name="password2">
						<span></span>
					</div>
				</li>
				<li>
					<p>이름</p>
					<div>
						<input type="text" placeholder="이름을 입력해주세요." name="name">
						<span></span>
					</div>
				</li>
			</ul>
		</div>
		<div class="regi-btns">
			<button class="regi-o">가입</button>
			<button class="regi-x"><a href="/login">취소</a></button>
		</div>
	</form>
</section>