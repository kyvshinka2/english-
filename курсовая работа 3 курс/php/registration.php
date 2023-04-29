<?php
// Удаляет все лишнее и записываем значение в переменную
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

// проверка на пустые поля
if(empty($name) || empty($login) || empty($password)) {
    echo "Не оставляйте пустые поля!";
    exit();
}

// проверка на наличие пробелов в строке
if (preg_match("|\s|", $login) ) {
    echo "Логин содержит пробельные символы, уберите их";
} 

if (preg_match("|\s|", $password) ) {
    echo "Пароль содержит пробельные символы, уберите их";
} 

// проверка длин строк
if (mb_strlen($login) < 5 || mb_strlen($login) > 20) {
    echo "Недопустимая длина логина (от 5 до 20 символов)";
    // после этой строчки код не будет работать дальше
    exit(); 
} else if (mb_strlen($name) < 10 || mb_strlen($name) > 60) {
    echo "Недопустимая длина имени (от 10 до 60 символов)";
    exit();
} else if (mb_strlen($password) < 6 || mb_strlen($password) > 100) {
    echo "Недопустимая длина пароля (от 6 до 100 символов)";
    exit();
}

// хеширование пароля
$hash = password_hash($password, PASSWORD_BCRYPT);
//var_dump($hash);

// подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'English_School');
$mysql->set_charset('utf8');
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
    exit();
} else {
    echo "Успешное подключение <br>";
}

// проверка логина на совпадение данных
$proverka = "SELECT count(Log_In) as users FROM Student WHERE Log_In = '$login';";
$res = $mysql->query($proverka);
// Получение строки результирующей таблицы в виде массива
$row = $res->fetch_row();
$count = $row[0];
// выполнение запроса
if($count) {
    echo "Данный логин уже есть, придумайте другой";
    exit();
} else {
    echo "такого пользователя нет";

    $query = "INSERT INTO `Student` (`Full name`, `Log_In`, `Password`) VALUES('$name', '$login', '$hash')";
    if($mysql->query($query) === TRUE){
       echo "Данные успешно добавлены";
    } else{
       echo "Ошибка: ";
    }
}
//if($res = $mysql->query($proverka) === TRUE) {
//    // 
//    if(!empty($res)) {
//        echo "Данный логин уже есть, придумайте другой";
//        // после этой строчки код дальше не будет выполняться
//        exit();
//    } 
//} else {
//    // если такого логина нет, то данные пользователя успешно добавляются
//    $query = "INSERT INTO `Student` (`Full name`, `Log_In`, `Password`) VALUES('$name', '$login', '$hash')";
//    
//      if($mysql->query($query) === TRUE){
//         echo "Данные успешно добавлены";
//      } else{
//         echo "Ошибка: ";
//      }
//    }


/*
// !empty - чтобы поле было заполнено
if(!empty($zapros)) {
    echo "Данный логин уже есть, придумайте другой";
    // после этой строчки код дальше не будет выполняться
    exit();
} else {
// если такого логина нет, то данные пользователя успешно добавляются
$query = "INSERT INTO `Student` (`Full name`, `Log_In`, `Password`) VALUES('$name', '$login', '$hash')";

  if($mysql->query($query) === TRUE){
     echo "Данные успешно добавлены";
  } else{
     echo "Ошибка: ";
  }
}*/

$mysql->close();

// переход на страницу с авторизацией
header('Location: ../page/autor.html');

// прекращение выполнения кода
exit();
?>