<?php
    if (!defined('APP_KEY') or APP_KEY != '12345678') {
        die('You cannot call this file directly!');
    }
    // promenljiva u koj se cuva naslov forme
    $TITLE = 'Zahtev za kupovinu';
    // promenljiva koja cuva vrednost koda promenljive MESSAGE. Ova vrednost se uzima preko $_GET globalnog niza
    $messageCode = intval($_GET['message'] ?? 0);

    $MESSAGE = '';
    // u zavisnosti od vrednosti $messageCode (ova promenljiva cuva kod o potencijalnoj greski), promenljivoj MESSAGE se dodeljuje odredjena
    // vrednost (poruka), koja ce korisniku da se prikaze
    
    switch ($messageCode) {
        case -1:
            $MESSAGE = 'Ne možete direktno da otvorite stranicu za potvrdu transakcije.';
            break;
        case -2:
            $MESSAGE = 'Nisu dostavljeni svi podaci potrebni za obavljanje transakcije.';
            break;
        case -3:
            $MESSAGE = 'Neki od podataka koji su dostavljeni nisu ispravnog formata ili vrednosti.';
            break;
        case -4:
            $MESSAGE = 'Došlo je do greške prilikom preuzimanja podataka o ceni Ethereum-a na berzi.';
            break;
    }
