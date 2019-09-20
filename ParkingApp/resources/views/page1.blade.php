<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	
   
    <style  type="text/css">
        .my-nav{
            z-index:999;
            position:absolute;
            width:100%;
            height:100px;
            border:0;
            border-radius:0;
        }

		.my-nav .nav{
			margin-top:20px;
			margin-right:50px;
			
		}
		.my-nav .navbar-header{
			margin-top:20px;
			margin-left:50px;
		}
        #myCarousel .item{
			height:500px;
			width:3000px;
		}  
		
		.header{
			height:50vh;
			background-size:cover;
			background-position:center;
			display:flex;
			justify-content:center;
			align-items:center;
			font-family:sans-serif;
		}
		h1{
			color:	#000000;
			font-size:45px;
			text-align:center;
		}
		.search-field {
			height:50px;
			padding:10px;
			border:none;
			border-radius:25px;
			outline:none;
			text-align:center;
		}
		.place{
			width:400px;
		}
		.search-btn{
			height:50px;
			width:150px;
			background:#FF8C00;
			border:none;
			color:#000;
			border-radius:0 25px 25px 0;
			cursor:pointer;
			
		}
		.search-btn:hover{
			background:#ffc107;
			cursor:pointer;
		}
		.btn{
			width:500px;
			background:#FF4500;
		
			border-radius:0 25px 0 0 25px 0;
			
		}
		input[type="text"]{
			background:	#FFD700;
			width:340px;
			height:50px;
			border:none;
			outline:none;
			padding:0 25px;
			border-radius:25px 0 0 25px;
		}
		.row{
			margin-top:80px;
		}
		#image{
			width:300px;
			margin:auto;
		}
		#image img{
			border-radius:50%;
		}
		
		
		.carousel-caption{
			
			text-align:top;
			text-align:center;
			padding-bottom:150px;
			
		}
		.carousel-caption h3{
			font-size:50px;
			padding:20px;
			text-align:left;
			margin-left:10px;
		}

		.caption{
			text-align:center;
			
		}
		#footer{
			background:#FF8C00;
			padding:0 0 30px 0;
			color:#000000;
			font-size:14px;
		}
		#footer .footer-top{
			background:	#FFA500;
			padding:60px 0 30px 0;
		}
		#footer .footer-top .footer-info{
			margin-bottom:30px;
		} 
		#footer .footer-top .footer-info h3{
			font-size:34px;
			margin:0 0 20px 0;
			padding:2px 0 2px 0;
			font-family:"Monserrat",sans-serif;
			font-weight:400;
			letter-spacing:3px;	
		} 
		#footer .footer-top .social-links a{
			font-size:18px;
			display:inline-block;
			background:#007bff;
			color:#fff;
			line-height:1;
			padding:8px 0;
			margin-right:4px;
			border-radius:50%;
			text-align:center;
			width:36px;
			height:36px;trasition:0.3s;
		}
		#footer .footer-top .social-links a:hover{
			background:#0067d5;
			color:#fff;
		}
		#footer .footer-top h4{
			font-size:14px;
			font-weight:bold;
			position:relative;
			padding-ottom:10px;
		}
		#footer .footer-top .footer-contact{
			margin-bottom:30px;
		}
		#footer .footer-top .footer-contact p{
			Line-height:26px;
		}
		#footer .copyright{
			text-align:center;
			padding-top:30px;
		}
		#footer .credits{
			text-align:center;
			font-size:13px;
			color:#f1f7ff;
		}
		#footer .credits a{
			color:#bfddfe;
		}
		#footer .credits a:hover{
			color:#f1f7ff;
		}
	
		
    </style>
</head>
<body>
    <!--Navigation bar-->
    <nav class="my-nav navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ParKing</a>
            </div>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<!--start carousel-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  			<!-- Indicators -->
  			<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			<li data-target="#myCarousel" data-slide-to="1"></li>
    			<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
  			</ol>

  			<!-- Wrapper for slides -->
  			<div class="carousel-inner">
    			<div class="item active" id="myCarousel1">
      				<img src="/images/pic1.jpg" alt="Los Angeles" style="width:50%;" >
					<div class="carousel-caption">
        				<h3>Seamless experience.....</h3>
        				
      				</div>
    			</div>

    			<div class="item" id="myCarousel2" >
      				<img src="/images/pic2.jpg" alt="Chicago" style="width:50%;">
					<div class="carousel-caption">
        				<h3>Hassel free mind..... </h3>
        			</div>
    			</div>

    			<div class="item" id="myCarousel3">
      				<img src="/images/pic3.jpg" alt="New York" style="width:50%;" >
					  <div class="carousel-caption">
        					<h3>Earn an income.....</h3>
      					</div>
    			</div>
				<div class="item" id="myCarousel4">
      				<img  src="/images/pic4.jpg" alt="New York" style="width:50%;"  >
					  <div class="carousel-caption">
        				<h3>....</h3>
      				</div>
    			</div>
				<div class="item" id="myCarousel4">
      				<img  src="/images/pic5.jpg" alt="New York" style="width:50%;"  >
					<div class="carousel-caption">
        				<h3>Assure the secure...</h3>
       					 
     			 	</div>
    			</div>
  			</div>

  			<!-- Left and right controls -->
  			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left"></span>
   				 <span class="sr-only">Previous</span>
 		 	</a>
  			<a class="right carousel-control" href="#myCarousel" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
    <!--end of the carousel-->
		</div><!--responsivness-->
	</div><!--row-->
	
	</div>
	<div class="header">
	<form> 
		<button type="button" class="btn"><h1><b>PARKING AT</b></h1></button>
		</br>
		</br>
		</br>
		</br>
		<div class="form-box">
			<input type="text" class="search-field place" placeholder="Where do yo want to park?">
			
			<input type="submit" class="search-btn"  name="" value="Search">
		</div>
	</form>
	</div>
	<!--bottom pictures-->
	<div class="row">
		<div class="col-sm-6">
			<div id="image">
				<img src="/images/earn.jpeg" class="rounded-circle" alt="earn money" width="300px" height="300px">	
				<div class="caption">
					<h2>Earn an income</h2>	
					<p>Misspend spare spaces or bare lands in vain?Add your block and earn money by staying at home..</p>
				</div>
				
			</div>
			
		</div>
  		<div class="col-sm-6">
		  	<div id="image">
				<img src="/images/reserve2.png" class="rounded-circle" alt="" width="300px" height="300px">
				<div class="caption">
					<h2>Reserve your slot</h2>
					<p class="para2">Do you roaming for a parking space?Release your hassle by reserving a parking space to your vehicle..</p>	
				</div>
				
			</div>  
		</div>
	</div>
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 footer-info">
						<h3>Parking</h3>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>Contact us</h4>
							<p>
								UCSC Building Complex,<br>
					 			35 Reid Ave, <br>
					 			Colombo 00700<br>
					 			<strong>phone:</strong>+91 0000000000<br>
					 			<strong>Email:</strong>Parkingwebsite@gmail.com
							</p>
						<div class="social-links">
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 footer-contact">
							<h4>About Us</h4>
							<p>----------------------------------------<br>
							----------------------------------------</p>
					</div>
				</div>	
			</div>		
		</div>
		<div class="container">
						<div class="copyright">
							&copy;Copyright <strong>ParKing</strong>.All Rights Reserved	
						</div>
						<div class="credits">
							Design by <a href="#">Parking</a>
						</div>
				</div>
	</footer>	
</body>
</html>