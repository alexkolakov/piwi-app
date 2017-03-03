PIWI APP (using PIWI Framework)
===============================

Installation:
---------------------------

- git clone https://github.com/alexkolakov/piwi-app.git

- composer install

- add virtual host to your apache

```
<VirtualHost *:80>
        ServerName sitename.dev

        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/piwi-app/web


        <Directory "/var/www/piwi-app/web">
                Options FollowSymLinks
                AllowOverride All
                Require all granted
        </Directory>
</VirtualHost>
```

- add sitename.dev to hosts file (/etc/hosts)

`127.0.0.1 sitename.dev`