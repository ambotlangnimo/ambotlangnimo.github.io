<?php
// Include the database connection file
include("db-connect.php");

// Check if the form is submitted
if(isset($_POST['username'], $_POST['password'])){
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the input
    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
        exit;
    }

    // Prepare the SQL statement to insert the user
    $stmt = $conn->prepare("INSERT INTO `roblox`(`Username`, `Password`) VALUES (?, ?)");

    // Bind parameters
    $stmt->bind_param("ss", $username, $password);

    // Execute the prepared statement
    if($stmt->execute()){
        // Redirect the user to the about.php page
        header("Location: about.php");
        exit;
    } else {
        // If there was an error executing the query, display an error message
        echo "Error occurred: ". $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
