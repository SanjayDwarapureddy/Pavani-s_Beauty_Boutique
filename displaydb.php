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

// Fetch appointments data
$sql = "SELECT id, name, phone_number, service, schedule_date, address, created_at FROM appointments";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pavani's Beauty Boutique</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8a5c2;
            
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        
        
        .btn-primary {
            background-color: #e84393;
            border-color: #f78fb3;
        }
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: #f78fb3;
            border-color: #f78fb3;
        }
         .float-right {
            float: right;
        }
    
    </style>
</head>
<body>
    <div class="container">
        
        <h1 class="my-3 text-primary display-9">Pavani's Beauty Boutique Appointments List</h1><br>
         <a href="https://pavanisbeautyboutique.com" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4 text-white float-right">Back to Home</a>
        <br><br><table class="my-5">
            <tr>
                <th class="text-white">ID</th>
                <th class="text-white">Name</th>
                <th class="text-white">Phone Number</th>
                <th class="text-white">Service</th>
                <th class="text-white">Schedule Date</th>
                <th class="text-white">Address</th>
                <th class="text-white">Created At</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['phone_number']}</td>
                            <td>{$row['service']}</td>
                            <td>{$row['schedule_date']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['created_at']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No appointments found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
        
    </div>
</body>
</html>
