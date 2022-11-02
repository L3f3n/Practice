<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practice</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <?php include "logo.inc.php"?>
            <?php include "menu.inc.php"?>
        </div>
        <!--*########################################
            #То самое приветствие от автора страницы#
            ######################################### -->
        <p class="welcome" align="center"><strong><?php echo $banner?></strong></p>
        <br><br>
        <div class="data_block">
            <div class="carts">
                <div class="photo">
                    <img src="img/photo_2022-11-01_13-38-30.jpg" width="320" height="320" alt="Макаров Алексей">
                </div>
                <div class="about_me">
                    <blockquote>
                        <pre>
Меня зовут <?php echo $surname?> <?php echo $name?>

проживаю в городе <?php echo $city ?>

мне <?php echo $age ?> года

Мы научились создавать переменные

Изучили простые операции с ними
                        </pre>
                    </blockquote>
                </div>
            </div>
            <div class="knowledge">
                <!--*###############################
                     #Задание с классом "knowledge"#
                     ############################### -->
                <?php include "knowledge.inc.php"?>
                <p><pre>
Это переменная <strong>$string_this</strong>. Она равняется:   <strong><?php echo $string_this?></strong>
Это переменная <strong>$integer_this</strong>. Она равняется:   <strong><?php echo $integer_this?></strong>
Это сравнение двух чисел: <strong><?php echo get_integer()?></strong>
</pre></p>
            </div>
        </div>
        <?php include "footer.inc.php"?>
    </body>
</html>