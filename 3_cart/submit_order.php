<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the tableNum and orders data from the POST request
    $tableNum = $_POST['tableNum'];
    $orders = json_decode($_POST['orders'], true);

    // Connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');

    // Insert the order into the order_customer table
    $stmt = $pdo->prepare("INSERT INTO order_customer (tableNum, menu_type, menu_name, size, amount, price, state, order_datetime, ispaid) VALUES (?, ?, ?, ?, ?, ?, 'กำลังจัดเตรียมอาหาร..', NOW(),'ยังไม่ได้ชำระ')");
    foreach ($orders as $order) {
        $stmt->execute([$tableNum, $order['menuType'], $order['menuName'], $order['size'], $order['amount'], $order['price']]);
    }

    // Clear the cart for the table
    $cart_table = 'cart_' . $tableNum;
    $stmt = $pdo->prepare("DELETE FROM $cart_table");
    $stmt->execute();

    // Return a success message
    echo "Order submitted successfully!";
} else {
    // Return an error message
    echo "Error: Invalid request";
}
?>
