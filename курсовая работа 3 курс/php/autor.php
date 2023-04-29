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

// хеширование пароля
$hash = password_hash($password, PASSWORD_BCRYPT);
// обратное хеширование для проверки пароля
$newPass = password_verify($password, $hash);
// $query ="SELECT * FROM `Student` WHERE `Log_In` = '$login' AND `Password` = '$newPass'";



// проверка логина на совпадение данных
$proverka = "SELECT count(Log_In) as users FROM Student WHERE Log_In = '$login';";
$res = $mysql->query($proverka);
// Получение строки результирующей таблицы в виде массива
$row = $res->fetch_row();
$count = $row[0];

// проверка пароля на совпадение данных
$proverka2 = "SELECT count(Log_In) as users FROM Student WHERE Password = '$hash';";
$res2 = $mysql->query($proverka2);
// Получение строки результирующей таблицы в виде массива
$row2 = $res2->fetch_row();
$count2 = $row2[0];

// выполнение запроса
// проверка логина
if($count) {
    // проверка пароля
    if($count2) {
        echo session_id(); 
    $_SESSION ['name']= $login;
    header('Location: ./profile.php');
    } else {
        echo "Неверный пароль";
        exit();
    }
} else {
    echo "Неверный логин";
}




// проверка на логин
$proverka_login = "SELECT count(Log_In) as users FROM Student WHERE Log_In = '$login';";
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