<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

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
		echo '<script>';
		echo    'window.location.href = "https://jagoanteknik.000webhostapp.com"';
		echo '</script>';
	}

	else
	{

		echo '<script language="javascript">';
		echo 'alert("Gagal kirim email")';
		echo '</script>';
		echo '<script>';
		echo    'window.location.href = "https://jagoanteknik.000webhostapp.com"';
		echo '</script>';
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