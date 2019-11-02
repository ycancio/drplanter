<?php include 'header.php'; ?>

<h1 class="display-4">Gallery</h1>

<div class="prod-list">
	<ul class="row">
		<?php 
			$files = scandir('assets/img/gallery/');
			foreach($files as $file) {
				$fullname = str_replace(".jpg", "", $file);
				$name = explode('(',$fullname)[0];
				$desc = explode('(',$fullname)[1];
				if($file != '.' && $file!='..')
			  echo '<li class="col-12 col-sm-6 col-lg-4 text-center">
          			 <img class="img-fluid lazy" src="assets/img/gallery/'.$file.'"><h4>'.$name.'</h4><p>('.$desc.'</p></li>';
			}
		 ?>
        


      </ul>
</div>

<?php include 'footer.php'; ?>