<?php
session_start();
if(!isset($_SESSION['user_id'])) {
	header("Location: login.php");
	exit();
}
include('header.php');
include('config.php');

	$qry2=mysqli_query($conn,"select * from movies where id='".$_SESSION['movie']."'");
	$movie=mysqli_fetch_array($qry2);
	?>
	<link href="css/movie.css" rel="stylesheet">
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3><?php echo $movie['title']; ?></h3>	
							<div class="about-top">	
								<div class="grid images_3_of_2">
									<img src="./images/<?php echo $movie['Poster']; ?>" alt=""/>
								</div>
								<div class="desc span_3_of_2">
									<p class="p-link" style="font-size:15px"><b>Cast : </b><?php echo $movie['runtime']; ?></p>
									<p class="p-link" style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['Release_Date'])); ?></p>
									<p style="font-size:15px"><?php echo $movie['Description']; ?></p>
									<a href="<?php echo $movie['Trailer']; ?>" target="_blank" class="watch_but">Watch Trailer</a>
								</div>
								<div class="clear"></div>
							</div>
							<table class="table table-hover table-bordered text-center text-white">
							<?php
								$s=mysqli_query($conn,"select * from showtime where id='".$_SESSION['show']."'");
								$shw=mysqli_fetch_array($s);
								
									$t=mysqli_query($conn,"select * from theater where id='".$shw['id']."'");
									$theatre=mysqli_fetch_array($t);
									?>
									<tr>
										<td class="col-md-6">
											Theatre
										</td>
										<td>
											<?php echo $theatre['Theater_Name'].", ".$theatre['Location'];?>
										</td>
										</tr>
										<tr>
											<td>
												Screen
											</td>
										<td>
											<?php 
												$ttm=mysqli_query($conn,"select  * from showtime where id='".$shw['id']."'");
												
												$ttme=mysqli_fetch_array($ttm);
												
												$sn=mysqli_query($conn,"select  * from screens where id='".$ttme['id']."'");
												
												$screen=mysqli_fetch_array($sn);
												echo $screen['screen_name'];
							
												?>
										</td>
									</tr>
									<tr>
										<td>
											Date
										</td>
										<td>
											<?php 
											if(isset($_GET['date']))
							{
								$date=$_GET['date'];
							}
							else
							{
								if($shw['showdatetime']>date('Y-m-d'))
								{
									$date=date('Y-m-d',strtotime($shw['showdatetime'] . "-1 days"));
								}
								else
								{
									$date=date('Y-m-d');
								}
								$_SESSION['dd']=$date;
							}
							?>
							<div class="col-md-12 text-center " style="padding-bottom:20px">
								<?php if($date>$_SESSION['dd']){?><a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "-1 days"));?>"><button class="btn btn-danger"><i class="fas fa-chevron-left"></i></button></a> <?php } ?><span style="cursor:default" class="btn btn-danger"><?php echo date('d-M-Y',strtotime($date));?></span>
								<?php if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){?>
								<a href="booking.php?date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>"><button class="btn btn-danger"><i class="fas fa-chevron-right"></i></button></a>
								<?php }
								$av=mysqli_query($conn,"select sum(Number_Of_Tickets) from booking where showtime_id='".$_SESSION['show']."' and ticket_date='$date'");
								$avl=mysqli_fetch_array($av);
								?>
							</div>
										</td>
									</tr>
									<tr>
										<td>
											Show Time
										</td>
										<td>
											<?php echo date('h:i A',strtotime($ttme['showdatetime']))." ".$ttme['name'];?> Show
										</td>
									</tr>
									<tr>
										<td>
											Number of Seats
										</td>
										<td>
											<form  action="#" method="post">
												<input type="hidden" name="screen" value="<?php echo $screen['id'];?>"/>
											<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" class="form-control" value="1" style="text-align:center" id="seats"/>
											<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge'];?>"/>
											<input type="hidden" name="date" value="<?php echo $date;?>"/>
										</td>
									</tr>
									<tr>
										<td>
											Amount
										</td>
										<td id="amount" style="font-weight:bold;font-size:18px">
											Rs <?php echo $screen['charge'];?>
										</td>
									</tr>
									<tr>
										<td colspan="2"><?php if($avl[0]==$screen['seats']){?><button type="button" class="btn btn-danger" style="width:100%">All seats are reserved</button>
											<?php } else { ?>
										<button class="btn btn-danger" style="width:100%">Book Now</button>
										<?php } ?>
										</form></td>
									</tr>
						<table>
							<tr>
								<td></td>
							</tr>
						</table>
					</div>			
				<?php include('sidebarm.php');?>
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php')

;?>

<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);

	});
	
</script>