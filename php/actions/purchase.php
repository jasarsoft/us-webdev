<?php
    if (!defined('APP_KEY') or APP_KEY != '12345678') {
        die('You cannot call this file directly!');
    }
    // funkcija koja sluzi za prikazivanje greske!
    function redirectToIndex($messageCode = 0) {
        ob_clean();
        header('Location: ?action=index&message=' . $messageCode);
        exit;
    }
    
    
    // funkcija za preuzimanje trenutne cene ETH valute preko web servisa. Ovaj deo nije potreban u Projektu 1
    function getCurrentEthereumPrice() {
        $json = file_get_contents('https://api.coinmarketcap.com/v1/ticker/ethereum/?limit=1');
        $data = json_decode($json);
        if (!$data || !count($data)) {
            return 0;
        }

        return $data[0]->price_usd;
    }
    // ako $_POST nije definisan, vrati gresku sa kodom -1 (pogledati fajl actions/index.php za poruke o greskama)
    if (!$_POST) {
        redirectToIndex(-1);
    }
    // ako vrednost $_POST niza nije postavljena za sva polja u formi, vrati gresku sa kodom -2  (pogledati fajl actions/index.php za poruke o greskama)
    if (!isset($_POST['forename']) ||
        !isset($_POST['surname']) ||
        !isset($_POST['year']) ||
        !isset($_POST['gender']) ||
        !isset($_POST['payment_type']) ||
        !isset($_POST['amount'])) {
        redirectToIndex(-2);
    }
    
    // funkcije za  "sredjivanje" inputa, filter_sanitize_string uklanja specijalne karaktere iz stringa
    // ovaj deo nije obavezan u Projektu 1
    
    $forename = filter_input(INPUT_POST, 'forename', FILTER_SANITIZE_STRING);
    $surname  = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
    $year     = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_NUMBER_INT);
    $gender   = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $payment  = filter_input(INPUT_POST, 'payment_type', FILTER_SANITIZE_STRING);
    $amount   = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING);

  // funkcije za  validaciju inputa koriscenjem obrazaca (uzoraka)
  // ovaj deo nije obavezan u Projektu 1
    if (!preg_match('/^\S{4,}$/', $forename) ||
        !preg_match('/^\S{4,}$/', $surname) ||
        $year < 1900 ||
        $year > date('Y') - 18 ||
        !in_array($gender, ['male', 'female']) ||
        !in_array($payment, ['CC_VISA', 'CC_MC', 'CC_AMEX', 'WIRED']) ||
        $amount < 0.001) {
        redirectToIndex(-3); // ako neko polje ne zadovoljava "uzorak", vraca se greska -3
    }

    $TITLE = 'Potvrda o transakciji';

    $PAYMENT_TYPE_NAME = '';
    
    // switch naredba, gde se promenljivoj $PAYMENT_TYPE_NAME dodeljuje vrednost u zavisnosti od nacina placanja
    switch ($payment) {
        case 'CC_VISA' : $PAYMENT_TYPE_NAME = 'VISA'; break;
        case 'CC_MC'   : $PAYMENT_TYPE_NAME = 'Master Card'; break;
        case 'CC_AMEX' : $PAYMENT_TYPE_NAME = 'American Express'; break;
        case 'WIRED'   : $PAYMENT_TYPE_NAME = 'Wired transfer'; break;
    }
    // htmlspecialchars je funkcija koja konvertuje specijalne karaktere u u HTML entitete
    // na primer & (ampersand) se konvertuje u &amp;
    $FORENAME = htmlspecialchars($forename);
    $SURNAME  = htmlspecialchars($surname);
    $YEAR     = $year;
    $GENDER   = $gender;
    $AMOUNT   = $amount;

    $CURRENT_PRICE = getCurrentEthereumPrice();
    // u slucaju da trenutna cena ETH valute ne moze da se preuzme preko web servisa, javlja se greska sa kodom -4
    if (!$CURRENT_PRICE) {
        redirectToIndex(-4);
    }
    // ukupna cena=trenutna cena koja je preuzeta preko web servisa * kolicina koju je user uneo u HTML formu
    $TOTAL_PRICE = $CURRENT_PRICE * $AMOUNT;
    // dinamicko polje datum, gde se ispisuje trenutni datum u odredjenom formatu
    $TIME = date('H.i j\t\h, F');
     
    $PRICE_LEVEL="";
    
    // promenljiva $priceLevel dobija vrednost rezultata izvrsavanja funkcije checkPriceLevel
    $PRICE_LEVEL=checkPriceLevel($CURRENT_PRICE);
    
    // pomocna funkcija kojom se proverava trenutna cena ETH valute, ako je na primer >500 dolara, cena je visoka, a ako nije, cena je optimalna
    function checkPriceLevel($current_price){
        
        if($current_price>500)
            $priceLevel="<font color=\"red\"> Trenutno je cena ETH valute visoka </font>";
        else
            $priceLevel="<font color=\"blue\"> Trenutno je cena ETH valute niska. Dobra kupovina </font>";
        return $priceLevel;
        
    }