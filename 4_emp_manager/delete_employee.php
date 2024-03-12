<?php
include "../conn.php";

if (isset($_POST['id'])) {
    $id = intval($_POST['id']); // Convert to integer to prevent SQL Injection

    // Prepare the SQL statement to delete employee data by ID
    $stmt = $pdo->prepare("DELETE FROM employee WHERE id = :id");
    $stmt->bindParam(':id', $id);

    $result = $stmt->execute();

    if ($result) {
        echo "ลบข้อมูลเรียบร้อยแล้ว";
    } else {
        echo "ไม่สามารถลบข้อมูลได้";
    }
}
?>
