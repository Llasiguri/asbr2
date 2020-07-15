<!DOCTYPE html>
<html>
<body>

<?php

$code1 = filter_input(INPUT_GET, 'code1', FILTER_SANITIZE_STRING);

if ($code1 == "99") 
	{
	header("Location:prueba7.html");
	}
if ($code1 !== "99")
	{
	header("Location:prueba6.html");
	}
?>


</body>
</html>