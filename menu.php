<?php 

session_start();

$check = (isset($_SESSION['id']));
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
    <link rel="stylesheet" href="CSS/menu.css">
    <title>Menu</title>
</head>
<body>
    <!-- Nav Bar -->
    <div class="navbar">
        <a href="home.php"><img src="images/krustylogo.png" alt="logo" id="logo"></a>
        <label id="rest_name"><a href="home.php">Krusty Krabs</a></label>
        <?php if ($check) { ?>
        <label style="text-decoration: underline 1px black solid;text-underline-offset: 2px; margin-left: 5px;">Hello, <?php echo $_SESSION['firstname'] ?></label>
        <?php }?>
        
        <input type="checkbox" name="menu_active" id="menu_active">
        <label for="menu_active"><img src="images/menu.png" alt="Drop down list" id="menu"></label>
        
        <ul>
            <li class="navitems"><a href="home.php">Home</a></li>
            <li class="navitems"><a href="#menu" class="active">Menu</a></li>

            <?php if($check){ ?>
            <li class="navitems" id="opencart"><a>Cart</a></li>
            <li class="navitems"><a href="accountinfo.php">Account</a></li>
            <li class="navitems"><a href="logout.php">Logout</a></li>
            <?php }
            else{ ?>
            <li class="navitems"><a href="login.php">Login</a></li>
            <li class="navitems"><a href="signup.php">Sign up</a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- Nav Bar -->

    <!-- Menu Body -->
    <div class="menu-body">
        <img src="images/menuback.jpg" alt="Background Menu" id="background">

        <!-- Menu Navigation -->
        <div class="menunavigation" style="height: 120px;">
            <h1>Menu</h1>
        </div>

        <!-- Menu Items -->
        <div class="menu-Items">

            <div class="items">

                <!-- Item 1-->
                <div class="item1" id="krabby_patty_sandwich">
                    <img src="images/krabbypatty.jpg" alt="Krabby Sandwich" class="itemImage">
                
                    <div class="text-container" style="">
                        <div class="itemheader" style="width: 100%;">
                            <h1 class="title">Krabby Patty</h1>
                            <h1 class="title" style="font-size: 30px; color: #bdd8ec; text-shadow: 1px 1px black;">2JDS</h1>
                        </div>

                        <p class="descripion">"I'll never forget your 100% all-secret patty, secretly assembled with undersea cheese, pickles, lettuce, tomato, onion, all secretly steamed between two fluffy seaweed-sea buns." -Spongebob (Our Master Chef)</p>

                        <div class="button-container">
                            <input type="number" class="counter1" value="1" min="1" oninput="this.value = !!this.value && Math.abs(this.value) >= 1 ? Math.abs(this.value) : null">
                            <button class="addToCart1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Item 2-->
                <div class="item2" id="double_krabby_patty_sandwich">
                    <img src="images/doublekrabbypatty.jpg" alt="Double Krabby Patty" class="itemImage">
                
                    <div class="text-container">
                        <div class="itemheader" style="width: 100%;">
                            <h1 class="title">Double Krabby Patty</h1>
                            <h1 class="title" style="font-size: 30px; color: #bdd8ec; text-shadow: 1px 1px black;">3JDS</h1>
                        </div>

                        <p class="descripion">Prepare for trouble and make it Double!!!</p>
                    
                        <div class="button-container">
                            <input type="number" class="counter2" value="1" min="1" oninput="this.value = !!this.value && Math.abs(this.value) >= 1 ? Math.abs(this.value) : null">
                            <button class="addToCart2">Add to Cart</button>
                        </div>
                    </div>
                </div>

            <div class="item3" id="krabby_Meal">
            <img src="images/krabbypattymeal.png" alt="Krabby Meal" class="itemImage">
                
                <div class="text-container">
                <div class="itemheader" style="width: 100%;">
                    <h1 class="title">Krabby Meal</h1>
                    <h1 class="title" style="font-size: 30px; color: #bdd8ec; text-shadow: 1px 1px black;">4JDS</h1>
                    </div>
                    <p class="descripion">Our masterful Krabby Patty now comes with a drink of your choice!</p>
                    <div class="button-container">
                        <input type="number" class="counter3" value="1" min="1" oninput="this.value = !!this.value && Math.abs(this.value) >= 1 ? Math.abs(this.value) : null">
                        <button class="addToCart3">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <div class="item4" id="double_krabby_Meal">
            <img src="images/doublekrabbypattymeal.png" alt="Double Krabby Meal" class="itemImage">
                
                <div class="text-container">
                <div class="itemheader" style="width: 100%;">
                    <h1 class="title">Double Krabby Meal</h1>
                    <h1 class="title" style="font-size: 30px; color: #bdd8ec; text-shadow: 1px 1px black;">5JDS</h1>
                    </div>
                    <p class="descripion">Prepare for trouble and make it Double!!! wait... i said that before.</p>
                    <div class="button-container">
                        <input type="number" class="counter4" value="1" min="1" oninput="this.value = !!this.value && Math.abs(this.value) >= 1 ? Math.abs(this.value) : null">
                        <button class="addToCart4">Add to Cart</button>
                    </div>
                </div>
            </div>
            
                

            </div>
                    
            </div>

    
    <input type="number" name="pagenumber" id="pagenumber" style="display: none;" value="1">


    <?php if ($check) {
        include("cart.php");
    }?>



    <!-- Footer -->
    <div class="navfooter">
    <div class="footerItems" style="display: flex; flex-direction: row;line-height: 60px; justify-content: space-around; ">
            <a href="contactus.php">Contact Us</a>
            <a href="menu.php">Order Now</a>
            <div class="copyright">© 2022 <span style="text-decoration: line-through;">Among Us</span> Krusty Krabs</div>
        </div>
    <!-- Footer -->
    </div>


</body>
</html>
