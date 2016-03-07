# Wordpress Project Boilerplate
A blank theme to be used for WordPress-powered projects.

## Features
* Bootstrap 3 Based
* Gulp powered
* LESS support

## Installation & Documentation
You can find how to use this Wordpress Project boilerplate by [reading the wiki](https://github.com/rapidwebltd/wordpress-project-boilerplate/wiki/Installation-Guide).

## Credits
Originally forked from [Matt Vickers](https://github.com/envex/blank-wordpress-theme)

## htaccess
Add where necessary

### Turn on rewriteengine
```RewriteEngine On```

### Restrict to maintenance page on go live

```
# Replace the "###EXTERNAL IP ADDRESS HERE###" phrase with your external IP Address (Search google for "IP")
RewriteCond %{REMOTE_ADDR} !###EXTERNAL IP ADDRESS HERE### [NC]
RewriteRule !maintenance.php /maintenance.php? [R]
```

### Redirect for news legacy installs to root installs
```
RewriteRule ^news/wp-content/uploads/(.*)$ wp-content/uploads/$1 [R=301,L]
```

### mod deflate
```
<IfModule mod_deflate.c>
    <IfModule mod_headers.c>
        Header append Vary User-Agent env=!dont-vary
    </IfModule>
        AddOutputFilterByType DEFLATE text/css text/x-component application/x-javascript application/javascript text/javascript text/x-js text/html text/richtext image/svg+xml text/plain text/xsd text/xsl text/xml image/x-icon application/json
    <IfModule mod_mime.c>
        # DEFLATE by extension
        AddOutputFilter DEFLATE js css htm html xml
    </IfModule>
</IfModule>
```

### Expiry caching

```
ExpiresActive On
ExpiresByType image/jpg "access 1 year"
ExpiresByType image/jpeg "access 1 year"
ExpiresByType image/gif "access 1 year"
ExpiresByType image/png "access 1 year"
ExpiresByType text/css "access 1 month"
ExpiresByType application/pdf "access 1 month"
ExpiresByType text/x-javascript "access 1 month"
ExpiresByType application/javascript "access plus 1 year"
ExpiresByType application/x-shockwave-flash "access 1 month"
ExpiresByType image/x-icon "access 1 year"
ExpiresDefault "access plus 1 month"
```

