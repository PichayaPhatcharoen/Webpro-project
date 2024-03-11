<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['item_id'], $_POST['tableNum'], $_POST['menutype'])) {
    $item_id = $_POST['item_id'];
    $tableNum = $_POST['tableNum'];
    $menutype = $_POST['menutype'];
    $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');
    $cart_table = 'cart_' . $tableNum;
    
    if(isset($_POST['size'])) {
        $size = $_POST['size'];
        $stmt = $pdo->prepare("SELECT * FROM $cart_table WHERE item_id = :item_id AND size = :size AND menutype = :menutype");
        $stmt->execute(['item_id' => $item_id, 'size' => $size, 'menutype' => $menutype ]);
    } else {
        $stmt = $pdo->prepare("SELECT * FROM $cart_table WHERE item_id = :item_id AND size IS NULL AND menutype = :menutype");
        $stmt->execute(['item_id' => $item_id, 'menutype' => $menutype]);
    }
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if($row) {
        $amount = $row['amount'] + 1;
        $stmt = $pdo->prepare("UPDATE $cart_table SET amount = :amount WHERE item_id = :item_id AND (size = :size OR size IS NULL) AND menutype = :menutype");
        $stmt->execute(['amount' => $amount, 'item_id' => $item_id, 'size' => $_POST['size'], 'menutype' => $menutype]);
    } else {
        if(isset($_POST['size'])) {
            $stmt = $pdo->prepare("INSERT INTO $cart_table (item_id, size, amount, menutype) VALUES (:item_id, :size, 1, :menutype)");
            $stmt->execute(['item_id' => $item_id, 'size' => $_POST['size'], 'menutype' => $menutype]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO $cart_table (item_id, amount, menutype) VALUES (:item_id, 1, :menutype)");
            $stmt->execute(['item_id' => $item_id, 'menutype' => $menutype]);
        }
    }
 
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>