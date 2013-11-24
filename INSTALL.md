# Installing XLRstats v3.

*This web application depends on some minimal system requirements. Some of them will prevent you from using the app and even the installer. Make sure you have at least __PHP version 5.3.0__ installed and __Apache2__ with __mod_rewrite enabled__ before starting the installation.*

## Using the installer.

*This is the preferred method for installation. It handles most issues interactively. The installer runs some tests, presents forms to get you up and running and it prepares the database automagically.*

__Follow the next steps carefully to prepare the online installation procedure!__

1. XLRstats webfront needs a database to store it's webfront data (users, settings, options). Make sure you have a MySQL database available and that you have write access to it.
2. Download the XLRstats v3 package, unpack it and upload it to your PHP ready webserver or hostingenvironment. You may install XLRstats into the root of the domain, or in a subdirectory.
3. Make sure that `app/Config` and `app/tmp` folders (including all it's subfolders) are writable by the webserver.
4. Immediately after the upload has finished open your preferred browser and open the URL that you uploaded XLRstats to.
5. You will find yourself in the installer that takes 6 subsequent steps to finish initial installation of XLRstats. It will lead you through all the steps one by one. You can't move on to the next step if you don't complete the current one.

#### The different installation steps are:

    1. License agreement
    2. Server test (tests if the webserver meets the minimal credentials)
    3. Database setup (a database, database user with password and write access to the database must already exist)
    4. Adding the administrative (super)user
    5. Adding the first gameserver
    6. Finishing up


# Manual Installation

This method is for advanced users or if you can't use the installer for some reason. It requires advanced knowledge and manual editing of settings.

1. XLRstats webfront needs a database to store it's webfront data (users, settings, options). Make sure you have a MySQL database available and that you have write access to it.
2. Download the XLRstats v3 package, unpack it and upload it to your PHP ready webserver or hostingenvironment. You may install XLRstats into the root of the domain, or in a subdirectory.
3. Make sure that `app/tmp` (including all it's subfolders) is writable by the webserver.
4. Copy `app/Config/database.php.default` to `app/Config/database.php`, open it and modify the public $default array so you can access the database as mentioned in step 1.
5. Execute `app/Config/Schema/xlrstats.sql` on your database to create the tables necessary for the XLRstats webfront.
6. Copy `app/Config/email.php.default` to `app/Config/email.php`, open it and modify the public $default array according to your servers email capabilities.
7. Open `..app/Config/core.php` and find __'Security.salt'__. Change the value of setting with a random string sequence. Then find __'Security.cipherSeed'__ and change the value of that setting with a random numeric string (digits). Finally find __'Installer.enable'__ and change its value to __false__.
8. Add a server to the database (using a tool like phpMyAdmin) by inserting a row to the __'servers'__ table with the credentials to connect to a B3 database. You need at least one server to make the webfront work properly.
9. Open the XLRstats website and register for an account. Verify your account by clicking the link in the email that you will automatically receive. After registration modify your account in the database (using a tool like phpMyAdmin) and change the field group_id to 1.
10. You're now done... To access the administration dashboard: Open the website, log in and choose __'Dashboard'__ in the pull down menu in the upper right corner (click your name).

-----

# Problems?

### Symptom:
Can't start installation, you only get the ``Cannot continue`` message.

#### Solution:
Make sure `app/Config` and `app/tmp` (including all it's subfolders) are writable by the webserver.

### Symptom:
Installer looks crappy, and you get errors like: ``"404 /install/license not found"``

#### Solution:
You probably don't want or can't get mod\_rewrite (or some other compatible module) up and running on your server, you'll need to use our built-in pretty URLs. In ``app/Config/core.php``, uncomment the line that looks like:

    Configure::write('App.baseUrl', env('SCRIPT_NAME'));

Also remove these .htaccess files::

    .htaccess
    app/.htaccess
    app/webroot/.htaccess

Downside to this method is that although the webfront will look fine, the Administration Dashboard will still look crappy. 
