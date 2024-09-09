<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<style>
		body{
			background-image: url('thumbnail1.jpg');
			min-height: calc(100vh - 10px);
			background-size: cover;
			background-position:;
		}
	</style>
	<style type="text/css">
		*{
			text-decoration: none;
		}
		.navbar{
			background: rgb(133, 44, 62); font-family: calibri; padding-right: 15px;padding-left: 15px;
		}
		.navdiv{
			display: flex; align-items: center; justify-content: space-between;
		}
		.logo a{
			font-size: 35px; font-weight: 600; color: white;

		}
		
		li{
			list-style: none; display: inline-block;

			
			
			
		}
		li a{
			color: white; font-size: 18px; font-weight: bold; margin-right: 25px;
		}
		button{
			background-color: rgb(6, 7, 46); margin-left: 10px; border-radius: 10px; padding: 10px; width: 90px;
		}
		button a{
			color: white; font-weight: bold; font-size: 15px;
		
		}
	</style>
</head>
<body>
	<nav class="navbar">
		<div class="navdiv">
			<div class="logo"><a href="#">World class Fitness</a> </div>
			<ul>
				<li><a href="plan.php">Plan</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
                <li><a href="member.php">members</a></li>
                <li><a href="payment.php">payment</a></li>
				<button><a href="sign up.php">Sign up</a></button>
				<button><a href="log in.php">Log in</a></button>
			</ul>
		</div>
	</nav>
	
        
        
		
			<style>
				h2{
					font-family: calibri;
					color: whitesmoke;
				}
				footer{
					background-color:none;
				}
				.social-icon1{
					color:aqua;
					font-size:3rem;
				}
				.social-icon2{
					color:rgb(179, 9, 167);
					font-size:3rem;
				}
				.social-icon3{
					color:rgb(23, 100, 215);
					font-size:3rem;
				}
				.social-icon4{
					color:rgb(8, 88, 48);
					font-size:3rem;
				}
			</style>
		<footer>
			<h2>FOLLOW OUR SOCIAL MEDIA PAGES ON:</h2>
			<a class="social-icon1" href="https://twitter.com" target="_blank">
		<ion-icon name="logo-twitter"></ion-icon></a>
		<a class="social-icon2" href="https://instagram.com" target="_blank">
		<ion-icon name="logo-instagram"></ion-icon></a>
		<a class="social-icon3" href="https://facebook.com" target="_blank">
		<ion-icon name="logo-facebook"></ion-icon></a>
		<a class="social-icon4" href="https://whatsapp.com" target="_blank">
		<ion-icon name="logo-whatsapp"></ion-icon></a>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

		</footer>
		
</body>
</html>