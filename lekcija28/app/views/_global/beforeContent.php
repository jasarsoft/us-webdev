<!doctype html>
<html>
    <head>
        <<title><?php echo @$DATA['seo_title']; ?></title>
        <meta   charset="utf-8">
        <link href="<?php echo Configuration::BASE ?>assets/css/main.css" rel="stylesheet">
        <link href="<?php echo Configuration::BASE ?>assets/css/<?php echo $FoundRoute['Controller']; ?>.css" rel="stylesheet">
        <link href="<?php echo Configuration::BASE ?>assets/css/mobile.css" rel="stylesheet">
        <link href="<?php echo Configuration::BASE ?>assets/css/<?php echo $FoundRoute['Controller']; ?>-mobile.css" rel="stylesheet">
    </head>
    <body>
        <section id="wrapper">
            <header id="header">
                <img alt="Promotivni baner 1" src="<?php echo Configuration::BASE ?>assets/img/baner1.jpg">
            </header>
            <nav id="nav">
                <ul>
                    <li><?php Misc::url('products', 'Spisak proizvoda'); ?></li>
                    <li><?php Misc::url('page/about-us', 'O nama'); ?></li>
                    <li><?php Misc::url('page/our-portofolio', 'Nas protofolio'); ?></li>
                    <li><?php Misc::url('contact', 'Kontakt'); ?></li>
                </ul>
            </nav>
            <main id="sadrzaj">
        