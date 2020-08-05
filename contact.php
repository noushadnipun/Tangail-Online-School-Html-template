<?php include 'header.php'; ?>
<section class="mt-2">
	<div class="row">
		<div class="col-md-9 mb-3">
			<div class="bg-white p-3">
				<h3 class="text-dark pb-2">যোগাযোগ</h3>
				<div class="pb-4">
					<form id="contact" method="post" class="form" role="form">
						<div class="row">
							<div class="col-xs-6 col-md-6 form-group">
								<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
							</div>
							<div class="col-xs-6 col-md-6 form-group">
								<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
							</div>
						</div>
						<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
						<br />
						<div class="row">
							<div class="col-12 col-md-12 form-group">
								<button class="btn btn-success float-right" type="submit">Submit</button>
							</div>
						</div>
					</form>

			      	<div class="row pt-3">
			      		<div class="col-md-4">
			    			<h5>টাংগাইল অনলাইন স্কুল</h5>
			    			<p>ইমেইলঃ info@tanagil.com</p>
			    			<p>০১৮২৩৬৩৩৭৯২, ০১৬৭৭৬১৮১৯৯</p>
			    			<p>জেলা শিক্ষা অফিস, টাংগাইল</p>
			    		</div><!-- / Col 4 -->
			    		<div class="col-md-8">
			      			<div class="embed-responsive embed-responsive-16by9">
		        				<iframe class="embed-responsive-item" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
		    				</div>
			      		</div><!-- / Col 8 -->
			    	</div>
				</div>
			</div>
		</div><!-- / col-md-9 -->
		<div class="col-md-3 mb-3">
			<?php include 'sidebar.php'; ?>
		</div><!-- /col-md- 3 -->
	</div><!-- / div Row -->
</section>
<?php include 'footer.php'; ?>