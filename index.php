<?php
declare(strict_types=1);
// echo ("Hello World");
// print('Salut avec Print !');
// echo "<br>";

//
// $user; //déclaration
// $user = 'Salut!'; //assignation
// var_dump($user);
// echo "<br>";

//
// $firstname = "John";
// $lastname = "Doe";
// var_dump($firstname);
// echo "<br>";
// var_dump($lastname);

// CHAINE DE CARACTère
$firstname = "John"; //guillemet double
$lastname = 'Doe'; //guillement simple

// HEREDOC && NOWDOC
$msg = <<<text
bonjour
tout 
le 
monde
text;

echo $msg;

echo "<br>";
echo ($msg . " " . $firstname . " " . $lastname);

echo "<br>";

$num1 = 3;
$moyenne = 18.5;
var_dump($num1); // int
var_dump($moyenne); //floa

echo "<br>";
$fruits = array("pomme", "orange", "banane");
$notes = [20, 19, 156];
$arr = ["hello", 25, true, null];
array("hello", 25, true, null);
var_dump($fruits);

echo "<pre>";
print_r($fruits); //print as readable (imprimer de manière lisible)
echo "</pre>";

class User
{
}
$u = new User();
var_dump($u);


echo "<br>";

$floatNum = 3.14;
$intNum = (int) $floatNum; // on obtient un entier
$x = (int) 3.14;

var_dump($floatNum, $intNum, $x);



echo "<br>";

$floatNum = 3.14;
$intNum = intval($floatNum); //(int)3

$y = floatval(3); // (float)3.0

var_dump($y); //float(3)

//
echo "<br>";


//
$age = 18;
if ($age < 18) {
    echo "Vous êtes mineurs";
} else if ($age > 18) {
    echo "Vous êtes majeurs";
} else {
    echo "Vous avez 18 ans";
}


echo "<br>";


//switch
$day = 10;
switch ($day) {
    case '0':
        # code...
        echo "Nous sommes Dimanche";
        break;

    case '1':
        # code...
        echo "Nous sommes Lundi";
        break;

    case '2':
        # code...
        echo "Nous sommes Mardi";
        break;

    case '3':
        # code...
        echo "Nous sommes Mercredi";
        break;

    case '4':
        # code...
        echo "Nous sommes Jeudi";
        break;

    case '5':
        # code...
        echo "Nous sommes Vendredi";
        break;

    case '6':
        # code...
        echo "Nous sommes Samedi";
        break;

    default:
        # code...
        echo "Pas de jours possible";
        break;
}

echo "<br>";
//La boucle "While"
$nombre = 0;

while ($nombre < 10) {
    echo $nombre;
    $nombre++;
    echo '<br>';
}



echo "<br>";
//La boucle for
$i = 0;
for ($i = 0; $i < 10; $i++) {
    # code...
    echo $i;
    echo '<br>';
}

echo '<br>';


//ARRAY
$fruits = ["pomme", "raisin", "banane"];
echo count($fruits); //"éléments dans le tableau";
echo '<br>';
for ($i = 0; $i < count($fruits); $i++) {
    # code...
    echo $fruits[$i] . " ";
    // echo "<br>";
}

echo "<br>";
foreach ($fruits as $fruit) {
    # code...
    echo $fruit . " ";
}

$fruitizz = ["pomme", "raisin", "banane"];
//$fruitizz[0];

//Tableau associatif avec des clés 
/** 
 * Un tableau associatif en PHP, est un tableau où les valeurs sont associés 
 * à des clés plutôt qu'à des indices numériques comme dans les 
 * tableaux indexés.
 * Dans un tableau associatif, chaque élément est identifié par une clé 
 * unique qui permet d'accéder à la valeur correspondante.
 */
$notes = [
    "Martin" => 20,
    "Erfero" => 17,
    "Emile" => 20,
    "Alid" => 15
];

echo "<pre>";
print_r($notes);
echo "<pre>";


$notes_I = array(
    "Martin" => 20,
    "Erfero" => 17,
    "Emile" => 20,
    "Alid" => 15
);

foreach ($notes_I as $etudiant => $note) {
    echo $etudiant . " a une note de " . $note . "/ 20<br>";
}

echo "<pre>";
print_r($notes_I);
echo "</pre>";

echo '<br>';
//Type hinting
//Type hinting ou l'annotation de type 
/**
 * Nous avons la capacité d'annoter les paramètres de fonction 
 * et les valeurs de retours. Cela permet d'améliorer la 
 * lisibilité.
 * Summary of add
 * @param mixed $x
 * @param mixed $y
 * @return float|int
 * 
 * 
 * declare(strict_types=1);
 * L'annotation de type est souvent utilisée conjointement 
 * avec la directive "declare(strict_types=1)" pour activer le mode
 * strict de typage.
 * 
 */
function add(float $x, int $y): float
{
    return $x + $y;
}

echo add(4.5, 6);
echo '<br>';
// Les paramètres nommés
echo add(x: 3.2, y: 5);