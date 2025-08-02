<?php
$to = 'admin@nateshmurugan.com';
$name = $_POST['name'];
$email = $_POST['email'];
$mailsubject = $_POST['subject'];
$message = $_POST['message'];

//$email = $_POST['email'];
$subject = "Enquiry from nateshmurugan.com";

$message = "
<html>
<head>
<title>Enquiry Details</title>
</head>
<body>
<h3 style='font-weight: normal;'><b style='font-weight: bold;font-style: italic;'>$name</b> Filled Enquiry Form</h3>
<table style='border:2px solid #ec1d24;border-collapse: collapse;width: 100%;'>
  <tr>
  <td colspan='2' style='padding:10px 0;'><img src='https://www.nateshmurugan.com/assets/img/logo.jpg' style='display: inherit;margin: 0 auto;' /></td>
  </tr>
  <tr>
    <td style='border:2px solid #ec1d24;padding:10px;width: 5%;'>Name</td>
    <td style='border:2px solid #ec1d24;padding:10px'>$name</td>
  </tr>
  <tr>
    <td style='border:2px solid #ec1d24;padding:10px;width: 5%;'>Email</td>
    <td style='border:2px solid #ec1d24;padding:10px'>$email</td>
  </tr>
  <tr>
    <td style='border:2px solid #ec1d24;padding:10px;width: 5%;'>Subject</td>
    <td style='border:2px solid #ec1d24;padding:10px'>$mailsubject</td>
  </tr>
  <tr>
    <td style='border:2px solid #ec1d24;padding:10px;width: 5%;'>Message</td>
    <td style='border:2px solid #ec1d24;padding:10px'>$message</td>
  </tr>
</table>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

if($_POST) {
    if(mail($to,$subject,$message,$headers)) {
        echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';
  }
  else 
  {
	echo '<div class="status-icon invalid"><i class="fa fa-times"></i></div>';
  }
}

?>