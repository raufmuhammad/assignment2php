<?php
include 'db.php';

// store registration message
$registrationMessage = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Hash password 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO assignment3 (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        //success message
        $registrationMessage = "Registered successfully! Please login";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My BMW Sales Page">
    <meta name="robots" content="noindex,nofollow">
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstarp stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Register an ac</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light newclr">
                <a class="navbar-brand" href="#">MY COMPANY</a>
                <div class="collapse navbar-collapse pad" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link " href="index.php">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="register.php">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>

    <div class="container" >
        <h2>Register here...</h2>

        <?php if (!empty($registrationMessage)) { ?>
            <!-- Display the registration message -->
            <p><?php echo $registrationMessage; ?></p>
        <?php } ?>

        <form action="register.php" method="post" class="new">

            <input type="text" name="username" required placeholder="Username"><br><br>

            <input type="password" name="password" required placeholder="password"><br><br>

            <input type="password" name="confirm_password" required placeholder="confirm_password" ><br><br>


            <input  class="butn" type="submit" value="Register">
            <p>Click to login <a href="index.php">Login</a></p>

        </form>

    </div>
            <!-- bootsrap script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>