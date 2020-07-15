<!DOCTYPE html>
<html>
<body>

<?php

$code1 = filter_input(INPUT_GET, 'code1', FILTER_SANITIZE_STRING);

if ($code1 == "73172567") 
	{
	header("Location:prueba3.html");
	}
if ($code1 !== "73172567")
	{
	header("Location:prueba2.html");
	}
?>


</body>
</html>