# php-hello-world


# setup
I setup on a windows machine. I installed
git for windows. I am installing Ampps for
windows php and mysql.


# howto commit push in atom
* View -> Toggle Git
* Select stage all to stage all files saved
* type in commit message detailing change.
* click commit
* click up down arrows on bottom and click push


#Startup steps
Open git bash in the project folder and run vagrant up.
##Vagrant commands
###vagrant up
Use this command to start-up.
###vagrant suspend
Use this command before shutting down.
###vagrant reload
reload the server.


#Running php client commands
##ssh
* open git bash
* ssh vagrant@localhost -p 2222
* password is vagrant
* cd /var/www
* php {name of script}

#scotchbox
* ssh vagrant@localhost -p 2222
* ssh user is vagrant password is vagrant

##mysql
CREATE USER 'root'@'localhost' IDENTIFIED BY 'root';
CREATE USER 'root'@'%' IDENTIFIED BY 'root';


#install laravel
https://www.ampps.com/wiki/Installing_Laravel_Framework


#remote-sync
https://atom.io/packages/remote-sync

#bitnami
https://bitnami.com/stack/lamp/virtual-machine
Username
user
Password
bitnami

bitnami@password for UNIX password



https://github.com/scotch-io/scotch-box
