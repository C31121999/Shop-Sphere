<?php
require 'includes/config.php';

if (!isset($_SESSION['email'])) {
    header('location: index.php');
    exit();
}

$user_id = $_SESSION['user_id'];

if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $update_query = "UPDATE users SET name='$name', contact='$contact', city='$city', address='$address' WHERE id='$user_id'";
    mysqli_query($con, $update_query);

    header("Location: profile.php");
    exit();
}

// Fetch current user info
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile | Shop Sphere</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container" style="margin-top:80px;">
        <h2><strong>Edit Profile</strong></h2>
        <hr>
        <form method="POST" action="">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label>Contact:</label>
                <input type="text" name="contact" class="form-control" value="<?php echo $row['contact']; ?>" required>
            </div>
            <div class="form-group">
                <label>City:</label>
                <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>" required>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <textarea name="address" class="form-control" required><?php echo $row['address']; ?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="profile.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>