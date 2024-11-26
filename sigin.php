<?php
// Include the database connection file
include 'db_connection.php'; // Ensure this file contains your DB connection logic

// Initialize message variable
$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain text password
    $birthMonth = $_POST['birth-month'];
    $birthDay = $_POST['birth-day'];
    $birthYear = $_POST['birth-year'];
    $gender = $_POST['gender'];

    // Prepare SQL to insert user data (without hashing password)
    $sql = "INSERT INTO users (first_name, last_name, email, password, birth_month, birth_day, birth_year, gender) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Prepare the statement to avoid SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssiis", $firstName, $lastName, $email, $password, $birthMonth, $birthDay, $birthYear, $gender);

    // Execute the query and check for errors
    if ($stmt->execute()) {
        // Success message
        $message = "Registration successful! You can now login.";
    } else {
        // Error message
        $message = "Error: " . $stmt->error;
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="sigin.css">
</head>
<body>
<?php include 'navbar.php' ?>
    <div class="container">
    <form class="signup-form" action="sigin.php" method="POST">
    <h2>Register</h2>
    <input type="text" name="first-name" placeholder="First name" required>
    <input type="text" name="last-name" placeholder="Last name" required>
    <input type="email" name="email" placeholder="Mobile number or email" required>
    <input type="password" name="password" placeholder="New password" required>
    <label for="birthday">Birthday</label>
    <div class="birthday">
        <select name="birth-month" required>
            <option value="">Month</option>
            <option value="Jan">Jan</option>
            <option value="Feb">Feb</option>
            <option value="Mar">Mar</option>
            <option value="Apr">Apr</option>
            <option value="May">May</option>
            <option value="Jun">Jun</option>
            <option value="Jul">Jul</option>
            <option value="Aug">Aug</option>
            <option value="Sep">Sep</option>
            <option value="Oct">Oct</option>
            <option value="Nov">Nov</option>
            <option value="Dec">Dec</option>
        </select>

        <select name="birth-day" required>
            <option value="">Day</option>
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?= $i; ?>"><?= $i; ?></option>
            <?php endfor; ?>
        </select>

        <select name="birth-year" required>
            <option value="">Year</option>
            <?php for ($year = date("Y"); $year >= 1900; $year--): ?>
                <option value="<?= $year; ?>"><?= $year; ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <label for="gender">Gender</label>
    <div class="gender">
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="custom" name="gender" value="custom" required>
        <label for="custom">Other</label>
    </div>
    <button type="submit">Sign Up</button>
</form>

    </div>
</body>
</html>