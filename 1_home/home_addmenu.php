<?php include "../conn.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- icon > -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- font kanit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fahkwang:wght@200;400;500&family=Itim&family=Josefin+Sans&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Press+Start+2P&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100&family=Single+Day&family=Taviraj:wght@200;500&family=Ubuntu&family=Ubuntu+Mono&display=swap" rel="stylesheet">

    <style>
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

        .upload,.exit,.picturenew{
            background-color: #FFDFB0;
        }

        /* .backmenu{
            background-color: #2D2D2D;
        } */

        .name{
            left: 42%;
        }

        .upload-btn {
            cursor: pointer;
        }
        

        .bgbtn{
            background-color: #FFD597;
            top: 33%;
            border-radius: 50%;
            width: 70px;
            height: 70px;
            cursor: pointer;
            box-shadow: 5px 2px 10px 1px rgba(78, 78, 78, 0.3);
        }

        .bgbtn:hover {
            background-color: #ffca7b;
        }

        .z00m2{
            cursor: pointer;
            
        }

        .z00m2:hover{
            /* transform: scale(0.9); */
            /* transition: 0.3s ease-in-out; */
        }

        .inputinside{
            background-color: #D9D9D9;
        }
        .inputinside{
            background-color: #D9D9D9;
        }

        .inputinside2{
            background-color: #474747;
        }

        #fileInput {
        display: none;
        }

        #uploadedImage {
            max-width: 250px;
            max-height: 250px;
            display: none; /* Hide the image initially */
            position: absolute;
        }

        #uploadedImage.visible {
            display: block; /* Show the image after upload */
        }

    </style>
</head>
<body>
    <!-- exit X -->
    <div class="exit text-left pt-10 pl-10">
        <a href="home_employee.php">
            <p class="text-4xl font-light z00m2">x</p>
        </a>
    </div>

    <!-- upload image -->
    <div class="flex flex-col justify-center items-center gap-2 picturenew">
        <div class="upload w-full h-80 flex flex-col justify-center items-center">
            <div class="flex uploadpic justify-center items-center text-center">
                <div class="bgbtn"><label for="fileInput" class="upload-btn text-7xl font-thin -top-2">+</label></div>
                <input type="file" id="fileInput" accept="image/*" onchange="displayImage(event)">
                <img src="" alt="Uploaded Image" id="uploadedImage">
            </div>
        </div>

        <!-- reselect new picture button -->
        <div id="selectnewpic"  class="hidden bottom-0 flex flex-col justify-center items-center pb-10">
            <button id="selectnewpicbtn" onclick="resetphoto()" class="bg-red-400 hover:bg-red-500 text-white py-2 px-8 rounded-full">Select New</button>
        </div>
    </div>   
    <!-- info -->
    <div class="m-24 ml-0 ">
        <div class="menuname grid grid-cols-2 my-10 items-center ">
            <div class="grid grid-cols-2 text-left ">
                <div></div>
                <label>ชื่อ :</label>
            </div>
            <div class="price ">
                <input type="text" min="0" id="menuname" class="my-3 pl-3 border-2 border-black rounded-full" placeholder="" required><br>
            </div>
        </div>
                
        <div class="menutype my-10 grid grid-cols-2 items-center ">
            <div class="grid grid-cols-2 text-left ">
                <div></div>
                <label>ประเภท :</label>
            </div>
            <div>
                <input class="mx-3" type="radio" name="type" value="bakery" id="bakery"> 
                <label for="bakery">เบเกอรี่</label><br>
                <input class="mx-3" type="radio" name="type" value="drinks" id="drinks">
                <label for="drinks">เครื่องดื่ม</label><br>   
            </div>
        </div>

        <div class="price grid grid-cols-2 my-10 items-center hidden" id="ifbakery">
            <div class="grid grid-cols-2 text-left ">
                <div></div>
                <label>ราคา :</label>
            </div>
            <div class="price ">
                <input type="number" min="40" id="price" class="my-3 pl-3 border-2 border-black rounded-full" aria-labelledby="sizeM-label" placeholder="Default : 80 ฿"><br>         
            </div>
        </div>

    </div>

        <div class="price grid grid-cols-2 my-10 items-center hidden" id="ifdrinks">
            <div class="grid grid-cols-2 text-left ">
                <div></div>
                <label>ราคา :</label>
            </div>
            <div class="price ">
                <label for="priceS" id="sizeS-label">Size S <span class="text-indigo-400">(12 oz.)</span> :</label><br>
                <input type="number" min="40" id="priceS" class="my-3 pl-3 border-2 border-black rounded-full" aria-labelledby="sizeS-label" placeholder="Default : 60 ฿"><br>      
                <label for="priceM" id="sizeM-label">Size M <span class="text-indigo-400">(16 oz.)</span> :</label><br>
                <input type="number" min="40" id="priceM" class="my-3 pl-3 border-2 border-black rounded-full" aria-labelledby="sizeM-label" placeholder="Default : 80 ฿"><br>         
                <label for="priceL" id="sizeL-label">Size L <span class="text-indigo-400">(20 oz.)</span> :</label><br>
                <input type="number" min="40" id="priceL" class="my-3 pl-3 border-2 border-black rounded-full" aria-labelledby="sizeL-label" placeholder="Default : 100 ฿"><br>
            </div>
        </div>
    </div>
    
    <!-- submission -->
    <div>
        <button onclick="checktheinput()" id="addmenu" type="submit" class="float-right mx-9 my-8 bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">เพิ่มรายการ</button>
    </div>
    
    <!-- error to submit -->
    <div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden" id="input_error">
        <div class="bg-white rounded-lg p-20 shadow-lg flex flex-col text-center">
            <p class="text-center mb-4">โปรดกรอกชื่อเมนู เลือกประเภทอาหาร และอัปโหลดรูปภาพให้เรียบร้อย</p>
            <div><button onclick="toggleinputerror()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">ยืนยัน</button></div>   
        </div>
    </div>


    <!-- able to submit -->
    <div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden" id="popup-overlay">
        <div class="bg-white rounded-lg p-20 flex flex-col shadow-lg">
            <div id="popup-message" class="text-center mb-4"></div>
            <div class = "flex flex-row justify-center items-center gap-4">
                <button id="confirm-btn" onclick="confirmSubmission()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">Yes</button>
                <button id="cancel-btn" onclick="togglePopup()" class="bg-red-400 hover:bg-red-500 text-white py-2 px-8 rounded-full">No</button>
            </div>
        </div>
    </div>
    
    
    <!-- submit sucess -->
    <div class="fixed top-0 left-0 right-0 bottom-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden" id="sucess-overlay">
        <div class="bg-white flex flex-col justify-center items-center  rounded-lg p-20 shadow-lg">
            <p class="text-center mb-4">เพิ่มรายการสำเร็จ</p>
            <a href="home_manager.php"><button onclick="togglesuccess()" class="bg-blue-400 hover:bg-blue-500 text-white py-2 px-8 rounded-full">ยืนยัน</button></a>
        </div>
    </div>
    
    <script>

        // show price input depend on menutype
        const bakeryRadio = document.getElementById('bakery');
        const drinksRadio = document.getElementById('drinks');
        const ifbakeryDiv = document.getElementById('ifbakery');
        const ifdrinksDiv = document.getElementById('ifdrinks');

        bakeryRadio.addEventListener('change', function() {
        if (bakeryRadio.checked) {
            ifbakeryDiv.classList.remove('hidden');
            ifdrinksDiv.classList.add('hidden');
        } 
        });

        drinksRadio.addEventListener('change', function() {
            if (drinksRadio.checked) {
                ifbakeryDiv.classList.add('hidden');
                ifdrinksDiv.classList.remove('hidden');
            }
        });

        //====================================================
        
        // toggle submission popup function
        
        function togglePopup() {
            var popup = document.getElementById('popup-overlay');
            popup.classList.toggle('hidden');
        }
        function toggleinputerror() {
            var popuperr = document.getElementById('input_error');
            popuperr.classList.toggle('hidden');
        }
        function togglesuccess() {
            var popupsucess = document.getElementById('sucess-overlay');
            popupsucess.classList.toggle('hidden');
        }
        
        //====================================================
        
        function checktheinput(){
            var menuName = document.getElementById('menuname').value;
            var bakeryChecked = document.getElementById('bakery').checked;
            var drinksChecked = document.getElementById('drinks').checked;
            var fileInput = document.getElementById('fileInput').value;
            
            if (menuName && (bakeryChecked || drinksChecked) && fileInput) {
                var type = bakeryChecked ? "bakery" : "drinks";
                var recheckinfotxt = document.getElementById('popup-message');
                
                if (type === "bakery") {
                    menuPrice = document.getElementById('price').value;
                    if(!menuPrice){
                        menuPrice = 80 ;
                    }
                    recheckinfotxt.innerText = `เพิ่มเมนู: ${menuName}, ราคา: ${menuPrice} ฿`;
                } else {
                    var priceS = document.getElementById('priceS').value;
                    var priceM = document.getElementById('priceM').value;
                    var priceL = document.getElementById('priceL').value;
                    if(!priceS){
                        priceS = 60 ;}
                    if(!priceM){
                        priceM = 80 ;}
                    if(!priceL){
                        priceL = 100 ;}
                    recheckinfotxt.innerText = `เพิ่มเมนู: ${menuName}, ราคา S: ${priceS} ฿, ราคา M: ${priceM} ฿, ราคา L: ${priceL} ฿`;
                }
                togglePopup(); // Show the popup overlay
            }else{
                toggleinputerror();
            }
        }

        //====================================================
        
        
        // confirm submission and notify
        // confirm submission and notify

        function confirmSubmission() {
            var menuName = document.getElementById('menuname').value;
            var bakeryChecked = document.getElementById('bakery').checked;
            var drinksChecked = document.getElementById('drinks').checked;

            if(bakeryChecked || drinksChecked) {
                var formData = new FormData();
                formData.append('menuName',menuName);
                formData.append('image',document.getElementById('fileInput').files[0]);

                if(bakeryChecked){
                    var bakeryPrice = document.getElementById('price').value || 80; 
                    formData.append('price',bakeryPrice);
                    formData.append('type','bakery');
                } else {
                    var priceS = document.getElementById('priceS').value || 60, 
                        priceM = document.getElementById('priceM').value || 80,
                        priceL = document.getElementById('priceL').value || 100;
                        
                    formData.append('priceS',priceS);
                    formData.append('priceM',priceM);
                    formData.append('priceL',priceL);
                    formData.append('type','drinks');
                }

                // Send form data to server script
                fetch('addmenudatatodb.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Server Response: ', data);
                    if (data.message === 'success') {
                        togglePopup();
                        togglesuccess();
                        document.querySelector("#sucess-overlay button").focus();
                    }       
                })
                .catch((error) => {
                    console.log('Fetch error: ', error);
                });
            }
        }

        
        //====================================================
        
        
        // upload image
        
        function displayImage(event) {
            const input = event.target;
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const image = document.getElementById('uploadedImage');
                    image.src = e.target.result;
                    image.style.display = 'block'; // Show the image after upload
                    const uploadBtn = document.querySelector('.upload-btn');
                    uploadBtn.style.display = 'none'; // Hide the plus button
                    const bgBtn = document.querySelector('.bgbtn');
                    bgBtn.style.display = 'none'; // Hide the plus button
                };
                reader.readAsDataURL(input.files[0]);
                
                document.getElementById("selectnewpic").classList.remove('hidden'); // Show the "Select New" button
            }
        }
        
        //====================================================
        
        // if want to reselect the photo
        function resetphoto() {
            const image = document.getElementById('uploadedImage');
            image.src = ''; // Reset the image source
            image.style.display = 'none'; // Hide the image
            const uploadBtn = document.querySelector('.upload-btn');
            uploadBtn.style.display = 'block'; // Show the plus button
            const bgBtn = document.querySelector('.bgbtn');
            bgBtn.style.display = 'block'; // Show the plus button
            const fileInput = document.getElementById('fileInput');
            fileInput.value = ''; // Reset the file input value
            document.getElementById('selectnewpic').classList.add('hidden'); // Hide the "Select New" button
        }
        
        
        
        </script>
</body>
</html>