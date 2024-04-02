<?php
// Include the database connection file
include_once 'db_connection.php';

// Handle file upload - this part doesn't seem relevant to your form submission, so you may remove it if unnecessary

// Process form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    
    $where_to = $_POST['where_to'];
    $how_many = $_POST['how_many'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];
    

    // Insert data into database using prepared statements to prevent SQL injection
    $sql = "INSERT INTO book (where_to,how_many,arrivals,leaving) VALUES (?, ?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $where_to, $how_many,$arrivals,$leaving);

    if ($stmt->execute()) {
        // Print alert prompt
        echo "<script>alert('Tickets are booked.')</script>";
        // Redirect to index.php
        echo "<script>window.location.href = 'main.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
?> 
