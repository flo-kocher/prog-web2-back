<?php

function add_new_ingredient (float $quantity,string $unity,string $ingredient,int $recipe_number): void{
    try {
        $pdo = new PDO('sqlite:'.dirname(__FILE__).'/database.db');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        $pdo->query('CREATE TABLE IF NOT EXISTS recipe (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            quantity INTEGER,
            unity VARCHAR(50) NOT NULL,
            ingredient VARCHAR(50) NOT NULL
        )');

        if(preg_match('/^[-+]?[0-9]+(\.[0-9]+)?/',$quantity) &&
            $unity != '' && $ingredient != ''
            ) {
            $statement = $pdo->prepare(
                'INSERT INTO recipe (quantity,unity,ingredient) VALUES (:quantity,:unity,:ingredient)'
            );
            $statement->bindValue('quantity',$quantity,PDO::PARAM_INT);
            $statement->bindValue('unity',$unity,PDO::PARAM_STR);
            $statement->bindValue('ingredient',$ingredient,PDO::PARAM_STR);
            $statement->execute();
        }
    
    } catch (PDOException $exception){
        var_dump($exception);
    }
}

for ($i=0; $i < count($_POST)/3; $i++) { 
    $quantity = htmlspecialchars($_POST['quantity_'.$i]);
    $unity = htmlspecialchars($_POST['unity_'.$i]);
    $ingredient = htmlspecialchars($_POST['ingredient_'.$i]);

    add_new_ingredient($quantity,$unity,$ingredient,$i);
}

header('Location: http://localhost:8080/creator.php');

