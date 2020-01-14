<?php

$login = $_POST['login'];   
$password = $_POST['password'];

$filename = "data.txt";

$file = @fopen($filename, "r");
if($file) 
{
    $data = fgets($file);
    fclose($file);
}
else 
{
    $data = NULL;
}
if($data != NULL) {
$dataArray = unserialize($data);

if(array_key_exists($login, $dataArray)) 
{
    if($password == $dataArray[$login]) 
    {
        echo "Вы удачно вошли!";
    }
    else 
    {
        echo "Ошибка! Вы ввели неправильный пароль!";
    }
}
else 
{
    echo "Ошибка! Пользователь с таким логином не существует!";
}
}
else 
{
    echo "Ошибка! Пользователь с таким логином не существует!";
}
?>