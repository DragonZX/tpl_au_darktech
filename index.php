<?php
#Initial Block
date_default_timezone_set('America/Los_Angeles');
$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'переменная зона скрипта отличается от заданной в INI-файле.';
} else {
    echo 'переменная зоны скрипта и настройки INI-файла совпадают.';
}
?>

<html>
<head>
<title>DarkTech Template</title>
</head>
<body>
<footer>Copyright &copy; 2009-2015 Amvis United Company Limited. <a href="https://gnu.org/licenses/gpl-3.0.txt">GNU/GPL v3</a></footer>
</body>
<html>
