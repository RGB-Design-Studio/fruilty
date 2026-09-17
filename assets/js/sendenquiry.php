<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
$mailer = new PHPMailer\PHPMailer();
$mailer->isSMTP();
$mailer->SMTPDebug = 0;
$mailer->SMTPAuth = true;
$mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mailer->IsHtml(true);
$mailer->IsHtml(true);
$mailer->Host = "smtp.gmail.com";
$mailer->SMTPSecure = "ssl";
$mailer->Port = 465;
$mailer->From = "fruitlyagro@gmail.com";
$mailer->FromName = "Fruitly Agro";
$mailer->Username = 'fruitlyagro@gmail.com';
$mailer->Password = 'dlkafpqlgqbfmcyr';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Fruitly Agro </title>



<meta property="og:type"
    content="website">

<meta property="og:title"
    content="Fruitly | Premium Fresh Fruits">

<meta property="og:description"
    content="Fruitly Agro Solutions brings premium fresh fruits directly from trusted farmers to customers in India and international markets.">

<meta property="og:url"
    content="https://fruitly.in/">

<meta property="og:site_name"
    content="Fruitly">

<!-- 1200 × 630 PNG -->
<meta property="og:image"
    content="https://fruitly.in/assets/images/logo-og.png">

<meta property="og:image:width"
    content="1200">

<meta property="og:image:height"
    content="630">

<meta property="og:image:type"
    content="image/png">

<meta property="og:locale"
    content="en_IN">



<meta name="twitter:card"
    content="summary_large_image">

<meta name="twitter:title"
    content="Fruitly | Premium Fresh Fruits">

<meta name="twitter:description"
    content="Fruitly Agro Solutions brings premium fresh fruits directly from trusted farmers to customers in India and international markets.">

<meta name="twitter:image"
    content="https://fruitly.in/assets/images/logo-og.png">
		 <script>
		function redirectPage(){
			window.location='https://fruitly.in/';
		}

		</script> 
	</head>
	<body topmargin="5" bottommargin="5" onload="redirectPage()">
		<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
			<tr>
				<td>
					<?php
					$f_name = $_REQUEST['first_name']; 
					$l_name = $_REQUEST['last_name']; 
					$Email = $_REQUEST['email'];
					// $Subject = $_REQUEST['Subject']; 
					$Text = $_REQUEST['message'];
				 // $Mobile = $_REQUEST['phone'];

						//$mailer->addAddress($Email, $Name);
				 		$mailer->addAddress('fruitlyagro@gmail.com', 'Fruitly Agro');

						$mailer->Subject = 'Fruitly Agro Enquiry - ';
						$body="<font face='Arial' style='font-size: 10pt' color='#333333'>
						    First Name         = " . $f_name.  "   	<br>
							Last Name         = " . $l_name.  "   	<br>
							Email Id     = " . $Email. "			<br>
							Subject        = " . $Subject.  "          <br>
							Message	     = " . $Text. " 			<br> 
							</font>" ;
						//$mailer->MsgHTML($body);
						$mailer->Body = $body;
						//var_dump($mailer->send());die;
						if (!$mailer->send()) {
						  //echo "Mailer Error: " . $mailer->ErrorInfo; die;
						} else {
						   echo "Your form has been sent!";
						}
					?>
				</td>
			</tr>
		</table>
	</body>
</html>