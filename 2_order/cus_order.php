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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>ORDER</title>
</head>
<body>
    <nav>
        <div class="flex items-center justify-between w-full pr-6 pl-6 pt-2">
            <div class="flex space-x-6 items-center">
                <a href="../1_home/home_customer.php?tableNum=<?php echo $_GET['tableNum'] ?>">
                    <img src="../1_home/elements/logo_1.png" alt="logo" class="rounded-full h-16 min-h-16 w-16 min-w-16 animate-pulse">
                </a>
                <p>Fern n Friends Cafe</p>
            </div>
            <div class="flex space-x-12">
                <a href="">
                    <p class="menuho">รายการคำสั่งซื้ออาหาร</p>
                </a>
                <a href="../5_reviewpage/review.php?tableNum=<?php echo $_GET['tableNum'] ?>">
                    <p class="menuho2">รีวิวอาหาร</p>
                </a>
                <a href="../3_cart/cart.php?tableNum=<?php echo $_GET['tableNum'] ?>">
                    <span class="material-symbols-outlined shopping">
                        shopping_cart
                        </span>
                </a>
            </div>
        </div>
    </nav>

    <h1 class="text-center pt-8 pb-8 text-xl">รายการคำสั่งซื้ออาหาร</h1>
    <div class="grid grid-rows-2 justify-around gap-3">

        <div class="item_1  grid grid-cols-2  mb-10">
            <div class="">
                <div class="flex flex-col mx-16">
                    <div id="Item"><p class="font-bold text-xl">บานอฟฟี่</p></div>
                    <div id="price" class="text-md flex flex-row gap-12">
                        <p id="price" class="text-red-400">100 ฿</p>
                        <p id="amount" class="text-gray-500">x4</p>
                    </div>
                </div>
            </div>
            <div id="status" class="mx-16 pr-4 flex items-center justify-center bg-status-prep rounded-full w-32 sm:w-48">
                <div class="pl-4">กำลังจัดเตรียมอาหาร..</div>
            </div>
        </div>
        <div class="item_1  grid grid-cols-2  mb-10">
            <div class="">
                <div class="flex flex-col mx-16">
                    <div id="Item"><p class="font-bold text-xl">บานอฟฟี่</p></div>
                    <div id="price" class="text-md flex flex-row gap-12">
                        <p id="price" class="text-red-400">100 ฿</p>
                        <p id="amount" class="text-gray-500">x4</p>
                    </div>
                </div>
            </div>
            <div id="status" class="mx-16 pr-4 flex items-center justify-center bg-status-prep rounded-full w-32 sm:w-48">
                <div class="pl-4">กำลังจัดเตรียมอาหาร..</div>
            </div>
        </div>
        
    
    </div>

    <div class="my-20 mx-4 flex flex-row items-center justify-end">
        <div>
            <p class="mr-4">ยอดรวม: ฿</p>
        </div>
        <button onclick="showPopup()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">ชำระเงิน</button>
    </div>


    <!-- <div class="my-20 mr-14 flex gap-8 flex- row items-center justify-end" >
      <div class="">ราคารวม : <span id="sub-total"><?php echo $totalprice?></span> ฿</div>
      <button onclick="cartemptycheck()" class="btn w-32 bg-pink-200 rounded-2xl p-2">ยืนยัน</button>
    </div> -->


    <div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden" id="popup-overlay">
        <div class="bg-white rounded-lg p-20 shadow-lg">
            <p class="text-center mb-4">กรุณารอสักครู่ . . . </p>
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