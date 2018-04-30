
<?php 
session_start();

$errors = array();

$db = mysqli_connect('localhost','root','','marksrecording');
if (isset($_POST['submit'])) {
	# code...
	$name = mysqli_real_escape_string($db,$_POST['names']);
	$occupation = mysqli_real_escape_string($db,$_POST['occupation']);
	$id = mysqli_real_escape_string($db,$_POST['id']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$username = mysqli_real_escape_string($db,$_POST['uname']);
	$phone = mysqli_real_escape_string($db,$_POST['phone']);
	$passport = mysqli_real_escape_string($db,$_POST['path']);

	if (empty($name)) {
		# code...
		array_push($errors, "Please enter full name");
	}
	if (empty($occupation)) {
		# code...
		array_push($errors, "Occupation cannot be empty");
	}
	if (empty($id)) {
		# code...
		array_push($errors, "Please enter your id no.");
	}
	if (empty($email)) {
		# code...
		array_push($errors,"Please enter your email");
	}
		if (empty($phone)) {
		# code...
		array_push($errors,"Please enter phone number");
	}

	$userquery = "SELECT * FROM marksrecording WHERE uname = '$username' LIMIT 1";
	$marksrecording = mysqli_query(db,$userquery);

	$fetch = mysqli_fetch_assoc($marksrecording);
	if ($fetch['username']) {
		# code...
		array_push($errors, "username exists");
	}
}
if (count($errors)==0) {
	# code...
	$data = "INSERT INTO register(names,occupation,id,email,phone,uname,subject,path) values('$name','$occupation','$id','$email','$phone','$uname','subject','$target_file')";
}

 ?>
---