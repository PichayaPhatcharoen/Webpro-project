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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Restaurant Reviews</title>
</head>
<body class="bg-reviewpage">
<nav>
        <div class="flex items-center justify-between w-full pr-6 pl-6 pt-2">
            <div class="flex space-x-6 items-center">
                <a href="../1_home/home_customer.php">
                    <img src="../1_home/elements/logo_1.png" alt="logo" class="rounded-full h-16 min-h-16 w-16 min-w-16 animate-pulse">
                </a>
                <p>Fern n Friends Cafe</p>
            </div>
            <div class="flex space-x-12">
                <a href="../2_order/cus_order.php">
                    <p class="menuho2">รายการคำสั่งซื้ออาหาร</p>
                </a>
                <a href="../5_reviewpage/review.php">
                    <p class="menuho">รีวิวอาหาร</p>
                </a>
                <a href="../3_cart/cart.php">
                    <span class="material-symbols-outlined shopping">
                        shopping_cart
                        </span>
                </a>
            </div>
        </div>
    </nav>

<div class="bg-reviewpage md:mx-auto mb-10">
    <h1 class="text-center pt-8 pb-8 text-xl">รีวิวร้านอาหาร</h1>
    <div class="justify-center items-center mx-20 my-50 ">
        <form id="reviewForm" action="submit_review.php" method="post" enctype="multipart/form-data">
            <input type="text" class="border border-gray-900 rounded px-3 my-5" name="name" placeholder="ชื่อของท่าน" required><br>
            <div class="relative bg-text-area px-8 py-8 rounded-lg">
                <textarea name="reviewText" class="px-3 py-1 rounded w-full h-full bg-text-area" placeholder="ร้านนี้อาหารอร่อยม้าก !" rows="8" required></textarea><br>
                <div class="flex flex-row justify-between items-center">
                    <label for="file-upload">
                        <img src="https://i.pinimg.com/originals/7e/49/d0/7e49d0a919ec3d258a1bad674707f243.png" class="custom-file-upload" alt="Upload Icon">
                        <span id="fileName"></span>
                    </label>
                    <input id="file-upload" type="file" name="photo" style="display: none;" onchange="updateFileName()">
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
            echo '<div class="mx-24 my-10">';
            echo '<div><strong>' . $row['name'] . '</strong><br></div>';
            echo '<div><p>' . $row['review_text'] . '</p></div>';
            if ($row['photo_url']) {
                echo '<div><img src="' . $row['photo_url'] . '" class="rounded-lg border border-black my-8 w-64 md:w-96 alt="' . $row['name'] . '"></div>';
            }
            echo '</div>';
            echo '<hr class="border-gray-400">';
        }
        ?>
    </div>
</div>

<script>
    function updateFileName() {
        const fileInput = document.getElementById('file-upload');
        const fileNameElement = document.getElementById('fileName');
        fileNameElement.textContent = fileInput.files[0].name;
    }
</script>
</body>
</html>