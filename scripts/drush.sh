#!/usr/bin/env bash

appname=$1;
shift;
echo $@
heroku run -a $appname ./vendor/bin/drush $@