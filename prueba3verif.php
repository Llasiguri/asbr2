<!DOCTYPE html>
<html>
<body>

<?php

$code1 = filter_input(INPUT_GET, 'code1', FILTER_SANITIZE_STRING);

if ($code1 == "22/07/2019") 
	{
	header("Location:prueba4.html");
	}
if ($code1 !== "22/07/2019")
	{
	header("Location:prueba3.html");
	}
?>


</body>
</html>