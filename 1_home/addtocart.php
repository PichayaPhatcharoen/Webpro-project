<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['item_id'], $_POST['tableNum'])) {
    $item_id = $_POST['item_id'];
    $tableNum = $_POST['tableNum'];
    $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');
    $cart_table = 'cart_' . $tableNum;
 
    if(isset($_POST['size'])) {
        $size = $_POST['size'];
        $stmt = $pdo->prepare("SELECT * FROM $cart_table WHERE item_id = :item_id AND size = :size");
        $executionResult = $stmt->execute(['item_id' => $item_id, 'size' => $size]);

        if ($executionResult === false) {
            var_dump($stmt->errorInfo());
        }
    } else {
        $stmt = $pdo->prepare("SELECT * FROM $cart_table WHERE item_id = :item_id AND size IS NULL");
        $executionResult = $stmt->execute(['item_id' => $item_id]);

        if ($executionResult === false) {
            var_dump($stmt->errorInfo());
        }
    }
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if($row) {
        $amount = $row['amount'] + 1;
        if(isset($_POST['size'])) {
            $stmt = $pdo->prepare("UPDATE $cart_table SET amount = :amount WHERE item_id = :item_id AND size = :size");
            $executionResult = $stmt->execute(['amount' => $amount, 'item_id' => $item_id, 'size' => $size]);

            if ($executionResult === false) {
                var_dump($stmt->errorInfo());
            }
        } else {
            $stmt = $pdo->prepare("UPDATE $cart_table SET amount = :amount WHERE item_id = :item_id AND size IS NULL");
            $executionResult = $stmt->execute(['amount' => $amount, 'item_id' => $item_id]);

            if ($executionResult === false) {
                var_dump($stmt->errorInfo());
            }
        }
    } else {
        if(isset($_POST['size'])) {
            $size = $_POST['size'];
            $stmt = $pdo->prepare("INSERT INTO $cart_table (item_id, size, amount) VALUES (:item_id, :size, 1)");
            $executionResult = $stmt->execute(['item_id' => $item_id, 'size' => $size]);

            if ($executionResult === false) {
                var_dump($stmt->errorInfo());
            }
        } else {
            $stmt = $pdo->prepare("INSERT INTO $cart_table (item_id, amount) VALUES (:item_id, 1)");
            $executionResult = $stmt->execute(['item_id' => $item_id]);

            if ($executionResult === false) {
                var_dump($stmt->errorInfo());
            }
        }
    }
 
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>