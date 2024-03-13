<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Kanit', sans-serif;
            background-color: #FFEDE2;
        }

        .container {
            position: relative;
            width: 100%;
            max-width: 1440px;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .login-box img {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            overflow: hidden;
        }
        

        h1 {
            font-size: 26px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: 'Kanit', sans-serif;
            color: #000000;
        }

        .form-container {
            width: 400px;
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
            color: #000000;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            border: none;
            border-radius: 30px;
            background-color: #FFDAD3;
            outline: none;
            color: #000000;
            margin-bottom: 10px;
        }

        .submit-btn {
            width: 50%;
            padding: 12px;
            font-size: 18px;
            border: none;
            border-radius: 30px;
            background-color: #ADCEC3;
            color: #FDFAE7;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background-color: #8cb09e;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="login-box">
            <img src="./1_home/elements/logo_1.png" alt="Logo">
        </div>
        <h1>Fern n Friends Cafe</h1>
        <?php
        session_start();
        if (isset($_SESSION['error_message'])) {
            $error_message = $_SESSION['error_message'];
            echo "<script>alert('$error_message');</script>";
            unset($_SESSION['error_message']);
        }
        ?>
        <form class="form-container" action="index.php" method="POST">
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้งาน</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-btn">เข้าสู่ระบบ</button>
        </form>
    </div>
</body>
</html>

<?php
include 'conn.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt_employee = $pdo->prepare("SELECT * FROM employee WHERE Username = :username AND Password = :password AND Position='พนักงาน'");
    $stmt_employee->execute(['username' => $username, 'password' => $password]);
    $employee = $stmt_employee->fetch();

    $stmt_chef = $pdo->prepare("SELECT * FROM employee WHERE Username = :username AND Password = :password AND Position='พ่อครัว'");
    $stmt_chef->execute(['username' => $username, 'password' => $password]);
    $chef = $stmt_chef->fetch();

    $stmt_manager = $pdo->prepare("SELECT * FROM manager WHERE username = :username AND password = :password");
    $stmt_manager->execute(['username' => $username, 'password' => $password]);
    $manager = $stmt_manager->fetch();

    if ($employee) {
        $_SESSION['username'] = $username;
        header('Location: ./1_home/home_employee.php');
        exit();
    } elseif ($manager) {
        $_SESSION['username'] = $username;
        header('Location: ./4_emp_manager/home_manager.php');
        exit();
    } elseif($chef) {
        $_SESSION['username'] = $username;
        header('Location: ./2_order/chef_order.php');
        exit();
    }else {
        $_SESSION['error_message'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header("Location: index.php");
        exit();
    }
}
?>

