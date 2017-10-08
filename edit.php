<?php
if (empty($_GET)) {
    $newURL = "http://ibmcorkcoderdojo.com/error";
	header('Location: '.$newURL);
}
?>
<title>Admin Access</title>
<body id="greenBody">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<img id="adminHeader" src="img/logoLong.png"/>
<br>
<?php
$password = "c4ebforallcdojo";
if(isset($_COOKIE['pass']) && $_COOKIE['pass'] == $password) {
echo "(optional) (opens in new tab) <a href='imgupload' target='_blank'>Upload Images here.</a><br><br>";
$parameter = htmlspecialchars($_GET['c']);
$xmldoc = new DOMDocument();
$xmldoc->load('feed.xml');

$xpathvar = new Domxpath($xmldoc);

$queryResult = $xpathvar->query("//course[link='{$parameter}']/name");
foreach($queryResult as $result){
        echo "<b>Edit " . $result->textContent . ":</b><br><br>";
}
$url = 'http://ibmcorkcoderdojo.com/adminPostMethodPasswordProtectedPage';
$file = "coursesTxt/" . $parameter . ".txt";

// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);
} else {
	echo "Cookie not set. This wont work without cookies enabled.";
}
if ($parameter == null) {
	$newURL = "http://ibmcorkcoderdojo.com/error";
	header('Location: '.$newURL);
}
?>
<form action="" method="post">
<textarea name="text" style="width:700px; height:300px;"><?php echo htmlspecialchars($text) ?></textarea><br>
<input type="submit" />
<input type="reset" />
</form>
