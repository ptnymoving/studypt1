<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPトレーニング</title>
</head>
<body>
<?PHP

$Prefecturelist = array("北海道","東京","大阪","福岡","沖縄");

$html = "<select name=\"prefecture\">\n";

for($i = 0;$i <= count($Prefecturelist) - 1;$i++)
{

	print $Prefecturelist[$i];
	print"<br>";

}



?>



</body>
</html>