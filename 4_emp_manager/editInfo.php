<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            margin: 0%;
            background-color: #FFFAF7;
        }
        
        .box {
            margin: 50px 180px 10px 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        .sbox {
            background-color: #FFE0C4;
            width: 800px;
            height: 440px;
            border-radius: 20px;
        }
        
        #job {
            float: right;
            background-color: #cd7e56;
            margin: 20px 40px 40px 40px;
            width: 180px;
            height: 50px;
            border-radius: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: aliceblue;
        }
        
        #info {
            margin-left: 40px;
        }
        
        .buttons {
            float: right;
            margin: 0px 350px 20px 10px;
            padding: 20px;
        }
        
        #edit {
            background-color: #F9EE99;
            border-radius: 30px;
            border: none;
            padding: 10px 20px 10px 20px;
        }
        
        #submit {
            background-color: #6BDBC4;
            border-radius: 30px;
            border: none;
            width: 65px; height: 35px;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 0px;
            cursor: pointer;
        }
        
        input {
            border-radius: 20px;
            height: 25px;
            border-color: #cd7e56;
            padding-left: 10px;
            margin: 10px 0px 10px 10px;
        
        }
        
        select {
            background-color: #cd7e56;
            border: none;
            color: aliceblue;
            font-size: medium;
        }
        td {
            width: 110px;
        }
        label{
            float: right;
        }
        #jobx {
            float: left;
            margin-left: 16px;
        }
        select#Position {
            background-color: #cd7e56;
            border: none;
            color: aliceblue;
            font-size: medium;
            border-radius: 20px;
            height: 25px;
            padding-left: 10px;
            margin: 10px 0px 10px 10px;
        }
        select#Position option {
            background-color: #cd7e56;
            color: aliceblue;
        }
    </style>
</head>
<?php
    include "../conn.php";

    // Check if POST data is sent
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $firstName = $_POST['FirstName'];
        $lastName = $_POST['LastName'];
        $nickName = $_POST['NickName'];
        $tel = $_POST['Tel'];
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $position = $_POST['Position'];

        // Prepare the SQL statement to update employee data by ID
        $stmt = $pdo->prepare("UPDATE employee SET FirstName=?, LastName=?, NickName=?, Tel=?, Username=?, Password=?, Position=? WHERE id=?");
        $stmt->execute([$firstName, $lastName, $nickName, $tel, $username, $password, $position, $id]);

        header('Location: manageEmp.php');
        exit();
    }

    // Check if ID of the employee to be edited is set
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Prepare the SQL statement to retrieve employee data by ID
        $stmt = $pdo->prepare("SELECT * FROM employee WHERE id = ?");
        $stmt->execute([$id]);

        // Fetch the employee data
        $employee = $stmt->fetch();

        if ($employee) {
            $firstName = $employee['FirstName'];
            $lastName = $employee['LastName'];
            $nickName = $employee['NickName'];
            $tel = $employee['Tel'];
            $username = $employee['Username'];
            $password = $employee['Password'];
            $position = $employee['Position'];
        } else {
            echo "ไม่พบข้อมูลพนักงาน";
        }
    }
?>

<body>
    <div class="head" style="background-color: #FFD2A8; width: 100%; height: 100px; margin: 0%;">
        <h1 style="padding: 30px; margin: 0%;">แก้ไขข้อมูลพนักงาน</h1>
    </div>
    <div class="box">
        <div class="sbox">
            <form id="info" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
                <table>
                    <tr>
                        <td><label for='Position'>ตำแหน่ง : </label></td>
                        <td>
                            <select id="Position" name="Position">
                                <option value="พนักงาน" <?php if (isset($position) && $position == "พนักงาน") echo "selected"; ?>>พนักงาน</option>
                                <option value="พ่อครัว" <?php if (isset($position) && $position == "พ่อครัว") echo "selected"; ?>>พ่อครัว</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for='FirstName'>ชื่อ : </label></td>
                        <td><input type="text" id="FirstName" name="FirstName" value="<?php echo isset($firstName) ? $firstName : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for='LastName'>นามสกุล : </label></td>
                        <td><input type="text" id="LastName" name="LastName" value="<?php echo isset($lastName) ? $lastName : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for='NickName'>ชื่อเล่น : </label></td>
                        <td><input type="text" id="NickName" name="NickName" value="<?php echo isset($nickName) ? $nickName : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for='Tel'>เบอร์โทรติดต่อ : </label></td>
                        <td><input type="text" id="Tel" name="Tel" value="<?php echo isset($tel) ? $tel : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for='Username'>ชื่อผู้ใช้ : </label></td>
                        <td><input type="text" id="Username" name="Username" value="<?php echo isset($username) ? $username : ''; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for='Password'>รหัสผ่าน : </label></td>
                        <td><input type="text" id="Password" name="Password" value="<?php echo isset($password) ? $password : ''; ?>"></td>
                    </tr>
                </table>

                <div class="buttons">
                    <button id="submit" type="submit">ยืนยัน</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

</html>

