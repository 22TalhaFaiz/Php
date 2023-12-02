<?php
session_start();

    include('config.php');

    if(isset($_POST['submit'])){

    
      $user_email = $_POST['user_email'];
      $user_password = $_POST['user_password'];

      $query = "SELECT * from users where user_email = '$user_email' AND user_password = '$user_password'";

      $result = mysqli_query($conn, $query);
      $data = mysqli_fetch_array($result);
      if(mysqli_num_rows($result) > 0){
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['user_name'] = $data['user_name'];
        echo "<script>location.href = 'index.php';</script>";
      }
      else{
          echo "<div class='alert alert-danger w-75 mt-5 mx-auto' role='alert'>
          Username or password is incorrect
        </div>";
      }
    
  }
  if(isset($_SESSION['user_id'])){
    echo "<script>location.href = 'index.php';</script>";
    
  }
  else{
?>
<link rel="icon" href="img/logo.png" type="image/png">

<link rel="stylesheet" href="css/bootstrap1.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="vendors/morris/morris.css">

<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style1.css" />
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
<main id="main">
    <!-- ======= login Section ======= -->
<section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="section-header text-center mt-5">
          <h2>Login</h2>
          <p></p>
        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-6 mx-auto">
            <form method="post" role="form" class="php-email-form1">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="email" name="user_email" class="form-control" id="name" placeholder="Your Username" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="user_password" id="email" placeholder="Enter Password" required>
                </div>
              </div>
              
              <div class="text-center"><button type="submit" name="submit">Login</button></div>
              <!-- <p class="mt-5 text-center">Don't have an account? <a href="logout.php">Logout</a></p> -->
            </form>
          </div><!-- End login Form -->
        </div>

      </div>
    </section><!-- End login Section -->
</main>

<?php 
}

?>
