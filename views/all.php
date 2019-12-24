<section id="all">
	<div class="in">
		<div class="all-title">
			<h3>모든 상품</h3>
		</div>
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
						<div class="pro-line"></div>
						<p class="like">좋아요&nbsp;<?=$i->love?> <span>|</span> 구매&nbsp;<?=$i->buy?></p>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>