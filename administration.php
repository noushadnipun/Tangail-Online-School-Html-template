<?php include 'header.php'; ?>

<section class="mt-2">
	<div class="pb-4">
		<h3 class="text-dark pb-2">প্রশাসন</h3>
		<form>
		  	<div class="form-row">
			    <div class="col-md-3 col-6">
		    		<label for="office">অফিস</label>
				  	<select class="form-control" id="office">
					    <option>জেলা শিক্ষা অফিস</option>
					    <option>উপজেলা মাধ্যমিক শিক্ষা অফিস</option>
				  	</select>
			    </div>
			    <div class="col-md-3 col-6">
			      <label for="thana">থানা</label>
				  	<select class="form-control" id="thana">
					    <option>বাসাইল</option>
					    <option>ভূয়াপুর</option>
					    <option>দেলদুয়ার</option>
					    <option>ঘাটাইল</option>
				  	</select>
			    </div>
			    <div class="col-md-3 col-6">
			      <label for="name">নাম</label>
				  	<select class="form-control" id="name">
					    <option>1</option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
				  	</select>
			    </div>
			    <div class="col-md-2 col-6">
			      <label for="desig">পদবী</label>
				  	<select class="form-control" id="desig">
					    <option>1</option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
				  	</select>
			    </div>
			    <div class="col-md-1 text-center">
			      	<button class="btn btn-success data-table-submit">সার্চ</button>
			    </div>
		  	</div>
		</form>
	</div>

	<div class="card border-top-0 mb-3">
		<div class="card-body p-0 table-responsive">
			<table class="table table-bordered mb-0">
			  	<thead>
				    <tr>
				      <th scope="col">অফিস</th>
				      <th scope="col">থানা</th>
				      <th scope="col">নাম</th>
				      <th scope="col">পদবী</th>
				      <th scope="col">নিজ জেলা</th>
				      <th scope="col">জন্ম তারিখ</th>
				      <th scope="col">অত্রাফিসে যোগদান</th>
				      <th scope="col">মোবাইল</th>
				      <th scope="col">ই-মেইল</th>
				      <th scope="col">ছবি</th>
				    </tr>
			  	</thead>
			  	<tbody>
			  		<?php for ($i=0; $i < 10; $i++) { ?>
				    <tr>
				      <th>জেলা শিক্ষা অফিস</th>
				      <td>টাংগাইল সদর</td>
				      <td></td>
				      <td></td>
				      <td></td>
				      <td></td>
				      <td></td>
				      <td></td>
				      <td></td>
				      <td></td>
				    </tr>
					<?php } ?> 
			  	</tbody>
			</table>
		</div>
		<div class="card-footer border-top-0 bg-white">
			<nav aria-label="Page navigation" class="custom-paginition">
			  	<ul class="pagination mb-0 justify-content-end pagination-sm">
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
		</div>
	</div>
</section>


<?php include 'footer.php'; ?>


<?php include 'footer.php'; ?>