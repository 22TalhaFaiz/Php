<?php
include('header.php');
include('config.php');
?>


<div class="container" style="padding-top:20px; border: none;">
    <div class="row" id="row">
    </div>
  </div>

<section id="upcome" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fab fa-youtube-play align-middle col_red me-1"></i> Upcoming <span class="col_red">Events</span></h4>
   </div>
  </div>
  <div class="col-md-6 col-6">
   <div class="trend_1r text-end">
     <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
   </div>
  </div>
 </div>
 <div class="row trend_2 mt-4">
 <?php 
					$qry3=mysqli_query($conn,"SELECT * FROM news LIMIT 6");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
   <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col-md-3">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="./images/<?php echo $n['poster']; ?>" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		  </div>
		  <div class="trend_2ilast bg_grey p-3 clearfix">
		    <h5><a class="col_red" href="#"><?php echo $n['name']; ?></a></h5>
			<p class="mb-2 "><?php echo $n['description']; ?></p>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">1 Views</p>
		  </div>  
		</div>
		
		  </div>  
		</div>
	  </div>
    </div>
    
  </div>

</div>
 </div>
</div>
<?php
				}
				?>
</section>

<section id="popular" class="pt-4 pb-5 bg_grey">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-12">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fab fa-youtube-play align-middle col_red me-1"></i> Trending <span class="col_red">Events</span></h4>
   </div>
  </div>
 </div>
 <div class="row popular_1 mt-4">
   <ul class="nav nav-tabs  border-0 mb-0">
    <li class="nav-item">
        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
            <span class="d-md-block">JUST ARRIVED</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
            <span class="d-md-block">POPULAR EVENTS</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">TV SHOWS</span>
        </a>
    </li>
	<li class="nav-item">
        <a href="#settings_o" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
            <span class="d-md-block">FREE MOVIES</span>
        </a>
    </li>
	
</ul>
 </div>
 <div class="popular_2 row mt-4">
    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <div class="popular_2i row g-2">
                <?php
                $today = date("Y-m-d");
                $qry2 = mysqli_query($conn, "select * from  movies order by rand() limit 4");

                while ($m = mysqli_fetch_array($qry2)) {
                ?>
                    <div class="col-md-6">
                        <div class="popular_2i1 row">
                            <div class="col-md-4 col-4">
                                <div class="popular_2i1lm position-relative clearfix">
                                    <div class="popular_2i1lm1 clearfix">
                                        <div class="grid">
                                            <figure class="effect-jazz mb-0">
                                                <a href="aboutmovies.php?id=<?php echo $m['id']; ?>"><img src="./images/<?php echo $m['Poster']; ?>" class="w-100" height="250" alt="" /></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="popular_2i1lm2 position-absolute top-0 w-100 text-center clearfix">
                                        <ul>
                                            <li class="d-inline-block"><a href="#"><i class="fa fa-link col_red"></i></a></li>
                                            <li class="d-inline-block"><a href="#"><i class="fa fa-search col_red"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-8">
                                <div class="popular_2i1r">
                                    <h5><a href="aboutmovies.php?id=<?php echo $m['id']; ?>" style="text-decoration:none;"><?php echo $m['title']; ?></a></h5>
                                    <h6><?php echo $m['Genre']; ?></h6>
                                    <h6> Imdb <?php echo $m['Rating']; ?> <span class="ms-2"><i class="fa fa-star col_red me-1"></i></span> <?php echo $m['Release_Date']; ?> <span class="ms-2">Runtime: <?php echo $m['runtime']; ?> </span></h6>
                                    <p><?php echo $m['Description']; ?></p>
                                    <h6 class="mb-0"><a class="button" href="<?php echo $m['Trailer']; ?>"> More Info - Trailer</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

		 
</section>

<section id="choice" class="pt-4 pb-5">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    

		    
		</div>
	  </div>
    </div>
    
  </div>

</div>
 </div>
</div>
</section>

<section id="play">
<div class="play_m clearfix">
 <div class="container">
 <div class="row trend_1">
 
 <div class="play2 row mt-4">
  <div class="col-md-4 p-0">
   <div class="play2l">
     <div class="grid clearfix">
	 <?php
                $today = date("Y-m-d");
                $qry2 = mysqli_query($conn, "select * from  movies order by rand() limit 1");

                while ($m = mysqli_fetch_array($qry2)) {
                ?>
				  <figure class="effect-jazz mb-0">
				  <a href="aboutmovies.php?id=<?php echo $m['id']; ?>"><img src="./images/<?php echo $m['Poster']; ?>" height="450" class="w-75"  alt="abc"></a>
				  </figure>
			  </div>
   </div>
  </div>
  
  <div class="col-md-8 p-0">
   <div class="play2r  bg_grey p-4">
	   <h5><span class="col_red">BEST MOVIE OF THE MONTH :</span> <?php echo $m['title']; ?><br></h5>
      <h5 class="mt-3"><?php echo $m['Genre']; ?></h5>
	  <hr class="line">
	  <p class="mt-3"><?php echo $m['Description']; ?></p>
	  <div class="play2ri row mt-4">
	   <div class="col-md-6">
	    <div class="play2ril">
		 <h6 class="fw-normal">
Running Time: <span class="pull-right"><?php echo $m['runtime']; ?></span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Genre: <span class="pull-right"><?php echo $m['Genre']; ?></span></h6>
         <hr class="hr_1">
		 <h6 class="fw-normal">
Director: <span class="pull-right">Eget Nulla</span></h6>
         <hr class="hr_1">
		  <h6 class="fw-normal">
Stars: <span class="pull-right">Semp Port, Dapibus Diam</span></h6>
         <hr class="hr_1">
		 <h6 class="fw-normal">
Release Date: <span class="pull-right"><?php echo $m['Release_Date']; ?></span></h6>
         <hr class="hr_1 mb-0">
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="play2rir">
		 <h6 class="fw-normal">Imdb - <?php echo $m['Rating']; ?></h6>
         <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
		</div>
	   </div>
	  </div>
   </div>
  </div>
 </div>
</div>
</div>
<?php
                }
                ?>
</section>

<section id="stream" class="pb-5 pt-4">
<div class="container">
 <div class="row trend_1">
  <div class="col-md-6 col-6">
   <div class="trend_1l">
    <h4 class="mb-0"><i class="fab fa-youtube-play align-middle col_red me-1"></i> Movie   <span class="col_red">Streaming Services</span></h4>
   </div>
  </div>
  <div class="col-md-6 col-6">
   <div class="trend_1r text-end">
     <h6 class="mb-0"><a class="button" href="#"> View All</a></h6>
   </div>
  </div>
 </div>
 <div class="row trend_2 mt-4">
   <div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="trend_2i row">
	    <div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/4.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/5.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/6.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/7.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/8.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
	  </div>
    </div>
    <div class="carousel-item">
      <div class="trend_2i row">
	    <div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/9.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/10.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/11.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/4.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
		<div class="col">
		  <div class="trend_2im clearfix position-relative">
		   <div class="trend_2im1 clearfix">
		     <div class="grid">
		  <figure class="effect-jazz mb-0">
			<a href="#"><img src="img/5.jpg" class="w-100" alt="img25"></a>
		  </figure>
	  </div>
		   </div>
		   <div class="trend_2im2 clearfix  position-absolute w-100 top-0">
		     <h5><a class="col_red" href="#">Semper</a></h5>
			<span class="col_red">
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		 <i class="fa fa-star"></i>
		</span>
		<p class="mb-0">2 Views</p>
		   </div>
		  </div>
		    
		</div>
	  </div>
    </div>
    
  </div>

</div>
 </div>
</div>
</section>

<?php 
include "footer.php"


?>
<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel"></h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<img class="card-img-top modal-image" src="" alt="Card image cap">
			<p class="card-text"></p>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>
		</div>
	  </div>
	</div>
  </div>
</body>

</html>

