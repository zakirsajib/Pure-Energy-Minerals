<div id="pemcarousel" class="carousel slide" data-ride="carousel" data-interval="false">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#pemcarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#pemcarousel" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			  <div class="item">
				<div class="video-content">
				  	<div class="banner-video">
				  		<div id="player"></div>
				  	</div>
				  	<div class="bg-black-banner"></div>
				</div>
				<div class="carousel-caption">
			        <div class="jumbotron">
			           <h2>Innovative & sustainable</h2>
			           <h1>Lithium Extraction</h1>
				            <div class="carousel-lead">Can we find better & cleaner ways to process the lithium needed for the energy storage revolution we’re witnessing? <span>We believe the answer is YES.</span></div>
			        </div>
				</div><!-- caption -->
			  </div>
			  <div class="item">
				  	<div class="fullscreen-bg">
				        <video loop muted autoplay poster="http://dev2.slicejack.com/fullscreen-video-demo/img/videoframe.jpg" class="fullscreen-bg__video">
				            <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
				            <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg">
				            <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm">
				        </video>
				        <div class="bg-black-banner" style="background: rgba(0, 0, 0, 0.5)"></div>
		    		</div>
		    		<div class="carousel-caption">
				        <div class="jumbotron">
				           <h1>Sample HTML5 Video</h1>
				        </div>
					</div><!-- caption -->
		  		</div><!-- item -->
			  
			  
		</div> <!-- carousel-inner -->
		  
		  
		  <!-- Controls -->
		  <a class="left carousel-control" href="#pemcarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#pemcarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
</div>

<?php $youtube_video='Zc_b50JbU14';?>

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
	          videoId: '<?php echo $youtube_video ?>',
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