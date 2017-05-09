<!--
Modified for course project

AIzaSyCtMV4znoYUxVpMNsWD_1tAHU2PZ-szfN8
-->

<?php
include('session.php');
$connection = mysql_connect("localhost", "root", "dbfood2017");
		$db = mysql_select_db("dbfood", $connection);
		$check= $_SESSION['login_user'];
		$userinfo =mysql_query("select * from users where loginemail='$check'");
		//echo "OKEY";
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <?php
 while( $row = mysql_fetch_array( $userinfo ) ){
		echo "<title>".$row['Fname']."   ".$row['Lname']."</title>";
	}
?>
<!-- Custom Theme files -->
<link href="../../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../../css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="stylesheet" href="../../css/owl.carousel.css" type="text/css" media="all">
<link href="../../css/font-awesome.css" rel="stylesheet"/>

<script src="../../js/jquery-2.2.3.min.js"></script>
</head>

<body> 
	<div class="banner">
		<div class="header">
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header dbfood_logo">  
							<b id="logout"><a href="logout.php">Log Out</a></b>

							<h1><a href="../../index.html">DBFood</a></h1>
						</div> 
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="../../index.html">Home</a></li>	
								<!-- Menu -->
								<li>
								<a href="../../index.html">Menu</a>
								</li>
								<li>
									<a href="../../restaurants.html">Restaurants</a>
								</li> 
								<li>
									<a href="../../contactus.html">Contact us</a>
								</li>

							</ul>
							<div class="mypage">
									 <?php
									 $usernames =mysql_query("select * from users where loginemail='$check'");
										 while( $row = mysql_fetch_array( $usernames ) ){
												echo '<p class="mypagebtn">'.$row['Fname']."  ".$row['Lname'].'</p>';
											}
										?>
							</div>
						</div>
						
					</nav>
				</div>
			</div>
		</div>
		
		
		<div class="banner-text">	
			<div class="container">				
			 
			</div>
		</div>
	</div>
	<!-- //banner -->   
	<div class="aboutme">
		<div class="container">
			<div class="">
				
			</div>
			<div class="title">
				<h3>About me</h3>
			</div> 
			<div class="db-row alert">
				<div class="col-md-6 aboutme-left">
					<img src="../../images/default-user.png" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-6 aboutme-right">
					<?php
							$globName="";
							$fname=mysql_query("select * from users where loginemail='$check'");
							 while( $row = mysql_fetch_array( $fname ) ){
									echo '<p class="firstname" style="font-family: Segoe Print,Calibri; font-size:22px">'."First Name: ".$row['Fname']."</p><br>";
									$globName=$row['Fname'];
									echo '<p class="firstname" style="font-family: Segoe Print,Calibri; font-size:22px">'."Last Name: ".$row['Lname']."</p> <br>";
									echo '<p class="firstname" style="font-family: Segoe Print,Calibri; font-size:22px">'."Phone Number: ".$row['Telphone']."</p><br>";
									echo '<p class="firstname" style="font-family: Segoe Print,Calibri; font-size:22px">'."Current Balance: ".$row['Blance']."</p><br>";
								}
								
								$lastOrder=mysql_query("select orders.typeoffood from orders left join users on users.orderSec=orders.ordernum where users.Fname='$globName'");
										echo '<p class="firstname" style="font-family: Segoe Print,Calibri; font-size:22px">'."Last Orders: "."</p>";
								 while( $row = mysql_fetch_array( $lastOrder ) ){ 
									echo '<p class="firstname" style="font-family: Segoe Print,Calibri; font-size:22px">'.$row['typeoffood']."  "."</p>";
								}
						?>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //add-products -->
	    
	<!-- deals -->
	<div class="db-dealspart">
		<div class="container">
			<h3 class="deals-title">My Activities</h3>
		</div>
	</div>
	<!-- //deals --> 
	<!-- subscribe -->
	<div class="subscribespart"> 
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer agileits-dbfood">
		<div class="container">
			<div class="db_footer_grids">
				<div class="col-xs-7 col-sm-4 footer-grids db-agileits">
					<h3 class="footer-tittle">Company</h3>
					<ul>
						<li><a href="../../about.html">About Us</a></li>
						<li><a href="../../contact.html">Contact Us</a></li>
						<li><a href="../../help.html">Partner With Us</a></li>   
					</ul>
				</div> 
				<div class="col-xs-7 col-sm-4 footer-grids db-agileits">
					<h3 class="footer-tittle">help</h3>
					<ul>
						<li><a href="../../faq.html">FAQ</a></li> 
						<li><a href="../../login.html">Returns</a></li>   
						<li><a href="../../login.html">Order Status</a></li> 
					</ul>  
				</div>
				<div class="col-xs-7 col-sm-4 footer-grids db-agileits">
					<h3 class="footer-tittle">Menu</h3> 
					<ul>
						<li><a href="../../menu.html">All Day Menu</a></li> 
						<li><a href="../../menu.html">Lunch</a></li>
						<li><a href="../../menu.html">Dinner</a></li> 
					</ul>  
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<div class="copyw3-agile"> 
		<div class="container">
			<p>2017 DBFood. All rights reserved | Design by <a href="http://www.eclass.inha.uz/">FoodCARTERS</a></p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="../../js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- Owl-Carousel-JavaScript -->
	<script src="../../js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  
	<!-- start-smooth-scrolling -->
	<script src="../../js/SmoothScroll.min.js"></script>  
	<script type="text/javascript" src="../../js/move-top.js"></script>
	<script type="text/javascript" src="../../js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>