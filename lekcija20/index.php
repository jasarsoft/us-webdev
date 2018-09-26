<?php
//    $seo_naslov = "Stranica 'O nama' - Kompanija ta i ta";
//    $naslov = 'O nama';
//    $godina = date('Y');
//    $proizvodi = [
//        [
//            'naslov' => 'Tastatura',
//            'opis'   => 'Najbolja gejmerska tastatura na trzistu.',
//            'cijena' => 23.5
//        ],
//        [
//            'naslov' => 'Mis',
//            'opis'   => 'Mis koji ima mogucnost podesavanja tegovima',
//            'cijena' => 17.8
//        ]
//    ];
    
    require_once 'VebStranica.php';
    
    $vs1 = new VebStranica("Stranica 'O nama' - Kompanija ta i ta", 
            'Ovo je stracnia o nama s tekstom', 
            'O nama', 
            'tekst');
    $vs1->setSadrzaj('<b>Poceli smo sa radom!<b><br>Kompanija postoji nekoliko godina...<br><br>Neki tekst o nama itd.');
    $vs1->setSeoKljucneRijeci('O nama, stranica, upoznavanje, sadrzaj, posao');
    
    $vs1->generisiHTML();