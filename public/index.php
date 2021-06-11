<!-- 
    etiqueta de php
$var = 'hola mundo';

$var2 = "adiós mundo";

$var3 = true;

$var4 = null;

$var5 = 5;

$var6 = [1, 3];

$var7 = false;

print_r($var."<br>"."<br>");
echo $var2."<br>"."<br>";
print_r($var3."<br>"."<br>");
print_r($var4."<br>"."<br>");
print_r($var5."<br>"."<br>");
print_r($var6."<br>"."<br>"); 
-->
<?php 

require $_SERVER['DOCUMENT_ROOT'] . '/lib/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php include("./partial/head.php")?>

<body>
    <?php
        include("./menu.php");
    ?>
    <?php if($_SESSION['last_visit_time']):?>
    <h4><?= $_SESSION['last_visit_time']; ?></h4>
    <?php endif; ?>
    <?php setcookie('phpexercice', time()); ?>
    <pre>$_COOKIE: <?php print_r($_COOKIE); ?></pre>
    
    <h1>Hola, Loli</h1>
    <p>Hoy es <strong>
        <?php
            setlocale(LC_ALL, 'esp_esp');
            echo strftime("%A");
            // $today = getdate();
            // echo $today['weekday'];  

            $weeekDays = [
                1 => 'lunes',
                2 => 'martes',
                3 => 'miércoles',
                4 => 'jueves',
                5 => 'viernes',
                6 => 'sábado',
                7 => 'domingo',
            ];
        ?>
    </strong>¿Qué tal estás?</p>
    <h1>Hola, <?= $_GET["name"];?></h1>
    <p>Hoy es <strong><?= $weeekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>
    
    <script src="./assets/main.js"></script>
</body>
</html>