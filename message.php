<?php include 'header.php'; ?>
<section class="mt-2">
<div class="row">
	<div class="col-md-9 mb-3">
		<div class="row pb-4">
			<?php for ($i=0; $i < 9; $i++) { ?>
			<div class="col-md-4">
				<div class="card mb-2 p-1">
					<img class="img-card-top img-fluid" src="assets/images/Picture1.jpg" alt="">
				    <div class="card-body p-2">
				      <h5 class="card-title mb-0"><a href="single-message.php" class="text-dark">প্রধান শিক্ষকের বাণী</a></h5>
				    </div>
			  	</div><!-- Card -->
			</div><!-- cOl 4 -->
			<?php } ?>
		</div><!-- /Row  -->
	</div><!--/ col-9 -->
	<div class="col-md-3 mb-3">
		<?php include 'sidebar.php'; ?>
	</div><!-- col-3 -->
</div><!--  /Row -->
</section>
<?php include 'footer.php'; ?>