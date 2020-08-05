<?php include 'header.php'; ?>

<section class="mt-2">
	<div class="pb-4">
		<h3 class="text-dark pb-2">শ্রেণি ভিত্তিক ক্লাশ সমূহ</h3>
		<form>
		  	<div class="form-row">
			    <div class="col-md-5 col-6">
				  	<input type="text" class="form-control" name="" value="সার্চ করো">
			    </div>
			    <div class="col-md-2 col-6">
				  	<select class="form-control">
					    <option>দশম</option>
					    <option>নবম</option>
					    <option>অষ্টম</option>
					    <option>সপ্তম</option>
				  	</select>
			    </div>
			    <div class="col-md-2 col-6">
				  	<select class="form-control">
					    <option>জীববিজ্ঞান</option>
					    <option>পদার্থ বিজ্ঞান</option>
					    <option>্রসায়ন</option>
					    <option>গণিত</option>
				  	</select>
			    </div>
			    <div class="col-md-2 col-6">
				  	<select class="form-control">
					    <option>১ম অধ্যায়</option>
					    <option>২য় অধ্যায়</option>
					    <option>৩য় অধ্যায়</option>
					    <option>৫ম অধ্যায়</option>
				  	</select>
			    </div>
			    <div class="col-md-1 text-center">
			      	<button class="btn btn-success">সার্চ</button>
			    </div>
		  	</div>
		</form>
	</div>
		<div class="row pb-4">
			<?php for ($i=0; $i < 16; $i++) { ?>
			<div class="col-md-3">
				<div class="card mb-2 p-1">
					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dhnW1XmQS3s" allowfullscreen></iframe>
					</div>
				    <div class="card-body p-2">
				      <h5 class="card-title mb-0"><a href="single-video.php" class="text-dark">যোজক বা কানেক্টিভ টিস্যু</a></h5>
				    </div>
			  </div>
			</div>
			<?php } ?>
		</div>
		<nav aria-label="Page navigation" class="custom-paginition pb-4">
		  	<ul class="pagination mb-0 justify-content-center pagination-sm">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item active"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
		  	</ul>
		</nav>
</section>

<?php include 'footer.php'; ?>