<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Booking</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<section id="top">
<div class="container">
 <div class="row top_1">
  <div class="col-md-3">
   <div class="top_1l pt-1">
    <h3 class="mb-0"><a class="text-white" href="index.php"><i class="fa fa-video-camera col_red me-1"></i> Movie Booking</a></h3>
   </div>
  </div>
  <div class="col-md-5">
   <div class="top_1m">
   <div class="searchBox">
        <input class="searchInput" type="text" id="input" placeholder="Enter Movie Name" required />
        <button class="searchButton" href="#">
          <i class="fas fa-search" id="search"></i>
        </button>
      </div>

   </div>
  </div>
  <div class="col-md-4">
   <div class="top_1r text-end">
     <ul class="social-network social-circle mb-0">
			<li><a href="#" class="icoRss" title="Rss"><i class="fab fa-instagram"></i></a></li>
			<li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook"></i></a></li>
			<li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-youtube"></i></a></li>
			<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
		</ul>
   </div>
  </div>
 </div>
</div>




  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="card-img-top modal-image" src="" alt="Card image cap">
                    <p class="modal-p"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Watch Here!</button>
                </div>
            </div>
        </div>
    </div>

<script>
	$("#input").on('keydown', function (e) {
		if (e.keyCode == 13) {
			$("#search").click();
		}
	})
	$("#search").click(function () {
		$("#row").html('');
		input = $("#input").val();
		const url = `http://www.omdbapi.com/?s=${input}&apikey=cf0586a7`;
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function (accept) {
				for (i of accept.Search) {
					$("#row").append(`
					<div class="card g-5 m-2 mt-2 bg-dark text-white" style="width: 18rem;">
					<img src="${i.Poster}" class="card-img-top" alt="">
					 <div class="card-body">
					<h5 class="card-title">${i.Title}</h5>
					<p class="card-text">${i.Year}</p>
					<button data-bs-toggle="modal" id='${i.imdbID}'data-bs-target="#exampleModal" onclick="detail(this)" class="btn btn-primary">Watch Here</button>
					</div>
					</div>`

					)
				}
			},
			error: function (accept) {
				console.log(accept)
			}
		})

	})
	function detail(e) {
		console.log(e.id);
		const url = `http://www.omdbapi.com/?i=${e.id}&apikey=cf0586a7`;
		$.ajax({
			url: url,
			type: "GET",
			dataType: "JSON",
			success: function (accept) {
				$(".modal-image").attr('src', accept.Poster);
				$(".modal-title").text(accept.Title);
				$(".modal-p").text(accept.Plot);
			},

			error: function (accept) {
				console.log(accept)
			}
		})

	}
</script>
</section>

<section id="header">
<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="index.html"><i class="fa fa-video-camera col_red me-1"></i> Movie Booking</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="movies.php">Movies</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="blog.php">Blog</a></li>
            <li><a class="dropdown-item border-0" href="blog_detail.php">Blog Detail</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="team.php">Team</a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu drop_1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="about.php">About Us</a></li>
            <li><a class="dropdown-item" href="services.php">Services</a></li>
			<li><a class="dropdown-item" href="team.php">Team</a></li>
            <li><a class="dropdown-item border-0" href="contact.php">Contact</a></li>
          </ul>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>