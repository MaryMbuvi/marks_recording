<!DOCTYPE html>
<html>
<head>
	<title>Log in page</title>
	<link rel="stylesheet" type="text/css" href="bootstraps/css/bootstrap.min.css">
</head>
<body>
	<div id="main_div" class="col-md-12">
		<marquee behavior="alternate">This site is for use by teachers who have been authorized to make marks enteries only!!</marquee>
		<div class="col-md-2" id="first_div"></div>
		<div class="col-sm-8 offset-2" id="second_div">
			<img src="logo.png" alt="School logo" class="img-fluid">
			<legend>Log in here..</legend>
			<form class="form form-horizontal" id="form" method="POST" action="account.php" role="form">
				<div class="input-group">
					<pre ><label>User name:  </label></pre>
					<input type="text" name="user" class="form-control" required="" placeholder="Enter user name">
				</div><br>
				<div class="input-group">
					<pre ><label>Password:   </label></pre>
					<input type="password" name="password" required="" placeholder="*********" class="form-control"><span class="glyphicon glyphicon-lock"></span>
				</div><br>
				<div class="btn-group">
				<button type="submit" name ="submit" class="btn btn-success" id="btnLogin">Sign in</button> 
				<button type="submit" class="btn btn-success" id="btnReset" name="Reset password" >Reset password</button></div><br><br>
				
			</form>
		</div>
	</div>

</body>
	<style type="text/css">
	body{
		background-color: #FFFFE0;
		font-family: arial black;
	}
		marquee{
			margin-top: 20px;
	}
	#main_div{
		
	}
	#second_div{
		background-color: #F0E68C;
		padding: 15px;
		height: 500px;
		border-radius: 25px;
	}
	#form{
		background-color: #F0E68C;
		width: 600px;
		margin-left: 100px;
	}
	input{
		width: 300px !important;
	}
	#btnLogin{
		width: 220px;
		margin-left: 100Px;
	}
	#btnReset{
		width: 220px;
		margin-left: 5px;
	}
	legend{
		background-color: 	#BDB76B;
		margin-top: 15px;
		text-align: center;
		width: 600px;
		margin-left: 100px;
	}
	img{
		margin-left: 280px;
		width: 200px;
		height: 200px
	}
	#a{
		margin-left:110px;
	}
		pre{
		font-family: arial black;
	}
	</style>
</html> 

