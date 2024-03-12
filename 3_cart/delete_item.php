<?php
include "../conn.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tableNum = isset($_POST['tableNum']) ? intval($_POST['tableNum']) : 1;
    $menuId = isset($_POST['menuId']) ? intval($_POST['menuId']) : 0;

    if ($tableNum < 1 || $tableNum > 6 || $menuId <= 0) {
        http_response_code(400);
        exit("Invalid table number or menu ID");
    }

    $cart_table = 'cart_' . $tableNum;
    $stmt = $pdo->prepare("DELETE FROM $cart_table WHERE id = :id");
    $stmt->bindParam(':id', $menuId, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        http_response_code(200);
        exit("Item deleted successfully");
    } else {
        http_response_code(500);
        exit("Error deleting item");
    }
}
?>
