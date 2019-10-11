<?php include 'header.php'; ?>
<img src="assets/img/plant_maintenance_banner.jpg" alt="Plant Maintenance" class="img-fluid">
<h1 class="display-4">Plant Maintenance</h1>

<div class="row">
	
	<div class="col-sm-7">
		<p class="lead">Dr.Planter won’t leave your plants in the dark. Depending on the plants' needs, our plant experts come by and provide maintenance on a regularly scheduled day weekly or bi-weekly. We're here to guarantee your plants will have a long and successful life.</p>

		<p class="lead">Our maintenance plans include:</p>
		<ul class="lead">
			<li><b>Watering</b></li>
			<li><b>Pruning, cleaning, and detailed plant care.</b></li>
			<li><b>Fertilization</b>, choice of organic or chemical fertilizers that are safe for indoor use.</li>
			<li><b>Disease and pest management</b>, we’ll keep an eye for anything out of the ordinary and offer options for removal/replacement.</li>
			<li><b>Party and Emergency visits</b>, should plants need extra primping or if emergency is needed, we’ll do our best to be there in under 24 hours.</li>
		</ul>
		
	</div>

	<div class="col-sm-5">
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