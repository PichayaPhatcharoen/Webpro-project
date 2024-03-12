<?php
include "../conn.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check if the drink_name parameter is set
if(isset($_POST['drink_name'])) {
    // Sanitize the input to prevent SQL injection
    $drink_name = htmlspecialchars($_POST['drink_name']);

    // Connect to the database

    // Prepare a SQL statement to delete the drink item
    $stmt = $pdo->prepare('DELETE FROM drinks WHERE drink_name = :drink_name');
    
    // Bind the drink_name parameter
    $stmt->bindParam(':drink_name', $drink_name);
    
    // Execute the statement
    if($stmt->execute()) {
        // Return a success message
        echo 'Drink item deleted successfully';
    } else {
        // Return an error message
        echo 'Failed to delete drink item';
    }
} else {
    // Return an error message if drink_name parameter is not set
    echo 'Invalid request';
}
?>
