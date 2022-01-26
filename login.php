
<!DOCTYPE html>
<html>
<head>
<title>Admin/Login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/ar.jpg"/>

<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body style="background-image: url('images/bg-intro-01.jpg');">

<!--header    -->



<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Admin Login form</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input name="email" type="email" placeholder="Email Address" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input name="password" type="password" placeholder="Password" required=""/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>
					<div class="bottom">
						<input type="submit" name="sub_btn" value="Log In">
					</div>
					<div class="links">
						<p><a href="#">Forgot Password?</a></p>
						<p class="right"><a href="#">New User? Register</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>or login using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
		
	
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>




   
                      
   <?php
     include_once("config.php");
   session_start();
    if(isset($_SESSION['authentication']) || isset($_COOKIE['authentication']))
    {
        if($_COOKIE['authentication']==1111)
        {
            header("Location:admin.php");
        }
        else
        {
             if($_SESSION['authentication']==1111)
            {
                header("Location:table/table.php");
            }
        }
       
    }
    
    
    if(isset($_POST['sub_btn']))
    {
        $email=$_POST['email'];
        $password=($_POST['password']);
        $check=isset($_POST['checkbox'])?1:0;
        
        $login="SELECT email,password FROM login where email='$email' AND password='$password'";
        
        $result=$con->query($login);
        
        if($result->num_rows>0)
        {
            if($check==1)
            {
                 setcookie('authentication',1111,time()+(60*60*2),'/');
            }
           
            $_SESSION['authentication']=1111;
            header("Location:table/table.php");
        }
        else
        {
            echo "Invalid Username or Password!!!!";
        }
    }
    
    ?>