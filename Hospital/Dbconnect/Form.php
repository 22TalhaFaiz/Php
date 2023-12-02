<!-- GET, POST  -->

<?php
    include("config.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <form class="form w-50 mt-5 mx-auto p-3 bg-light rounded-2" action="adduser.php" method="POST">
        <h1 class="text-center display-5">Add User</h1>
        <input placeholder="Enter username" class="form-control p-1 mt-2" type="text" name="user_name">
        <input placeholder="Enter email" class="form-control p-1 mt-2" type="text" name="user_email">
        <input placeholder="Enter password" class="form-control p-1 mt-2" type="password" name="user_password">
        <input placeholder="Enter Address" class="form-control p-1 mt-2" type="text" name="user_address">
        <select name="role_id" id="" class="form-control mt-2">
            <?php
                while($data = mysqli_fetch_assoc($result)){
            ?>
                <option value="<?php echo $data["id"]?>"><?php echo $data["role_name"]?></option>
            <?php
                }
            ?>
        </select>
        <input class="btn btn-warning w-100 mt-5" type="submit" name="submit">
    </form>
</body>
</html>
