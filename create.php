<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $contactNumber = $_POST['contactNumber'];

    $sql = "INSERT INTO register (name, age, address, position, contactNumber) VALUES ('Jumila Magtahas', '20', 'Victorias City', 'Blocker', '09995524682')";


    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
