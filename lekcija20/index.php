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
    
//    $vs1 = new VebStranica("Stranica 'O nama' - Kompanija ta i ta", 
//            'Ovo je stracnia o nama s tekstom', 
//            'O nama', 
//            'tekst');
//    $vs1->setSadrzaj('<b>Poceli smo sa radom!<b><br>Kompanija postoji nekoliko godina...<br><br>Neki tekst o nama itd.');
//    $vs1->setSeoKljucneRijeci('O nama, stranica, upoznavanje, sadrzaj, posao');
//    
//    $vs1->generisiHTML();

//    $vs2 = new VebStranica('Stranica sa katalogom proizvoda', 'Ovdje mozete vidjeti nase prizvode...', 'Proizvodi', 'proizvodi');
//    $vs2->setPosebanSadrzaj([
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
//    ]);
//    $vs2->generisiHTML();
    
    $vs3 = new VebStranica('Kontakt direktor - Kompaanija ta i ta', 'Ovdje mozete naci kontakt podatke naseg direktora.', 'Kontakt direktora', 'kontakt');
    
    require_once 'KontaktPodaci.php';
    $direktor = new KontaktPodaci('Petar Petrovic', '+381 11 30 94 094', 'direktor@kompanijataita.com');
    
    $vs3->setPosebanSadrzaj($direktor);
    $vs3->generisiHTML();
    