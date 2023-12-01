#! /bin/sh
service php8.2-fpm restart
nginx -g "daemon off;"
service php8.2-fpm restart