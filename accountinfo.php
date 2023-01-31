<?php 

session_start();

$check = (isset($_SESSION['id']));
if($check){
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
    <title>Account Info</title>
    <link rel="stylesheet" href="CSS/accountinfo.css">
    
</head>
<body>
    <div class="navbar">
        <a href="home.php"><img src="images/krustylogo.png" alt="logo" id="logo"></a>
        <label id="rest_name"><a href="home.php">Krusty Krabs</a></label>
        <?php if ($check) { ?>
        <label style="text-decoration: underline 1px black solid;text-underline-offset: 2px; margin-left: 5px;">Hello, <?php echo $_SESSION['firstname'] ?></label>
        <?php }?>
        <input type="checkbox" name="menu_active" id="menu_active">
        <label for="menu_active"><img src="images/menu.png" alt="dropdown bar" id="menu"></label>
        
        <ul>
            <li class="navitems"><a href="home.php">Home</a></li>
            <li class="navitems"><a href="menu.php">Menu</a></li>

            <li class="navitems" id="opencart"><a>Cart</a></li>
            <li class="navitems"><a href="accountinfo.php" class="active">Account</a></li>
            <li class="navitems"><a href="logout.php">Logout</a></li>
            
        </ul>
    </div>
    
    <img src="images\bikinibottom.jpg" alt="backgroundimage" style="object-fit: cover;width: 100%;height: 100%;position: fixed;z-index: -100;filter: blur(5px);">


    <div class="accountinfobody">
    <form action="accountupdate.php" method="post">
        <div class="accountinfocontainer">
            <h1 class="accountinfotitle">Edit Account Info</h1>

            <div class="email">
                <label for="email" id="email">Email</label>
                <input type="email" name="email" id="emailinput" readonly value="<?php echo $_SESSION['email'] ?>">
            </div>

            <div class="password">
                <label for="password" id="password">Password</label>
                <div style="width: 100%;">
                <input type="password" name="password" id="passwordinput" required style="width: 100%;" value="<?php echo $_SESSION['password'] ?>">
                <img src="images\eye.png" alt="eye" class="eye">
                </div>
            </div>

            <div class="nameinput">
                <div class="firstname">
                    <label for="firstname" id="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstnameinput" required value="<?php echo $_SESSION['firstname'] ?>">
                </div>

                <div class="lastname">
                    <label for="lastname" id="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastnameinput" required value="<?php echo $_SESSION['lastname'] ?>">
                </div>
            </div>

            <div class="gender">
                <label for="gender" id="gender" style="width: 25%;">Gender</label>
                <select name="gender" id="genderinput" style="width: 60%;" required>
                    <option value="" selected disabled hidden>Note: There are only 2 genders</option>

                    <option value="male" <?php if($_SESSION['gender'] === "male"){?>selected<?php } ?>>Male</option>
                    <option value="female" <?php if($_SESSION['gender'] === "female"){?>selected<?php } ?>>Female</option>
                    <option value="other" disabled>Other</option>
                </select>
            </div>

            <div class="dob">
                <label for="dob" id="dob">Date of Birth</label>
                <input type="date" name="dob" id="dobinput" required value="<?php echo $_SESSION['dateofbirth'] ?>">
            </div>

            <div class="phone">
                <label for="phone" id="phone">Phone Number</label>
                <input type="tel" name="phone" id="phoneinput" required value="<?php echo $_SESSION['phonenumber'] ?>">
            </div>

            <div class="submit" style="display: flex; flex-direction: row; justify-content: space-around; width: 90%;">
            <input type="submit" name="submit" id="submit" value="Save">
            <p id="return">Return</p>
            </div>

        </div>

    </form> 
    </div>

    <?php if($check){
        include("cart.php");
        } ?>

    <!-- Footer -->
    <div class="navfooter">
        <div class="footerItems" style="display: flex; flex-direction: row;line-height: 60px; justify-content: space-around; ">
            <a href="contactus.php">Contact Us</a>
            <a href="menu.php">Order Now</a>
            <div class="copyright">© 2022 <span style="text-decoration: line-through;">Among Us</span> Krusty Krabs</div>
        </div>
<!-- Footer -->
    </div>


    <script>
        document.querySelector('.eye').addEventListener('click',function(){
            if(document.querySelector('#passwordinput').type == "password"){
                document.querySelector('.eye').src = "images/redeye.png"
                document.querySelector('#passwordinput').type = "text";
            }else{
                document.querySelector('.eye').src = "images/eye.png"
                document.querySelector('#passwordinput').type = "password";
            }
        })

        document.querySelector('#return').addEventListener('click',function(){
            window.location.href = "home.php";
        })
    </script>
</body>
</html>
<?php } else{
    header("Location: login.php");
}?>