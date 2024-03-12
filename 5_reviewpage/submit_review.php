<?php
    $tableNum = $_GET['tableNum'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $reviewText = $_POST['reviewText'];
    $photoUrl = null;

    if ($_FILES['photo']['name']) {
        $targetDir = 'uploads/';
        $photoName = basename($_FILES['photo']['name']);
        $targetFilePath = $targetDir . $photoName;

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath)) {
            $photoUrl = $targetFilePath;
        }
    }

    $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');
    $stmt = $pdo->prepare('INSERT INTO reviews (name, review_text, photo_url) VALUES (?, ?, ?)');
    $stmt->execute([$name, $reviewText, $photoUrl]);

    header('Location: review.php?tableNum=' . $tableNum);

    exit();
}
?>
