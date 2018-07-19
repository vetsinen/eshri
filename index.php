<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>enhanced shrib</title>
</head>
<body>

<?php
$BASIC_URL = 'https://eshri.cc.ua/';

if (($_SERVER['REQUEST_METHOD'] === 'POST')) {
    file_put_contents($_POST['noteid'] . '.md', $_POST['notetext']);
    header("Location: ".$_POST['noteid'] );
}

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

if (($_SERVER['REQUEST_METHOD'] === 'GET')) {
    if (isset($_SERVER['QUERY_STRING']) && !$_SERVER['QUERY_STRING']) {
        header("Location: " . $BASIC_URL . generateRandomString());
        die();
    };
}

if (!isset($_SERVER['QUERY_STRING']) || !$_SERVER['QUERY_STRING']) {
    $_SERVER = [];
    $_SERVER['QUERY_STRING'] = generateRandomString();
}
$note = @file_get_contents($_SERVER['QUERY_STRING'].'.md')

?>

<form name="notefrm" method="POST" action="">
    <textarea name="notetext" rows="5" style="width:100%;"><?=$note?></textarea><br>
    url for note http://eshri.cc.ua/<input name="noteid" value="<?php echo $_SERVER['QUERY_STRING']; ?>"><br>
    <input type="submit" value="save">
</form>


</body>
</html>