<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'travel_db');

// Check if the user has just submitted a booking
if (!isset($_SESSION['order_id'])) {
    header('Location: book.php'); // If no booking, redirect back to the booking page
    exit();
}

$order_id = $_SESSION['order_id'];

// Fetch booking details from the database
$sql = "SELECT * FROM book_form WHERE id = '$order_id'";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $order = mysqli_fetch_assoc($result);
} else {
    echo "Order not found!";
    exit();
}

// Optionally, unset the order_id to avoid accidental re-visits
unset($_SESSION['order_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Booking Details</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="order-details">
        <h1 class="heading-title">Your Booking Details</h1>

        <div class="order-box">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($order['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($order['phone']); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($order['address']); ?></p>
            <p><strong>Destination:</strong> <?php echo htmlspecialchars($order['location']); ?></p>
            <p><strong>Number of Guests:</strong> <?php echo htmlspecialchars($order['guests']); ?></p>
            <p><strong>Arrival Date:</strong> <?php echo htmlspecialchars($order['arrivals']); ?></p>
            <p><strong>Leaving Date:</strong> <?php echo htmlspecialchars($order['leaving']); ?></p>
        </div>

        <a href="book.php" class="btn">Back to Booking</a>
        <a href="home.php" class="btn">Back to Home</a>
    </section>
</body>
</html>
