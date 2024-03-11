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
    $price = "";
    
    if($menutype === 'drink' && isset($_POST['size'])) {
        $size = $_POST['size'];
        $stmt = $pdo->prepare("SELECT drink_name FROM drinks WHERE drink_id = :item_id");
        
        if($size === 'small') {
            $priceStmt = $pdo->prepare("SELECT price_small FROM drinks WHERE drink_id = :item_id");
        } elseif($size === 'medium') {
            $priceStmt = $pdo->prepare("SELECT price_med FROM drinks WHERE drink_id = :item_id");
        } else { // size is large
            $priceStmt = $pdo->prepare("SELECT price_large FROM drinks WHERE drink_id = :item_id");
        }

        $stmt->execute(['item_id' => $item_id]);   
        $priceStmt->execute(['item_id' => $item_id]);
        $menu_name_row = $stmt->fetch(PDO::FETCH_ASSOC);
        $price_row = $priceStmt->fetch(PDO::FETCH_ASSOC);
        $menu_name = ($menu_name_row) ? $menu_name_row['drink_name'] ?? $menu_name_row['bakery_name'] : '';
        $price = array_shift($price_row);
    }elseif ($menutype === 'bakery') {
        $stmt = $pdo->prepare("SELECT bakery_name FROM bakery WHERE bakery_id = :item_id");
        $priceStmt = $pdo->prepare("SELECT price FROM bakery WHERE bakery_id = :item_id");
    
        $stmt->execute(['item_id' => $item_id]);
        $priceStmt->execute(['item_id' => $item_id]);
        $menu_name_row = $stmt->fetch(PDO::FETCH_ASSOC);
        $price_row = $priceStmt->fetch(PDO::FETCH_ASSOC);
        $menu_name = ($menu_name_row) ? $menu_name_row['bakery_name'] : '';
        $price = array_shift($price_row);
    
        $stmt = $pdo->prepare("SELECT * FROM $cart_table WHERE item_id = :item_id AND menutype = :menutype");
        $stmt->execute(['item_id' => $item_id, 'menutype' => $menutype]);
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row) {
        $amount = $row['amount'] + 1;
        $stmt = $pdo->prepare("UPDATE $cart_table SET amount = :amount, menu_name = :menu_name, price = :price WHERE item_id = :item_id AND (size = :size OR size IS NULL) AND menutype = :menutype");
        $stmt->execute(['amount' => $amount, 'item_id' => $item_id, 'size' => $_POST['size'], 'menutype' => $menutype, 'menu_name' => $menu_name, 'price' => $price]);

    }else {
        // Add a new item into the cart
        if($menutype === 'bakery') {
            $stmt = $pdo->prepare("INSERT INTO $cart_table (item_id, size, amount, menutype, menu_name, price) VALUES (:item_id, NULL, 1, :menutype, :menu_name, :price)");
            $stmt->execute(['item_id' => $item_id, 'menutype' => $menutype,'menu_name' => $menu_name,'price' => $price]);
        } else if($menutype === 'drink' && isset($_POST['size'])) {  // for 'drink' items
            $stmt = $pdo->prepare("INSERT INTO $cart_table (item_id, size, amount, menutype, menu_name, price) VALUES (:item_id, :size, 1, :menutype, :menu_name, :price)");
            $stmt->execute(['item_id' => $item_id, 'size' => $_POST['size'], 'menutype' => $menutype, 'menu_name' => $menu_name, 'price' => $price]);
        }
    }

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>