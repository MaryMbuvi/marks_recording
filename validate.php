<!DOCTYPE html>
<html>
<head>
	<title>Validate TSC no.</title>
	<link rel="stylesheet" type="text/css" href="bootstraps/css/bootstrap.min.css">
</head>
<body>
	<div class="col-md-12" id="main_div">
		<div id="first_div" class="col-md-8 offset-2">
		<marquee ><p><b>Enter TCS no. here to validate.</b></p></marquee>
		<form class="form" role="form" method="POST" action="register.php">
		<div class="input-group">
			<pre ><label>TSC Number.:  </label></pre>
			<input type="number" name="user" class="form-control" required="" placeholder="Enter TSC number" >
		</div><br>
			<button class="btn btn-success" style="width: 300px; margin-left: 120px;">Validate</button>
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
	input{
		width: 300px !important;
	}
	form{
		width: 500px;
		margin-left: 100px;
	}
	pre{
		font-family: arial black;
	}
	#first_div{
		background-color: 	#BDB76B;
		padding: 15px;
		margin-top: 20px;
		height: 300px;
		border-radius: 25px;
	}
</style>
</html>