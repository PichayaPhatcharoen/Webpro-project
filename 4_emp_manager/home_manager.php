<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_Manager</title>

    <!-- tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home_manager.css">
</head>
<style>
    .kanit-regular {
    font-family: "Kanit", sans-serif;
    font-weight: 400;
    font-style: normal;
    }

    * {
    font-family: 'Kanit'!important;
    }
    body{
        margin: 0;
        width: 100%;
        background-color: #FFFAF7;
    }

    .head{
        height: 76px;
        margin: 0px;
        padding: 24px 0px 0px 10px;
    }

    .icon, .icon2{
        background-color: #D6BEDC;
        border-radius: 100px;
        /* margin-left: 50px; */
        margin-top: 100px;
    }

    .text{
        font-size: 30px;
        text-align:center;
    }

</style>
<body>
    <div class="head flex items-center md:gap-5">
        <a href="#" class="flex justify-center items-center w-12 h-12" style="margin-left: 25px;"><img src="../1_home/elements/logo_1.png" alt="logo"></a>
        <a href="#" class="name flex items-center" style="width: 205;">Fern n Friends cafe</a>
    </div>

    <div class="flex justify-around items-center mb-20">
        <div class="flex flex-col">
            <a href="manageEmp.php" class="icon flex items-center justify-center w-96 h-96"><img src="../1_home/elements/person-5.png" alt="" style="width: 220px; height: 220px;"></a>
            <p class="text">จัดการพนักงาน</p>   
        </div>
        <div>
            <a href="summarySales.php" class="icon2 flex items-center justify-center w-96 h-96"><img src="../1_home/elements/chart.png" alt="" style="width: 180px; height: 180px;"></a>
            <p class="text">สรุปยอดขาย</p>
        </div>
    </div>
</body>
</html>
