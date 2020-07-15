<!DOCTYPE html>
<html>
<body>

<?php

$code1 = filter_input(INPUT_GET, 'code1', FILTER_SANITIZE_STRING);

if ($code1 == "22725") 
	{
	header("Location:prueba2.html");
	}
if ($code1 !== "22725")
	{
	header("Location:prueba1.html");
	}
?>


</body>
</html>