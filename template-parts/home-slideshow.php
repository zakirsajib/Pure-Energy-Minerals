<div id="pemimageslideshow" class="carousel slide" data-ride="carousel" data-interval="false">
		  <!-- Indicators -->
		  <?php if(get_field('carousel')): ?>
		  	<ol class="carousel-indicators">
			  <?php $count=0; while(has_sub_field('carousel')): ?>
			  	<li data-target="#pemimageslideshow" data-slide-to="<?php echo $count?>"></li>
			  <?php $count++; endwhile; ?>
		  	</ol>
		  <?php endif; ?>
		  
		  
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php if(get_field('carousel')): ?>
			  	<?php while(has_sub_field('carousel')): ?>
		  			<div class="item">
				        <img src="<?php the_sub_field('upload_slide_image'); ?>" data-color="black" alt="">
					        <div class="carousel-caption">
						        <div class="jumbotron">
						            <h2><?php the_sub_field('carousel_caption_heading'); ?></h2>
						            <h1 style="color: <?php the_sub_field('font_color_caption_sub-heading_large')?>"><?php the_sub_field('carousel_caption_sub-heading'); ?></h1>
						            <div class="carousel-lead hidden-xs"><?php the_sub_field('carousel_short_descriptions'); ?></div>
						        </div>
					        </div>
				    </div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div> <!-- carousel-inner -->
		  
		  
		  <!-- Controls -->
		  <a class="left carousel-control" href="#pemimageslideshow" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#pemimageslideshow" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
</div>
