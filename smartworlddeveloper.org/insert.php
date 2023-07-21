<?php
if(isset($_POST['submit'])){
$to = "amitmaggu591@gmail.com";
$subject = "DLF Residential Leads";
$message = "<p><br> Please check the below details. <br>
<b>Name :</b>".$_POST['name']."<br><b>Email :</b>".$_POST['email']."<br><b>Contact :</b>".$_POST['mobile']."</p>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Google Lead <lead@dlfgurgaonproject.co.in>' . "\r\n";
mail($to, $subject, $message, $headers);
echo '<script>window.location="thanks.php"</script>';
}
?>