<?php
// Include the database connection
include 'db_connection.php';  // Assuming this contains the database connection logic

session_start(); // Start session to track logged-in user

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain text password

    // Prepare SQL query to check user credentials
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);  // Bind email and plain text password
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        
        // Set session variable with user's first name and redirect to body.php
        $_SESSION['user'] = $user['first_name'];
        echo "<script>alert('Login successful!'); window.location.href = 'body.php';</script>";
    } else {
        // Invalid credentials, show alert and redirect to login page
        echo "<script>alert('Invalid email or password. Please try again.'); window.location.href = 'login.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<?php include 'navbar.php' ?>
<body>
    <div class="switch ">
        <div class="form-box login">
            <h2 class="title" style="--i:0; --j:21">Login</h2>
            <form action="login.php" method="POST">
                <div class="input-box" style="--i:1; --j:22">
                <input type="email" name="email" required>
                <label for="">Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box " style="--i:2; --j:23">
                <input type="password" name="password" required>
                <label for="">Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <a href="">Forgot Password</a>
                <button type="submit" class="btn" style="--i:3; --j:24">Login</button>
                <div class="linkTxt " style="--i:5; --j:25">
                    <p>Don't have an account? <a href="sign.php" class="register-link">Sign Up</a></p>
                    <p></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
