<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ср 5-6</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="../selfTask/third.php">Обновить страницу</a>
    </p>
        <?php
            /* Формы */
            echo "<b>Формы</b><br>";

            $justName;
            if (!empty($_REQUEST['justName'])) {
                $justName = $_REQUEST['justName'];
                echo "Привет, " . $justName . "!";
            }
        ?>

        <form action="" method="GET">  
            Имя <input type="text" name="justName" placeholder="Выводит ваше имя">
            <input type="submit"> 
        </form>
        <br>
        
        <?php            
            function mb_ucfirst($string, $encoding){
                $firstChar = mb_substr($string, 0, 1, $encoding);
                $then = mb_substr($string, 1, null, $encoding);
                return mb_strtoupper($firstChar, $encoding) . $then;
            }
            
            $name;
            $age;
            $message;
            if (!empty($_REQUEST['name']) and !empty($_REQUEST['age']) and !empty($_REQUEST['userMessage'])) {
                // Получаем данные из таблицы по запросу name
                // удаляем все html теги
                $name = strip_tags($_REQUEST['name']);
                $name = mb_ucfirst($name, "utf8");
                $message = strip_tags($_REQUEST['userMessage']);
                $message = mb_ucfirst($message, "utf8");

                // Получаем данные из таблицы по запросу age
                // удаляем все html теги
                $age = strip_tags($_REQUEST['age']);
                echo "Привет, " . $name . ", тебе " . $age . " лет.";
                echo "<br>Твое сообщение: " . $message;  
            }            
        ?>
    
        <form action="" method="GET">  
            Имя <input type="text" name="name" placeholder="Выводит имя">
            Возраст <input type="text" name="age" placeholder="Выводит возраст">
            <p></p> 
            Сообщение <textarea name="userMessage" rows="1" cols="22" maxlength="10" placeholder="Выводит сообщение"></textarea>
            <input type="submit"> 
        </form>
        <br>

        <?php
            if (empty($_REQUEST['older'])) {
        ?> 
            <form action="" method="GET">
                Введите возраст <input type="text" name="older" placeholder="Скрывает форму">
                <input type="submit">
            </form>
        <?php
            }
        ?>
        <?php
            if (isset($_REQUEST['older'])) {
            $city = strip_tags($_REQUEST['older']);
            echo 'Возраст: '. $city;
            }
        ?>

        <?php
        $login = "myLogin_123";
        $userLogin;
        $pass = "1234qwerty";
        $userPass;
        
        if (!empty($_REQUEST['login']) && !empty($_REQUEST['password'])) {
            $userLogin = $_REQUEST['login'];
            $userLogin = trim($userLogin);

            $userPass = $_REQUEST['password'];
            $userPass = trim($userPass);
            if ($userLogin == $login && $userPass == $pass) {
                echo "<br>Доступ разрешен!";
            } else {
                echo "<br>Доступ запрещен";
            }
        }
        ?>
        <Br>
        <form action="" method="GET">  
            Логин <input type="text" name="login" placeholder="Проверка пароля">
            Пароль <input type="password" name="password" placeholder="Проверка логина">
            <input type="submit"> 
        </form>

        <?php 
            /* Атрибуты value и placeholder */
            echo "<b><br>Атрибуты value и placeholder</b>";
     
        ?>
        <Br>
        <form action="" method="get">  
            Имя <input type="text" name="nameShow" placeholder="Сохранение данных" 
            value="<?php 
            if (isset($_REQUEST['nameShow'])) {
                echo $_REQUEST['nameShow'];
            }                   
            ?>">
            <input type="submit"> 
        </form>
        <br>
        
        <form action="" method="GET">  
            Имя <input type="text" name="nickName" placeholder="Сохранение данных" 
            value="<?php 
            if (isset($_GET['nickName'])) {
                echo $_GET['nickName'];
            }                   
            ?>">
            Сообщение 
            <textarea name="nickMessage" rows="1" maxlength="10" cols="22" placeholder="Сохранение данных" ><?php if (isset($_GET['nickMessage'])) {$mess = $_GET['nickMessage'];echo trim($mess);}?></textarea>
            <!-- <?php 
                if (isset($_GET['nickMessage'])) {
                    $mess = $_GET['nickMessage'];
                    echo trim($mess);}
            ?> -->
            <input type="submit"> 
        </form>
        <br>
    </div>
</div>
</body>
</html>
