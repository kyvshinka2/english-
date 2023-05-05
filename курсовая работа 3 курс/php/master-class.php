<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Школа английского Seminary</title>
    <!-- бутстрап -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- мои стили -->
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/master-class.css">
</head>

<body>
    <!-- шапка -->
    <div id="page1" class="container-fluid">
        <div class="row">
            <div class="col head-text">
                <a href="../index.html">Главная</a>
            </div>
            <div class="col head-text">
                <a href="./registr.html">Присоеденяйся</a>
            </div>
            <div class="col head-text">
                <a href="#">Мастер классы</a>
            </div>
            <div class="col head-text">
                <a href="./english-prosto.php">Английский просто</a>
            </div>
            <div class="col head-text">
                <a href="./profile.php">Профиль</a>
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
                        <button onclick="document.location='../index.html'" type="button" class="btn btn-danger bat">Главная</button>
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

    <!-- Мастер классы -->
    <div class="block-fon">
        <p>Наши приемущества</p>
    </div>

    <div class="plus">
        <div class="block-plus-1">
            <div class="block-plus">
                <img src="../img/method-icon.png">
                <p>Коммуникативная методика</p>
            </div>
            <div class="block-plus">
                <img src="../img/personal-icon.png">
                <p>Интересные материалы</p>
            </div>
            <div class="block-plus">
                <img src="../img/teacher-icon.png">
                <p>Личный преподаватель</p>
            </div>
        </div>
        <div class="block-plus-1">
            <div class="block-plus">
                <img src="../img/Icon-2-materials-2.png">
                <p>Платформа «Онлайн-класс»</p>
            </div>
            <div class="block-plus">
                <img src="../img/skills-englex-d.png">
                <p>1 месяц занятий Skills</p>
            </div>
            <div class="block-plus">
                <img src="../img/chalkboard-icon-1.png">
                <p>Бесплатный вводный урок</p>
            </div>
        </div>

        <?php
// подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'English_School');
$mysql->set_charset('utf8');
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
    exit();
} 
    ?>

        <!-- наши курсы -->
        <!-- основной блок (широкий) -->
        <div class="block-fon">
            <p>Наши курсы:</p>
        </div>

        <!-- модальное окно -->
        <div id="modal" class="modal bounceIn">
            <div id="close_modal">+</div>
            <div class="modal_txt">
                <form action="./form-from-course.php" method="post">
                    <input type="text" class="form-inp" name="name" id="name" placeholder="Введите логин"><br>
                    <select class="form-inp" name="cuorse">
                        <option value="Общий Разговорный">Общий Разговорный</option>
                        <option value="Английский для начинающих">Английский для начинающих</option>
                        <option value="Бизнес-английский">Бизнес-английский</option>
                        <option value="Английский для детей">Английский для детей</option>
                        <option value="Английский для путешествий">Английский для путешествий</option>
                        <option value="Общий Разговорный">Общий Разговорный</option>
                        <option value="Подготовка к собеседованию">Подготовка к собеседованию</option>
                        <option value="Подготовка к экзаменам">Подготовка к экзаменам</option>
                    </select><br>
                    <!-- <input type="text" class="form-inp" name="cuorse" id="cuorse" placeholder="Введите название курса"><br> -->
                    <input type="submit" class="batton" value="Войти">
                </form>
            </div>
        </div>

        <?php
      $query1 = "SELECT Name FROM `Product` WHERE ID = 1";
      $zapr1 = $mysql->query($query1);
      while ($row = mysqli_fetch_array($zapr1)) {
        $name1 = $row['Name'];
      }
    ?>

        <div class="container block-course-2">
            <div class="container block-course">
                <div class="content">
                    <p class="head"><?php echo $name1; ?></p>
                    <p class="price">от 960р</p>
                    <ul>
                        <li>Повышение уровня знаний</li>
                        <li>70% урока - ваша разговорная практика</li>
                        <li>Преодоление языкого и слухового барьера</li>
                    </ul>
                    <a class="open_modal" href="#open">- Пройти обучение! -</a>
                </div>
                <div class="content-img">
                    <img src="../img/boy_book.png">
                </div>
            </div>
            <div class="dop-info">
                <p>С нами вы сможете заговорить за месяц!</p>
                <a class="open_modal" href="#open">- Записаться -</a>
            </div>
        </div>

        <!-- маленькие блоки с курсами -->

        <?php
      $query2 = "SELECT Name FROM `Product` WHERE ID = 6";
      $zapr2 = $mysql->query($query2);
      while ($row = mysqli_fetch_array($zapr2)) {
        $name2 = $row['Name'];
      }
    ?>
        <div class="container block-fon-2">
            <div class="content">
                <p class="head"><?php echo $name2; ?></p>
                <p class="price">от 540р</p>
                <ul>
                    <li>Начните говорить на базовом английском</li>
                    <li>Заложите крепкую базу знаний</li>
                    <li>Учитесь в любом возрасте</li>
                </ul>
                <a class="open_modal" href="#open">- Пройти обучение! -</a>
            </div>
        </div>

        <?php
      $query3 = "SELECT Name FROM `Product` WHERE ID = 7";
      $zapr3 = $mysql->query($query3);
      while ($row = mysqli_fetch_array($zapr3)) {
        $name3 = $row['Name'];
      }
    ?>
        <div class="container block-fon-2">
            <div class="content">
                <p class="head"><?php echo $name3; ?></p>
                <p class="price">от 1040р</p>
                <ul>
                    <li>Универсальный курс для работы и бизнеса</li>
                    <li>Практика навыков делового общения</li>
                    <li>Деловая лексика</li>
                    <li>Переговоры и переписка</li>
                </ul>
                <a class="open_modal" href="#open">- Пройти обучение! -</a>
            </div>
        </div>

        <?php
      $query4 = "SELECT Name FROM `Product` WHERE ID = 8";
      $zapr4 = $mysql->query($query4);
      while ($row = mysqli_fetch_array($zapr4)) {
        $name4 = $row['Name'];
      }
    ?>
        <div class="container block-fon-2">
            <div class="content">
                <p class="head"><?php echo $name4; ?></p>
                <p class="price">от 740р</p>
                <ul>
                    <li>Улучшение успеваемости в школе</li>
                    <li>Интересные задания для любого возраста</li>
                    <li>Преподаватели, умеющие ладить с детьми</li>
                </ul>
                <a class="open_modal" href="#open">- Пройти обучение! -</a>
            </div>
        </div>

        <?php
      $query5 = "SELECT Name FROM `Product` WHERE ID = 9";
      $zapr5 = $mysql->query($query5);
      while ($row = mysqli_fetch_array($zapr5)) {
        $name5 = $row['Name'];
      }
    ?>
        <div class="container block-fon-2">
            <div class="content">
                <p class="head"><?php echo $name5; ?></p>
                <p class="price">от 850р</p>
                <ul>
                    <li>Общение за границей без словарей</li>
                    <li>Репетиция диалогов: аэропорт, отель и пр.</li>
                    <li>35 туристических тем или экспресс-курс</li>
                </ul>
                <a class="open_modal" href="#open">- Пройти обучение! -</a>
            </div>
        </div>


        <!-- рейтинг лучших курсов -->
        <div class="block-fon">
            <p>Рейтинг лучших курсов</p>
        </div>

        <?php
      $query6 = "SELECT Name FROM `Product` WHERE ID = 1";
      $zapr6 = $mysql->query($query6);
      while ($row = mysqli_fetch_array($zapr6)) {
        $name6 = $row['Name'];
      }
    ?>
        <div class="container block-fon-2">
            <div class="content">
                <p class="head"><?php echo $name6; ?></p>
                <p class="price">от 960р</p>
                <ul>
                    <li>Повышение уровня знаний</li>
                    <li>70% урока - ваша разговорная практика</li>
                    <li>Преодоление языкого и слухового барьера</li>
                </ul>
                <a class="open_modal" href="#open">- Пройти обучение! -</a>
            </div>
        </div>

        <!-- маленькие блоки с курсами -->

        <?php
      $query7 = "SELECT Name FROM `Product` WHERE ID = 11";
      $zapr7 = $mysql->query($query7);
      while ($row = mysqli_fetch_array($zapr7)) {
        $name7 = $row['Name'];
      }
    ?>
        <div class="container block-fon-2">
            <div class="content">
                <p class="head"><?php echo $name7; ?></p>
                <p class="price">от 940р</p>
                <ul>
                    <li>Имитация реального собеседования</li>
                    <li>Подготовка в сжатые сроки</li>
                    <li>Составление резюме и cover letter</li>
                </ul>
                <a class="open_modal" href="#open">- Пройти обучение! -</a>
            </div>
        </div>

        <?php
      $query8 = "SELECT Name FROM `Product` WHERE ID = 12";
      $zapr8 = $mysql->query($query8);
      while ($row = mysqli_fetch_array($zapr8)) {
        $name8 = $row['Name'];
      }
    ?>
        <div class="container block-fon-2">
            <div class="content">
                <p class="head"><?php echo $name8; ?></p>
                <p class="price">от 370р</p>
                <ul>
                    <li>Готовим к ELLTS, TOEFL, FCE, CAE, CPE</li>
                    <li>Проработка всех разделов экзамена</li>
                    <li>Имитация экзамена или его частей</li>
                </ul>
                <a class="open_modal" href="#open">- Пройти обучение! -</a>
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
        <script src="../javascript/modal.js"></script>
</body>

</html>