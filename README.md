# resaparc
Application de réservation de manèges pour un parc d'attraction

- chaque visiteur du parc "Licorne Land" doit pouvoir s'identifier sur l'application avec son numéro de billet

- il pourra ensuite réserver jusqu'à 3 manèges en même temps (quand arrive l'heure de passage pour un manège, il peut à nouveau en réserver un)

- il sera alerté 5 minutes avant pour chaque manège : la notification lui rappellera l'heure, le nom du manège, son emplacement sur le plan et les éventuelles contraintes (hauteur minimale, femmes enceintes interdites, manège en extérieur, vider ses poches avant d'embarquer, etc.)

- en option, vous pouvez commencer à concevoir une version qui tient compte de l'emplacement géographique des manèges pour l'horaire de réservation (pour éviter de mettre à 5 minutes d'intervalle 2 manèges géographiquement opposés)

## base de donnée
utilisation de postgreSQL 10
un connecteur PDO est créer par le fichier controleurs/config.php

## structure
### vues
L'espace client

 - connexion
 - listeManege
 - listeReservation

### metier
les class :

 - manege
 - reservation

### controleurs
les service de connexions ajax
