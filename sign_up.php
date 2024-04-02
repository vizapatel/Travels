<?php
// Include the database connection file
include_once 'db_connection.php';

// Handle file upload - this part doesn't seem relevant to your form submission, so you may remove it if unnecessary

// Process form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into database using prepared statements to prevent SQL injection
    $sql = "INSERT INTO tabs (email, password) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        // Print alert prompt
        echo "<script>alert('SignUp successfully.')</script>";
        // Redirect to index.php
        echo "<script>window.location.href = 'signup.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
?>
