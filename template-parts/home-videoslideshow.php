<div id="pemcarousel" class="carousel slide" data-ride="carousel" data-interval="false">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    	<li data-target="#pemcarousel" data-slide-to="0" class="active"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			  <?php if(get_field('video_carousel')): ?>
			  		<?php while(has_sub_field('video_carousel')): ?>
						  <div class="item">
							  	<?php $youtube_video = get_sub_field('youtube_video_id');?>
								<div class="video-content">
								  	<div class="banner-video">
								  		<div id="player"></div>
								  	</div>
								  	<div class="bg-black-banner"></div>
								</div>
								<div class="carousel-caption">
							        <div class="jumbotron">
							           <h2><?php the_sub_field('carousel_caption_heading'); ?></h2>
							           <h1><?php the_sub_field('carousel_caption_sub-heading'); ?></h1>
								            <div class="carousel-lead hidden-xs"><?php the_sub_field('carousel_short_descriptions'); ?></div>
							        </div>
								</div><!-- caption -->
						  </div>
		  		<?php endwhile; ?>
			<?php endif; ?> 
		</div> <!-- carousel-inner -->
		  
		  
		  <!-- Controls -->
<!--
		  <a class="left carousel-control" href="#pemcarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#pemcarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
-->
</div>



<script>
	
	//  This code loads the IFrame Player API code asynchronously.
	      var tag = document.createElement('script');
	
	      tag.src = "https://www.youtube.com/iframe_api";
	      var firstScriptTag = document.getElementsByTagName('script')[0];
	      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	
	      //  This function creates an <iframe> (and YouTube player)
	      //    after the API code downloads.
	      var player;
	      function onYouTubeIframeAPIReady() {
	        player = new YT.Player('player', {
		      height:'100%',
		      width: '100%',
		      fitToBackground: true,  
	          videoId: '<?php echo $youtube_video?>',
	          playerVars: { 
		          'autoplay': 1, 
		          'controls': 0,
		          'autohide':1,
		          'enablejsapi':1,
		          'loop':1, 
		          'disablekb':1, 
		          'fs': 0, 
		          'modestbranding': 0, 
		          'showinfo': 0, 
		          'color': 'white', 
		          'theme': 'light', 
		          'rel':0  ,
		          'playlist': '<?php echo $youtube_video ?>'
		      },
	          events: {
	            'onReady': onPlayerReady,
	            'onStateChange': onPlayerStateChange
	          }
	        });
	      }
	
	      //  The API will call this function when the video player is ready.
	      function onPlayerReady(event) {
	        event.target.playVideo();
	        player.mute();
			player.setVolume(0);
			//player.setSize(1920, 1080);
			player.setLoop(true);
			player.setPlaybackQuality('hd1080');
	      }
	      
	      //  
	      function onPlayerStateChange(event) {
/*
		      var playerstate = player.getPlayerState();
		      var slideactive = $j(".carousel-indicators li" ).attr( "class" );
			  
				$j('.carousel-control').on('click', function(e){
					if(playerstate == 1 || playerstate == -1 || playerstate == 3){
						player.pauseVideo();
					}
					if(playerstate == 2 && slideactive === 'active'){
						player.playVideo();
					}
				});
*/
	      }
	      
	/*-------------------------------------------------------------------*/
	/*  Video Carousel. Requires Twitter Bootstrap
	/*-------------------------------------------------------------------*/
	
		var $item = $j('.carousel .item'); 
		var $wHeight = $j(window).height();
		$item.eq(0).addClass('active');
		$item.height($wHeight); 
		$item.addClass('full-screen');
		
		$j(window).on('resize', function (){
		  $wHeight = $j(window).height();
		  $item.height($wHeight);
		});
		
		$j('.carousel').carousel({
		  interval: 0
		});
	      
</script>