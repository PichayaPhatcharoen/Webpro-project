<?php
include "../conn.php";

// Get selected year from the calendar
$selectedYear = isset($_GET['date']) ? date("Y", strtotime($_GET['date'])) : date("Y");

// Get monthly revenue summary for the selected year
$stmt = $pdo->prepare("SELECT YEAR(order_datetime) as year, MONTH(order_datetime) as month, SUM(price * amount) as totalRevenue FROM order_customer WHERE ispaid = 'ชำระแล้ว' AND YEAR(order_datetime) = :selectedYear GROUP BY YEAR(order_datetime), MONTH(order_datetime)");
$stmt->bindParam(':selectedYear', $selectedYear);
$stmt->execute();
$monthlyRevenue = $stmt->fetchAll(PDO::FETCH_ASSOC);

$selectedDate = isset($_GET['date']) ? $_GET['date'] : date("Y-m-d");

$stmt = $pdo->prepare("SELECT COUNT(*) as totalOrders FROM order_customer WHERE ispaid = 'ชำระแล้ว' AND DATE(order_datetime) = :selectedDate");
$stmt->bindParam(':selectedDate', $selectedDate);
$stmt->execute();
$totalOrders = $stmt->fetch(PDO::FETCH_ASSOC)["totalOrders"];

$stmt2 = $pdo->prepare("SELECT SUM(price * amount) as totalRevenue FROM order_customer WHERE ispaid = 'ชำระแล้ว' AND DATE(order_datetime) = :selectedDate");
$stmt2->bindParam(':selectedDate', $selectedDate);
$stmt2->execute();
$totalRevenue = $stmt2->fetch(PDO::FETCH_ASSOC)["totalRevenue"];

$totalNetRevenue = $totalRevenue;

$monthlyRevenueAllMonths = [];
for ($m = 1; $m <= 12; $m++) {
    $monthlyRevenueAllMonths[$m] = ['month' => $m, 'year' => $selectedYear, 'totalRevenue' => 0];
}

foreach ($monthlyRevenue as $row) {
    $monthlyRevenueAllMonths[$row['month']] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary of Sales</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="summarySales.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    <div class="head">
        <button id="arrow">
            <a href="home_manager.php" style="text-decoration:none; color: #000;">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h1 style="padding: 30px; margin: 0%;">สรุปยอดขาย</h1>
        </button>
    </div>
    <div class="box">
        <div class="date">
            <div id="dateselected">
                <p>ประจำวันที่ : <?php echo $selectedDate; ?></p>
            </div>
            <div id="xxx">
                <div id="calendar">
                    <form action="" method="GET">
                        <label for="cars">เลือกวันที่ : </label>
                        <input type="date" name="date" style="border-radius: 30px; border: none; background-color: #E2C2F3;" value="<?php echo $selectedDate; ?>">
                        <button type="submit" class="bg-blue-400 px-2 hover:bg-blue-500 text-white rounded-full">ยืนยัน</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="Summary">
            <div id="sbox">
                <p>จำนวนรายการคำสั่งซื้อ : <?php echo $totalOrders; ?></p>
                <p>รายได้ทั้งหมด : <?php echo $totalRevenue; ?> ฿</p>
                <p>รายได้สุทธิ : <?php echo $totalNetRevenue; ?> ฿</p>
            </div>
        </div>
        <h2 class="text-lg text-center font-semibold mt-10">สรุปยอดขายรายเดือน</h2>
        <div class="MonthlySummary flex justify-center items-center mt-8">
            <div class="overflow-x-auto">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">เดือน</th>
                            <th class="px-4 py-2">ปี</th>
                            <th class="px-4 py-2">รายได้</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($monthlyRevenueAllMonths as $row): ?>
                            <tr>
                                <td class="border px-4 py-2"><?php echo $row['month']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['year']; ?></td>
                                <td class="border px-4 py-2"><?php echo $row['totalRevenue']; ?> ฿</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
