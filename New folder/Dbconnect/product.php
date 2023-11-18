<?php
include("config.php");
$query = "select * from roles";
$result = mysqli_query($conn, $query);
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
    <form class="form w-50 mt-5 mx-auto p-3 bg-light rounded-2" action="adduser.php" method="GET">
        <h1 class= "text-center display-5">Add User</h1>
        <input class="form-control p-1 mt-2" type="text" placeholder="Enter UserName " name="user_name">
        <input class="form-control p-1 mt-2" type="text" placeholder="Enter Email " name="user_email">
        <input class="form-control p-1 mt-2" type="text" placeholder="Enter Password " name="user_password">
        <input class="form-control p-1 mt-2" type="text" placeholder="Enter Address" name="user_address">
<select name="role_id" id="" class="form-control">
    <?php
    while($data = mysqli_fetch_assoc($result)){
     ?>
     <option value ="<?php echo $data["id"]?>"><?php echo $data["role_name"]?></option>
     <?php   
    }
    ?>
</select>

        <input class="btn btn-warning w-100 mt-5" type="submit" name="submit">
    </form>

</body>
</html>