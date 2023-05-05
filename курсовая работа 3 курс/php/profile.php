<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <!-- бутстрап -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- мои стили -->
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/autor.css">
    <link rel="stylesheet" href="../style/profile.css">
</head>

<body>
<?php
session_start();
?>
    <!-- шапка -->
    <div id="page1" class="container-fluid">
        <div class="row">
            <div class="col head-text">
                <a href="../index.html">Главная</a>
            </div>
            <div class="col head-text">
                <a href="../page/registr.html">Присоеденяйся</a>
            </div>
            <div class="col head-text">
                <a href="./master-class.php">Мастер классы</a>
            </div>
            <div class="col head-text">
                <a href="./english-prosto.php">Английский просто</a>
            </div>
            <div class="col head-text">
                <a href="../profile.php">Профиль</a>
            </div>
        </div>
    </div>

    <!-- блок 1 -->
    <main>
        <div class="container col-xxl-9 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-6 py-6">
                <div class="col-9 col-sm-8 col-lg-6">
                    <img src="../img/people.png" class="d-block mx-lg-auto width-img" alt="Bootstrap Themes" width="600" height="400" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <img class="width-img-2" src="../img/logotype.png">
                    <p class="lead">Онлайн-школа «Seminary» — современный сервис персонального обучения английскому языку. Помогаем нашим ученикам повышать уровень знаний и получать удовольствие от каждого урока.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button onclick="document.location='./page/teacher.html'" type="button" class="btn btn-danger bat">Выбрать преподавателя</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">История школы</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- модальное окно -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5 h2-text" id="staticBackdropLabel">О нас</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <p class="modal-text">Мы работаем в сфере преподавания английского языка онлайн 11 лет. С 2009 года мы ведем блог об английском языке Engblog.ru: пишем статьи об изучении и преподавании английского языка и даем консультации в комментариях. Пользуясь материалами
                        Engblog.ru, вы можете абсолютно бесплатно совершенствовать знания английского языка, работать над грамматикой и словарным запасом. Онлайн-школа английского языка «Инглекс» появилась летом 2011 года, когда наши постоянные читатели
                        стали обращаться к нам с просьбой проводить занятия по Skype. Наша школа объединила в себе богатый преподавательский опыт и понимание процессов работы в Интернет среде. </p>
                    <p class="modal-text">Люди с различным профессиональным образованием: филологи, менеджеры, представители технических профессий — смогли найти достойное применение своим знаниям в нашей школе. Мы очень трепетно относимся к вопросам обучения, и позиционируем
                        себя не как база репетиторов, а как школа. Благодаря такому серьезному отношению к работе мы выработали нашу собственную методику обучения онлайн.</p>
                    <p class="modal-text">Мы уверены в знаниях, которые получают наши студенты, потому что все наши преподаватели проходят трёхступенчатый отбор, прежде чем приступить к работе. А наши опытные методисты завершают процесс адаптации нового преподавателя, обучая
                        их тому, как наиболее эффективно проводить занятия онлайн. Организация обучения — другой важный аспект нашей работы. Наши менеджеры работают семь дней в неделю с 9:00 до 21:00, обеспечивая постоянную поддержку студентам. Мы постарались
                        предоставить разнообразие способов оплаты, чтобы финансовые вопросы не стояли на пути обучения.</p>
                    <p class="modal-text">Кроме того, наш финансовый менеджер готов оказать любую помощь в процессе оплаты занятий. И, конечно, мы держим руку на пульсе в работе с нашими преподавателями, поддерживаем их и помогаем в решении любых задач. У нас занимаются самые
                        разные люди, проживающие в странах СНГ и за рубежом. Мы знаем, что у всех студентов разные цели изучения английского языка: карьерный рост, учеба, путешествия, эмиграция или личностное развитие. Мы готовы предложить каждому ученику
                        внимательное отношение к его потребностям и индивидуальный подход в обучении. Мы ценим каждого студента, который обратился к нам за знаниями. Учиться у нас — значит инвестировать в себя и свое будущее! Ждем вас!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <!-- блок -->
    <div class="container-fluid block-reg">
        <p>Здравствуйте, 
        <?php 
          echo $_SESSION['name']; 
        ?> </p>
    </div>

    <!-- Профиль пользователя -->
    <div class="link-prof">
        <p>Все существующие страницы сайта: </p>
        <p><a href="../index.html">Главная</a></p>
        <p><a href="../page/teacher.html">Учителя</a></p>
        <p><a href="../page/selection.html">Как проходит отбор учителей?</a></p>
        <p><a href="../page/registr.html">Регистрация</a></p>
        <p><a href="../page/autor.html">Авторизация</a></p>
        <p><a href="./master-class.php">Доступные курсы</a></p>
        <p><a href="./english-prosto.php">Скачать учебники и книги</a></p>
        <p><a href="./profile.php">Профиль (вы здесь)</a></p>
        <p><a href="./course.php">Курсы школы</a></p>
        <p><a href="./otsav.php">Отзывы учеников</a></p>
    </div>
    

    <div class="exit">
      <a href="./exit.php">Выйти</a>
    </div>  

    <!-- курсы, на которые зарегестрировалс япользователь -->

    <div class="container-fluid block-reg">
        <p>Ваши курсы</p>
    </div>

    <div class="course-block">
        <p> <?php echo $_SESSION['$course']?> </p>
    </div>
    <br>

<!-- вывод результатов поиска + поисковая строка -->
    <div class="container-fluid block-reg">
        <p>Посмотрите какие продукты у нас есть</p>
    </div>

    <!-- поисковая строка на товары в интернет-ресурсе -->
    <form method="POST">
      <input class="form-inp" type="text" name="query" id="query" placeholder="Введите запрос...">
      <button class="batton" type="submit">Поиск</button>
    </form>

    <!-- php код -->
    <?php
// Получение запроса из формы
$query = $_POST['query'];
// проверка на пустые поля 
if(empty($query)) {
    echo "Не оставляйте пустые поля!";
    exit();
}
// подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'English_School');
$mysql->set_charset('utf8');
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
}

// Выполнение запроса к базе данных
$sql = "SELECT * FROM `Product` WHERE `Name` LIKE '%$query%'";
$result = $mysql->query($sql);

// Вывод результатов поиска
while ($row = mysqli_fetch_assoc($result)) {
    echo "Найдено: ";
    echo $row['Name']."<br>";
}

// Закрытие соединения с базой данных
mysqli_close($mysql);
?>

    <div class="result-poisk">
        <p><?php echo $_SESSION['result']; ?></p>
    </div>

    <!-- футер -->
    <div class="container-fluid footer">
        <div class="img-block-footer">
            <a href="#page1"><img src="../img/logotype-for-black.png"></a>
        </div>
        <div class="social">
            <nav>
                <a href="#"><img class="ssal-footer" src="../img/Star 1.png"></a>
                <a href="#"><img class="ssal-footer" src="../img/Star 2.png"></a>
                <a href="#"><img class="ssal-footer" src="../img/Star 3.png"></a>
                <a href="#"><img class="ssal-footer" src="../img/Star 4.png"></a>
                <a href="#"><img class="ssal-footer" src="../img/Star 5.png"></a>
            </nav>
        </div><br>
        <div>
            <p class="CopyRight">CopyRight by: ~Kyvshinka Lay~</p>
        </div>
    </div>
    
<!-- футер -->
<div class="container-fluid footer">
        <div class="img-block-footer">
            <a href="#page1"><img src="../img/logotype-for-black.png"></a>
        </div>
        <div class="social">
            <nav>
                <a href="#"><img class="ssal-footer" src="../img/Star 1.png"></a>
                <a href="#"><img class="ssal-footer" src="../img/Star 2.png"></a>
                <a href="#"><img class="ssal-footer" src="../img/Star 3.png"></a>
                <a href="#"><img class="ssal-footer" src="../img/Star 4.png"></a>
                <a href="#"><img class="ssal-footer" src="../img/Star 5.png"></a>
            </nav>
        </div><br>
        <div>
            <p class="CopyRight">CopyRight by: ~Kyvshinka Lay~</p>
        </div>
    </div>

    <!-- мой js -->
    <script src="../script/main.js"></script>
</body>

</html>