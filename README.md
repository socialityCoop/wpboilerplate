
# WordPress Boilerplate (Bedrock & UnderStrap)

To be honest it is not such a huge deal. We basically have combined the architecture of [Bedrock](https://roots.io/bedrock/) provided by [Roots](https://roots.io/) with [UnsterstrapChild](https://github.com/understrap/understrap-child/). We have also added some plugins we use in all our websites.

Our goal is to provide our developers at [Sociality](https://sociality.coop) with a ready to work WordPress installation in order to create custom websites using:

* Composer for plugin managment
* Git for versioning
* npm for SASS processing

### Requirements

* PHP >= 8.3
* Composer - [Install](https://getcomposer.org/)
* Node & npm - [Install](https://nodejs.org/en/)

For development on Windows we use:

* WAMP- [Install](https://www.wampserver.com/en/)
* WP-CLI - [Install](https://wp-cli.org/)
* Git for Windows - [Install](https://git-scm.com/download/win)

## Documentation

* Bedrock documentation is available at [https://roots.io/bedrock/docs/](https://roots.io/bedrock/docs/).
* Understrap Child documentation is available at [https://github.com/understrap/understrap-child](https://github.com/understrap/understrap-child)
* Understrap documentation is available at [https://github.com/understrap/understrap](https://github.com/understrap/understrap)

## Installation 

You can use the skill we have created to have an agent do the instalation for you in  `.agents/skills/bedrock-installation`

Otherwsie follow these steps youself in order to install a new site on a local Windows WAMP environment.

* Download this repo as a zip
* Create a new repo in your favorite git system and clone it in your local dev environment. 
* Add the files you downloaded in your new repo named `mysite.local ` or as you wish - you will need to change it in other places too as listed below.

### 1. Apache virtual host

* Name the virtual host in WAMPP interface after the current project folder, for example `mysite.local`.
* Point `DocumentRoot` and `<Directory>` to this project's `web/` folder only.
* Reload Apache after saving the configuration.

### 2. Windows hosts file

Add the virtual host name to `C:\Windows\System32\drivers\etc\hosts`, for example:

```
127.0.0.1 mysite.local
```

### 3. Composer packages

* In `composer.json`, update the theme and plugin requirements (`wp-theme/*` and `wp-plugin/*`) to the latest versions listed on [WP Packages](https://wp-packages.org/).
* Run:

```bash
composer install
composer update
```

### 4. Database and `.env`

* Create a new MySQL database and user for this site in WAMP phpMyAdmin. Use a strong password.
* Copy `.env.example` to `.env` and fill in the database name, username, and password.
* Set `WP_HOME` to the local URL whose hostname matches the folder/vhost (e.g. `http://mysite.local`).
* * Fetch the WordPress salts from [roots.io/salts.html](https://roots.io/salts.html) and add them to `.env`.

### 5. WordPress installation

WordPress core is already installed as a Composer package in `web/wp`, so no download is needed. Access `mysite.local` in your browser to conclude the installation.

### 6. Child theme and plugins

* Run `npm install` in `web/app/themes/understrap-child`.
* Activate the child theme and the project plugins.
* Change the `Text Domain` in `web/app/themes/understrap-child/style.css` to match the project.
* Rename `web/app/plugins/site-specific-plugin` to match the project, update its `Text Domain`, and activate it.

## Usage

* In `AGENTS.npm` we have added some development rules we follow
* Run `npm run watch` inside the child theme to compile SCSS and JS

* If you use Zed with the WordPress MCP server, configure it through **Settings → AI → MCP Servers**. Zed stores this under `context_servers`; Cursor users can maintain `.cursor/mcp.json` separately.
