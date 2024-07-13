<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["course"];
    $price = $_POST["price"];
    $quantity = $_POST["duration"];

    
    // Insert product into the database
    $sql = "INSERT INTO courses_enroll (course, price, duration) VALUES ('$name', '$price', '$quantity')";
    $result = $conn->query($sql);
}

$conn->close();
header("Location: dsboard.php");
