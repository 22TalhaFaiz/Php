<?php
include "header.php";
?>

<section id="center" class="center_o pt-2 pb-2">
 <div class="container-xl">
  <div class="row center_o1">
   <div class="col-md-5">
     <div class="center_o1l">
	  <h2 class="mb-0">Contact</h2>
	 </div>
   </div>
   <div class="col-md-7">
     <div class="center_o1r text-end">
	  <h6 class="mb-0 col_red"><a href="index.php">Home</a> <span class="me-2 ms-2 text-light"><i class="fa fa-caret-right align-middle"></i></span> Contact</h6>
	 </div>
   </div>
  </div>
 </div>
</section>

<section id="contact" class="pt-4 pb-4 bg_grey">
 <div class="container-xl">
  <div class="row contact_1 bg_dark  pt-5 pb-5">
   <div class="col-md-3">
    <div class="contact_1i row">
	 <div class="col-md-2 col-2">
	  <div class="contact_1il">
	   <span class="col_red fs-3"><i class="fa fa-map-marker"></i></span>
	  </div>
	 </div>
	 <div class="col-md-10 col-10">
	  <div class="contact_1ir">
	   <h5 class="col_red">Company Address</h5>
	   <p class="mb-0">Aptech North Nazimabad , Karachi Pakistan</p>
	  </div>
	 </div>
	</div>
   </div>   
   <div class="col-md-3">
    <div class="contact_1i row">
	 <div class="col-md-2 col-2">
	  <div class="contact_1il">
	   <span class="col_red fs-3"><i class="fa fa-clock-o"></i></span>
	  </div>
	 </div>
	 <div class="col-md-10 col-10">
	  <div class="contact_1ir">
	   <h5 class="col_red">Office Hours</h5>
	   <p class="mb-0">Monday To Saturday - 09.00 - 11.00</p>
	   <p class="mb-0">Sunday - Closed</p>
	  </div>
	 </div>
	</div>
   </div>
   <div class="col-md-3">
    <div class="contact_1i row">
	 <div class="col-md-2 col-2">
	  <div class="contact_1il">
	   <span class="col_red fs-3"><i class="fa fa-envelope"></i></span>
	  </div>
	 </div>
	 <div class="col-md-10 col-10">
	  <div class="contact_1ir">
	   <h5 class="col_red">E-mail</h5>
	   <p class="mb-0">22talhafaiz@gmail.com</p>
	  </div>
	 </div>
	</div>
   </div>
   <div class="col-md-3">
    <div class="contact_1i row">
	 <div class="col-md-2 col-2">
	  <div class="contact_1il">
	   <span class="col_red fs-3"><i class="fa fa-phone"></i></span>
	  </div>
	 </div>
	 <div class="col-md-10 col-10">
	  <div class="contact_1ir">
	   <h5 class="col_red">Phone Numbers</h5>
	   <p class="mb-0">+123 123 456</p>
	  </div>
	 </div>
	</div>
   </div>
  </div>
  <div class="row contact_2 mt-4">
   <div class="col-md-3">
    <div class="contact_2r">
	  <h5 class="mb-3">Karachi Office</h5>
	  <p><i class="fa fa-car col_red me-1"></i> North Nazimabad , Karachi</p>
	  <p><i class="fa fa-phone col_red me-1"></i> +123 123 456</p>
	   <p><i class="fa fa-globe col_red me-1"></i> <a href="#">22talhafaiz@gmail.com</a></p>
		<h5 class="mb-3 mt-4">BUSINESS HOURS</h5>
		<p>Hotline is available for 24 hours a day!..</p>
		<p>Monday – Friday : <span class="fw-bold text-white">9am to 7pm</span></p>
		<p>Saturday : <span class="fw-bold text-white">11am to 3pm</span></p>
		<p>Sunday : <span class="fw-bold text-white">Closed</span></p>
	</div>
   </div>
   <div class="col-md-9">
    <div class="contact_2l row">
	 <div class="col-md-12">
	  <h4>GET IN TOUCH</h4>
	 </div> 
	</div>
	<div class="contact_2l1 mt-3 row">
	 <div class="col-md-6">
	  <div class="contact_2l1i">
	    <input class="form-control" placeholder="Name*" type="text">
	  </div>
	 </div> 
	 <div class="col-md-6">
	  <div class="contact_2l1i">
	    <input class="form-control" placeholder="Email*" type="text">
	  </div>
	 </div>
	
	 
	</div>
	<div class="contact_2l1 mt-3 row">
	 <div class="col-md-12">
	  <div class="contact_2l1i">
	    <textarea placeholder="Comment" class="form-control form_text"></textarea>
		<h6 class="mt-3 mb-0"><a class="button" href="#"> Submit</a></h6>
	  </div>
	 </div> 
	</div>
   </div>
  </div>
  <div class="row contact_3 mt-4">
   <div class="col-md-12">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.1377120008005!2d67.03045847529862!3d24.927378142576675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f90157042d3%3A0x93d609e8bec9a880!2sAptech%20Computer%20Education%20North%20Nazimabad%20Center!5e0!3m2!1sen!2s!4v1704950932801!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
  </div>
 </div>
</section>


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

</body>

</html>