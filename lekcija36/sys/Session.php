<?php
    final class Session {
        public static final function begin(){
            session_start();
        }
        
        public static final function end(){
            self::clear();
            session_destroy();
        }
        
        private static final function isValid($key){
            return preg_match('/^[A-z][A-z0-9_]*$/', $key);
        }
        
        public static final function set($key, $value){
            if (self::isValid($key)){
                $_SESSION[$key] = $value;
                return true;
            } else {
                return false;
            }
        }
        
        public static final function exists($key){
            if (self::isValid($key)){
                return isset($_SESSION[$key]);
            } else {
                return false;
            }
        }


        public static final function get($key){
            if (self::exists($key) and self::isValid($key)){
                return $_SESSION[$key];
            } else {
                return false;
            }
        }
        
        public static final function clear(){
            $_SESSION = [];
            return true;
        }
    }
