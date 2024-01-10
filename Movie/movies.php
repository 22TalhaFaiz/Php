<?php include('config.php');
include('header.php')

?>
<section id="center" class="center_o pt-2 pb-2">
 <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-5">
     <div class="center_o1l">
	  <h2 class="mb-0">Movies</h2>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="center_o1r text-end">
	  <h6 class="mb-0 col_red"><a href="index.php">Home</a> <span class="me-2 ms-2 text-light"><i class="fa fa-caret-right align-middle"></i></span>Movies</h6>
	 </div>
   </div>
  </div>
 </div>
</section>


<link href="css/movie.css" rel="stylesheet">
<section class="pt-4 pb-4 bg_grey">
<div class="content container">
	<div class="wrap ">
		<center><h1 style="color:#555;">(NOW SHOWING)</h1></center>
		<div class="content-top row">
			
			<?php
          	 $today=date("Y-m-d");
          	 $qry2=mysqli_query($conn,"select * from  movies");
		
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    
                    <div class="col-md-3 ">
					<div class="imageRow">
						  	<div class="single">
						  		<?php
						
						?>
						  		<a href="aboutmovies.php?id=<?php echo $m['id'];?>"><img src="./images/<?php echo $m['Poster'];?>" class="w-100" alt="" /></a>
						  	</div>
						  	<div class="movie-text">
						  		<h4 class="h-text"><a href="aboutmovies.php?id=<?php echo $m['id'];?>" style="text-decoration:none;"><?php echo $m['title'];?></a></h4>
						  		Genre: <Span class="color2" style="text-decoration:none;"><?php echo $m['Genre'];?></span><br>
						  		
						  	</div>
		  				</div>
		  		</div>
		  		
  	    <?php
  	    	}
  	    	?>
			
			</div>
				<div class="clear"></div>		
			</div>
		</div>

		</section>
			<?php 
			include "footer.php"


			?>