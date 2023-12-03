<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{
    include("header.php");
    include("config.php");
    $query = "SELECT *,u.id as user_id FROM users  u join roles r on u.role_id = r.id";
    $result = mysqli_query($conn, $query);
?>

<section class="main_content dashboard_part large_header_bg">


<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Data table</h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Table</h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input type="text" placeholder="Search content here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form>
</div>
</div>
<div class="add_button ms-2">
<a href="adduser.php" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
</div>
</div>
</div>
<div class="QA_table mb_30">

<table class="table lms_table_active ">
<thead>
<tr>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Address</th>
<th scope="col">Role</th>
<th scope="col">Hospital id</th>
</tr>
</thead>
<tbody>
    <?php
        while($data = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $data["user_name"]; ?></td>
        <td><?php echo $data["user_email"]; ?></td>
        <td><?php echo $data["user_address"]; ?></td>
        <td><?php echo $data["role_name"]; ?></td>
        <td><?php echo $data["hospital_id"]; ?></td>

        <td><a href="#" class="status_btn">Active</a></td>
    </tr>
    <?php
        }
    ?>
<tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="col-12">
</div>
</div>
</div>
</div>

<?php 
    include("footer.php");
  }
?>