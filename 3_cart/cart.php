<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beverage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit&display=swap"
      rel="stylesheet"
    />

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="output.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <style>
  body{
    background: #ddb5b5;
  }
  .bg-unselect{
    background-color: #FFD6B0;
  }

  .bg-bang-blue{
    background-color:#D9D9D9;
  }
  
.cart{
	margin: 20px 0;
	background-color: #F6F5FA;
	padding: 60px 0;
}
.total-price{
	padding-bottom: 15px;
}
.cart-item{
	background-color: #fff;
	border-radius: 10px;
	padding: 15px 20px;
	margin-bottom: 20px;
}
.center-item{
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.cart-item img{
	width: 115px;
}
.cart-item h5{
    padding: 0 45px;
}
.cart-item .remove-item{
	width: 25px!important;
}
.btn-default{
	background-color: #FFD6B0;
}
.cart-item .form-control{
	background-color: #F6F5FA;
	border: none;
    width: 65px;
    border-radius: 10px!important;
    font-weight: 700;
    font-size: 20px;
}
.input-group{
	width: unset;
	flex-wrap: nowrap;
}
.status{
	text-align: right;
}
.check-out{
    float: right;
    padding: 10px 30px;
	font-size: 19px;
	background-color: #2FBE70;
	border: none;
}

      .head {
        background-color: #ffc6bb;
        height: 76px;
        margin: 0px;
      }
      body {
        background-color: #FFFAF7;
        font-family: "Kanit", sans-serif;
        font-weight: 400;
      }

      #arrow {
        float: left;
        background-color: #ffc6bb;
        border: none;
        margin-top: 1px;
        margin-left: 20px;
      }
      h1 {
        display: inline;
      }
      .select {
        background-color: #e79b75;
      }
      .cart{
        margin: 20px 0;
        background-color: #F6F5FA;;
        padding: 60px 0;
      }
    </style>
  </head>
  <body>
    
    <div class="head pt-6">
      <div class="">
        <button id="arrow">
          <a href="../1_home/home_customer.php?tableNum=<?php echo $_GET['tableNum']?>" style="text-decoration: none; color: #000">
            <i class="fa-solid fa-arrow-left"></i>
          </a>
        </button>
      </div>
      <div>
        <h1 class="flex text-center pl-5">สั่งอาหาร</h1>
      </div>
    </div>

    <div class="text-3xl mt-10 flex items-center justify-center">
      <?php $tableNum = $_GET['tableNum']; echo"<h1>โต๊ะ $tableNum </h1>";?>
    </div>



    <div class="bg-unselect mx-10 my-10  flex items-center text-center grid justify-between grid-cols-5 rounded-3xl justify-center px-5 py-5 pb-28">
        <p>รายการ</p>
        <p>ราคา</p>
        <p>ไซส์</p>
        <p>ประเภท</p>
        <p>จำนวน</p>

        <?php
          $tableNum = isset($_GET['tableNum']) ? intval($_GET['tableNum']) : 1;
          if ($tableNum < 1 || $tableNum > 6) {
              $tableNum = 1;
          }
          $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');
          $cart_table = 'cart_' . $tableNum;

          $stmt = $pdo->query("SELECT * FROM $cart_table ORDER BY id ASC");
        
        ?>
    </div>




    <!-- <div class=" flex items-center justify-center px-5 py-5">


      <div class="bg-unselect" style="border-radius: 30px; ">
        <div class="items-center justify-center mt-5 flex flex-row gap-72">
            <div>รายการ</div>
            <div>ราคา</div>
            <div>ประเภท</div>
            <div >จำนวน</div>
        </div>


        <div class="items-center justify-center mt-5 flex flex-row gap-60">

          <div class="menuname">Chocolate Cake</div>
          <div class="ml-12"><span id="cake-total">3 </span> $</div>

          <div>
            <div class="ml-14 number-spinner">
              <button id="cake-minus" class="btn btn-default"><i class="fas fa-minus"></i></button>
              <input id="cake-number" type="text" class="w-14 rounded-xl bg-unselect text-center" value="1">
              <button id="cake-plus" class="btn btn-default"><i class="fas fa-plus"></i></button>
            </div>
          </div>

        </div>
      </div>


    </div> -->


    <div class="my-20 mr-14 flex gap-8 flex- row items-center justify-end" >
      <div class="">ราคารวม : <span id="sub-total">x</span> ฿</div>
      <button class="btn w-32 bg-pink-200 rounded-2xl p-2">ยืนยัน</button>
    </div>


  </body>
<script>
  function upadateCaseNumber(product, price, isIncreasing){
    const caseInput = document.getElementById(product + '-number');
    let caseNumber = caseInput.value;
            if(isIncreasing){
                caseNumber = parseInt(caseNumber) + 1;
            }
            
    else if(caseNumber > 0){
           caseNumber = parseInt(caseNumber) - 1;
         }
        
        caseInput.value = caseNumber;
    // update case total 
    const caseTotal = document.getElementById(product + '-total');
    caseTotal.innerText = caseNumber * price;
    calculateTotal();
    }


  function getInputvalue(product){
      const productInput = document.getElementById(product + '-number');
      const productNumber = parseInt(productInput.value);
      return productNumber;
  }
  function calculateTotal(){
      const caseTotal = getInputvalue('cake') * 3;
      const subTotal = caseTotal;


      // update on the html 
      document.getElementById('sub-total').innerText = subTotal;


  }

  document.getElementById('cake-plus').addEventListener('click',function(){

    upadateCaseNumber('cake', 3 ,true);
  });

  document.getElementById('cake-minus').addEventListener('click',function(){

  upadateCaseNumber('cake', 3, false);
  });


</script>

</html>
