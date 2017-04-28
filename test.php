<?php 
	$a = (int)file_get_contents("record.txt");
	// echo $a;
	$a++;

	file_put_contents("record.txt", $a);

	$url = "Dragon Ball Super.jar";


	// die('<script>window.location = "Dragon Ball Super.jar"</script>');
 ?>