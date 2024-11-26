<?php
// Include the database connection file
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $cardNumber = $_POST['card-number'];
    $cvv = $_POST['cvv'];
    $nameOnCard = $_POST['name'];
    $amount = $_POST['amount'];

    // Basic validation (ensure all fields are filled and valid)
    if (!empty($cardNumber) && !empty($cvv) && !empty($nameOnCard) && !empty($amount)) {
        // Insert payment information into the database
        $sql = "INSERT INTO payments (card_number, cvv, name_on_card, amount) VALUES (?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssd", $cardNumber, $cvv, $nameOnCard, $amount);  // 'd' for decimal (amount)
        
        if ($stmt->execute()) {
            echo "<script>alert('Delivery information saved successfully!'); window.location.href = 'body.php';</script>";

        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Please fill in all required fields.";
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.payment-container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

h1 {
    margin-bottom: 20px;
    font-size: 28px;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

.form-group input::placeholder {
    color: #999;
}

button {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 15px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    width: 100%;
}

button:hover {
    background-color: #45a049;
}

@media (max-width: 600px) {
    .payment-container {
        padding: 20px;
    }

    h1 {
        font-size: 24px;
    }

    button {
        padding: 12px;
        font-size: 16px;
    }
}

    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="payment-container">
        <h1>Payment Information</h1>
        <form id="payment-form" action="payment.php" method="POST">
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456" required>
            </div>
           
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123" required>
            </div>
            <div class="form-group">
                <label for="name">Name on Card</label>
                <input type="text" id="name" name="name" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" id="amount" name="amount" placeholder="100" required>
            </div>
            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>
</html>
