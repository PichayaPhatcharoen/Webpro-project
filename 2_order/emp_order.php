<?php include "../conn.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="orders.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>CUSTOMER_ORDER</title>
</head>
<body class="bg-cus-order">
    <nav>
        <div class="flex items-center justify-between w-full pr-6 pl-6 pt-2">
            <div class="flex space-x-6 items-center">
                <a href="">
                    <img src="../1_home/elements/logo_1.png" alt="logo" class="rounded-full h-16 min-h-16 w-16 min-w-16 animate-pulse">
                </a>
                <p>Fern n Friends Cafe</p>
            </div>
            <div class="flex space-x-12">
                <a href="../1_home/home_employee.php">
                    <p class="menuho2">หน้าหลัก</p>
                </a>
                <a href="">
                    <p class="menuho">รายการคำสั่งซื้ออาหาร</p>
                </a>
            </div>
        </div>
        </nav>
    <?php $tableNum = isset($_GET['tableNum']) ? intval($_GET['tableNum']) : 1;
    if ($tableNum < 1 || $tableNum > 6) {
        $tableNum = 1;
    }?>
    <div class="tableselect bg-status-done flex flex-row justify-around mt-4 py-6">
        <div><a id="table1" href="?tableNum=1" <?php if($tableNum == 1) echo 'class="underline"'; ?>>โต๊ะที่1</a></div>
        <div><a id="table2" href="?tableNum=2" <?php if($tableNum == 2) echo 'class="underline"'; ?>>โต๊ะที่2</a></div>
        <div><a id="table3" href="?tableNum=3" <?php if($tableNum == 3) echo 'class="underline"'; ?>>โต๊ะที่3</a></div>
        <div><a id="table4" href="?tableNum=4" <?php if($tableNum == 4) echo 'class="underline"'; ?>>โต๊ะที่4</a></div>
        <div><a id="table5" href="?tableNum=5" <?php if($tableNum == 5) echo 'class="underline"'; ?>>โต๊ะที่5</a></div>
        <div><a id="table6" href="?tableNum=6" <?php if($tableNum == 6) echo 'class="underline"'; ?>>โต๊ะที่6</a></div>
    </div>

    <h1 class="text-center pt-8 pb-8 text-xl">รายการคำสั่งซื้ออาหาร</h1>

    <?php  
    $stmt = $pdo->prepare("SELECT * FROM order_customer WHERE tableNum = :tableNum && ispaid = 'ยังไม่ได้ชำระ' ORDER BY order_datetime ASC");
    $stmt->bindParam(':tableNum', $tableNum);
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total_price = 0;
    ?>

    <div class="grid grid-rows-2 justify-around gap-3">
        <?php foreach ($orders as $order): 
            $total_price += $order['price'] * $order['amount'];
            ?>
            <div class="item_1  grid grid-cols-2  mb-10">
                <div class="">
                    <div class="flex flex-col mx-16">
                        <div id="Item"><p class="font-bold text-xl"><?php echo $order['menu_name']; ?></p></div>
                        <div id="price" class="text-md grid grid-cols-2 justify-between">
                            <p id="price" class="text-red-400 text-left"><?php echo $order['price']; ?> ฿</p>
                            <p id="amount" class="text-gray-500 text-right">x<?php echo $order['amount']; ?></p>
                        </div>
                    </div>
                </div>
                <div id="status" class="mx-16 pr-4 flex items-center justify-center <?php echo $order['state'] == 'เตรียมอาหารเสร็จสิ้น' ? 'bg-status-done' : 'bg-status-prep' ?> rounded-full w-32 sm:w-48">
                    <div class="pl-4"><?php echo $order['state']; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="my-20 mx-4 flex flex-row items-center justify-end">
    <div>
        <p class="mr-4">ยอดรวม: <?php echo $total_price; ?>฿</p>
    </div>
    <button onclick="ShowConfirm()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">ชำระเงิน</button>
    </div>

    
    <div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden" id="popup-overlay">
        <div class="bg-white rounded-lg p-20 shadow-lg">
            <button onclick="hidePopup()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">ยืนยัน</button>
        </div>
    </div>
    <script>
        function showPopup() {
            document.getElementById("popup-overlay").classList.remove("hidden");
        }

        function hidePopup() {
            document.getElementById("popup-overlay").classList.add("hidden");
        }
        
    </script>
</body>

</html>
