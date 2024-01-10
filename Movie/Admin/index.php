<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{

include("config.php");
include("header.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - User Statistics</title>
    <!-- Your CSS styles -->
    <style>
        /* Basic card styles */
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Card header style */
        .card-header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Card content style */
        .card-content {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Welcome Admin!</h1>
    
    <div class="card">
        <div class="card-header">User Statistics</div>
        <div class="card-content">
        <?php
            // Query to fetch the count of registered users
            $query = "SELECT COUNT(*) as user_count FROM users";
            $result = mysqli_query($conn, $query);
            
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $userCount = $row['user_count'];
                echo "<p>Number of registered users: $userCount</p>";
            } else {
                echo "Error fetching user count: " . mysqli_error($conn);
            }
        ?>
        </div>
    </div>

    
    
</body>
</html>



<?php
  
}
?>