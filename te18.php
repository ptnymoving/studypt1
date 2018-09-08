<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPトレーニング</title>
</head>
<body>
<?PHP
$username = "user";
$password = "pass";

$db_data["username"] = "user";
$db_data["password"] = "pass";

if($db_data["username"]==$username && $db_data["password"] == $password )
{

	print"会員ページです";
}else{

	print"ログインに失敗しました";
}



?>



</body>
</html>