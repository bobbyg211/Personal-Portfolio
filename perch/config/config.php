<?php
    define('PERCH_LICENSE_KEY', 'P3-LOCAL-FKA201-BBR206-MGJ020');

    define("PERCH_DB_USERNAME", 'robertdg96');
    define("PERCH_DB_PASSWORD", 'sigmaSDR35C');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "rg-io");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'robertdg96@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Robert Gonzalez');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
