<section id="best-product">
	<div class="pro-title">
		<img src="/img/best-title.png" alt="best-title">
	</div>
	<div class="product-form">
		<?php foreach($best as $i) { ?>
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
</section>
<section id="new-product">
	<div class="pro-title">
		<img src="/img/new-title.png" alt="new-title">
	</div>
	<div class="product-form">
		<?php foreach($new as $i) { ?>
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
</section>