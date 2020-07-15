<!DOCTYPE html>
<html>
<body>

<?php

$code1 = filter_input(INPUT_GET, 'code1', FILTER_SANITIZE_STRING);

if ($code1 == "guitarra") 
	{
	header("Location:prueba5.html");
	}
if ($code1 !== "guitarra")
	{
	header("Location:prueba4.html");
	}
?>


</body>
</html>