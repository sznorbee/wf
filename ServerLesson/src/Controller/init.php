<?php
require_once __DIR__.'/../../vendor/autoload.php';

//array stocked in app.conf.php 
$configs = require __DIR__.'/../../config/app.conf.php';

use Service\DBConnector;

DBConnector::setConfig($configs['db']);
