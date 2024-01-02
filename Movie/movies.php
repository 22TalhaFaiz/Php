<?php include('config.php');
include('header.php')
?>

<link href="css/movie.css" rel="stylesheet">
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