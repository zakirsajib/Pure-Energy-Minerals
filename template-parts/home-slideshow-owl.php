<div class="owl-carousel" role="listbox">
		    <div class="item">
		        <img src="http://localhost/pem/wp-content/uploads/2016/04/slide-1.jpg" data-color="tomato" alt="e">
			        <div class="carousel-caption">
				        <div class="jumbotron">
				            <h2>Innovative & sustainable</h2>
				            <h1>Lithium Extraction</h1>
				            <p class="lead">Can we find better & cleaner ways to process the lithium needed for the energy storage revolution we’re witnessing? <span>We believe the answer is YES.</span></p>
				        </div>
			        </div>
		    </div>
		    <div class="item">
		        <img src="ttps://unsplash.it/2000/1250?image=689" data-color="lightblue" alt="">
			        <div class="carousel-caption">
				        <div class="jumbotron">
				           <h2>Innovative & sustainable</h2>
				           <h1>Lithium Extraction</h1>
				           <p class="lead">Can we find better & cleaner ways to process the lithium needed for the energy storage revolution we’re witnessing? <span>We believe the answer is YES.</span></p>
				        </div>
				    </div>
		    </div>
		  
		  <div class="item">
		  	<div class="fullscreen-bg">
		        <video loop muted autoplay poster="http://dev2.slicejack.com/fullscreen-video-demo/img/videoframe.jpg" class="fullscreen-bg__video">
		            <source src="http://dev2.slicejack.com/fullscreen-video-demo/video/big_buck_bunny.mp4" type="video/mp4">
		            <source src="http://dev2.slicejack.com/fullscreen-video-demo/video/big_buck_bunny.ogv" type="video/ogg">
		            <source src="http://dev2.slicejack.com/fullscreen-video-demo/video/big_buck_bunny.webm" type="video/webm">
		        </video>
    		</div>
    		<div class="carousel-caption">
		        <div class="jumbotron">
		           <h2>Sample HTML5 Video</h2>
		           <h1>It supports .mp4/.ogv/.webm</h1>
		           <p class="lead">We can upload videos in WordPress admin and can display those video without need of youTube/Vimeo. <span>HTML5 Video is BEST.</span></p>
		        </div>
			</div><!-- caption -->
		  </div><!-- item -->
		  
		  <div class="item">
			<div class="background-video">
			  	<div class="ytplayer-container">
			  		<div id="player"></div>
			  	</div>
			</div>
			<div class="carousel-caption">
		        <div class="jumbotron">
		           <h1>Sample YouTube Video</h1>
		        </div>
			</div><!-- caption -->
		  </div>
</div> <!-- carousel-inner -->
		  
		  
<?php $youtube_video='njCDZWTI-xg';?>

<script>
	// 2. This code loads the IFrame Player API code asynchronously.
	      var tag = document.createElement('script');
	
	      tag.src = "https://www.youtube.com/iframe_api";
	      var firstScriptTag = document.getElementsByTagName('script')[0];
	      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	
	      // 3. This function creates an <iframe> (and YouTube player)
	      //    after the API code downloads.
	      var player;
	      function onYouTubeIframeAPIReady() {
	        player = new YT.Player('player', {
		      height:'',
		      width: '',
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
		          'rel':0  
		      },
	          events: {
	            'onReady': onPlayerReady
	          }
	        });
	      }
	
	      // 4. The API will call this function when the video player is ready.
	      function onPlayerReady(event) {
	        event.target.playVideo();
	        player.mute();
			player.setVolume(0);
			player.setSize(1280, 720);
			player.setLoop(true);
			player.setPlaybackQuality('medium');
	      }
	
</script>