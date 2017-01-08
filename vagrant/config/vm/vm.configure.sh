#!/bin/bash

#***************************************#
#                                       #
#         APPLY ALL THE CONFIG          #
#                                       #
#***************************************#


# configure virtualhost (see config/virtualhost.conf)
envsubst "$CONFIGVARS" < /vagrant/config/virtualhost.conf | sudo tee /etc/apache2/sites-available/000-default.conf

# configure Apache web logs (see config/apache-web-log.php)
envsubst "$CONFIGVARS" < /vagrant/vendor/apache-web-log.php | sudo tee /var/www/apache/index.php

# Configure PHP (see config/php.ini)
if [ $PHPVERSION = "5" ] ; then PHPPATH="php" ; else PHPPATH="php/" ; fi
envsubst "$CONFIGVARS" < /vagrant/config/php.ini | sudo tee /etc/$PHPPATH$PHPVERSION/apache2/conf.d/01-$PROJECTNAME.ini

# configure PhpMyAdmin (see config/phpmyadmin.php)
envsubst "$CONFIGVARS" < /vagrant/config/phpmyadmin.php | sudo tee /var/www/phpmyadmin/config.inc.php

# start mailcatcher
mailcatcher --ip=0.0.0.0

# restart Apache
sudo service apache2 restart