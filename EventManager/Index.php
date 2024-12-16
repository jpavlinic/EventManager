<?php
final class Index {

    public static function run() {
        self::init();
        self::handle();
    }

    private static function init() {
        error_reporting(E_ERROR | E_STRICT);
        spl_autoload_register(['Index', 'loadClass']);
        define('PROJECT_ROOT', $_SERVER['DOCUMENT_ROOT']);
        define('PROJECT_URL', 'https://' . $_SERVER['HTTP_HOST'] . pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME));
        define('TITLE', 'Event Manager');
        define('CONFIG_DATA', parse_ini_file('./app/config/config.ini', true));
    }

    private static function loadClass($class_name) {
        $dirs = array(
            'app/',
            'app/router/',
            'app/model/',
            'app/view/',
            'app/controller/'
        );

        foreach ($dirs as $dir) {
            if (file_exists($dir . $class_name . '.php')) {
                require_once($dir . $class_name . '.php');
                return true;
            }
        }
        return false;
    }

    private static function handle() {
        $router = new Router();
        $router->dispatch($_SERVER["QUERY_STRING"]);
    }
}

Index::run();
