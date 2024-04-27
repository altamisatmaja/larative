<?php

if (!session_id()) {
    session_start();
}

require_once '../routes/web.php';
require_once '../config/config.php';

$routes = new Routes();
$routes->run();
