<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if (($_SERVER['REQUEST_METHOD'] === 'POST')):?>
<p>your note will be saved</p>
<?php endif; ?>

<php if (($_SERVER['REQUEST_METHOD'] === 'GET')): ?>
//echo 'you wanted '. $_SERVER['QUERY_STRING'].'<br>';
echo 'GET';
</php>



?>
<form name="notefrm" method="post" action="index.php">
    <textarea name="notetext" rows="5" style="width:100%;">some text</textarea><br>
<!--    info from https://ru.stackoverflow.com/questions/123798/%D0%9F%D0%B5%D1%80%D0%B5%D0%BD%D0%B0%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BD%D0%B0-index-php-->
    <input name="noteid" value="<?php echo $_SERVER['QUERY_STRING'];?>"><br>
    <input type="submit">
</form>
</body>
</html>