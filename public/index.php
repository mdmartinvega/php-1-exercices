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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola, Loli</h1>
    <p>Hoy es <strong>
    <?php
        setlocale(LC_ALL, 'esp_esp');
        echo strftime("%A");
        // $today = getdate();
        // echo $today['weekday'];  
    ?>
         </strong>¿Qué tal estás?</p>
</body>
</html>