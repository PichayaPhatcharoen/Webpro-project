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




