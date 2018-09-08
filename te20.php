<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPトレーニング</title>
</head>
<body>
<?PHP

$type = "from";

switch($type)
{

	case"from":
		print"登録フォームです";
		//break;

	case"confirm":
		print"確認画面です";
		break;
	case"exec":
		print"登録処理を実行中";
		break;

	default:
		print"画面がありません";
}


?>



</body>
</html>