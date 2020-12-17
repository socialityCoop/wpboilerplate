# WordPress Boilerplate (Bedrock & UnderStrap)

To be honest it is not such a huge deal. We basically have combined the arctitecture of [Bedrock](https://roots.io/bedrock/) provided by [Roots](https://roots.io/) with [UnsterstrapChild](https://github.com/understrap/understrap-child/) applying a small [fix](https://github.com/understrap/understrap-child/issues/229#issuecomment-554858596) provided by [monkishtypist](https://github.com/monkishtypist). We have also added some plugins we use in all our websites.

Our goal is to provide our developers at [Sociality](https://sociality.coop) with a ready to work WordPress installation in order to create custom websites using:

* Composer for plugin managment
* Git for versioning
* Gulp for SASS processing

actully all features of Understrap, Understrap Child and Bedrock combined.

Οι οδηγίες είναι προσβάσιμες και στα Ελληνικά [εδώ](https://learn.sociality.gr/knwbase/wordpress-web-development-me-bedrock/)

## Requirements

* PHP >= 7.1
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
* Node & npm - [Insall](https://nodejs.org/en/)

For developers on Windows we use:

* XAMPP - [Install](https://www.apachefriends.org/index.html)
* Git for Windows - [Install](https://git-scm.com/download/win)

## Installation

1. Download this repo as a zip
2. Creat a new repo in your favorite git system and clone it in your local dev enviroment. If you use XAMPP is `htdocs`.
3. Add the files you donwloaded in your new repo named `newproject `
4. Open your cli and in the root director run `composer install & composer update`
5. Create a copy of the `env.example` and name it `.env`.
6. Create a Database and a Database user in your local environment and add the credentials in the `.env` file as following:
  * Database variables
    * `DB_NAME` - Database name
    * `DB_USER` - Database user
    * `DB_PASSWORD` - Database password
  * You will also need to add WordPress Key. You can create yours [here](https://roots.io/salts.html).
  * We have alreay provided the rest of the enviromental valiable for local developemnt (newproject.local). Ofcourse you can change them as you wish but you should take in mind that you should also change them in the `gulpconfig.json` file of the Child Theme. For deployment you will create a new `.env` file with the production enviromental variables.
7. If you use XAMPP or Apache you should follow the following to access your website from your browser
  * Add the following to your `hosts` file (C:\Windows\System32\drivers\etc) `127.0.0.1 newproject.local` 
  * Add the following to your appache vhosts file (C:\xampp\apache\conf\extra\httpd-vhosts.conf):
    ```
    <VirtualHost *:80>
      DocumentRoot "C:\xampp\htdocs\newproject\web"
      ServerName newproject.local
      ServerAlias www.newproject.local
      ErrorLog "logs/ousite.gr-error.log"
      DirectoryIndex index.php index.html index.html
    </VirtualHost>
    ```
8. Go to the Child theme directory `web/app/themes/understap-child` and run `npm install`
9. Access in your browser `http://newproject.local` to finalize your WordPress instalation

You are ready!
To use gulp and BrowserSync you go to the Child Drestorcy and run `gulp watch-bs`. All changes you make in your SASS files will be automatically compiled and if you access the website through `http://localhost:3000` the website will reload automatically everytime a change is made.


## Documentation

* Bedrock documentation is available at [https://roots.io/bedrock/docs/](https://roots.io/bedrock/docs/).
* Understrap Child documentation is available at [https://github.com/understrap/understrap-child](https://github.com/understrap/understrap-child)
* Understrap documentation is available at [https://github.com/understrap/understrap](https://github.com/understrap/understrap-child)

## Contributing

Contributions are more than welcome from everyone. 
