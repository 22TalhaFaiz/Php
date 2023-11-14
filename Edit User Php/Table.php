<?php
include ("config.php");
$query = "Select *, u.id as user_id From users u join roles r on u.role_id = r.id";
$result = mysqli_query($conn,$query);

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </head>
 <body>
 <table class=" table table-bordered p-2 w-50 mx-auto mt-5 bg-dark text-light">
 <thead>
    <tr class="bg-light text-white">
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Role</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>


 </thead>
 <tbody>
    <?php
    while($data = mysqli_fetch_assoc ($result)){
   ?>
   <tr>
    <td><?php echo $data["user_name"]; ?></td>
    <td><?php echo $data["user_email"]; ?></td>
    <td><?php echo $data["user_address"]; ?></td>
    <td><?php echo $data["role_name"]; ?></td>
    <td><a href="edit.php?id=<?php echo $data["user_id"];?>">Edit</a>
    <td><a href="#"data-bs-toggle="modal" data-bs-target="#exampleModal"<?php echo $data["user_id"];?>">Delete</a>
    </td>
    
   </tr>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" >
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a type = "button" class="btn btn-danger" href="deleteuser.php?id=<?php echo $data["user_id"]?>">Delete</a>
      </div>
    </div>
  </div>
</div>


   <?php     
}
    ?>

 </tbody>
 </table>
 </body>
 </html>
