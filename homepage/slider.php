<section class="row mb-2">
	<div class="col-md-9 video-slider">
	 	<!--Carousel Wrapper-->
	    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel" data-interval="false" data-touch="true">
	      <!--Slides-->
	      	<div class="carousel-inner" role="listbox">
	      		<?php for($x = 0; $x < 7; $x++) { ?>
		        <div class="carousel-item <?php if($x == 0) {echo 'active';} ?>">
		          	<div class="facebook-responsive">
		          		<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F10minuteschool%2Fvideos%2F574946596719036%2F&show_text=false&width=734&height=413&appId" width="734" height="413" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
		          	</div>
		        </div>
		    	<?php } ?>
	      	</div>
	      <!--/.Slides-->
	      <!--Controls-->
	      	<ol class="carousel-indicators video_slider_thumb_scroll ml-lg-0" id="video_slider_thumb_container">
		        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> 
		        	<img class="" src="assets/images/video-thumb.png" class="img-fluid">
		        	<p class="thumb-caption text-success">ষষ্ঠ</p>
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="1">
		        	<img class="" src="assets/images/video-thumb.png" class="img-fluid">
		        	<p class="thumb-caption text-primary">সপ্তম</p>
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="2">
		        	<img class="" src="assets/images/video-thumb.png" class="img-fluid">
		        	<p class="thumb-caption text-info">অষ্টম</p>
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="3">
		        	<img class="" src="assets/images/video-thumb.png" class="img-fluid">
		        	<p class="thumb-caption text-warning">নবম</p>
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="4">
		        	<img class="" src="assets/images/video-thumb.png" class="img-fluid">
		        	<p class="thumb-caption text-danger">দশম</p>
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="5">
		        	<img class="" src="assets/images/video-thumb.png" class="img-fluid">
		        	<p class="thumb-caption text-orange">একাদশ</p>
		        </li>
		        <li data-target="#carousel-thumb" data-slide-to="6">
		        	<img class="" src="assets/images/video-thumb.png" class="img-fluid">
		        	<p class="thumb-caption text-purple">দ্বাদশ</p>
		        </li>
	      	</ol>
	      	<button id="slideBack" class="d-block d-xl-none" type="button"><i class="fa fa-angle-left slide-arrow"></i></button>
            <button id="slideNext" class="d-block d-xl-none" type="button"><i class="fa fa-angle-right slide-arrow"></i></button>
	      	<!--/.Controls-->
	    </div>
	    <!--/.Carousel Wrapper-->
	</div><!-- End Col 8 -->
	<div class="col-md-3">
		<div class="card slider-right-box mb-2">
			<div class="card-body box">
				<h4>টাংগাইল অনলাইন স্কুল সম্পর্কিত</h4>
				<div class="row">
					<div class="col-md-5 col-4">
						<img class="img-fluid" src="assets/images/edu-cap.png">
					</div>
					<div class="col-md-7 col-8">
						<ul class="box-caption">
							<li><a href="#">তথ্য প্রদানকারী কর্মকর্তা</a></li>
							<li><a href="#">সাংগাঠনিক কাঠামো</a></li>
							<li><a href="#">আইন ও বিধি</a></li>
							<li><a href="#">বার্ষিক প্রতিবেদন</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- End Slider Right Side Box -->
		<div class="site-widget-image">
			<img class="img-fluid" src="assets/images/National-Helpline.jpg" alt="" style="height: 428px; width: 100%;">
		</div>
	</div><!-- Enmd Col 4 -->
</section><!-- End Row -->