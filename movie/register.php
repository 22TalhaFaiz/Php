<?php
    include("header.php");
    include("config.php");
    $query = "SELECT * FROM roles";
    $result = mysqli_query($conn, $query);
?>

<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">

        <div class="section-header mt-5">
          <h2>Sign up!</h2>
          <p>Welcome to our website!</p>
        </div>

        <div class="row gx-lg-0 gy-4">
          <div class="col-lg-6 mx-auto">
            <form method="post" role="form" class="php-email-form1">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="user_name" class="form-control" id="name" placeholder="Your Username" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="user_email" id="email" placeholder="Enter Email" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="user_password" id="email" placeholder="Enter Password" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="number" class="form-control" name="age" id="email" placeholder="Enter Age" required>
                </div>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="hidden" class="form-control" name="role_id" value="2" required>
                </div>
              </div>
              
              <div class="text-center"><button type="submit" name="submit">Submit</button></div>
              <p class="mt-5 text-center">Already have an account? <a href="login.php">Login</a></p>
            </form>
          </div><!-- End Contact Form -->
        </div>

      </div>
    </section><!-- End Contact Section -->
</main>

<?php
    if(isset($_POST["submit"])){
      $name = $_POST['user_name'];
      $email = $_POST['user_email'];
      $password = $_POST['user_password'];
      $age = $_POST['age'];
      $role_id = $_POST['role_id'];

      $query = "Insert into users (user_name, user_email, user_password,  role_id, age) values ('$name','$email','$password','$role_id','$age')";

      $result = mysqli_query($conn, $query);
      echo "<script>location.href = 'login.php';</script>";
    }
    include("footer.php");
?>