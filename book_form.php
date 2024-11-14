<?php 
$connection = mysqli_connect('localhost', 'root', '', 'travel_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";
    
    if (mysqli_query($connection, $request)) {
        // Store the last inserted ID in the session
        session_start();
        $_SESSION['order_id'] = mysqli_insert_id($connection);
        header('location: view_order.php'); // Redirect to the view order page
        exit();
    } else {
        echo 'Something went wrong, please try again';
    }
}
?>
