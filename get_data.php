<?php
// Replace these values with your database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "mytable";

// Create a connection to the database
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Execute the query and retrieve the results
$result = mysqli_query($connection, "SELECT * FROM mytable");

// Check if the query was successful
if (!$result) {
    echo "Error: " . mysqli_error($connection);
    mysqli_close($connection);
    exit();
}

// Convert the results to an array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Close the connection
mysqli_close($connection);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);

    ?>