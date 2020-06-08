# DuckStat OSS

DuckStat OSS is a Open-Source Version of DuckStat by Duck Developing Studio.
The Open-Source Project is developed by OpenDuck.

Feel free to contribute to this Project!

## Features

- create and manage your own Statuspage
- create Incidents
- have a lightweight, fast and easy Statuspage!

## Requirements

- PHP 7.3
- Apache 2.3


## How to Install and use it
(Tested on Debian 10)

Step 1: Download the GitHub Repo

Step 2: Predefine the app.ini, app3.ini files

Step 3: Setup your Login Data in the `user/validation/login.php` file

Step 4: Login and change the Statuspage Names

Step 5: Enjoy!

## PLUGINS!

This Open-Source also allows you to add your own plugins to customize your page in the way you like it.

### How to enable Plugins

Head over to the `user/validation/app3.ini` and set "plugins" to "true".

The script then automatically includes the plugin to every file it should be used. Since `check.php` is required in nearly every file, the plugin is available in every file.

If you don't want to have the plugin on every page, go to the `check.php` file, line 109 and comment out (use #) line 109 to 112.

Then you can use the `plugins.php` file in the main directory. It is the same as the function you just comment out, but you decide if you want to include it or not. If you want the plugins on several pages only, add the following to each of the files:

```

include_once "plugin_introduction.php";

```

For Developers and Plugin creators, please head over to the `API_DOCUMENTATION.md`-file.


## FAQ/Others

This section is to answer questions and other stuff!

### How can I contribute? / How can I join OpenDucks?

You can join the OpenDuck Organisation on GitHub and make a pull request to the testing branch.
Contributing to the untested branch is only possible, when you are part of OpenDucks.

For any other contributions please create a branch

If you'd like to join OpenDucks, please go to issues and request it there!

### What's the "untested" branch?

This branch contains contributions that aren't tested by enough people or are new. After they are tested, they'll be merged.
