
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{


include("config.php");
include("header.php");
// Fetch hospitals
$query_hospitals = "SELECT * FROM hospital";
$result_hospitals = mysqli_query($conn, $query_hospitals);

// Fetch roles
$query_roles = "SELECT * FROM roles";
$result_roles = mysqli_query($conn, $query_roles);
?>
<section class="main_content dashboard_part large_header_bg">


<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0"> Add Hospital </h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="card-body">
<form class="form" action="hospital.php" method="POST" >
<div class="row mb-3">
<div class="col-md-6">
<label class="form-label" for="inputEmail4">Name</label>
<input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="user_name" autocomplete="false">
</div>
<div class="col-md-6">
<label class="form-label" for="inputEmail4">Email</label>
<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="user_email" autocomplete="false">
</div>
<div class=" col-md-6">
<label class="form-label" for="inputPassword4">Password</label>
<input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="user_password" autocomplete="false">
</div>
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress">Address</label>
<input type="address" class="form-control" id="inputAddress" placeholder="Address" name="user_address" autocomplete="false">
</div>

<div class="col-md-4">
<label class="form-label" for="inputState">Hospital </label>
<select name="hospital_id" id="" class="form-control">
    <?php
    while ($data_hospital = mysqli_fetch_assoc($result_hospitals)) {
    ?>
        <option value="<?php echo $data_hospital["id"] ?>"><?php echo $data_hospital["hospital_name"] ?></option>
    <?php
    }
    ?>
</select>
</div>
<div class="col-md-4">
<label class="form-label" for="inputState">Role</label>
<select name="role_id" id="" class="form-control">
    <?php
    while ($data_role = mysqli_fetch_assoc($result_roles)) {
    ?>
        <option value="<?php echo $data_role["id"] ?>"><?php echo $data_role["role_name"] ?></option>
    <?php
    }
    ?>
</select>
</div>
  </div>
<button type="submit" class="btn btn-primary mx-3">Add</button>
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