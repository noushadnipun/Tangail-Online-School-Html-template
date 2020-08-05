<?php include 'header.php'; ?>

<section class="mt-2">
	<div class="pb-4">
		<h3 class="text-dark pb-2">টাংগাইল জেলার পাবলিক পরীক্ষার ফলাফল</h3>
		<form>
		  	<div class="form-row">
			    <div class="col-md-3 col-6">
		    		<label for="upozila">উপজেলা</label>
				  	<select class="form-control" id="upozila">
					    <option>বাসাইল</option>
					    <option>ভূয়াপুর</option>
					    <option>দেলদুয়ার</option>
					    <option>ধনবাড়ী</option>
				  	</select>
			    </div>
			    <div class="col-md-3 col-6">
			      <label for="name">পরীক্ষার নাম</label>
				  	<select class="form-control" id="name">
					    <option>জেএসসি</option>
					    <option>জেডিসি</option>
					    <option>এসএসসি</option>
					    <option>দাখিল</option>
				  	</select>
			    </div>
			    <div class="col-md-3 col-6">
			      <label for="year">সাল</label>
				  	<select class="form-control" id="year">
					    <option>1</option>
					    <option>2</option>
					    <option>3</option>
					    <option>4</option>
				  	</select>
			    </div>
			    <div class="col-md-2 col-6">
			      <label for="">স্কুল</label>
				  	<select class="form-control" id="">
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
				      <th scope="col">উপজেলা</th>
				      <th scope="col">পরীক্ষার নাম</th>
				      <th scope="col">সাল</th>
				      <th scope="col">মোট পাস</th>
				      <th scope="col">পাসের হার</th>
				      <th scope="col">A+</th>
				      <th scope="col">A</th>
				      <th scope="col">A-</th>
				      <th scope="col">B</th>
				      <th scope="col">C</th>
				      <th scope="col">D</th>
				      <th scope="col">F</th>
				    </tr>
			  	</thead>
			  	<tbody>
			  		<?php for ($i=0; $i < 10; $i++) { ?>
				    <tr>
				      <th>বাসাইল</th>
				      <td>জেএসসি</td>
				      <td></td>
				      <td></td>
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