
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP StrUtils</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

</head>
<body>

<?php

require 'class/Autoloader.php';

Autoloader::register();
Autoloader::autoload(Example);

$x = new StrUtils('Ceci est un exemple');
$x->bold();
echo $x->getStr().'<br>';
$x->italic();
echo $x->getStr().'<br>';
$x->underline();
echo $x->getStr().'<br>';
$x->capitalize();
echo $x->getStr().'<br>';
echo '<hr>';
$y = new StrUtils('hello');
$y->bold();
$y->italic();
$y->underline();
$y->capitalize();
echo '<hr>';
$z = new StrUtils('test uglify');
$z->uglify();

/*$x = new StrUtils('Ceci est un exemple');
$x->bold();
$x->italic();
$x->underline();
$x->capitalize();
echo '<hr>';
$y = new StrUtils('hello');
$y->bold();
$y->italic();
$y->underline();
$y->capitalize();
echo '<hr>';
$z = new StrUtils('test uglify');
$z->uglify();*/


?>

</body>
</html>