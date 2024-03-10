<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check if the bakery_name parameter is set
if(isset($_POST['bakery_name'])) {
    // Sanitize the input to prevent SQL injection
    $bakery_name = htmlspecialchars($_POST['bakery_name']);

    // Connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');

    // Prepare a SQL statement to delete the bakery item
    $stmt = $pdo->prepare('DELETE FROM bakery WHERE bakery_name = :bakery_name');
    
    // Bind the bakery_name parameter
    $stmt->bindParam(':bakery_name', $bakery_name);
    
    // Execute the statement
    if($stmt->execute()) {
        // Return a success message
        echo 'Bakery item deleted successfully';
    } else {
        // Return an error message
        echo 'Failed to delete bakery item';
    }
} else {
    // Return an error message if bakery_name parameter is not set
    echo 'Invalid request';
}
?>
