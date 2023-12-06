NOM: Pesquet Julien
Thème du projet : Les membres sonts des joueurs du jeu de carte Magic the gathering, ils possèdent des paquets contenants des cartes.


POUR LE RENDU FINAL VOIR A LA FIN POUR L'EVALUATEUR

Commandes symfony db :

server start : symfony server:start

delete data and recreate : 
symfony console doctrine:database:drop --force
symfony console doctrine:database:create
symfony console doctrine:schema:create

migrate data (update but in procution):
symfony console make:migration
symfony console doctrine:migrations:migrate

load data : symfony console doctrine:fixtures:load -n

update data : symfony console doctrine:schema:update --force

create/edit entity :  symfony console make:entity [nom]

show route : symfony console debug:router

create route controller : symfony console make:controller <nom>

create a whole new crud interface (create read update delete) for an entity: symfony console make:crud

create a registration form for users : symfony console make:registration-form


Doc : 
 
Pour créer la base de donnée et charger les données dedans faire ces quatres commandes :
symfony console doctrine:database:drop --force
symfony console doctrine:database:create
symfony console doctrine:schema:create
symfony console doctrine:fixtures:load -n

Cela créé 4 cartes répartis dans 4 decks appartenants à 3 membres du site.

Attributs et classes :
Carte : int id
	string Nom
	int Attaque
	int defense
	string Pouvoir
	User proprietaire
	Paquet paquet
Paquet: int id
	boolean Publique
	string description
	Collection items
	User user
User : int id
	string pseudo
	string password
	string email
	Collection paquet
	Collection cartes
	

Une interface administrateur est disponible à l'adresse :
localhost:8000/admin


Résumé des liens :

Liaison ManyToOne Cartes(Many) ---> Paquet(One) Nullable = No 
Liaison ManyToOne Paquets(Many) ----->User(One) Nullable = No
Liaison ManyToOne Cartes(Many)----->User(One) Nullable= No

POUR LE RENDU FINAL

Pour chaque objectif à checker j'indique la démarche à suivre sur mon site :
Evidemment vous êtes libre de tester plus en profondeur à votre convenance surtout pour ce qui est des restrictions d'accès dans les objectif bonus.
PRE-REQUIS :
Vous pouvez soi créer un compte à l'aide de la page register soit vous connecter depuis la page login avec l'user : chris@localhost
				    password:chris


-Utilisation de gabarits pour les pages de consultation du front-office suivantes (3 pts) :
-consultation d'un [objet]  
               Rendez-vous dans la page galerie puis cliquez sur une carte 		dans le champs correspondant. 
-consultation de la liste des [objets] d'un [inventaire] 
	De la même manière allez dans la galerie et cliquer sur le bouton show 	d'un paquet. Il apparait alors avec ses cartes .                 
-navigation d'un [inventaire] vers la consultation de ses [objets]
	Depuis la page show précédente cliquez sur une carte et vous pourrez 
	consulter ses détails.

-Intégration d'une mise en forme CSS avec Bootstrap dans les gabarits Twig (1 pt)
	Pour celle la il suffit de regarder le site web qui utilise bien le   	CSS boostrap. Sinon il faut ouvrir le fichier base.html.twig situé 	dans /templates pour regarder le code mais bon ... Je n'allais pas   	écrire le css à la main pour chaque page.
Ajout de l'entité [galerie] au modèle des données et de l'association M-N avec [objet] (1 pt)
	ATTENTION ici : ma gestion des galerie est différentes d'une  	association M-N avec des objets. En effet, les galeries créés par les 	utilisateurs sont simplement des inventaires qu'ils possèdent dont la 	variable *publique* est à True. Les différents galeries sont visibles  	dans l'onglet du menu correspondant. Elles peuvent bien contenir n-	cartes.
Ajout de fonctions CRUD au front-office pour [inventaire] (1 pt)
	Consultez l'onglet "Mon compte" une fois que vous êtes connecté. Vous 	pouvez cliquer sur "éditer" dans "vos pquets" pour accéder à ces 	fonctions crud.
Contextualisation de la création d'un [objet] en fonction de l'[inventaire] (1 pt)
	Pour celle la je ne suis pas sur de ce que ça signifie, cependant 	lorsqu'on clique depuis "Mon Compte" sur "Nouvelle carte" 	l'utilisateur ne peut créer que des cartes qui lui appartiennent et ne	peut choisir comme paquet pour les ranger que des paquets qui lui 	appartiennent.
Ajout des /Utiisateurs/ au modèle de données et du lien utilisateur - membre (1 pt)
	Pour cela vous avez déjà eu l'occasion de tester les onglets 	s'enregistrer, se connecter et se déconnecter. Si vous n'avez pas eu 	cette occasion je vous invite à les tester. ATTENTION cependant, ma 	classe MEMBRE a disparue je l'ai complètement remplacé par la classe 	utilisateur c'est donc ma classe utilisateur qui joue son role. Cela 	n'impacte aucunement les fonctionnalités développées et j'ai une 	classe en moins ce qui simplifie le schmilblick. (Après discussion 	avec le prof d'ailleurs si ça marche c'est pas un problème)
Ajout de l'authentification (y compris documentation sur comptes et leurs rôles dans README) (1pt)
	Pareil que le point précédent, pour la documentation la voilà:
	TEMPLATE : ["pseudo","email","password","roles"]
	['Christorigolo','chris@localhost','chris','ROLE_USER']
        ['xX_Aldu91_Xx','alice@localhost','alice','ROLE_USER']
        ['InYarFace','simon@localhost','simon','ROLE_ADMIN']
2/ Réalisation des éléments optionnels
Le but est de vérifier si les points suivants sont remplis (issus des éléments optionnels de la check-list de réalisation du projet)

protection de l'accès aux routes interdites aux utilisateurs non-authentifiées car réservées aux membres (1 pt)
	Pour cela déconnecter vous avec logout et tentez d'accéder aux 	galeries à l'adresse localhost:8000/paquet. Vous êtes bien redirigé 	sur la page de login. De même avec /paquet/1 par exemple.
protection de l'accès aux CRUD sur les données aux seuls propriétaires de ces données (1 pt)
	Connectez vous avec l'user chris (SURTOUT PAS AVEC SIMON QUI EST 	ADMINISTRATEUR) et tentez d'accéder à l'édition du paquet de quelqun   	d'autre. Même histoire.
ajout de la gestion de la mise en ligne d'images pour des photos dans les [objet] (1 pt)
	Pas fais lui #pasdechance

