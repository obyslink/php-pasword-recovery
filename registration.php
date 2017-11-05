<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration and Login System</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
</head>
<body>
    <h1>USER REGISTRATION AND LOGIN</h1>
	<div class="container">
		<h2>Create a New Account</h2>
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="text" name="first_name" placeholder="FIRST NAME" required="">
				<input type="text" name="last_name" placeholder="LAST NAME" required="">
				<input type="email" name="email" placeholder="EMAIL" required="">
				<input type="text" name="phone" placeholder="PHONE NUMBER" required="">
				<input type="password" name="password" placeholder="PASSWORD" required="">
				<input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
				<div class="send-button">
					<input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
				</div>
			</form>
		</div>
	</div>
</body>
</html>