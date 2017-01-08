#!/bin/bash

##@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@##
##                                    ##
##      ADVANCED CONFIGURATION :      ##
##     DO NOT CHANGE THE FOLLOWING    ##
##        UNLESS YOU KNOW WHY         ##
##                                    ##
##     PLEASE DEFINE THE VARIABLES    ##
##         IN THE VAGRANTFILE         ##
##         BEFORE VAGRANT UP!         ##
##                                    ##
##@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@##

# Prevents Vagrant warning messages
export DEBIAN_FRONTEND=noninteractive

#***************************************#
#                                       #
#          VAGRANT VARIABLES            #
#                                       #
#***************************************#


# Get variables defined in Vagrantfile
ISFIRSTRUN=$1
PROJECTNAME=$2
PASSWORD=$3
IPADRESS=$4
DATABASE=$5
PHPVERSION=$6
PMAVERSION=$7
TIMEZONE=$8

# Export variables to work with configuration templates
export PROJECTNAME PASSWORD IPADRESS DATABASE TIMEZONE
CONFIGVARS='$PROJECTNAME:$PASSWORD:$IPADRESS:$DATABASE:$TIMEZONE'

# Get current directory
current_dir="$(dirname "$0")"


#***************************************#
#                                       #
#             BOOT NOW !                #
#                                       #
#***************************************#


if [ "$ISFIRSTRUN" = "true" ] ; then

# Is executed on first boot
"$current_dir/vm.install.sh"

else

# Is executed every boot
"$current_dir/vm.configure.sh"

fi