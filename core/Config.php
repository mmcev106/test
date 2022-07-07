<?php
    class Config {

        private static $config;

        public static function Init() {
            self::$config = require 'config/config.php';
        }

        public static function Database($driver,$value) {
            self::Init();
            return self::$config['database'][$driver][$value];
        }
 
        public static function App($value) {
            self::Init();
            return self::$config['application'][$value];
        }       
    }
