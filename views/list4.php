<section id="list">
	<div class="in">
		<div class="all-title">
			<h3><?= $title ?></h3>
		</div>
		<ul class="all-sub">
			<li><a href="/main4&sub='보이그룹'">보이그룹</a></li>
			<span><i class="fas fa-circle"></i></span>
			<li><a href="/main4&sub='걸그룹'">걸그룹</a></li>
			<span><i class="fas fa-circle"></i></span>
			<li><a href="/main4&sub='남자 솔로'">남자 솔로</a></li>
			<span><i class="fas fa-circle"></i></span>
			<li><a href="/main4&sub='여자 솔로'">여자 솔로</a></li>
			<span><i class="fas fa-circle"></i></span>
			<li><a href="/main4&sub='힙합 / 래퍼'">힙합 / 래퍼</a></li>
			<span><i class="fas fa-circle"></i></span>
			<li><a href="/main4&sub='밴드'">밴드</a></li>
		</ul>
		<div class="product-form">
			<?php foreach($list as $i) { ?>
				<div class="pro">
					<a href="/item?id=<?=$i->id?>">
						<div class="img">
							<img src="<?= $i->img ?>" alt="pic">	
						</div>
						<p class="cate">
							<?= $i->main?><span><i class="fas fa-caret-right"></i></span><?= $i->sub ?>
						</p>
						<p class="title"><?= $i->title?></p>
						<p class="price">
							<?= number_format($i->price) ?>
						</p>
						<p class="date">등록일 : <?= $i->wdate ?></p>
						<div class="pro-line"></div>
						<p class="like">좋아요&nbsp;<?=$i->love?> <span>|</span> 구매&nbsp;<?=$i->buy?></p>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>