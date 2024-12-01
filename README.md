# Projet site E-Commerce en  symfony, Lucas Jordan : CubeMarker

## Installation (pour M. Pertré, après avoir cloné le repo)

1. Faire ```docker compose up -d```
2. Créer une base de donnée vide du nom de cubemarket dans l'instance de MySQL
3. Faire ```docker exec -it symfony_php bash```
4. Faire ```composer install```
5. Faire ```php bin/console doctrine:migrations:migrate```
6. Faire ```php bin/console doctrine:fixtures:load```
7. Aller sur ```http://localhost:8081```

Compte administrateur - login : lucas.jordan@cubemarket.fr / mdp : adminpass
Compte standard - login : thomas.ducret@hotmail.fr / mdp : GDgroMuscl

## N.B.

- J'ai fait consciemment le choix de mettre à jour le stock au moment d'une commande et non pas au moment de l'ajout dans le pannier, un utilisateur pourrait sinon bloquer le site en mettant tous les produits dans son panier.
- Lors d'une commande, il n'y a pas de page de confirmation mais elle est bien passée, vous pouvez la visualiser dans le tableau de bord administrateur.

