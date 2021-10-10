<html>
<head>
	<title>Registration Form</title>
</head>
 <style>
    .content{
      max-width: 20%;
      margin: auto;
    }
</style>
<body style="background-color:darkgreen";>
    <h1 style="text-align: center;">Registration Form</h1>
<form action="Registration-form.php" method="post"><div class="content">   
    <b>Surname: </b><br>
    	<input type="text" placeholder="Enter Surname" name="surname" ><br>
    <b>First Name: </b><br>
   		 <input type="firstname" placeholder="Enter First Name" name="firstname" ><br>
    <b>Address: </b><br>
    	<input type="address" placeholder="Enter Address" name="address" ><br><br>
    <b>Gender: </b><br>
		  <input type="radio" name="gender"value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other	
	  <br><br>
	  <b>Select Course:</b>
		<select name="course">
  			<option value="select">--Select--</option>
  			<option value="BSED">BSED</option>
  			<option value="BSHM">BSHM</option>
  			<option value="BSIT">BSIT</option>
  			<option value="BSCS">BSCS</option>
  			<option value="BSF">BSF</option>
  			<option value="BSBM">BSBM</option>
		</select><br><br>
	<input type="submit" value="register" name="btnsubmit">
</div>
    <hr>
</form><br>
<?php
  if (isset($_POST["btnsubmit"])){
    echo "<b> REGISTERED </b>";
  	echo "<br> Name: ".$_POST['firstname'].' '.$_POST['surname'];
  	echo "<br> Address: ".$_POST['address'];
  	echo "<br> Gender: ".$_POST['gender'];
  	echo "<br> Course: ".$_POST['course'];
  }
?>
</body>
</html>


