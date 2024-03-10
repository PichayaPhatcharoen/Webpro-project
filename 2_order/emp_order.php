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
                    <a href="../1_home/home_manager.php">
                        <img src="../1_home/elements/logo_1.png" alt="logo" class="rounded-full h-16 min-h-16 w-16 min-w-16 animate-pulse">
                    </a>
                    <p>Fern n Friends Cafe</p>
                </div>
                <div class="flex space-x-12">
                    <a href="../2_order/emp_order.php">
                        <p class="menuho">รายการคำสั่งซื้ออาหาร</p>
                    </a>
                    <a href="../1_home/home_manager.php">
                        <p class="menuho2">จัดการรายการอาหาร</p>
                    </a>
                </div>
            </div>
            <!-- <div class="flex justify-between ">
                <div class="header2-left flex items-center gap-0 md:gap-10 ">
                    <a href="#profile" class="logo rounded-full object-cover flex items-center justify-center overflow-hidden" alt="logo"></a>
                    <a href="#webname" class="webname">Fern n Friends café</a>
                </div>
                <div class="header2-right flex items-center gap-0 md:gap-10">
                    <a href="#order" class="menuho">รายการคำสั่งซื้ออาหาร</a>
                    <a href="#edit" class="menuho2">จัดการรายการอาหาร</a>
                </div>
            </div> -->
        </div>    
    </header>
    <div class="tableselect bg-status-done  flex flex-row justify-around py-6">
        <div ><a id="table1" href="">โต๊ะที่1</a></div>
        <div ><a id="table2" href="">โต๊ะที่2</a></div>
        <div ><a id="table3" href="">โต๊ะที่3</a></div>
        <div ><a id="table4" href="">โต๊ะที่4</a></div>
        <div ><a id="table5" href="">โต๊ะที่5</a></div>
        <div ><a id="table6" href="">โต๊ะที่6</a></div>
    </div>
    <div class="mx-auto max-w-screen-lg ml:auto mb-10">
        <h1 class="text-center pt-8 pb-8 text-xl">รายการคำสั่งซื้ออาหาร</h1>
        <div class="item_1 container flex justify-around lg:justify-between mb-10">
            <div>
                <div class="flex flex-col">
                    <div id="Item"><p class="font-bold text-xl">บานอฟฟี่</p></div>
                    <div id="price" class="text-md flex flex-row gap-12">
                        <p id="price" class="text-red-400">100 ฿</p>
                        <p id="amount" class="text-gray-500">x4</p>
                    </div>
                </div>
            </div>
            <div class="pl-4 pr-4 flex items-center justify-center bg-status-prep rounded-full w-32 sm:w-48">
                <div id="status">กำลังจัดเตรียมอาหาร...</div>
            </div>
        </div>
        <div class="item_2 container flex justify-around lg:justify-between mb-10">
            <div>
                <div class="flex flex-col">
                    <div id="Item"><p class="font-bold text-xl">เค้ก strawberry</p></div>
                    <div id="price amo" class="text-md flex flex-row gap-12">
                        <p id="price" class="text-red-400">100 ฿</p>
                        <p id="amount" class="text-gray-500">x4</p>
                    </div>
                </div>
            </div>
            <div class="pl-4 pr-4 flex items-center justify-center bg-status-done rounded-full w-32 sm:w-48">
                <div id="status">เตรียมอาหารเสร็จสิ้น</div>
            </div>
        </div>
        <footer class=" fixed bottom-0 left-0 right-0 p-4 flex justify-end items-center">
            <p class="mr-4">ยอดรวม: 800 ฿</p>
            <button onclick="showPopup()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">ชำระเงิน</button>
        </footer>
    
        <div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden" id="popup-overlay">
            <div class="bg-white rounded-lg p-20 shadow-lg">
                <!-- <p class="text-center mb-4">กรุณารอสักครู่ . . . </p> -->
                <button onclick="hidePopup()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">ยืนยัน</button>
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
