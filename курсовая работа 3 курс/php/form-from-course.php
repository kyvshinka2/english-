<?php
session_start();

$name = $_POST['name'];
$course = $_POST['cuorse'];

if(empty($name) || empty($course)) {
    echo "Не оставляйте пустые поля!";
    exit();
}

$_SESSION['$course'] = $course;

header('Location: ./profile.php');
?>