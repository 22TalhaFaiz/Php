<?php
include("config.php");
$id = $_GET["id"];
$query = "Select * from products where id = $id";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <form class="form w-50 mt-5 mx-auto p-3 bg-light rounded-2" action="editp.php" method="POST">
        <h1 class= "text-center display-5">Edit Product</h1>
        <input type="hidden" value ="<?php echo $user["id"]?>" name ="id">
        <input value="<?php echo $user["product_name"]?>" class="form-control p-1 mt-2" type="text" placeholder="Enter UserName " name="product_name">
        <input value="<?php echo $user["product_description"]?>" class="form-control p-1 mt-2" type="text" placeholder="Enter Email " name="product_description">
        <input value="<?php echo $user["product_price"]?>" class="form-control p-1 mt-2" type="text" placeholder="Enter Password " name="product_price">
        <input value="<?php echo $user["product_image"]?>" class="form-control p-1 mt-2" type="text" placeholder="Enter Address" name="product_image">
        

        <input class="btn btn-warning w-100 mt-5" type="submit" name="submit">
    </form>

</body>
</html>