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
     
    <?php
      $totalprice=0;    
      $tableNum = isset($_GET['tableNum']) ? intval($_GET['tableNum']) : 1;
      if ($tableNum < 1 || $tableNum > 6) {
          $tableNum = 1;
      }
      $pdo = new PDO('mysql:host=localhost;dbname=FernNFriend', 'root', '');
      $cart_table = 'cart_' . $tableNum;
      $stmt = $pdo->query("SELECT * FROM $cart_table ORDER BY id ASC");

      echo '<div class="bg-unselect mx-3 md:mx-10 mt-10 gap-2 flex items-center text-center grid justify-between grid-cols-6 rounded-3xl justify-center px-5 py-5">
        <p class=" text-lg md:text-xl my-4  text-pink-700">รายการ</p>
        <p class=" text-lg md:text-xl my-4  text-pink-700">ประเภท</p>
        <p class=" text-lg md:text-xl my-4  text-pink-700">ไซส์</p>
        <p class=" text-lg md:text-xl my-4  text-pink-700">ราคาต่อชิ้น/แก้ว</p>
        <p class=" text-lg md:text-xl my-4  text-pink-700">จำนวน</p>
        <p class=" text-lg md:text-xl my-4  text-pink-700">รวม</p>
        '; 
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $menu_id = $row['id'];
        $menu_name = $row['menu_name'];
        $type = $row['menutype'];
        $size = isset($row['size']) ? $row['size'] : "-";
        $amount = $row['amount'];
        $price = $row['price'];
        
        echo'
          <div>
            <p class= " text-base md:text-lg">' . $menu_name . '</p>
          </div>

          <div>
            <p class= " text-base md:text-lg">' . $type . '</p>
          </div>

          <div>
            <p class= " text-base md:text-lg">' . $size . '</p>
          </div>
          
          <div>
            <p class= " text-base md:text-lg">' . $price . '</p>
          </div>

          <div>
            <button data-id="'.$menu_id.'" class="btn btn-default btn-minus"><i class="fas fa-minus"></i></button>
            <input id="cake-number_'.$menu_id.'" data-price="'.$price.'" type="text" class="amount-input w-14 rounded-xl text-center" value="'.$amount.'">
            <button data-id="'.$menu_id.'" class="btn btn-default btn-plus"><i class="fas fa-plus"></i></button>
          </div>

          <div>
            <p class= " text-base md:text-lg total_menuprice">' . $amount*$price . '</p>
          </div>
          ';      
          $totalprice += ($amount*$price) ;
        }
        echo '</div>';
        ?>
       


    <div class="my-20 mr-14 flex gap-8 flex- row items-center justify-end" >
      <div class="">ราคารวม : <span id="sub-total"><?php echo $totalprice?></span> ฿</div>
      <button class="btn w-32 bg-pink-200 rounded-2xl p-2">ยืนยัน</button>
    </div>


  </body>

  <script>
    $('body').on('click', '.btn-plus, .btn-minus', function() {
        var inputId = '#cake-number_' + $(this).data('id');
        var input = $(inputId);
        var quantity = parseInt(input.val());
        if($(this).hasClass('btn-minus')){
            if(quantity > 1){
                quantity -= 1;
            } else {
                // Show alert and delete item from cart
                if(confirm('Are you sure you want to delete this item from your cart?')){
                    var menuId = $(this).data('id');
                    var tableNum = <?php echo $_GET['tableNum']; ?>;
                    $.ajax({
                        url: 'delete_item.php',
                        type: 'POST',
                        data: {tableNum: tableNum, menuId: menuId},
                        success: function(response) {
                            // Reload the page or update the cart UI
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            alert('Error deleting item');
                        }
                    });
                } else {
                    return false; // Do nothing if user cancels
                }
            }
        } else {
            quantity += 1;
        }
        input.val(quantity);
        
        var menuPrice = parseFloat(input.data('price'));
        $(input).parent().next().find('.total_menuprice').html((quantity * menuPrice).toFixed(2));
        
        var total = 0.00;
        $('.total_menuprice').each(function() {
            total += parseFloat($(this).html());
        });
        $('#sub-total').html(total.toFixed(2));
    });
</script>


</html>
