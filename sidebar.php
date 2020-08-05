<div class="card mb-2 p-3 border-1">
        <div class="live-class-content-header">
            <h4> বাণী </h4>
        </div>
        <div id="carouselMessage" class="carousel slide" data-ride="carousel" data-touch="true">

            <div class="carousel-inner">
                <?php for ($i=1; $i < 5 ; $i++) { ?>
                <div class="carousel-item <?php echo ($i == 1) ? 'active' : ' ' ;?>">
                    <div class="box-title mt-2">
                        <img src="assets/images/Picture1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="box-content mt-2 box-content-mb">
                        <h5> <a class="text-dark" href="single-message.php">প্রধান শিক্ষকের বাণী </a></h5>
                        <p class="content">
                            সহ শিক্ষা কার্যক্রমকে গতিশীল করার লক্ষ্যে বিদ্যালয়ের খেলার মাঠকে বাস্কেট বল...
                        </p>
                        <div class="janala-desc-icon">
                            <a href="single-message.php">বিস্তারিত <i class="fa fa-caret-right"></i> </a>
                        </div>
                    </div>
                </div>   <!-- /item -->    
                <?php } ?>                                                              
            </div><!-- inner -->
            <ol class="carousel-indicators">
                <?php for ($x=1; $x < 5; $x++) { ?>
                    <li data-target="#carouselMessage" data-slide-to="<?php echo $x++ ?>" class="<?php echo ($x == 1) ? 'active' : '' ;?> bg-dark"></li>
                <?php } ?>
            </ol>
        </div>

</div>


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

<div class="live-class-content-wrapper bg-white px-2 pt-2">
    <div class="live-class-content">
        <div class="live-class-content-header">
            <h4>লাইভ ক্লাস পরিসংখ্যান</h4>
        </div>
        <ul>
        	<?php for($x = 0; $x <8; $x++) { ?>
            <li>
                <a href="#">
                    <span class="highlight-icon">
                        <i class="fa fa-book"></i>
                    </span>
                    ৩য় শ্রেণী, পরিবেশ দূষণের কারণ 
                    <span class="most-read float-right">
                    	১৯৪
                    </span>
                </a>
            </li>
        	<?php } ?>
        </ul>
    </div><!-- live-class-content -->
</div>