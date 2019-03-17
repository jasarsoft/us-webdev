<?php
    ob_start();

    if (!defined('APP_KEY') or APP_KEY != '12345678') {
        die('You cannot call this file directly!');
    }

    $actionName = $_GET['action'] ?? 'index';
    define('ACTION', preg_replace('/[^a-z]/', '', $actionName));

    $actionHandlerFile = 'actions/' . ACTION . '.php';
    if (!file_exists($actionHandlerFile)) {
        die('The requested action is not supported!');
    }

    require_once $actionHandlerFile;

    $actionTemplateFile = 'templates/' . ACTION . '.php';
    if (!file_exists($actionTemplateFile)) {
        die('The requested action\'s template file does not exist!');
    }

    require_once $actionTemplateFile;
