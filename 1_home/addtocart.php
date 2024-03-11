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
    
    // Fetch the menu name based on item_id and menutype
    if($menutype === 'drink') {
        $stmt = $pdo->prepare("SELECT drink_name FROM drinks WHERE drink_id = :item_id");
    } else if($menutype === 'bakery') {
        $stmt = $pdo->prepare("SELECT bakery_name FROM bakery WHERE bakery_id = :item_id");
    }
    $stmt->execute(['item_id' => $item_id]);
    $menu_name_row = $stmt->fetch(PDO::FETCH_ASSOC);
    $menu_name = ($menu_name_row) ? $menu_name_row['drink_name'] ?? $menu_name_row['bakery_name'] : '';

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
        $stmt = $pdo->prepare("UPDATE $cart_table SET amount = :amount, menu_name = :menu_name WHERE item_id = :item_id AND (size = :size OR size IS NULL) AND menutype = :menutype");
        $stmt->execute(['amount' => $amount, 'item_id' => $item_id, 'size' => $_POST['size'], 'menutype' => $menutype, 'menu_name' => $menu_name]);
    } else {
        if(isset($_POST['size'])) {
            $stmt = $pdo->prepare("INSERT INTO $cart_table (item_id, size, amount, menutype, menu_name) VALUES (:item_id, :size, 1, :menutype, :menu_name)");
            $stmt->execute(['item_id' => $item_id, 'size' => $_POST['size'], 'menutype' => $menutype, 'menu_name' => $menu_name]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO $cart_table (item_id, amount, menutype, menu_name) VALUES (:item_id, 1, :menutype, :menu_name)");
            $stmt->execute(['item_id' => $item_id, 'menutype' => $menutype, 'menu_name' => $menu_name]);
        }
    }
 
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>
