<?php

use lib\Config;

// DB Config
Config::write('db.host', ini_get('mysqli.default_host'));
Config::write('db.port', '');
Config::write('db.basename', ini_get('mysqli.default_user'));
Config::write('db.user', ini_get('mysqli.default_user'));
Config::write('db.password', ini_get('mysqli.default_pw'));

// Project Config
//Config::write('path', $_SERVER['SERVER_NAME']);
Config::write('path', 'http://34.233.146.10');

