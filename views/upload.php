<section id="upload-box">
	<div class="upload-title">
		<img src="/img/crown.png" alt="crown">
		<h3>UPLOAD PRODUCT</h3>
	</div>
	<form action="/up" method="post"  enctype="multipart/form-data">
		<div class="upload-form">
			<div>
				<span>상품번호</span>
				<h3><?= $num ?></h3>
			</div>
			<div>
				<span>카테고리 선택</span>
				<select name="main" id="">
					<option value="부채 / 슬로건">부채 / 슬로건</option>
					<option value="스티커 / 떡메">스티커 / 떡메</option>
					<option value="키링 / 목걸이 / 팔찌">키링 / 목걸이 / 팔찌</option>
					<option value="폰 케이스">폰 케이스</option>
					<option value="에코백">에코백</option>
					<option value="달력 / 노트">달력 / 노트</option>
				</select>
				<select name="sub" id="">
					<option value="보이그룹">보이그룹</option>
					<option value="걸그룹">걸그룹</option>
					<option value="남자 솔로">남자 솔로</option>
					<option value="여자 솔로">여자 솔로</option>
					<option value="힙합 / 래퍼">힙합 / 래퍼</option>
					<option value="밴드">밴드</option>
				</select>
			</div>
			<div>
				<span>상품명</span>
				<div>
					<input type="text" placeholder="25자 이내" name="name">
					<span></span>
				</div>
			</div>
			<div>
				<span>판매가격</span>
				<div>
					<input type="number" name="price">
					<span></span>
				</div>
			</div>
			<div>
				<span>판매수량</span>
				<div>
					<input type="number" name="cnt">
					<span></span>
				</div>
			</div>
			<div>
				<span>대표사진</span>
				<input type="file" name="upload">
			</div>
			<div>
				<span>상품설명</span>
				<textarea name="content" id="" cols="80" rows="30"></textarea>
			</div>
		</div>
		<button class="upload-btn" type="submit">업로드</button>
	</form>
</section>