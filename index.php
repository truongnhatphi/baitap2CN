

<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Trương Nhật Phi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Xét Tam giác :</h1>

<form method="POST">
<div> Nhập canh A </div>
<input name="a" type="text" id ="a">
<br>
<div> Nhập canh B </div>
<input name="b" type="text" id ="b">
<br>
<div> Nhập canh C </div>
<input name="c" type="text" id ="c">
<?php
	if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
		{
			$a = $_POST["a"];
			$b = $_POST["b"];
			$c = $_POST["c"];
			if( $a +$b > $c && $a+$c>$b && $b+$c > $a)
			{
				if($a==$b && $b==$c)
				$l = "Tam Giác Đều ";
				elseif($a==$b || $a==$c || $b==$c )
				$l = "Tam Giác Cân ";
				elseif(pow($a,2)==pow($b,2)+pow($c,2)||pow($b,2)==pow($c,2)+pow($c,2)|| pow($c,2)==pow($b,2)+pow($a,2))
				$l = "Tam Giác Vuông ";
				elseif(($a==$b || $a==$c || $b==$c ) && (pow($a,2)==pow($b,2)+pow($c,2)||pow($b,2)==pow($c,2)+pow($c,2)|| pow($c,2)==pow($b,2)+pow($a,2)))
				$l = "Tam Giác Vuông Cân ";
				else
				$l = "Tam Giác Thường ";
			}
			else
			$l = " Đây không phải tam giác ";
		}
		
?>

<input type="submit" name="click" value="Check"/>
<?php
	if(isset($_POST['click']))
	{
		echo $l;
	}
?>
</form>
</body>
</html>
