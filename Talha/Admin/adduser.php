
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{

include("config.php");
include("header.php");
?>
<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0 ">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="serach_field-area d-flex align-items-center">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
</form>
</div>
<span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a class="bell_notification_clicker nav-link-notify" href="#"> <img src="img/icon/bell.svg" alt>
</a>

<div class="Menu_NOtification_Wrap">
<div class="notification_Header">
<h4>Notifications</h4>
</div>
<div class="Notification_body">

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/2.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Cool Marketing </h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Awesome packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/3.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>what a packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/2.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Cool Marketing </h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Awesome packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/3.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>what a packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>
</div>
<div class="nofity_footer">
<div class="submit_button text-center pt_20">
<a href="#" class="btn_1">See More</a>
</div>
</div>
</div>

</li>
<li>
<a class="CHATBOX_open nav-link-notify" href="#"> <img src="img/icon/msg.svg" alt> </a>
</li>
</div>
<div class="profile_info">
<img src="img/client_img.png" alt="#">
<div class="profile_info_iner">
<div class="profile_author_name">
<p>Neurologist </p>
<h5>Dr. Robar Smith</h5>
</div>
<div class="profile_info_details">
<a href="#">My Profile </a>
<a href="#">Settings</a>
<a href="#">Log Out </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="main_content_iner ">
<div class="container-fluid p-0 sm_padding_15px">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Basic Form</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2">Here’s a quick example to demonstrate Bootstrap’s form styles. Keep reading for documentation on required classes, form layout, and more.</h6>
<form>
<div class="mb-3">
<label class="form-label" for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="mb-3">
<label class="form-label" for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-label form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Horizontal form</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2">Create horizontal forms with the grid by adding the <code class="highlighter-rouge">.row</code> class to form groups and using the <code class="highlighter-rouge">.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code class="highlighter-rouge">.col-form-label</code> to your <code class="highlighter-rouge">&lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls.</h6>
<form>
<div class="mb-3 row">
<label for="inputEmail3" class="form-label col-sm-4 col-form-label">Email</label>
<div class="col-sm-8">
<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
</div>
</div>
<div class="mb-3 row">
<label for="inputPassword3" class="form-label col-sm-4 col-form-label">Password</label>
<div class="col-sm-8">
<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
</div>
</div>
<fieldset class>
<div class="row">
<div class="col-form-label col-sm-4 pt-0">Radios</div>
<div class="col-sm-8">
<div class="form-check">
<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
<label class="form-label form-check-label" for="gridRadios1">
First radio
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
<label class="form-label form-check-label" for="gridRadios2">
Second radio
</label>
</div>
<div class="form-check disabled">
<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
<label class="form-label form-check-label" for="gridRadios3">
Third disabled radio
</label>
</div>
</div>
</div>
</fieldset>
<div class=" row">
<div class="col-sm-4">Checkbox</div>
<div class="col-sm-8">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck1">
<label class="form-label form-check-label" for="gridCheck1">
Example checkbox
</label>
</div>
</div>
</div>
<div class=" row">
<div class="col-sm-10">
<button type="submit" class="btn btn-primary">Sign in</button>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Inline Form</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2">Use the <code class="highlighter-rouge">grid and utilities</code> class to display a series of labels, form controls, and buttons on a single horizontal row. Form controls within inline forms vary slightly from their default states.</h6>
<h5 class="card-title font-16">Inline Form</h5>
<form class="row g-3">
<div class="col-auto">
<label for="staticEmail2" class="form-label visually-hidden">Email</label>
<input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
</div>
<div class="col-auto">
<label for="inputPassword2" class="form-label visually-hidden">Password</label>
<input type="password" class="form-control" id="inputPassword2" placeholder="Password">
</div>
<div class="col-auto">
<button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
</div>
</form>
<h5 class="card-title font-16 mt-3">Auto-sizing Form</h5>
<form>
<div class="row align-items-center">
<div class="col-auto">
<label class="visually-hidden" for="form-label inlineFormInput">Name</label>
<input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
</div>
<div class="col-auto">
<label class="form-label visually-hidden" for="inlineFormInputGroup">Username</label>
<div class="input-group mb-2">
<div class="input-group-text">
<div class>@</div>
</div>
<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
</div>
</div>
<div class="col-auto">
<div class="form-check mb-2">
<input class="form-check-input" type="checkbox" id="autoSizingCheck">
<label class="form-label form-check-label" for="autoSizingCheck">
Remember me
</label>
</div>
</div>
<div class="col-auto">
<button type="submit" class="btn btn-primary mb-2">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Form row</h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="card-body">
<form>
<div class="row mb-3">
<div class="col-md-6">
<label class="form-label" for="inputEmail4">Email</label>
<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
</div>
<div class=" col-md-6">
<label class="form-label" for="inputPassword4">Password</label>
<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
</div>
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress">Address</label>
<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress2">Address 2</label>
<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
</div>
<div class="row mb-3">
<div class=" col-md-6">
<label class="form-label" for="inputCity">City</label>
<input type="text" class="form-control" id="inputCity">
</div>
<div class="col-md-4">
<label class="form-label" for="inputState">State</label>
<select id="inputState" class="form-control">
<option selected>Choose...</option>
<option>...</option>
</select>
</div>
<div class=" col-md-2">
<label class="form-label" for="inputZip">Zip</label>
<input type="text" class="form-control" id="inputZip">
</div>
</div>
<div class>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-label form-check-label" for="gridCheck">
Check me out
</label>
</div>
</div>
<button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include("footer.php");
  }

?>