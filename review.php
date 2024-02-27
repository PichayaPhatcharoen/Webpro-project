<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="review.css">
    <title>Restaurant Reviews</title>
</head>

<body class="bg-reviewpage">
    <header>
        <div class="header">
            <div class="header flex justify-between ">
                <div class="header-left flex items-center gap-0 md:gap-10">
                    <a href="#profile" class="logo rounded-full object-cover flex items-center justify-center overflow-hidden" alt="logo"></a>
                    <a href="#default" class="webname">Fern n Friends café</a>
                </div>
                <div class="header-right flex items-center gap-0 md:gap-10">
                    <a href="#home">หน้าหลัก</a>
                    <a href="#cus_order">รายการคำสั่งซื้ออาหาร</a>
                    <a href="#about" class="cart-icon rounded-full"></a>
                </div>
            </div>
            <hr class="border-gray-400">
        </div>
    </header>


    <div  class="bg-reviewpage md:mx-auto mb-10">
        <h1 class="text-center pt-8 pb-8 text-xl">รีวิวร้านอาหาร</h1>
        <div class="justify-center items-center mx-20 my-50 ">
            <form action="submit_review.php" method="post" enctype="multipart/form-data">
                <input type="text" class="border border-gray-900 rounded my-5" name="name" placeholder="ชื่อของท่าน" required><br>
                <div class="relative bg-text-area px-8 py-8 rounded-lg">
                    <textarea name="reviewText" class="rounded  w-full h-full bg-text-area" placeholder="     ร้านนี้อาหารอร่อยม้าก !" rows="8" required></textarea><br>
                    
                    <div class="flex flex-row justify-between">
                    <label for="file-upload">
                        <img src="https://i.pinimg.com/originals/7e/49/d0/7e49d0a919ec3d258a1bad674707f243.png" class="custom-file-upload" alt="Upload Icon">
                    </label>
                        <input id="file-upload" type="file" name="photo" style="display: none;">
                        <button type="submit" class="bg-submitcomment text-white rounded-full px-4 py-2">โพสต์</button>  
                    </div>
                </div>

            </form>
        </div>

        
        <div id="reviews" class="container flex flex-col w-96 md:w-auto mx-auto">
            <?php
            $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');
            $stmt = $pdo->query('SELECT * FROM reviews ORDER BY id DESC');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="container py-10 ml-5">';
                echo '<strong>' . $row['name'] . '</strong><br>';
                echo '<p>' . $row['review_text'] . '</p>';
                if ($row['photo_url']) {
                    echo '<img src="' . $row['photo_url'] . '" class="rounded-lg border border-black my-8 max-w-fit h-auto" alt="' . $row['name'] . '">';
                }
                echo '</div>';
                echo '<hr class="border-gray-400">';
            }
            ?>
</div>

    </div>
</body>
</html>
