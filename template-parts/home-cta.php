<div class="home-about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron center-block">
					<h1><?php the_field('heading_cta')?></h1>
					<p><?php the_field('shot_descriptions_cta')?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
			      <div class="frame">
				      <a href="<?php the_field('button_url_cta_one')?>"><img class="img-responsive" src="<?php the_field('icon_1_cta')?>" alt="<?php the_field('caption_heading')?>"></a>
				  </div>
			      <div class="caption">
			        <h3><?php the_field('caption_heading')?></h3>
			        <p><?php the_field('caption_descriptions_one')?></p>
			        <a href="<?php the_field('button_url_cta_one')?>" class="btn btn-link" role="button"><?php the_field('button_label_name_cta_one')?> <span class="glyphicon glyphicon-menu-right"></span></a>
			      </div>
			    </div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
			      <div class="frame">
				      <a href="<?php the_field('button_url_cta_two')?>"><img class="img-responsive" src="<?php the_field('icon_2_cta')?>" alt="<?php the_field('caption_heading_cta_two')?>"></a>
				  </div>
			      <div class="caption">
			        <h3><?php the_field('caption_heading_cta_two')?></h3>
			        <p><?php the_field('caption_descriptions_two')?></p>
			        <a href="<?php the_field('button_url_cta_two')?>" class="btn btn-link" role="button"><?php the_field('button_label_name_cta_two')?> <span class="glyphicon glyphicon-menu-right"></span></a>

			      </div>
			    </div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
			      <div class="frame">
				      <a href="<?php the_field('button_url_cta_three')?>"><img class="img-responsive" src="<?php the_field('icon_3_cta')?>" alt="<?php the_field('caption_heading_cta_three')?>"></a>
				  </div>
			      <div class="caption">
			        <h3><?php the_field('caption_heading_cta_three')?></h3>
			        <p><?php the_field('caption_descriptions_three')?></p>
			        <a href="<?php the_field('button_url_cta_three')?>" class="btn btn-link" role="button"><?php the_field('button_label_name_cta_three')?> <span class="glyphicon glyphicon-menu-right"></span></a>
			      </div>
			    </div>
			</div>
		</div>
	</div>
</div>