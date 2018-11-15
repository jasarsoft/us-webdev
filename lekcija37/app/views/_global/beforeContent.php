<!doctype html>
<html>
    <head>
        <<title><?php echo @$DATA['seo_title']; ?></title>
        <meta   charset="utf-8">
        <link href="<?php echo Configuration::BASE ?>assets/css/main_1.css" rel="stylesheet">
        <link href="<?php echo Configuration::BASE ?>assets/css/mobile.css" rel="stylesheet">
        <link href="<?php echo Configuration::BASE ?>assets/css/<?php echo $FoundRoute['Controller']; ?>.css" rel="stylesheet">
        <link href="<?php echo Configuration::BASE ?>assets/css/<?php echo $FoundRoute['Controller']; ?>-mobile.css" rel="stylesheet">
    </head>
    <body>
        <section id="wrapper">
            <nav id="nav">
                <ul>
                    <li><?php Misc::url('', 'Home'); ?></li>
                    <li><?php Misc::url('product/list', 'List all products'); ?></li>
                    <li><?php Misc::url('logout', 'Log out'); ?></li>
                </ul>
            </nav>
            <main id="sadrzaj">
        