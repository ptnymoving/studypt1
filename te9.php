<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPトレーニング</title>
</head>
<body>
<?PHP
$member[] = ["name" =>"猫村猫","age"=>20,"tall"=>170];
$member[] = ["name" =>"犬村犬","age"=>30,"tall"=>170];
$member[] = ["name" =>"熊村熊","age"=>40,"tall"=>180];
$member[] = array("name" =>"kiji","age"=>40,"tall"=>180);

print $member[0]["name"];
print "<br>";
print $member[1]["age"];
print "<br>";
print $member[2]["tall"];
print "<br>";
print $member[3]["name"];
?>


</body>
</html>