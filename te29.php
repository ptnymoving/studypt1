<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPトレーニング</title>
</head>
<body>
<?PHP

$member = array("name" => "犬山犬","age" => 20, "tall" =>170);

foreach($member as $key => $value)
{
	if($key == "name")
	{
		$title = "名前";
	}else if($key == "age"){
		$title = "年齢";
	}else if($key == "tall"){
		$title = "身長";
	}
	print "$title:$value";
	print "<br>";
}

?>



</body>
</html>