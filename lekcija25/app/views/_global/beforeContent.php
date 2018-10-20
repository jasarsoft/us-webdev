<!doctype html>
<html>
    <head>
        <<title><?php echo @$DATA['seo_title']; ?></title>
        <meta   charset="utf-8">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/<?php echo $_GET['Controller']; ?>.css" rel="stylesheet">
    </head>
    <body>
        <section id="wrapper">
            <header id="header">
                <img alt="Promotivni baner 1" src="assets/img/baner1.jpg">
            </header>
            <nav id="nav">
                <ul>
                    <li><?php Misc::url('Products', 'index', 'Spisak proizvoda'); ?></li>
                    <li><?php Misc::url('Contact', 'index', 'Kontakt'); ?></li>
                </ul>
            </nav>
            <main id="sadrzaj">
        