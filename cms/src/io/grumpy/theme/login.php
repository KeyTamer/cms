<?php
session_start();
if(!$_SESSION['logged_in'])
	header("Location: url/login.php");
?>
<html>
<head>
</head>
<body>
<form>

</form>
</body>
</html>
