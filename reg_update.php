<!DOCTYPE html>
<html>
<head>
<title>RTO Maharashtra</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
<!--css-->

<style>
/*form {
    border: 50px solid #f1f1f1;
}*/

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 8px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	align: center;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 24px 12px 24px;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="RTO WEB TEMPLATE" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand">
								<h1><a href="index.html">RTO <span>Karnataka</span></a></h1>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	<!--header-->
	<!-- banner -->
	
	<!--content-->
<div class="content">
			<!--banner-bottom-->

			<!--student-->
			<div class="student-w3ls">
				<div class="container">
					<h3 class="tittle">Vehicle Registration Status Update</h3>
					<div class="student-grids">
						<div class="col-md-10 student-grid">
							<h4>Enter the details of citizen's Registration entry</h4>
								<p><form action="reg_updated.php" method="get">
          				<br><br>
          				Aadhar number: <input type="text" name="aad" >
						<br>
						Registration ID: <input type="text" name="r_id">
						<br>
						Registration Status: <input type="text" name="reg_status"><br>
						Enter 1 for Approval, -1 for Rejection in Registration Status<br><br>
						
						Assigned Vehicle No: <input type="text" name="vno"><br>
						Fill in Vehicle no if Registration Status=1, otherwise fill NULL<br>
						<br>
						
          				<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
						<p><a href="reg_inspector.php"><h4>Back</h4></a></p>
						<p><a href="logout.php"><h4><font color="red">Logout</font></h4></a></p>
						</form>	</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--student-->
</div>

</form>
		<!--content-->
		<!--footer-->
			<div class="footer-w3">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-8 footer-grid">
						<h4>About Us</h4>
							<p>  Organisation of the Indian government responsible for maintaining a database of drivers and a database of vehicles for Maharshtra.<span>
							    It issues driving licences, organises collection of vehicle excise duty and sells personalised registrations.
                  It also is responsible to inspect vehicle's insurance and clear the pollution test.</span></p>
						</div>
						<div class="col-md-4 footer-grid">
						<h4>Information</h4>
							<ul>
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Mumbai</li>
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>080 2956789</li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:maharashtraa@rto.com"> maharashtra@rto.com</a></li>
								<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sat 10:00 hr to 17:00 hr</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--footer-->
		<!---copy--->
			<div class="copy-section">
				<div class="container">
					<div class="social-icons">
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
				</div>
			</div>
			<!---copy--->
</body>
</html>
