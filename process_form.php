<?php
// Database connection
$servername = "localhost";
$username = "u116788698_pavani";
$password = "123Pbeauty";
$dbname = "u116788698_beautyboutique";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and sanitize it
$name = htmlspecialchars($_POST['name']);
$number = htmlspecialchars($_POST['number']);
$service = htmlspecialchars($_POST['service']);
$schedule_date = htmlspecialchars($_POST['schedule_date']);
$address = htmlspecialchars($_POST['address']);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO appointments (name, phone_number, service, schedule_date, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $number, $service, $schedule_date, $address);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>
            alert('Your appointment has been successfully scheduled. We will contact you shortly.');
            window.location.href='https://pavanisbeautyboutique.com/';
          </script>";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>

