<?php
error_reporting(0);
ini_set('display_errors', 0);
if(basename($_SERVER['SCRIPT_FILENAME']) === 'menu.php'){
    global $inmenu;
    $inmenu = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Best Burgers in Bikini Bottom - SpongeBob's Burger Joint">
    <meta name="description" content="Indulge in the tastiest burgers in Bikini Bottom at SpongeBob's Burger Joint. Inspired by the beloved character, our burgers are made with the freshest ingredients. Order now!">
    <meta name="keywords" content="SpongeBob, Bikini Bottom, Burgers, Restaurant, Fast Food, Takeout, Dine-in, Delivery, Batteries Not Included">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
    <title>Cart</title>
    <link rel="stylesheet" href="CSS/cart.css">
</head>
<body>
<form action="checkout.php" method="post">
                    <!-- cart menu -->
                    <div class="cartContainer" id="cartcontainer">
                    <div class="cartheader">
                        <div class="cartheaderpart1">
                            <div class="carttitle">Your order</div>
                            <div class="xbutton" id="closecart">✖</div>
                        </div>

                        <div class="cartheaderpart2">
                            <div class="pickuptime">Pickup time: 30Mins</div>
                            <div class="pickupaddress">Pickup Location:<br>Bikini Bottom</div>
                        </div>

                    </div>

                    <div class="cartitems">

                        <!-- Item 1-->
                        <div class="cartitem cartitem1">
                            <img src="images/krabbypatty.jpg" alt="krabby Pratty Sandwich" class="cartitemicon">

                            <div class="cartitembody">
                                <div class="cartitemtop">
                                    <div class="cartitemname">Krabby Patty</div>
                                    <div class="cartitemprice cartitemprice1">2JDS</div>
                                </div>

                                <div class="cartitembot">
                                    <input type="number" name="item1" class="cartitem1value" value="0" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" readonly>
                                    <div class="cartitemremove cartitemremove1">remove</div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2-->
                        <div class="cartitem cartitem2">
                            <img src="images/doublekrabbypatty.jpg" alt="Double Krabby Patty Sandwich" class="cartitemicon">

                            <div class="cartitembody">
                                <div class="cartitemtop">
                                    <div class="cartitemname" style="font-size: 23px;">Double Krabby Patty</div>
                                    <div class="cartitemprice cartitemprice2">3JDS</div>
                                </div>

                                <div class="cartitembot">
                                    <input type="number" name="item2"  class="cartitem2value" value="0" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" readonly>
                                    <div class="cartitemremove cartitemremove2">remove</div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3-->
                        <div class="cartitem cartitem3">
                            <img src="images/krabbypattymeal.png" alt="Krabby Patty Meal" class="cartitemicon">

                            <div class="cartitembody">
                                <div class="cartitemtop">
                                    <div class="cartitemname">Krabby Meal</div>
                                    <div class="cartitemprice">4JDS</div>
                                </div>

                                <div class="cartitembot">
                                    <input type="number" name="item3" class="cartitem3value" value="0" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" readonly>
                                    <div class="cartitemremove cartitemremove3">remove</div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4-->
                        <div class="cartitem cartitem4">
                            <img src="images/doublekrabbypattymeal.png" alt="Double Krabby Patty meal" class="cartitemicon">

                            <div class="cartitembody">
                                <div class="cartitemtop">
                                    <div class="cartitemname" id="doublekrabby" style="font-size: 23px;">Double Krabby Meal</div>
                                    <div class="cartitemprice">5JDS</div>
                                </div>

                                <div class="cartitembot">
                                    <input type="number"  name="item4" class="cartitem4value" value="0" min="0" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" readonly>
                                    <div class="cartitemremove cartitemremove4">remove</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="cartfooter">
                        <h1 id="finalprice">0 JOD</h1>
                        <input type="text" name="finalprice" class="finalfinalprice" hidden>
                        <button class="checkout" onclick="resetvalues()">Checkout</h2>
                    </div>
                    
    </div>
</form>

<script>

<?php if($check){ ?>
    var opencart = document.getElementById("opencart");
    var closecart = document.getElementById("closecart");
    var container = document.querySelector(".cartContainer");

    opencart.addEventListener("click",function() {
        container.classList.add("cart-new-width");
    });

    closecart.addEventListener("click",function(){

        container.classList.remove("cart-new-width");

    });
    <?php }?>

// // // // // //

    var finalprice = document.querySelector('#finalprice');

    if(localStorage.getItem("finalprice")===null || localStorage.getItem("finalprice")==="0"){
        finalprice.innerText = "0 JOD";
        console.log("test");
    }else{
        finalprice.innerText = parseInt(localStorage.getItem("finalprice"))+"JOD";
        console.log("test1");
        console.log(localStorage.getItem("finalprice"));
    }

    // ITEM 1 //
    var counter1;
    var price1 = 2;

    var addToCart1 = document.querySelector('.addToCart1');
    var menuvalue1 = document.querySelector('.counter1');
    var cartitem1value = document.querySelector('.cartitem1value');
    var cartitemremove1 = document.querySelector('.cartitemremove1');

    ///////SET DEFAULT VALUE
    if(localStorage.getItem("counter1")===null || localStorage.getItem("counter1")===""){
        counter1 = 0;
    }else{
        counter1 = parseInt(localStorage.getItem("counter1"));
        cartitem1value.value = parseInt(localStorage.getItem("counter1"));
    }
    ////EVENT LISTENER ADD TO CART
     cartitemremove1.addEventListener('click',function(){
         counter1 = 0;
         cartitem1value.value=0;
         localStorage.setItem("counter1",0);

         finalprice.innerText = parseInt(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4)+" JOD";
         localStorage.setItem("finalprice",parseInt(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4));
         console.log(localStorage.getItem("finalprice"));
     })
// // // // // //

    // ITEM 2 //
    var counter2;
    var price2 = 3;

    var addToCart2 = document.querySelector('.addToCart2');
    var menuvalue2 = document.querySelector('.counter2');
    var cartitem2value = document.querySelector('.cartitem2value');
    var cartitemremove2 = document.querySelector('.cartitemremove2');

    ///////SET DEFAULT VALUE
    if(localStorage.getItem("counter2")===null || localStorage.getItem("counter2")===""){
        counter2 = 0;
    }else{
        counter2 = parseInt(localStorage.getItem("counter2"));
        cartitem2value.value = parseInt(localStorage.getItem("counter2"));
    }
    ////EVENT LISTENER ADD TO CART
     cartitemremove2.addEventListener('click',function(){
         counter2 = 0;
         cartitem2value.value=0;
         localStorage.setItem("counter2",0);

         finalprice.innerText = parseInt(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4)+" JOD";
         localStorage.setItem("finalprice",parseInt(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4));
         console.log(localStorage.getItem("finalprice"));
     })
// // // // // //

    // ITEM 3 //
    var counter3;
    var price3 = 4;

    var addToCart3 = document.querySelector('.addToCart3');
    var menuvalue3 = document.querySelector('.counter3');
    var cartitem3value = document.querySelector('.cartitem3value');
    var cartitemremove3 = document.querySelector('.cartitemremove3');

    ///////SET DEFAULT VALUE
    if(localStorage.getItem("counter3")===null || localStorage.getItem("counter3")===""){
        counter3 = 0;
    }else{
        counter3 = parseInt(localStorage.getItem("counter3"));
        cartitem3value.value = parseInt(localStorage.getItem("counter3"));
    }
    ////EVENT LISTENER ADD TO CART
     cartitemremove3.addEventListener('click',function(){
         counter3 = 0;
         cartitem3value.value=0;
         localStorage.setItem("counter3",0);

         finalprice.innerText = parseInt(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4)+" JOD";
         localStorage.setItem("finalprice",parseInt(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4));
         console.log(localStorage.getItem("finalprice"));
     })
// // // // // //

    // ITEM 4 //
    var counter4;
    var price4 = 5;

    var addToCart4 = document.querySelector('.addToCart4');
    var menuvalue4 = document.querySelector('.counter4');
    var cartitem4value = document.querySelector('.cartitem4value');
    var cartitemremove4 = document.querySelector('.cartitemremove4');

    ///////SET DEFAULT VALUE
    if(localStorage.getItem("counter4")===null || localStorage.getItem("counter4")===""){
        counter4 = 0;
    }else{
        counter4 = parseInt(localStorage.getItem("counter4"));
        cartitem4value.value = parseInt(localStorage.getItem("counter4"));
    }
    ////EVENT LISTENER ADD TO CART
     cartitemremove4.addEventListener('click',function(){
         counter4 = 0;
         cartitem4value.value=0;
         localStorage.setItem("counter4",0);

         finalprice.innerText = parseInt(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4)+" JOD";
         localStorage.setItem("finalprice",parseInt(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4));
         console.log(localStorage.getItem("finalprice"));
     })
// // // // // //






<?php
if($inmenu === 1) {?>
        // Item 1
     addToCart1.addEventListener('click',function(){
         counter1 = counter1 + parseInt(menuvalue1.value);
         localStorage.setItem("counter1", counter1);
         cartitem1value.value = parseInt(localStorage.getItem("counter1"));
         menuvalue1.value = 1;

         localStorage.setItem("finalprice",(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4));
         finalprice.innerText = localStorage.getItem("finalprice")+" JOD";
         console.log(finalprice.innerText)
     })

     // Item 2
     addToCart2.addEventListener('click',function(){
         counter2 = counter2 + parseInt(menuvalue2.value);
         localStorage.setItem("counter2", counter2);
         cartitem2value.value = parseInt(localStorage.getItem("counter2"));
         menuvalue2.value = 1;

         localStorage.setItem("finalprice",(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4));
         finalprice.innerText = localStorage.getItem("finalprice")+" JOD";
         console.log(finalprice.innerText)
     })

     // Item 3
     addToCart3.addEventListener('click',function(){
         counter3 = counter3 + parseInt(menuvalue3.value);
         localStorage.setItem("counter3", counter3);
         cartitem3value.value = parseInt(localStorage.getItem("counter3"));
         menuvalue3.value = 1;

         localStorage.setItem("finalprice",(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4));
         finalprice.innerText = localStorage.getItem("finalprice")+" JOD";
         console.log(finalprice.innerText)
     })

     // Item 4
     addToCart4.addEventListener('click',function(){
         counter4 = counter4 + parseInt(menuvalue4.value);
         localStorage.setItem("counter4", counter4);
         cartitem4value.value = parseInt(localStorage.getItem("counter4"));
         menuvalue4.value = 1;

         localStorage.setItem("finalprice",(counter1*price1 + counter2*price2 + counter3*price3 + counter4*price4));
         finalprice.innerText = localStorage.getItem("finalprice")+" JOD";
         console.log(finalprice.innerText)
     })




<?php }?>

function resetvalues(){
    localStorage.clear();
    console.log("Local storage was cleared")
    document.querySelector(".finalfinalprice").value = document.querySelector("#finalprice").innerText;
    console.log("ben")
}



</script>
</body>
</html>