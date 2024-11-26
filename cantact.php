<?php
// db_connect.php: Include your database connection file
include 'db_connection.php';  // Make sure this file contains the correct database connection code

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://cdnjs.clo udflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<title>Contact Section</title>
<link rel="stylesheet" href="cantact.css">
</head>
<body>
<?php include 'navbar.php' ?>
  <!-- <div><h1 class="row"> Contact </h1></div> -->
    <div class="contact-section">
        <div class="contact-info">
            <div class="info-box">
                <p><i class="fas fa-phone-alt"></i> PHONE</p>
                <span>9844125699</span>
            </div>
            <div class="info-box">
                <p><i class="fas fa-envelope"></i> EMAIL</p>
                <span>subashwagle5699@gmail.com</span>
            </div>
            <div class="info-box">
                <p><i class="fas fa-map-marker-alt"></i> ADDRESS</p>
                <span>Naubahani Gaupalika-8 Luplung, Pyuthan Nepal</span>
            </div>
        </div>
        <form class="contact-form" action="cantact.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="tel" name="phone" placeholder="Phone" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <div class="message">
        <button type="submit">Message</button>
    </div>
</form>

    </div>

    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- location  -->
    <div class="offices">
        <h1>Our Offices</h1>
        <div class="office-locations">
            <div class="office">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.5328023802244!2d82.86415897461289!3d28.170429775920226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3997cb000fae4d0b%3A0x940940f3de2ae58d!2sLuplung!5e1!3m2!1sen!2snp!4v1727428106353!5m2!1sen!2snp"
                     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p><strong>Hamro Store</strong>
                <br>Naubahani Gaupalika-8 Luplung, Pyuthan Nepal</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
    </body>
    </html>