<?php

// u promenjivu $Lozike smestamo sadrzaj fajla lozinke.txt
$lozinke = file("lozinke.txt");
// otvaramo (kreiramo) novi fajl sifrovaneLozinke.txt, gde cemo da smestimo sifrovane lozinke
$fl=fopen("sifrovaneLozinke.txt","w");
// idemo u foreach petlji i citamo liniju po niju iz fajla lozinke.txt
foreach ($lozinke as $login){
    // u promenljive, redom $username i $lozinka iz svakog reda fajla lozinke.txt upisujemo vrednosti pre i posle karaktera :
    // pre karaktera : su korisnicka imena, a posle karaktera : su lozinke
	list($username,$lozinka)=explode(":",$login);
    // trimujemo lozinke
        $lozinka=trim($lozinka);
    // trimujemo korisnicka imena
        $username=trim($username);
    // u fajl sifrovaneLozinke.txt upisujemo korisnicko ime, pa karakter :, pa lozinku sifrovanu md5 algoritmom
    // i prelazimo u sledeci red, jer se spremamo za novi unos
	fwrite($fl,$username.":".md5($lozinka)."\n");
}
// zatvaramo fajl sifrovaneLozinke.txt
fclose($fl);


?>