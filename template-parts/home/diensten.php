<section class="row align-center info__diensten">
	<div class="column large-12 medium-11 small-12">
		<div class="row align-center">
			<div class="column large-3 medium-6 small-11 info__diensten__title fadeInDiensten1">
				<?php the_sub_field('titel');?>
			</div>
			<div class="column large-9 medium-6 small-11">
				<div class="row">
					<div class="column large-4 small-12 fadeInDiensten2">
						<?php the_sub_field('tags1');?>
					</div>
					<div class="column large-4 small-12 fadeInDiensten3">
						<?php the_sub_field('tags2');?>
					</div>
					<div class="column large-4 small-12 fadeInDiensten4">
						<?php the_sub_field('tags3');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="row align-center">
	<div class="column large-10 medium-11 small-11 info__diensten__image"></div>
</div>
</div>

<div class="info__extra">
<article class="row align-center">
	<div class="column large-5 medium-7 small-9 info__extra__team">
		<?php the_sub_field('inhoud');?>
	</div>
</article>
