	<?php
// Get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

if(emty($name)||emty($email)|| empty($message))
{
	echo"please fill all the fields";
}
	else
	{
	
	}	mail("davinderpalmattu42@gmail.com","web message",$message,"from:$name< $email>");
?>