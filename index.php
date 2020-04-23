<script>
    function getdata()
	{
		var a;
		a = <?php echo $1?>;
		document.getElementById("ketqua").value = a;
	}
</script>

<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <title>Trương Nhật Phi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Xét Tam giác :</h1>
<?php
	if(isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"]))
		{
			$a = $_GET["a"];
			$b = $_GET["b"];
			$c = $_GET["c"];
			if( $a +$b > $c && $a+$c>$b && $b+$c > $a)
			{
				if($a==$b && $b==$c)
				$1 = "Tam Giác Đều ";
				elseif($a==$b || $a==$c || $b==$c )
				$1 = "Tam Giác Cân ";
				elseif(pow($a,2)==pow($b,2)+pow($c,2)||pow($b,2)==pow($c,2)+pow($c,2)|| pow($c,2)==pow($b,2)+pow($a,2))
				$1 = "Tam Giác Vuông ";
				elseif(($a==$b || $a==$c || $b==$c ) && (pow($a,2)==pow($b,2)+pow($c,2)||pow($b,2)==pow($c,2)+pow($c,2)|| pow($c,2)==pow($b,2)+pow($a,2)))
				$1 = "Tam Giác Vuông Cân ";
				else
				$1 = "Tam Giác Thường ";
			}
			else
			$1 = " Đây không phải tam giác ";
		}
		
?>
<form nethod="GET">
<div> Nhập canh A </div>
<input name="a" type="text" id ="a" value="<?php echo $_GET["a"];?>" />
<br>
<div> Nhập canh B </div>
<input name="b" type="text" id ="b" value="<?php echo $_GET["b"];?>" />
<br>
<div> Nhập canh C </div>
<input name="c" type="text" id ="c" value="<?php echo $_GET["c"];?>" />
<input name="ketqua">
<input type="button" name="check" onclick="getdata()" />
</form>