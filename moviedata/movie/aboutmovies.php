<?php 
    include('header.php');
    include('config.php');
	$qry2=mysqli_query($conn,"select * from movies where id='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry2);
	?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3 style="color:#444; font-size:23px;" class="text-center"><?php echo $movie['title'];?></h3>	
							<div class="about-top">	
								<div class="grid images_3_of_2">
									<img src="<?php echo $movie['Poster']; ?>" alt=""/>
								</div>
								<div class="desc span_3_of_2">
									<p class="p-link" style="font-size:15px"><b>Genre : </b><?php echo $movie['Genre'];?></p>
                                    <p class="p-link" style="font-size:15px"><b>Rating : </b><?php echo $movie['Rating'];?></p>
									<p class="p-link" style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['Release_Date']));?></p>
									<p style="font-size:15px"><?php echo $movie['Description']; ?></p>
									
								<div class="clear"></div>
							</div>
							