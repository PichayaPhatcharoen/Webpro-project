<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"">
    <title>Home_customer</title>

    <!-- tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- icon > -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- font kanit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fahkwang:wght@200;400;500&family=Itim&family=Josefin+Sans&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Press+Start+2P&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100&family=Single+Day&family=Taviraj:wght@200;500&family=Ubuntu&family=Ubuntu+Mono&display=swap" rel="stylesheet">
</head>
<style>
    
    /* .move-up{
        position: relative;
        top: -35px; 
    } */
    html {
        scroll-behavior: smooth;
    }

    *{
        font-family: "Kanit", sans-serif;
        position: relative;
    }
    
    body{
        background-color: #FFFAF7;
    }
    img{
        z-index: 40;
    }

    .backkie{
        height: 600px;
    }

    .backspecial{
        background-color: #F9C7C6;
    }

    .eclipse1st{
        background-color: #FFB0B9;
        overflow:visible;
        border-radius: 50%;
        box-shadow: 0 7px 20px rgba(0, 0, 0, 0.4);
    }

    .eclipse2nd , .eclipse3nd{
        background-color: #FFD6B0;
        overflow:visible;
        border-radius: 80%;
        box-shadow: 0 7px 20px rgba(0, 0, 0, 0.4);
    }
    
    .cheese{
        top: -23%;
    }

    .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
    }

    .z00m{
        transition: transform 0.3s ease-in-out;
    }

    .z00m:hover{
        transform: scale(1.05);
    }

    .z00m2{
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    .z00m2:hover{
        transform: scale(0.9);
    }

    .shopping{
        color: #FF7686;
    }

    .choosie{
        height: 300px;
        background-color: #ADCEC3;
    }

    .title{
        background-color: #FFFAF7;
        padding: 40px;
        border-radius: 100%;
    }

    .backmenu{
        background-color: #2D2D2D;
    }

    .rose{
        background-color: #F9C7C6;
    }

    .rose2{
        background-color: #fb9594;
    }
    .rose2:hover{
        background-color: #f96766;
    }

    .purple{
        background-color: #D6BEDC;
    }

    .purple2{
        background-color: #ab89b4;
    }
    .purple2:hover{
        background-color: #9e77a8;
    }

    .yellow{
        background-color: #FFD6B0;
    }

    .yellow2{
        background-color: #ffb977;
    }
    .yellow2:hover{
        background-color: #ffa44e;
    }

    .pink{
        background-color: #ffbad0;
    }

    .pink2{
        background-color: #ff8cb0;
    }

    .pink2:hover{
        background-color: #ff7ea6;
    }

    .green{
        background-color: #ADCEC3;
    }

    .green2{
        background-color: #699c8b;
    }
    .green2:hover{
        background-color: #588576;
    }

    .bin, .cart{
        cursor: pointer;
    }

    .addmenu{
        top: 80%;
        left: 90%;
        z-index: 9999;
    }

    .menuho{
        color: #ff8cb0;
    }
    .menuho2:hover{
        text-decoration:underline;
    }

</style>
        

<body>
    <!-- navbar -->
    <nav>
        <div class="flex items-center justify-between w-full pr-6 pl-6 pt-2">
            <div class="flex space-x-6 items-center">
                <a href="./home_customer.php">
                    <img src="./elements/logo_1.png" alt="logo" class="rounded-full h-16 min-h-16 w-16 min-w-16 animate-pulse">
                </a>
                <p>Fern n Friends Cafe</p>
            </div>
            <div class="flex space-x-12">
                <a href="../2_order/cus_order.php">
                    <p class="menuho">รายการคำสั่งซื้ออาหาร</p>
                </a>
                <a href="../5_reviewpage/review.php">
                    <p class="menuho2">รีวิวอาหาร</p>
                </a>
                <a href="../3_cart/cart.php">
                    <span class="material-symbols-outlined shopping">
                        shopping_cart
                        </span>
                </a>
            </div>
        </div>
    </nav>

    <!-- topthree -->

    <div class="mx-10 md:mx-24">
        <div class="pt-4">
            <div>
                <p class="text-6xl font-medium">เมนู<br>พิเศษ !</p>
                <p class="backspecial w-44 text-center">สำหรับคนพิเศษแบบคุณ ~</p>
            </div>
        </div>

        <div class="flex flex-col mt-5 md:mt-0">
            <div class="flex flex-col items-center justify-center mb-20 md:mb-0">
                <div class="eclipse1st  px-16 max-h-50">
                    <a href="#one">
                        <img class="max-h-auto max-w-80 object-contain z00m ml-2 md:bottom-14 lg:bottom-24" src="./menu/bakery/ปังวิปครีมนุ่ม.png" alt="ปังครีมนุ่ม">
                    </a>
                </div>
                <p class="text-2xl font-medium text-center mt-5">ปังครีมนุ่ม</p>
            </div>
            
            
            <div class="flex flex-col md:flex-row justify-between gap10 ">
                
                <div class="flex flex-col items-center justify-center float-left max-h-60 max-w-80 mb-20 md:mb-0">
                    <div class="eclipse2nd  px-20 max-h-50">
                        <a href="#two">
                            <img class="max-h-70 max-w-80 object-contain z00m md:bottom-14 lg:bottom-24 " src="./menu/bakery/แพนเค้กฟูครีม.png" alt="แพนเค้กฟูครีม">
                        </a>
                    </div>
                    <p class="text-xl font-medium text-center mt-5">แพนเค้กฟูครีม</p>
                </div>
                
                <div class="flex flex-col items-center justify-center float-right mb-20 md:mb-0">
                    <div class="eclipse2nd px-20">
                        <a href="#three">
                            <img class="max-h-64 max-w-80 object-contain z00m md:bottom-14 lg:bottom-24" src="./menu/bakery/ช็อกโกบลูเบอร์รี่.png" alt="ช็อกโกบลูเบอร์รี่">
                        </a>
                    </div>
                    <p class="text-xl font-medium text-center mt-5">ช็อกโกบลูเบอร์รี่</p>
                </div>

            </div>
        </div>

    </div>


    <div class="text-xl text-center items-center pt-10">
        <a href="#choosie">
            <p>Menu<br></p>
            <span class="material-symbols-outlined animate-bounce">
                expand_more
            </span>
        </a>
    </div>

    <!-- choose -->
    <div class="choosie flex justify-around items-center" id="choosie">
        <div class="title">
            <a href="#dessert">
                <img class="w-28 z-50" src="./elements/dessert.png" alt="dessert">
            </a>
            <p class="absolute pt-12 pl-6 font-medium">ของหวาน</p>
        </div>
        <div class="title">
            <a href="#drinks">
                <img class="w-28 z-50" src="./elements/drinks.png" alt="drinks">
            </a>
            <p class="absolute pt-12 pl-6 font-medium">เครื่องดื่ม</p>
        </div>
    </div>

    <div id="stickyDiv" class="flex flex-col gap-5 fixed bottom-0 left-0 mb-10 ml-6 z-50">
        <a href="#dessert" class="z-50 green2 rounded-lg flex items-center justify-center text-center w-16 h-16 z-50 z00m2">
            <img class="w-12" src="./elements/dessert.png" alt="dessert">
        </a>
        <a href="#drinks" class="z-50 green2 rounded-lg flex items-center justify-center text-center w-16 h-16 z-50  z00m2">
            <img class="w-12" src="./elements/drinks.png" alt="drinks">
        </a>
    </div>
    
    <!-- menu dessert -->
    <div class="">
        <div class="flex justify-between">
            <div class="pt-16 pr-24 pl-24 pb-20 space-y-2" >
                <p class="text-6xl pt-8" id="dessert">เมนู<br></p>
                <p class="text-xl w-28 text-center backmenu text-white">ของหวาน</p>
            </div>
        </div>
        
    </div>


    <div class="mx-2 md:mx-24 flex items-center justify-center">  
        <div class="thebakery container  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3   gap-5 xl:gap-11">
        <?php
            $tableNum = $_GET['tableNum'];
            $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');
            $stmt = $pdo->query('SELECT * FROM bakery ORDER BY bakery_id DESC');
            $colors = array('pink', 'purple', 'yellow', 'green', 'rose');
            $colorsbin = array('pink2', 'purple2', 'yellow2', 'green2', 'rose2');
            $counter = 0;
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $bakery_id = $row['bakery_id'];
                $bakery_name = $row['bakery_name'];
                $bakery_picture_path = $row['bakery_picture_path'];
                $price = $row['price'];

                echo '<div class="' . $colors[$counter % count($colors)] . ' rounded-3xl grid grid-rows-2" id="item_' . $bakery_id . '">
                    <div class="flex justify-center h-48 md:h-64 lg:h-80 2-xl:96 pt-4 move-up">
                        <img class="z00m object-cover overflow-visible" src="' . $bakery_picture_path . '" alt="' . $bakery_name . '">
                    </div>
                    <div class="pt-10 text-center move-up">
                        <div class="h-full">
                            <p class="text-xl">' . $bakery_name . '</p>
                            <p class="text-xl">' . $price . ' ฿</p>
                        </div>
                    </div>
                    <div class="' . $colorsbin[$counter % count($colorsbin)] . ' rounded-full absolute bottom-0 right-0 p-3 mx-5 my-4 "> 
                        <button onclick="addbakerytocart('.$bakery_name.','.$tableNum.')"><img id="cart" class="w-9 cart" src="./elements/cart.png" alt="cart">
                    </div>
                </div>';
                $counter++;
            }
            
        ?>
        </div>
    </div>

    <!-- next -->


    <hr class="border border-gray-400 mx-28 mt-28">




    <!-- menu drinks -->

    <div>
        <div class="flex justify-between">
            <div class="pt-16 pr-24 pl-24 pb-20 space-y-2" >
                <p class="text-6xl pt-8" id="drinks">เมนู<br></p>
                <p class="text-xl w-32 text-center backmenu text-white">เครื่องดื่ม</p>
            </div>
        </div>
    </div>


    <div class="mx-2 md:mx-24 flex items-center justify-center">  
        <div class="thedrinks container  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3    xl:gap-11 gap-5">
            <?php
                $tableNum = $_GET['tableNum'];
                $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');
                $stmt = $pdo->query('SELECT * FROM drinks ORDER BY drink_id DESC');
                $colors = array('pink', 'purple', 'yellow', 'green', 'rose');
                $colorsbin = array('pink2', 'purple2', 'yellow2', 'green2', 'rose2');
                $counter = 0;
                
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $drink_id = $row['drink_id'];
                    $drink_name = $row['drink_name'];
                    $drink_picture_path = $row['drink_picture_path'];
                    $price_small = $row['price_small'];
                    $price_med = $row['price_med'];
                    $price_large = $row['price_large'];

                    echo '<div class="' . $colors[$counter % count($colors)] . ' rounded-3xl grid grid-rows-2" id="item_' . $drink_id . '">
                        <div class="flex justify-center h-48 md:h-64 lg:h-80 2-xl:96 pt-4 move-up">
                            <img class="z00m object-cover overflow-visible" src="' . $drink_picture_path . '" alt="' . $drink_name . '">
                        </div>
                        <div class="pt-10 text-center move-up">
                            <div class="h-full">
                                <p class="text-xl">' . $drink_name . '</p>
                                <p class="text-xl">S: ' . $price_small . ' ฿</p>
                                <p class="text-xl">M: ' . $price_med . ' ฿</p>
                                <p class="text-xl">L: ' . $price_large . ' ฿</p>
                            </div>
                        </div>
                        <div class="' . $colorsbin[$counter % count($colorsbin)] . ' rounded-full absolute bottom-0 right-0 p-3 mx-5 my-4 "> 
                            <button onclick="selectaddon('.$drink_name.','.$tableNum.')"><img id="cart" class="w-9 cart" src="./elements/cart.png" alt="cart"></button>
                        </div>
                    </div>';
                    $counter++;
                }
            ?>
        </div>

    </div>
    <script>
        function selectaddon(drink_name, tableNum) {
           
        }
        function addbakerytocart(bakery_name, tableNum){
            
        }
    </script>

    <!-- end -->

    <div class=" pt-36">
        <div class="backmenu w-full text-white text-center font-extralight"><p>Fern n Friend Cafe</p></div>
    </div>
    
</body>
</html>