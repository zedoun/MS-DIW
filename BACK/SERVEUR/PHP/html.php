
<?php
//variabes 
/* gfdfdgflk
gkkflkf*/

$title = "zedoun";
$num = 542565;
$float = 4552.65548987;
$boolen1 = true;
$nothing = null;
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title . " home page" ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php echo"<h2> 
    PHP est un langage multi-plateformes disponible dans plusieurs environnements tels qu'Unix, Windows mais surtout Linux.
    PHP permet de gérer facilement une base de données (souvent MySQL)
    Robuste et puissant, il ne ralentit presque pas le serveur à moins d'un très grand trafi
La première version a été mise au point par Rasmus Lerdorf, le langage s'appelait alors, en 1994, PHP/FI. Cette première version
 n'avait de grandes ambitions que de pouvoir insérer quelques traitements simples dans une page HTML.
Il est aujourd'hui devenu un langage de programmation de référence dont le succès ne cesse de croître. Ce succès est dû au bon
 compromis entre puissance et simplicité. Il permet également de gérer une base de données (souvent MySQL).
De plus, le PHP est un langage en OpenSource (libre de droits, dont les sources et la documentation sont téléchargeables via 
Internet). La société Zend Technologie a beaucoup participé au développement du langage, notamment en travaillant sur Zend Engine,
 le moteur d'exécution de PHP.Structure d'un programme
Pour que le serveur qui vous héberge puisse comprendre qu'il va devoir interpréter un script en PHP, il faut lui indiquer le début
et la fin du code, de même façon que vous le feriez pour du javascript par exemple.  </h1>"?>
<?php 
echo $num;
echo $title;
echo "<br>";
echo $float;
echo "542565 welcome to $title"
?>
</body>

</html>