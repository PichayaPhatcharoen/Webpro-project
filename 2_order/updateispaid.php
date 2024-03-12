<?php
include "../conn.php";

if (isset($_POST['tableNum'])) {
    $tableNum = intval($_POST['tableNum']);
    $stmt = $pdo->prepare("UPDATE order_customer SET ispaid = 'ชำระแล้ว' WHERE tableNum = :tableNum AND ispaid = 'ยังไม่ได้ชำระ'");
    $stmt->bindParam(':tableNum', $tableNum);
    $stmt->execute();
    if($stmt->rowCount()) {
        echo json_encode("Success"); // Successfully updated the status
    } else {
        echo json_encode("Fail"); // Failed updating the status
    }
}
?> 