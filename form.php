<?php

require 'phpsqliteconnect/vendor/autoload.php';

use App\SQLiteConnection;

function quantityVerif(float $quantity): bool
{
    return $quantity !== 0;
}

function unityVerif(string $unity): bool
{
    return $unity !== '';
}

function ingredientVerif(string $ingredient): bool
{
    return $ingredient !== '' && strlen($ingredient) <= 50;
}


$pdo = (new SQLiteConnection())->connect();
if($pdo != null)
    echo 'Connected to the SQLite database successfully!';
else
    echo 'Woops, could not connect to the SQLite databse!';


/*
$verif = 0;

for ($i=0; $i < count($_POST)/3; $i++) { 
    $quantity = htmlentities($_POST['quantity_'.$i]);
    $unity = htmlentities($_POST['unity_'.$i]);
    $ingredient = htmlentities($_POST['ingredient_'.$i]);
    $verif++;

    if($quantity && $unity && $ingredient){
        //var_dump('Toutes les valeurs sont définies');
        $verif--;
    }
}

$host = 'localhost';
$db = 'database';
$username = 'user';
$password = 'password';
*/

/*
try {
    echo('chips');
    //$pdo = new PDO("pgsql:host='localhost';port=5432;dbname='database';user='username';password='password'");
    $pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.db');
    echo('chips');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo('chips');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    

    $pdo->query('CREATE TABLE IF NOT EXISTS message (
    id SERIAL NOT NULL,
    quantity FLOAT,
    unity VARCHAR(50) NOT NULL,
    ingredient INTEGER
    )');

    if (
        quantityVerif($quantity) &&
        unityVerif($unity) &&
        ingredientVerif($ingredient)
    ) {
        $statement = $pdo->prepare('INSERT INTO message (quantity, unity, ingredient) VALUES (:quantity, :unity, :ingredient)');
        $statement->bindValue('quantity', $quantity);
        $statement->bindValue('unity', $unity);
        $statement->bindValue('subject', $subject);
        $statement->bindValue('ingredient', $ingredient);
        $statement->execute();
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
    die();
}

header('Location: http://localhost:8080/index.php');
*/




/*
$verif = 0;

for ($i=0; $i < count($_POST)/3; $i++) { 
    $quantity = $_POST['quantity_'.$i];
    $unity = $_POST['unity_'.$i];
    $ingredient = $_POST['ingredient_'.$i];
    $verif++;

    if($quantity && $unity && $ingredient){
        //var_dump('Toutes les valeurs sont définies');
        $verif--;
    }
}

if($verif == 0){
    //$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=database',getenv('USERNAME'),getenv('PASSWORD'));
    $pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query('CREATE TABLE IF NOT EXISTS recipe (
        id SERIAL NOT NULL,
        quantity FLOAT,
        unity VARCHAR(50) NOT NULL,
        ingredient INTEGER
    )');
}
*/
