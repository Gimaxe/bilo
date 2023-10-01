# VM :

    - Your name : bilo
    - serv_name : bilo_serv
    - username : bilo
    - password : bilo123
--- 
# MySQL : 

    - nom de la base : bilo_bdd
	- user : bilo_user 
	- password : bilo123
    - nom de la table : users

--- 

# gitea : 

	- Fonctionnement le code est entreposé dans : https://gitea.lucasiq.fr/bilo/bilo_web.git 3 branchs sont créées : 

		- main : la branch de production

		- front_fab : la branch où les modifications front sont réaliser

		- back_lucas : la branch où les modifications brack sont réaliser

	Lorsque une tâche est terminée et testée sur une des deux branch de travail, alors ces modifications doivent être ajouter à la branch main par une merge request
		1/ commit et push les modification sur sa branch
		2/ allez sur gitea et faire une nouvelle demande d'ajout (mettre le détail des ajouts)
		3/ Autoriser la merge request
		(Les mofications de la branch sont désormais sur la branch main, cepandant il est important de faire un git pull sur le serveur de prod pour avoir les modifiocations)
		4/ pour que la seconde branch récupère elle aussi les modifications alors faire une "git pull origin main"
	
---
# Apache : 

	modifier la conf de apache afin de changer le répertoire cible vers celui de notre dossier src : 

	sudo nano /etc/apache2/sites-available/000-default.conf et modifier le répertoir en ajoutant le /src afin d'avoir /var/www/html/src puis relancer apache avec : 
	sudo systemctl restart apache2


	Pour un déploiment sur un https faire :

	sudo nano /etc/apache2/sites-available/default-ssl.conf et faire la même manipe.


---
# NPM : 

	installer npm:  sudo apt install npm

# Tailwind :

	Start the Tailwind CLI build process
	Run the CLI tool to scan your template files for classes and build your CSS. ( dans le terminal  dans "html")

	npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch


# GEOIP 

	Install composer : 
	sudo apt install composer
	modifier le fichier php.ini et activer l'extension cURL :

	cd /etc/php/8.1/cli 
	et décomenter la ligne "extension=curl"
	redémarrer le serveur web "sudo systemctl restart apache2

	puis faire "composer install" dans le dossier html.

# Node JS
	pour installer node js suivre ce site

	https://tecadmin.net/how-to-install-nvm-on-ubuntu-20-04/

	