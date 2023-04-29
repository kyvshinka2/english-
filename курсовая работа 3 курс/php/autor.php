<?php
session_start();

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

// проверка на пустые поля 
if(empty($login) || empty($password)) {
    echo "Не оставляйте пустые поля!";
    exit();
}

// подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'English_School');
$mysql->set_charset('utf8');
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
}

// обратное хеширование для проверки пароля
$newPass = password_verify($password, $hash);


$query ="SELECT * FROM `Student` WHERE `Log_In` = '$login' AND `Password` = '$newPass'";

// проверка на логин
$proverka_login = "SELECT * FROM `Student` WHERE `Log_In` = `$login`";
$proverka_password = "SELECT * FROM `Student` WHERE `Password` = '$newPass'";
if(empty($proverka_login) && empty($proverka_password)) {
    echo "Неверный логин или пароль";
    exit();
} else {
    echo session_id(); 
    $_SESSION ['name']= $login;
    header('Location: ./profile.php');
}


/*
if($mysql->query($query) === TRUE){ 
    echo session_id(); 
    $_SESSION ['name']= $login; 
} else{
    echo "Ошибка: ";
 }*/



$mysql->close();
?>