<?php  
session_start();  
 
$dbhost = "localhost"; // Адрес сервера MySQL. На локальном сервере этот параметр всегда будет 'localhost', но на хостинге он соответствует адресу хостера.
$dbname = "frogling_frogid"; // Имя базы данных 
$dbuser = "frogling_main"; // Пользователь базы данных
$dbpass = "171782dl"; // Пароль пользователя базы данных  
 
mysql_connect($dbhost, $dbuser, $dbpass) or die("Ошибка MySQL: " . mysql_error());  
mysql_select_db($dbname) or die("Ошибка MySQL: " . mysql_error());  
?>