<title>Admin Access</title>
<body id="greenBody">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<img id="adminHeader" src="img/logoLong.png"/>
<?php
if(isset($_COOKIE['pass']) && $_COOKIE['pass'] == "SNIP") {

    echo "<br><br>Do this first: (optional) (opens in new tab) <a href='imgupload' target='_blank'>Upload Images here.</a><br><br><form action='post' method='POST'><b>Name:</b><br> <input style='width:400px;' type='text' name='name'><br><br><b>Link:</b><br> <input style='width:400px;' placeholder='After http://ibmcorkcoderdojo.com/course?v=' type='text' name='link'><br><br><b>Information:</b><br><textarea style='width:700px; height:400px;' name='message' placeholder='(Inside <p> in html) (You can use html elements such as <a> and <img src=images/YOUR IMAGE NAME />) (css attributes already set)'></textarea><br><br><input type='submit'></form>";
	//$cookie_name = "pass";
	//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	echo "<br><br>Or, you can edit an existing course here:<br><br>";
	echo "<form action='edit'><select name='c'>";

	$xml=simplexml_load_file("feed.xml") or die("Error: Cannot create object");
	foreach($xml->children() as $course) {
		echo "<option value='" . $course->link . "'>" . $course->name . "</option>";
	}
	echo "</select><br><br><input type='submit'></form><br><br>";

} else {
	echo "Password required";
}
?>
</body>
