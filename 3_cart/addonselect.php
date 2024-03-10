<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beverage</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit&display=swap" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="output.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <style>
    .head {
      background-color: #ffc6bb;
      width: 100%;
      height: 76px;
      margin: 0px;
      padding: 24px 0px 0px 10px;
    }

    body {
      margin: 0%;
      background-color: #FFFAF7;
      font-family: "Kanit", sans-serif;
      font-weight: 400;
      width: 100%;
    }

    #arrow {
      float: left;
      background-color: #ffc6bb;
      border: none;
      margin-top: 1px;
    }

    h1 {
      display: inline;
    }

    .btn {
      border-radius: 20px;
      height: 35px;
      padding-left: 30px;
      padding-right: 30px;
      margin-top: -5px;
    }
    .bg-unselect{
      background-color: #FFD6B0;
    }

    .bg-bang-blue{
      background-color:#D9D9D9;
    }
    
  </style>
  <script>
  </script>
</head>

<body>
  <div class="head">
    <div class="">
      <button id="arrow">
        <a href="addEmp.html" style="text-decoration: none; color: #000">
          <i class="fa-solid fa-arrow-left"></i></a>
      </button>
    </div>
    <div>
      <h1 class="flex text-center pl-5">สั่งเครื่องดื่มเพิ่มเติม</h1>
    </div>
  </div>
  <div class="mt-20 flex items-center justify-center">
    <div class="flex flex-row">
      <div>
        <div class="w-80 h-96 bg-bang-blue rounded-xl"></div>
        <div class="flex items-center justify-center mt-5">
          ชื่อเครื่องดื่ม
        </div>
      </div>
      <div>
        <div class="mt-3 ml-14">
          ขนาด
          <div class="mt-5 flex flex-row gap-10">
            <button id="myButton" class="choose btn bg-unselect">
              <div class="">12 oz</div>
            </button>
            <button class="choose btn bg-unselect">
              <div>16 oz</div>
            </button>
            <button class="choose btn bg-unselect">
              <div>20 oz</div>
            </button>
          </div>
        </div>
        <div class="mt-3 ml-14">
          เพิ่มเติม
          <div class="add mt-5 flex flex-row gap-6">
            <button class="choose btn bg-unselect">
              <div>น้ำตาล</div>
            </button>
            <button class="choose btn bg-unselect">
              <div>ไซรัป</div>
            </button>
            <button class="choose btn bg-unselect">
              <div>คาราเมล</div>
            </button>
            <button class="choose btn bg-unselect">
              <div>น้ำผึ้ง</div>
            </button>
          </div>
        </div>
        <div class="mt-3 ml-14">
          ท๊อปปิ้ง
          <div class="mt-5 flex flex-row gap-6">
            <button class="choose btn bg-unselect">
              <div>วิปครีม</div>
            </button>
            <button class="choose btn bg-unselect">
              <div>มาร์ชเมลโล่</div>
            </button>
            <button class="choose btn bg-unselect">
              <div>ไข่มุก</div>
            </button>

          </div>
        </div>
        <div class="mt-5 ml-14 ">
          ช็อตกาแฟ
          <div class="mt-5 w-56 ">>
            <input type="number" min="1" value="1"
              style="background-color: #FFD6B0; border-radius: 15px; height: 40px; width: 120px; padding: 10px;">
          </div>
          <div class="flex items-end justify-end">
          <div class="mt-16 flex flex-row">
            <div class="flex flex-row">
            <div class="" style="margin-right: 15px;">ราคารวม : <span id="sub-total">3</span> $</div>
            <button class="submit btn bg-green-400 rounded-xl ml-3" style="width: 100px; border-radius: 13px; background-color: #6BDBC4;">ยืนยัน</button>
        </div>
      </div>
        </div>
        </div>
        </div>
      </div>
    </div>
    </div>

</body>

</html>