<!DOCTYPE html>
<html>
<title>Admin Access</title>
<body id="greenBody">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<img id="adminHeader" src="img/logoLong.png"/>
<br>
<form action="uploadedImg" method="post" enctype="multipart/form-data">
    Select image to upload:
    <br><br><input type="file" name="fileToUpload" id="fileToUpload">
    <br><br><input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>