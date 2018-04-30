<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="bootstraps/css/bootstrap.min.css">
</head>
<body>
	<div id="main_div" class="col-md-12">
	<div class="col-md-8 offset-2" id="first_div">
	<img src="logo.png" alt="School logo">
	<legend>Submit Your Details Here to SignUp</legend>	
	<form method="POST" action="server.php" class="form form-horizontal">

		
		<div class="input-group">
			<pre><label>Enter full name:	</label></pre>
			<input type="number" name="names" class="form-control" required="" placeholder="Order of name must be as per the id"></div><br>

			<label>Occupation:	</label>
			<label class="radio-inline" style="margin-left: 0%"><input type="radio" name="occupation" value="admin" checked="">Admin</label>
			<label class="radio-inline" style="margin-left: 18%"><input type="radio" name="occupation" style="" value="teacher">TSC teacher</label>
	

		<div class="input-group">
			<pre><label>Enter ID number:	</label></pre>
			<input type="number" name="id" class="form-control" required="" placeholder="ID no.."></div><br>

		<div class="input-group">
			<pre><label>Enter email:		</label></pre>
			<input type="email" name="email" required="" class="form-control" placeholder="email">
		</div><br>

			<div class="input-group">
			<pre><label>Phone number:	</label></pre>
			<input type="number" name="phone" required="" class="form-control" placeholder="Phone number">
		</div><br>

			<div class="input-group">
			<pre><label>Choose user name:	</label></pre>
			<input type="name" name="uname" required="" class="form-control" placeholder="User name">
		</div><br>

		<div class="input-group">
		<pre><label for="name">Subjects group:	</label></pre>
      <select class="form-control" class="custom-select" name="subject">
         <option>Mathematics, Physics</option>
         <option>Kiswahili, Geography</option>
         <option>Business Studies,geography</option>
         <option>English,french</option>
         <option>Chemistry, Mathematics</option>
         <option>Biology,Agriculture</option>
         <option>C.R.E, History</option>
         <option>History, Geography</option>
         <option>Homescience, art and craft</option>
         <option></option>
      </select>
   </div><br>

		<div class="input-group">
		<label>Upload passport:</label>
			<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
		<input type="button" name="submit" value="UploadImage" class="btn  btn-info" id="btnImg">	
	</div><br>

			<input type="Submit" name="btnTsc" class="btn btn-success" id="btn">
		
	</form>	
	</div>		
	</div>
</body>
<style type="text/css">
body{
	font-family: arial black;
	background-color: #FFFFE0;
}
#btnImg{
	width: 20px;
}
	#main_div{
		margin-top: 20px;
	}
	#first_div{
		background-color: #F0E68C;
		padding: 20px;
	}
	legend{
		background-color: #BDB76B;
		margin-top: 20px;
		width: 600px;
		margin-left: 100px;
	}
	form{
		margin-top: 20px;
		width: 600px;
		margin-left: 100px;
	}
	#btn{
		width: 150px;
		margin-left: 150px;
	}
	input{
		width: 300px !important;

	}
	pre{
		font-family: arial black;
	}
		img{
		margin-left: 280px;
		width: 200px;
		height: 200px
	}
	#label{
		
		}
</style>
</html>
<!-- <div class="input-group">
			<pre><label>Enter Password:   	</label></pre>
			<input type="Password" name="password" required="" class="form-control" placeholder="********">
		</div><br>

		<div class="input-group">
			<pre><label>Re-type Password: </label></pre>
			<input type="Password" name="password" required="" class="form-control" placeholder="********">
		</div><br> -->