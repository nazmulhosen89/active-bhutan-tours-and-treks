<?php
echo "start mail send<br>";
	//include 'config.php';
	include_once('class.phpmailer.php');
$full_name=$_POST['full-name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$product_name=$_POST['product-name'];

$comment=$_POST['comment'];

$ip=$_SERVER['REMOTE_ADDR'];
$datetime=date("Y-m-d H:i:s");
echo "start mail send_2<br>";
$mail             = new PHPMailer(); // defaults to using php "mail()"
echo "start mail send_3<br>";
//$body             = $mail->getFile('contents.html');

$body             = <<<HHHHHHHHHHHHHH
<table width="634" border="0" cellspacing="0" align="center">
  <tr>
    <td width="299">Product Name</td>
    <td width="11"><div align="center"><strong>:</strong></div></td>
    <td width="318">{$product_name}</td>
  </tr>
  <tr>
    <td width="299">Full Name</td>
    <td width="11"><div align="center"><strong>:</strong></div></td>
    <td width="318">{$full_name}</td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$email}</td>
  </tr>
  <tr>
    <td>Contact Number</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$contact}</td>
  </tr>
  <tr>
    <td>Special Requirments</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$comment}</td>
  </tr>
  <tr>
    <td>ip</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$ip}</td>
  </tr>
  <tr>
    <td>Date Time</td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>{$datetime}</td>
  </tr>
</table>
HHHHHHHHHHHHHH;

$body             = eregi_replace("[\]",'',$body);

$mail->From       = $email;
$mail->FromName   = "Swallowtail Tours and Treks";

$mail->Subject    = "Swallowtail Tours and Treks | Request Detailed ltinerary";



$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAddress("bhutanswallowtail@gmail.com;", "travelandholidayinbhutan.com");
$mail->AddCC("info@travelandholidayinbhutan.com", "info");
$mail->AddCC("mshkabir@yahoo.com", "kabir");
$mail->AddCC("ernaz89@gmail.com", "nazmul");
//$mail->AddAttachment("images/phpmailer.gif");             // attachment

//mysql_query("INSERT INTO tbl_guestbook VALUES ('', '$full_name', '$email', '$website', '$comment','0', '$datetime', '$ip', '')") or die (mysql_error());
echo "mail oky_LLLLLLLL";
if(!$mail->Send()) {
?>
<center>
<samp style="font-size:18px; color:#F00;">Your request not send. Plese try later</samp>
</center>

  <?php
} else {

?>
<center>
<samp style="font-size:18px; color:#F00;">Your request has been send</samp>
</center>

<?php
}
  echo "Message sent!";


?>	