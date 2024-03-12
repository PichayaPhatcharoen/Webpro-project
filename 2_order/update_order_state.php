<?php
include '../conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['order_id'])) {
    $orderId = $_POST['order_id'];

    $stmt = $pdo->prepare("UPDATE order_customer SET state = 'เตรียมอาหารเสร็จสิ้น' WHERE order_id = :order_id");
    $stmt->bindParam(':order_id', $orderId);
    $stmt->execute();

    // Return success response
    http_response_code(200);
    echo json_encode(array("message" => "Order state updated successfully."));
} else {
    // Return error response
    http_response_code(400);
    echo json_encode(array("message" => "Invalid request."));
}
?>
