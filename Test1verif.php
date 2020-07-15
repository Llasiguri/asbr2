<!DOCTYPE html>
<html>
<body>

<?php

$code1 = filter_input(INPUT_GET, 'code1', FILTER_SANITIZE_STRING);

if ($code1 == "3725") 
	{echo "bien";
	echo $code1;
	header("Location:prueba1.html");
	}
if ($code1 !== "3725")
	{echo "mal";
	echo $code1;
	header("Location:index.html");
	}
?>


</body>
</html>