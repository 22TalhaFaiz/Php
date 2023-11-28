<?php
    include("config.php");  
  $query = "SELECT * FROM products ";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-bordered p-2 w-50 mx-auto mt-5 bg-dark text-light">
        <thead>
            <tr class="bg-light text-dark">
                <th>Product_name</th>
                <th>Product_description</th>
                <th>Product_price</th>
                <th>Product_image</th>

            </tr>
        </thead>
        <tbody>
            <?php
                while($data = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $data["product_name"]; ?></td>
                    <td><?php echo $data["product_description"]; ?></td>
                    <td><?php echo $data["product_price"]; ?></td>
                    <td><?php echo $data["product_image"]; ?></td>

                </tr>
            <?php
                }
            ?>
            
        </tbody>
    </table>
</body>
</html>