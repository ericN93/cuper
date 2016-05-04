CUser
=========

A PHP-based package to use with ["AnaxMVC"](https://github.com/mosbth/Anax-MVC).

I handles the user autorisation process.


HOW TO USE:
===========

1. Create a new (project) folder and install AnaxMVC to it by cloning:

    git clone https://github.com/mosbth/Anax-MVC.git.

2. Point browser to the file webroot/hello.php.
- IF it is working then continue.

3. Edit (or create) the file composer.json by adding the folowing line:

    "require": {"ericN93/cuser": "dev-master"}

4. Also set the stability flags in the composer.json file to:

    "minimum-stability": "dev",
    "prefer-stable" : true,

5. Then validate and install the packages via composer:

    composer validate
    composer install --no-dev

6. Now you have to pull out some files and put it in thier right place
  -login_test.php from vendor/eric-n93/cuser/webroot and put it in your webroot folder.
  -CUser folder from vendor/eric-n93/cuser/src and put it in your app/src folder.
  -user folder from vendor/eric-n93/cuser/view and put it in your app/view folder.

7. Now test login_test.php file thats in your webroot folder.
-username is admin and password is also admin




```
 .  
..:  Copyright (c) 2016 Eric Nilsson
```
