<?php
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'index.php';</script>";
    
  }
  else{

    $id = $_GET["id"];
    include("config.php");
    include("header.php");
    $userQuery = "SELECT * FROM users where id = $id";
    $userData = mysqli_query($conn, $userQuery);
    $user = mysqli_fetch_array($userData);
    $query = "SELECT * FROM roles";
    $result = mysqli_query($conn, $query);
    
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
    
    <form class="pform w-50 mt-5 mx-auto p-3  rounded-2" action="edituser.php" method="POST" >
        <h1 class="text-center ">Edit User</h1>
        <input type="hidden" value="<?php echo $user["id"]?>" name="id"/>
        <input value="<?php echo $user["user_name"]?>"  placeholder="Enter username" class="form-control p-1 mt-2" type="text" name="user_name">
        <input value="<?php echo $user["user_email"]?>"  placeholder="Enter email" class="form-control p-1 mt-2" type="text" name="user_email">
        <input value="<?php echo $user["user_password"]?>"  placeholder="Enter password" class="form-control p-1 mt-2" type="password" name="user_password">
        <input value="<?php echo $user["user_address"]?>"  placeholder="Enter Address" class="form-control p-1 mt-2" type="text" name="user_address">
        <select type="hidden" name="role_id" id="" class="form-control mt-2" >
            <?php
                while($data = mysqli_fetch_assoc($result)){
            ?>
                <option value="<?php echo $data["id"]?>" <?php echo $user['role_id'] == $data["id"] ? "selected" : "" ?>><?php echo $data["role_name"]?></option>
            <?php
                }
            ?>
        </select>
        <div class="text-center  mt-5"><button class ="sbtn w-100" type="submit" name="submit">Submit</button></div>
        
    </form>
</body>
</html>

<?php
      include("footer.php");
            }

?>