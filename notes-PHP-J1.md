## declare(strict_types=1);
 * declare(strict_types=1);
 * L'annotation de type est souvent utilisée conjointement 
 * avec la directive "declare(strict_types=1)" pour activer le mode
 * strict de typage.


## Variables

-déclaration
En php toutes les variables commençent par un "**$**",
Toutes déclarations php se terminent par un point virgule "**;**"
Exemple
```php
$user = "John";
$num = 2

```

-Naming Convention
La convention de nommage des variables est la suivante:
1-toutes les variabes commencent forcément par un dollar
2-le nom d'une variable doit être composé uniquement de charactères alpha-numérique et tiret de 8 (_)
3-le nom d'une variable ne doit pas commencer par un chiffre



## Types de variables
En PHP, le type d'une variable lui est assigné quand vous lui donnez une valeur. On utilise la fonction `var_dump()` pour avoir les informations concernat le type d'une variable.
```php
$user;
var_dump($user);

```

### string
réprésente les chaînes de caractère.
Se déclare avec un guillemet double("") ou un guillement simple ('').
La concaténation de deux chaines de caractères se fait avec un point (.)

```php
$fname = "John";
$lname = "Doe";
echo $fname . " " . $lname; // John Doe

```

### ## numbers
réprésente tous les nombres entiers comme à virgules. On en distingue duex séparations: 
-int: désignent les nombres entiers
-float: désignent les nombres flottants (nombres décimaux)

```php
$num1 = 3;
$moyenne = 18.5;
var_dump($num1); // int
var_dump($moyenne); //float

```
### boolean
représente les valeurs de vérités; soit "true" soit "false"

```php
$isAdmin = true;
$isEven = false;
var_dump($isAdmin); // bool

```
### null
représente l'absence de valeurs
 ```php
 $data = null;
 var_dump($data); //null
 ```

### array
représente un tableau

* Un tableau associatif en PHP, est un tableau où les valeurs sont associés à des clés plutôt qu'à des indices numériques comme dans les tableaux indexés.
* Dans un tableau associatif, chaque élément est identifié par une clé 
unique qui permet d'accéder à la valeur correspondante.
```php
$fruits = array("pomme", "orange", "banane");
$notes = [20, 19, 156];
$arr = ["hello", 25, true, null]; array("hello", 25, true, null);
var_dump($fruits)
```

### object
Pour créer un objet il faut créer une classe et l'instancier:
```php
class User {}
$u = new User();
var_dump($u); //objet(User)#identifiant_unique(nombre_de_propriétés)

```

## Type de Conversion
Pour convertir d'un type à un autre, il suffit de préciser le type qu'on veut obtenir
```php
$floatNum = 3.14;
$intNum = (int)$floatNum; // on obtient un entier
$x = (int)3.14;

var_dump($floatNum, $intNum, $x)
```
En plus de cela nous pouvons utiliser les fonctions PHP natives, telles que *intval()* , *floatval()* , *boolval()* ...
```php
$floatNum = 3.14;
$intNum = intval($floatNum); //(int)3

$y = floatval(3); // (float)3.0

var_dump($y)
```


## Conditions 
Les conditions en PHP sont identiques au Js , et on y retrouve les mêmes opérateurs de comparaisons tels que : <, <, >,

### if, if ...else, if ...else

### elseif

### switch

## boucles
### while
### forEach
### for ...while