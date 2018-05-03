<?php
function power($x,$y)
{
	$result=1;
	for($i=0; $i<$y; $i++)
	 $result*=$x;
 return $result;
}

if( isset ($_POST['x'])&& !empty($_POST['x'])&& isset($_POST['y']) && !empty($_POST['y'])&&($_POST['y']>=0))
	$result=power($_POST['x'],$_POST['y']);
//else $reslut="it seems like you gave zero or exponent less than zero";
?>



<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset "utf-8">
	<title>Dzialania matematyczne</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<div id="container">
	<div id="baner"><a href="index.html"><img src="baner.jpg"></a></div>
	<h1>POTĘGOWANIE</h1>
	<form action="" method="post">
	<label for="x">Podaj podstawę potęgi</label> <input type="number" name="x">
	<br><br>
	<label for="y">Podaj dodatni, całkowity wykładnik potęgi</label> <input type="number" name="y">
	<br><br>
	<input type="submit" value="POTEGOWANIE">
	<br><br>
	<div id="result">
	<?php 
		if(isset($result)&& !empty($result))
		echo $result; 
	?>
	</div>
	</form>
</div>
</html>
