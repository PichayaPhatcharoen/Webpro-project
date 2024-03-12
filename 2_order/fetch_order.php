<?php
// poll_orders.php

// Include your database connection code
include '../conn';

$tableNum = isset($_GET['tableNum']) ? intval($_GET['tableNum']) : 1;
if ($tableNum < 1 || $tableNum > 6) {
    $tableNum = 1;
}
$stmt = $pdo->prepare("SELECT * FROM order_customer WHERE tableNum = :tableNum && ispaid = 'ยังไม่ได้ชำระ' ORDER BY order_datetime ASC");
$stmt->bindParam(':tableNum', $tableNum);
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($orders);
?>
