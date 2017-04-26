
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
echo $x->getStr().'<br>';
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
echo $y->getStr().'<br>';
$y->bold();
echo $y->getStr().'<br>';
$y->italic();
echo $y->getStr().'<br>';
$y->underline();
echo $y->getStr().'<br>';
$y->capitalize();
echo $y->getStr().'<br>';
$y->uglify();
echo $y->getStr().'<br>';


echo '<hr>';
$z = new StrUtils('test uglify');
echo $z->getStr().'<br>';
$z->uglify();
echo $z->getStr().'<br>';

?>

</body>
</html>