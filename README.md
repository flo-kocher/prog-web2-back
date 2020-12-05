# prog-web2-back

 	L'architecture du site est multipage.

On pourra accéder aux différentes pages par le biais de lien.

Une page présentera le site et la raison de sa création, une deuxième page montrera des recettes qui ont déjà été créées en amont. Pour finir, la troisième page sera muni d'un formulaire afin de rajouter des ingrédients pour créer une recette, ces ingrédients pourront ensuite être vus à l'aide d'un bouton.

 	Architecture de la base de données
 
 La base de données est composé de 4 éléments :
   - un id, qui permettra de différencier chacun des ingrédients
   - une quantité, représenté par un entier de type int
   - une unité, chaque unité a été préalablement mis en place par le gérant du site, l'utilisateur pourra chosir parmi un certain nombre d'unité que le gérant propose (gramme, litre, pièce)
   - un ingrédient, de type string, correspond à un ingrédient entré par l'utilisateur (lait, oeuf, chocolat ...)
   
Le principe de la base de donnée est de faire une liste d'ingrédient pour l'élaboration d'une recette, en ajoutant un ingrédient et en remplissant les champs, l'envoye du formulaire permettra d'envoyer tous les champs remplis par l'utilisateur.
Le but final était de créer des "recettes" en entières en ajoutant un champ "nom de recette", cependant je n'ai pas voulu me complexité la tâche donc je ne suis pas allé au bout de mon idée. L'une des solutions auraient sûrement été de rajouté un nouveau champ pour le "nom" de la recette, puis lors de l'envoye du formulaire, faire en sorte de rassembler l'ensemble des ingrédients pour qu'ils créent bel et bien une recette.
