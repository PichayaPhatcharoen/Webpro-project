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
    <header>
        <div class="header2 bg-cus-order">
            <div class="flex items-center justify-between w-full pr-6 pl-6 pt-2">
                <div class="flex space-x-6 items-center">
                    <a href="">
                        <img src="../1_home/elements/logo_1.png" alt="logo" class="rounded-full h-16 min-h-16 w-16 min-w-16 animate-pulse">
                    </a>
                    <p>Fern n Friends Cafe</p>
                </div>
            </div>
        </div>    
    </header>

    <h1 class="text-center pb-8 text-xl">รายการคำสั่งซื้ออาหาร</h1>

    <?php
    include '../conn.php';

    $stmt = $pdo->prepare("SELECT * FROM order_customer WHERE state = 'กำลังจัดเตรียมอาหาร..' ORDER BY order_datetime ASC");
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
                        <div><?php echo 'โต๊ะ' . $order['tableNum']; ?></div>
                        <div id="Item"><p class="font-bold text-xl"><?php echo $order['menu_name']; ?></p></div>
                        <div id="price" class="text-md grid grid-cols-2 justify-between">
                            <p id="price" class="text-red-400 text-left"><?php echo $order['price']; ?> ฿</p>
                            <p id="amount" class="text-gray-500 text-right">x<?php echo $order['amount']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button onclick="togglePopup(this)" data-order-id="<?php echo $order['order_id']; ?>" class="mx-4 md:mx-16 bg-status-prep py-4 px-1 text-center justify-center rounded-full w-32 sm:w-48">
                    เปลี่ยนสถานะอาหาร
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden" id="popup-overlay">
    <div class="bg-white rounded-lg p-20 flex flex-col shadow-lg">
        <div  class="text-center mb-4">ต้องการยืนยันการเปลี่ยนสถานะอาหารเป็น 'เตรียมอาหารเสร็จสิ้น' หรือไม่</div>
        <div class="flex flex-row justify-center items-center gap-4">
            <button id="confirm-btn" onclick="confirmstatechange()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">Yes</button>
            <button id="cancel-btn" onclick="closePopup()" class="bg-red-400 hover:bg-red-500 text-white py-2 px-8 rounded-full">No</button>
        </div>
    </div>
</div>
  
    <div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden" id="success">
        <div class="bg-white rounded-lg p-20 flex flex-col shadow-lg">
            <div  class="text-center mb-4">เปลี่ยนสถานะสำเร็จ !</div>
            <div class = "flex flex-row justify-center items-center gap-4">
                <button id="cancel-btn" onclick="toggleSuccess()" class="bg-red-400 hover:bg-red-500 text-white py-2 px-8 rounded-full">No</button>
            </div>
        </div>
    </div>

    <script>
        var orderId; 

        function togglePopup(elem) {
            orderId = elem.getAttribute('data-order-id'); // Save the order id
            document.getElementById('popup-overlay').classList.toggle('hidden');
        }

        function closePopup() {
            document.getElementById('popup-overlay').classList.add('hidden'); // Hide the popup
        }

        function confirmstatechange() {
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    closePopup();
                    location.reload(); // Refresh the page to update the order list
                }
            };

            xhr.open("POST", "update_order_state.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("order_id=" + orderId); // Send the saved order id
        }
    </script>

    
</body>

</html>
