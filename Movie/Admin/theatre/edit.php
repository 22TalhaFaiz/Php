
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{

include("../config.php");
include("header.php");
$id = $_GET["editid"];
$query = "SELECT * FROM theater where id =  $id ";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theater</title>
  
</head>
<body>
    <form class="form w-100 mt-5 mx-auto p-3 bg-light rounded-2" action="editT.php" method="POST">
        <h1 class= "text-center display-5">Edit Theater</h1>
        <input type="hidden" value ="<?php echo $user["id"]?>" name ="id">
        <input value="<?php echo $user["Theater_Name"]?>" class="form-control p-1 mt-2" type="text" placeholder="Title " name="Theater_Name">
        <input value="<?php echo $user["Location"]?>" class="form-control p-1 mt-2" type="text" placeholder="Genre " name="Location">
        <input value="<?php echo $user["Capacity"]?>" class="form-control p-1 mt-2" type="text" placeholder="Release_Date " name="Capacity">
        <select id="inputState" class="form-control" name="Class">
        <option selected>Box</option>
        <option>Gold</option>
        <option>Platinum</option>
        </select>
        <input class="btn btn-dark w-100 mt-5" type="submit" name="submit">
    </form>

</body>
</html>

<?php
include("footer.php");
  }

?>