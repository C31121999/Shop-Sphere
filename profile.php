<?php
require 'includes/config.php';

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile | Shop Sphere</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <div class="container" style="margin-top:80px;">
        <h2><strong>My Profile</strong></h2>
        <hr>

        <?php
        $user_id = $_SESSION['user_id'];

        $query = "SELECT * FROM users WHERE id='$user_id'";
        $result = mysqli_query($con, $query);

        $row = mysqli_fetch_array($result);
        ?>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>User Information</h4>
                    </div>

                    <div class="panel-body">
                        <p><strong>Name :</strong> <?php echo $row['name']; ?></p>
                        <p><strong>Email :</strong> <?php echo $row['email']; ?></p>
                        <p><strong>Contact :</strong> <?php echo $row['contact']; ?></p>
                        <p><strong>City :</strong> <?php echo $row['city']; ?></p>
                        <p><strong>Address :</strong> <?php echo $row['address']; ?></p>
                        <br>
                        <br>
                        <a href="edit_profile.php" class="btn btn-success">Edit Profile</a>
                        <a href="settings.php" class="btn btn-primary"> Settings</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>