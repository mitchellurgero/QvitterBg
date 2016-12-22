# QvitterBg
Qvitter sitebackground randomizer! 

This changes the background of the site everytime the login page is loaded! :D

## How to install
1. Download QvitterBgPlugin.php and put in the `./plugins/` folder of your server.
2. Add the following lines to config.php (After addPlugin("Qvitter");!!):
```
    addPlugin('QvitterBg');
    $config['site']['qvitterbg']['folder'] = "<folder>"; //Replace <folder> with a folder path in the root of your GS instance.
```
- The folder needs to be relative to config.php, NOT QvitterBgPlugin.php!!!!

- Add images to the folder and then refresh the login page!

## Issues
Put em on the GitHub for me to look at:
[Issues for QvitterBg](https://github.com/mitchellurgero/QvitterBg)
