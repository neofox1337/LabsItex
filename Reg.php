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
}
if($data != NULL && array_key_exists($login, $dataArray)) 
{
    echo "Ошибка! Пользователь с таким логином уже существует!";
}
else 
{
    $dataArray[$login] = $password;
    $data = serialize($dataArray);

    $file = @fopen($filename, "w");
    if($file) 
    {
        fwrite($file, $data);
        fclose($file);
    }
    echo "Вы успешно зарегистрировались!";
}

?> 


