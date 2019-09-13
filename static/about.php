<?php include 'header.php'; ?>

<h1 class="display-4">About Dr. Planter</h1>

<div class="row">
	<div class="col-sm-6">
		<p>Dr.Planter is transforming office spaces and making them bloom! We know how important it is to create a lasting impression for any customer, client, and most importantly, employees - and plants are the best way to do just that. Our experienced Doctors are always working to create the best prescription for any space. Whether a low light retail shop, a bright office space, floral bud vases for guest tables, or exterior container gardens, we know what will thrive in each environment.</p>
		<p>And, don’t worry, we won’t leave you and your plants in the dark. Depending on the plants’ needs, our plant experts come by and provide maintenance on a regular schedule. We guarantee your plants will have a long and successful life.</p>
	</div>


	<div class="col-sm-6">
		<div class="contact-form">
			<form>
			  <h5><i class="fa fa-envelope" aria-hidden="true"></i> Connect with us to get started:</h5>
			   <div class="form-group">
			    <label for="name">Name <small class="text-danger">*</small></label>
			    <input type="text" required class="form-control" id="name" placeholder="Enter your Name">
			  </div> 
			  <div class="form-group">
			    <label for="company">Company</label>
			    <input type="text" required class="form-control" id="company" placeholder="Enter your Company">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email <small class="text-danger">*</small></label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="phonenumber">Phone number</label>
			    <input type="text" required class="form-control" id="phonenumber" placeholder="Enter your Phone number">
			  </div>
			  <div class="form-group">
			    <label for="message">Tell us about your space</label>
			    <textarea class="form-control" id="message" rows="3"></textarea>
			  </div>
			 <!-- upload pictures TODO -->
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>