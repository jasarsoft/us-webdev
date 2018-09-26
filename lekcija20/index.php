<?php
    $seo_naslov = "Stranica 'O nama' - Kompanija ta i ta";
    $naslov = 'O nama';
    $godina = date('Y');
    $proizvodi = [
        [
            'naslov' => 'Tastatura',
            'opis'   => 'Najbolja gejmerska tastatura na trzistu.',
            'cijena' => 23.5
        ],
        [
            'naslov' => 'Mis',
            'opis'   => 'Mis koji ima mogucnost podesavanja tegovima',
            'cijena' => 17.8
        ]
    ];
    
    require_once 'sablon_stranice.php';