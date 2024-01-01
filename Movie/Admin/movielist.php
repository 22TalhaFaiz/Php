<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{
    include("header.php");
    include("config.php");
    $query = "SELECT * from movies";
    $result = mysqli_query($conn, $query);
?>


</div>

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
<a href="addMovie.php" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
</div>
</div>
</div>
<div class="QA_table mb_30">

<table class="table lms_table_active ">
<thead>
<tr>
<th scope="col">Title</th>
<th scope="col">Poster</th>
<th scope="col">Genre</th>
<th scope="col">Release_Date</th>
<th scope="col">Description</th>
<th scope="col">Rating</th>
<th scope="col">Edit</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>
    <?php
        while($data = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $data["title"]; ?></td>
        <td><?php echo $data["Poster"]; ?></td>
        <td><?php echo $data["Genre"]; ?></td>
        <td><?php echo $data["Release_Date"]; ?></td>
        <td><?php echo $data["Description"]; ?></td>
        <td><?php echo $data["Rating"]; ?></td>
        <td><a href="edit.php?editid=<?php echo $data["id"]; ?>"><i class="fa fa-pen" style="color:green;"></i></a></td>
        <td><a href="delete.php?id=<?php echo $data["id"]; ?>"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a></td>
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