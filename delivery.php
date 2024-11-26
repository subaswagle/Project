<?php
// Include database connection file
include 'db_connection.php'; // Make sure to include your DB connection details here

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $full_name = $_POST['full-name'];
    $phone_number = $_POST['phone-number'];
    $region = $_POST['region'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $address = $_POST['address'];
    $label = ""; // For the label (office/home)
    
    // Check which label is selected (home or office)
    if (isset($_POST['label']) && $_POST['label'] === 'office') {
        $label = 'OFFICE';
    } elseif (isset($_POST['label']) && $_POST['label'] === 'home') {
        $label = 'HOME';
    }

    // SQL query to insert data into the delivery_info table
    $sql = "INSERT INTO delivery_info (full_name, phone_number, region, city, area, address, label) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement to avoid SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $full_name, $phone_number, $region, $city, $area, $address, $label);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        echo "<script>alert('Delivery information saved successfully!'); window.location.href = 'payment.php';</script>";
    } else {
        echo "<script>alert('Error: Could not save data. Please try again.'); window.location.href = 'form.php';</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Information</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
     <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

.container {
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.label-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 10px;
}

.label-btn {
    padding: 10px 20px;
    border: 2px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.label-btn.office {
    border-color: #00bcd4;
    color: #00bcd4;
}

.label-btn.home {
    border-color: #f44336;
    color: #f44336;
}

.label-btn.active {
    background-color: #ddd;
}

.save-btn {
    width: 100%;
    padding: 10px;
    background-color: #00bcd4;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.save-btn:hover {
    background-color: #0097a7;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        width: 90%;
    }

    .label-buttons {
        flex-direction: column;
    }

    .label-btn {
        width: 100%;
        margin-bottom: 10px;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 24px;
    }

    .form-group input,
    .form-group select {
        font-size: 14px;
    }

    .save-btn {
        font-size: 14px;
    }
}

     </style>
</head>
<body>

    <div class="container">
        <h2>Delivery Information</h2>
        <form id="delivery-form" method="POST" action="delivery.php">
    <div class="form-group">
        <label for="full-name">Full name</label>
        <input type="text" id="full-name" name="full-name" placeholder="Enter your first and last name" required>
    </div>

    <div class="form-group">
        <label for="phone-number">Phone Number</label>
        <input type="text" id="phone-number" name="phone-number" placeholder="Please enter your phone number" required>
    </div>

    <div class="form-group">
        <label for="region">Province</label>
        <select id="region" name="region" required>
            <option value="">Please choose your Provice</option>
            <option value="region1">Bagmita Provice</option>
            <option value="region2">Gandaki Provice</option>
            <option value="region3">Karnali Provice</option>
            <option value="region4">Koshi Provice</option>
            <option value="region5">Lumbini Provice</option>
            <option value="region6">Madhesh Provice</option>
            <option value="region7">Sudurpashchim Provice</option>
        </select>
    </div>
    <div class="form-group">
    <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="Please enter your City" required>
    </div>
    <!-- <div class="form-group">
        <label for="city">City</label>
        <select id="city" name="city" required>
            <option value="">Please choose your city</option>
            <option value="city1">City 1</option>
            <option value="city2">City 2</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="area">Area</label>
        <select id="area" name="area" required>
            <option value="">Please choose your area</option>
            <option value="area1">Area 1</option>
            <option value="area2">Area 2</option>
        </select>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="House# 123, Street# 123, ABC Road" required>
    </div>

    <div class="form-group">
        <label>Select a label for effective delivery:</label>
        <div class="label-buttons">
            <button type="button" id="office-btn" class="label-btn office" onclick="selectLabel('office')">OFFICE</button>
            <button type="button" id="home-btn" class="label-btn home" onclick="selectLabel('home')">HOME</button>
        </div>
        <input type="hidden" id="label" name="label" value="">
    </div>

   <a href="payment.php"> <button type="submit" class="save-btn">SAVE</button></a>
</form>

    </div>

    <script>
        // Function to set label value
function selectLabel(label) {
    document.getElementById('label').value = label; // Set the hidden input value
    if (label === 'office') {
        document.getElementById('office-btn').classList.add('active');
        document.getElementById('home-btn').classList.remove('active');
    } else if (label === 'home') {
        document.getElementById('home-btn').classList.add('active');
        document.getElementById('office-btn').classList.remove('active');
    }
}

    </script>
</body>
</html>
