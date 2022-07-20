

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="service_style.css">
    <link rel="icon" href="img/logo.png" />
    <title>The Sparks Bank-Create User</title>
</head>

<body>
    <nav class="navbar background h-nav "> 


        <!-- <div class="logo"><img src="img/logo.png" alt="logo"></div> -->
        <ul class="nav-list v-class">

            <li style="font-size: 20px;color: white;"><b>The Sparks Bank</b></li>
            <li style="color: white;"><a href="The Sparks Bank.html">Home</a></li>
            <li style="color: white;"><a href="About Us.php">About Us</a></li>
            <li style="color: white;"><a href="Services.php">Services</a></li>
            <li style="color: white;"><a href="Contact Us.php">Contact Us</a></li>
            
        </ul>
        <div class="button v-class ">

            
            <a href="signup.php"><input type="text" value="Create User" size="4px" class="btn ser-blue"></a>
            
        </div>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <table class="table">
        <tr>

             <td><img src="img/logo.png" alt="logo" class="signupimg"> 
             
           
                    <!-- <img src="img/my_farm_web-removebg-preview.png" alt="myfarmweblogo" class="img2"> --> 


                

                <h1 class="head1">The Sparks Bank</h1>
                
                <form action="index.php" method="post" id="form" role="form">

                <input class="signupform" type="text" name="name" id="name" placeholder="enter your name" required/>

               <input class="signupform" type="text" name="email" id="email" placeholder="enter your E- mail"  required />

              <input class="signupform" type="text" name="state" id="state" placeholder="enter your state"  required />

              <input class="signupform" type="text" name="password" id="password" placeholder="enter your password "  required />

                <input type="submit" value="Sign Up"  name="submit" class="btn btn-dark blue-btn">
                
                    </form>
            </td>
        
            <td><img src="img/man1-removebg-preview.png" alt="img" class="img1"></td>
        </tr>

    </table>
    <link rel="stylesheet" href="js/resp.js">
</body>

</html>
