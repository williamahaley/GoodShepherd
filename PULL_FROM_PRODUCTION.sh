#!/usr/bin/env bash
ssh root@45.55.226.192 "mysqldump -u root --password=root scotchbox > /var/www/public/dump.sql"

