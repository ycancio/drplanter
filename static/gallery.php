<?php include 'header.php'; ?>

<h1 class="display-4">Gallery</h1>

<div class="prod-list">
	<ul class="row">
		<?php 
			$files = scandir('assets/img/stock/');//$files = glob('assets/img/stock/*.{jpg,png,gif}', GLOB_BRACE);
			foreach($files as $file) {
				if($file != '.' && $file!='..')
			  echo '<li class="col-sm-4">
          			 <a href="#"><img class="img-fluid lazy" src="assets/img/stock/'.$file.'" alt=""></a><h4><a href="#">Product Name</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>';
			}
		 ?>
        


      </ul>
</div>

<?php include 'footer.php'; ?>