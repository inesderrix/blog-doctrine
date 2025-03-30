ligne de commande 

updater dans la console : 
php bin/doctrine orm:schema-tool:update --force--dump-sql 

si ca marche pas :
php bin/doctrine orm:schema-tool:update --dump-sql
puis:
php bin/doctrine orm:schema-tool:update --force
