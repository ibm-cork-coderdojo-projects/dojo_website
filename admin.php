
<?php
$password = "SNIP";
if(isset($_COOKIE['pass']) && $_COOKIE['pass'] == $password) {
	$newURL = "http://ibmcorkcoderdojo.com/adminPostMethodPasswordProtectedPage";
	header('Location: '.$newURL);
}
?>
<title>Admin Access</title>
<body id="greenBody">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="pass1.js"></script>
<script type="text/javascript" src="pass2.js"></script>
<form>
<input id="passButton" type="button" value="Enter Protected Area" onClick="passWord()">
</form>
