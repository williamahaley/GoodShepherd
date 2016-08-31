#!/usr/bin/env bash
printf "Password is vagrant\n"
ssh vagrant@192.168.33.10 "mysqldump -u root --password=root scotchbox > /var/www/public/dump.sql"
scp -i .ssh/shepherd WordPress/dump.sql root@45.55.226.192:/root/dump.sql
ssh -i .ssh/shepherd root@45.55.226.192 "mysql -u ucm --password=FHAiyD7KmuhZWj@1wUqyKzYE ucm < /root/dump.sql"
ssh -i .ssh/shepherd root@45.55.226.192 "php /SITES/ucm-website/Search-Replace-DB/srdb.cli.php -h localhost -n wordpress -u wordpress -p XCbKSzHzvy -s goodshepherd.dev -r 45.55.226.192"
scp -i .ssh/shepherd  -r WordPress/wp-content/uploads root@45.55.226.192:/var/www/html/wp-content/uploads
