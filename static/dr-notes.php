<?php include 'header.php'; ?>

<h1 class="display-4 text-center">Dr. "Notes" <br>
 <small>Dr.Planter's notes cover all the plant care<br>topics you need, scroll and learn about the plant life!</small>
</h1>

<ul class="blog-list row">
	<?php for ($i=0; $i<12; $i++) : ?>
	<li class="col-xs-12 col-sm-4">
		<a href="#"><img class="img-fluid" src="https://placeimg.com/640/400/nature" alt=""></a>
		<p class="category"><a href="#">Category Name</a></p>
		<h4><a href="#">Blog Post Title</a></h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus ea nisi praesentium odio ipsum eveniet quidem distinctio repellat soluta consequuntur...</p>
	</li>
	<?php endfor ?>
</ul>

<div class="more_q text-center">
	<h3>Have a Plant Question that wasn't covered?</h3>
	<a href="#" class="btn btn-primary">Ask away...</a>
</div>

<?php include 'footer.php'; ?>
