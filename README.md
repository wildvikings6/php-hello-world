# howto commit push in atom (commit edits to repo)
* View -> Toggle Git
* Select stage all to stage all files saved
* type in commit message detailing change.
* click commit
* click up down arrows on bottom and click push

#Startup steps
Open git bash in the php-hello-world\scotch-box-master and run vagrant up.
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

#mysql
Mysql workbench can be used to look at the scotchbox database.
User is root and password is root. This setup should already be
there as a localhost connection. Just click on this connection
to bring it up.

#remote-sync
https://atom.io/packages/remote-sync

# setup
Ended up modifying scotchbox vagrant build.


#Sites
* repl.it has some good classes in beta.
