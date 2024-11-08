<?php
include('config.php');

$result = $conn->query("SELECT * FROM players");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . " - Address: " . $row["address"] . " - Position: " . $row["position"] . " - Contact Number: " . $row["contactNumber"] . "<br>";
    }
} else {
    echo "No players registered.";
}

$conn->close();
?>
