<?php
// Top of your PHP file
error_reporting(E_ALL & ~E_NOTICE);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Try connecting to the database
    $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');

    $menuName = $_POST['menuName'];
    
    if($_POST['type'] === "bakery"){
        $destination = './menu/bakery/';
        $sql = "INSERT INTO bakery (bakery_name, bakery_picture_path, price) VALUES (?, ?, ?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$menuName, $destination.$menuName.'.png', $_POST['price']]);
    } else {
        $destination = './menu/drinks/';
        $sql = "INSERT INTO drinks (drink_name, drink_picture_path, price_small, price_med, price_large) VALUES (?, ?, ?, ?, ?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$menuName, $destination.$menuName.'.png', $_POST['priceS'],$_POST['priceM'],$_POST['priceL']]);
    }

    // move the uploaded file
    if(isset($_FILES['image'])){
        $errors = array();

        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp_path = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        // Two step process to get file extension
        $exploded = explode('.', $_FILES['image']['name']);
        $file_ext = strtolower(end($exploded));

        // checking the file extension
        $allowed_file_types = array("jpeg","jpg","png");

        if(in_array($file_ext,$allowed_file_types) === false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if(empty($errors) == true){
            move_uploaded_file($file_tmp_path, $destination.$menuName.".png");
        }else{
            print_r($errors);
            die();
        }
    }

    // Right before outputting your JSON response
    header("Content-Type: application/json; charset=UTF-8");
    echo json_encode(['message' => 'success']);
}
?>