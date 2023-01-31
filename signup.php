<?php 

session_start();

$check = (isset($_SESSION['id']));
if ($check) {
    header("Location: home.php");
} else { ?>
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
    <link rel="stylesheet" href="CSS/signup.css">
    <title>Signup</title>
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
        <label for="menu_active"><img src="images/menu.png" alt="Drop Down list" id="menu"></label>
        
        <ul>
            <li class="navitems"><a href="home.php">Home</a></li>
            <li class="navitems"><a href="menu.php">Menu</a></li>
            
            <li class="navitems"><a href="login.php">Login</a></li>
            <li class="navitems"><a href="signup.php" class="active">Sign up</a></li>
        </ul>
    </div>
    <!-- Nav Bar -->

    <img src="images\bikinibottom.jpg" alt="Background" style="object-fit: cover;width: 100%;height: 100%;position: fixed;z-index: -100;filter: blur(5px);">

    <form action="signupsession.php" method="post">
        <div class="signupcontainer">
            <h1 class="signuptitle">Sign up</h1>

            <div class="email">
                <label for="email" id="email">Email</label>
                <input type="email" name="email" id="emailinput" required>
                <?php if (isset($_GET['error'])) { ?>
            <p class="error" style="font-size: 15px; color: white; font-weight: 600; width: 100%; background: #f24b91; text-shadow: 1px 1px solid black; border: 2px solid black"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
            </div>

            <div class="password">
                <label for="password" id="password">Password</label>
                <input type="password" name="password" id="passwordinput" required>
            </div>

            <div class="nameinput">
                <div class="firstname">
                    <label for="firstname" id="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstnameinput" required>
                </div>

                <div class="lastname">
                    <label for="lastname" id="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastnameinput" required>
                </div>
            </div>

            <div class="gender">
                <label for="gender" id="gender" style="width: 25%;">Gender</label>
                <select name="gender" id="genderinput" style="width: 60%;" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other" disabled>Other</option>
                </select>
            </div>

            <div class="dob">
                <label for="dob" id="dob">Date of Birth</label>
                <input type="date" name="dob" id="dobinput" required>
            </div>

            <div class="phone">
                <label for="phone" id="phone">Phone Number</label>
                <input type="tel" name="phone" id="phoneinput" required>
            </div>

            <input type="submit" name="submit" id="submit">

        </div>

    </form>  


    <!-- Footer -->
    <div class="navfooter">
        <div class="footerItems" style="display: flex; flex-direction: row;line-height: 60px; justify-content: space-around; ">
            <a href="contactus.php">Contact Us</a>
            <a href="menu.php">Order Now</a>
            <div class="copyright">© 2022 <span style="text-decoration: line-through;">Among Us</span> Krusty Krabs</div>
        </div>
    </div> 
    <!-- Footer -->
</body>
</html>
<?php } ?>