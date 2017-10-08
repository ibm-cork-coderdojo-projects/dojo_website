<title>Admin Access</title>
<body id="greenBody">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<img id="adminHeader" src="img/logoLong.png"/>
<br>
<?php

// Script by Fred Fletcher, Canada.

$name= $_POST['name'];
$link = $_POST['link'];

$xml = new DOMDocument('1.0', 'utf-8');
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load('feed.xml');

$element = $xml->getElementsByTagName('course')->item(0);

$name = $element->getElementsByTagName('name')->item(0);
$link = $element->getElementsByTagName('link')->item(0);

$newItem = $xml->createElement('course');

$newItem->appendChild($xml->createElement('name', $_POST['name']));
$newItem->appendChild($xml->createElement('link', $_POST['link']));

$xml->getElementsByTagName('courses')->item(0)->appendChild($newItem);

$xml->save('feed.xml');

$fileLocation = getenv("DOCUMENT_ROOT") . "/coursesTxt/" . $_POST['link'] . ".txt";
$file = fopen($fileLocation,"w");
$content = $_POST['message'];
fwrite($file,$content);
fclose($file);

echo "Data has been written.";

?>