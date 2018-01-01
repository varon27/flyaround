flyaround
=========

A Symfony project created on December 18, 2017, 3:10 pm.

#Quête CRUD : 

Critères de validation : 

Les entités sont toutes générées dans le bon bundle
Elles sont nommées en CamelCase
Elles contiennent les bonnes propriétés et ces propriétés sont nommées et typées correctement
La config de chaque entité est en annotation
Les CRUD sont générés pour chaque entité
Les entités Flight et Reservation ont des actions d'écriture mais pas le Terrain
La config des CRUD est en annotation
Les routes sont cohérentes et fonctionnelles (même si le générateur n'a pas réussi à tout faire tout seul)
L'accès aux tables (par Phpmyadmin ou l'onglet Database de PhpStorm) est fonctionnel.

--> La database s'appelle "flyaroun", c'est volontaire

--> il y a une table "reservations" et non "reservation", c'est aussi voulu

Merci pour votre correction !


#Quête Relation entre les entités :

Critères de validation :

- Les entités correspondent exactement au nouveau schéma de BDD
- Il n'y a pas d'erreur quand on lance un doctrine:schema:update
- Les relations bidirectionnelles sont utilisées à bon escient et dans le bon sens
- Les CRUD ont été mis à jour sauf pour l'entité Review
- Les fichiers ne contiennent aucun warning relevé par PHPStorm
- Toutes les routes (référencées en debug:router) sont fonctionnelles

<------------------------------------------------------------------------------>

--> La database s'appelle "flyaroun", c'est volontaire

--> il y a une table "reservations" et non "reservation", c'est aussi voulu

Merci pour votre correction, à dispo pour vous montrer le résultat sur mon ordi :)
Bisous et Bonne année remplie de nombreux Cruds <3