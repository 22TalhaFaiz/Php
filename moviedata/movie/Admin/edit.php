
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{

include("config.php");
include("header.php");
$query = "SELECT * FROM movies";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    <form class="form w-100 mt-5 mx-auto p-3 bg-light rounded-2" action="editm.php" method="POST">
        <h1 class= "text-center display-5">Edit Product</h1>
        <input type="hidden" value ="<?php echo $user["id"]?>" name ="id">
        <input value="<?php echo $user["title"]?>" class="form-control p-1 mt-2" type="text" placeholder="Title " name="title">
        <input value="<?php echo $user["Genre"]?>" class="form-control p-1 mt-2" type="text" placeholder="Genre " name="Genre">
        <input value="<?php echo $user["Release_Date"]?>" class="form-control p-1 mt-2" type="text" placeholder="Release_Date " name="Release_Date">
        <input value="<?php echo $user["Description"]?>" class="form-control p-1 mt-2" type="text" placeholder="Description" name="Description">
        <input value="<?php echo $user["Rating"]?>" class="form-control p-1 mt-2" type="text" placeholder="Rating" name="Rating" >
        <input value="<?php echo $user["Poster"]?>" class="form-control p-1 mt-2" type="file" placeholder="Poster" name="imag">
        <input class="btn btn-dark w-100 mt-5" type="submit" name="submit">
    </form>

</body>
</html>

<?php
include("footer.php");
  }

?>