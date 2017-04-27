<?php 
	$a = (int)file_get_contents("record.txt");
	// echo $a;
	$a++;

	file_put_contents("record.txt", $a);

	$url = "a.jar";


	die('<script>window.location = "a.jar"</script>');
 ?>