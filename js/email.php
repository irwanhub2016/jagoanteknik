<?php
$con = mysqli_connect("localhost","id6915393_root","db2018","id6915393_mail");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['submit']))

{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];	

	$insert_mail= mysqli_query($con,"INSERT INTO mail (name,email,subject,message) 
	VALUES ('$name','$email','$subject','$message')");

	if($insert_mail)
	{
		echo '<script language="javascript">';
		echo 'alert("Email Anda Berhasil Terkirim")';
		echo '</script>';
		header( "Refresh:0.5; url=http://localhost/Baker");
	}

	else
	{

		echo '<script language="javascript">';
		echo 'alert("Gagal kirim email")';
		echo '</script>';
		header( "Refresh:0.5; url=http://localhost/Baker");

	}

	mysqli_close($con);

}

else
{
		echo '<script language="javascript">';
		echo 'alert("Oops something wrong")';
		echo '</script>';
		header( "Refresh:0.5; url=http://localhost/Baker");
}



?>

<?php

?>