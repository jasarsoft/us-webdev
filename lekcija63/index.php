<?php
    if ($_POST) {
        $db = new PDO('mysql:hostname=localhost;dbname=validdemo;charset=utf8', 'root', 'root');
        
        if (!$db) {
            die('DB connection erro!');
        }
        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = hash('sha512', filter_input(INPUT_POST, 'password'));
        
        $tip_naloga = filter_input(INPUT_POST, 'tip_naloga', FILTER_SANITIZE_NUMBER_INT);
        
        if ($tip_naloga == 1) {
            $jmbg = filter_input(INPUT_POST, 'jmbg', FILTER_SANITIZE_NUMBER_INT);
            if (!preg_match('/^[0-9]{13}$/', $jmbg)) {
                die('Nije validan JMBG!');
            }
            
            $telefon = filter_input(INPUT_POST, 'telefon');
            if (!preg_match('/\+[0-9]{4,}$/', $telefon)) {
                die('Nije validan telefon');
            }
            
            $SQL = "INSERT INTO `fizicko_lice` (`email`, `password`, `jmbg`, `telefon`) VALUES (?, ?, ?, ?);";
            $prep = $db->prepare($SQL);
            
            $res = $prep->execute([$email, $password, $jmbg, $telefon]);
            if ($res) {
               die('Dodano uspjesno fizicko_lice'); 
            }
        } elseif ($tip_naloga == 2) {
            $pib = filter_input(INPUT_POST, 'pib', FILTER_SANITIZE_NUMBER_INT);
            if (!preg_match('/^[0-9]{7}$/', $pib)) {
                die('Nije validan PIB!');
            }
            
            $mbr = filter_input(INPUT_POST, 'mbr', FILTER_SANITIZE_NUMBER_INT);
            if (!preg_match('/^[0-9]{6}$/', $mbr)) {
                die('Nije validan MBR!');
            }
            
            $domaca_ili_strana = filter_input(INPUT_POST, 'domaca_ili_strana', FILTER_SANITIZE_NUMBER_INT);
            if (!in_array($domaca_ili_strana, [1, 2])) {
                die('Nije validna vrijednost za pitanje da li je drzava strana ili domaca.');
            }
            
            $drzava = '';
            if ($domaca_ili_strana == 2) {
                $drzava = filter_input(INPUT_POST, 'drzava_porijekla', FILTER_SANITIZE_STRING);
                if (strlen($drzava) < 3) {
                    die('Polje drzava nema ispravnu vrijednost.');
                }
            }
            
            $SQL = "INSERT INTO `pravno_lice` (`email`, `password`, `pib`, `mbr`, `drzava`) VALUES (?, ?, ?, ?, ?);";
            $prep = $db->prepare($SQL);
            
            if (!$prep) {
                die('Porgramer je pogresno formatirao upit.');
            }
            
            $res = $prep->execute([$email, $password, $pib, $mbr, $drzava]);
            if ($res) {
                die('Dodato uspjesno.');
            } else {
                die('Doslo je do greske.');
            }            
        } else {
            die('Nedozvoljen tip naloga');
        }
    }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
        <link href='assets/css/bootstrap.min.css' rel='stylesheet'>
        <link href='assets/css/bootstrap-theme.min.css' rel='stylesheet'>
    </head>
    <body>
        <br>
        <div class='container'>
            <div class='row'>
                <form method='post' class='form-horizontal'onsubmit="return validateForm();">
                    <div class='form-group'>
                        <label class='control-label col-xs-2' for='email'>Adresa e-poste</label>
                        <div class='col-xs-10'>
                            <input type='email' id='email' name="email" class="form-control" placeholder="Unesite adresu svoje elektronske poste" required>
                        </div>
                    </div>
                    
                    <div class='form-group'>
                        <label class='control-label col-xs-2' for='password'>Lozinka</label>
                        <div class='col-xs-10'>
                            <input type='password' id='password' name="password" class="form-control" placeholder="Unesite zeljenu lozinku za svoj nalog" required pattern="^.{6,}$">
                        </div>
                    </div>
                    
                    <div class='form-group'>
                        <label class='control-label col-xs-2' for='tip_naloga'>Tip naloga</label>
                        <div class='col-xs-10'>
                            <select id='tip_naloga' name="tip_naloga" class="form-control" onchange='changedAccountType()'>
                                <option value='1' selected>Fizicko lice</option>
                                <option value='2'>Pravno lice</option>
                            </select>
                        </div>
                    </div>
                    
                    <div id='dio_formulara_za_fizicko_lice'>
                        <div class='form-group'>
                            <label class='control-label col-xs-2' for='jmbg'>JMBG</label>
                            <div class='col-xs-10'>
                                <input type='text' id='jmbg' name="jmbg" class="form-control" placeholder="Unesite svoj JMBG." pattern='^[0-9]{13}$'>
                            </div>
                        </div>
                        
                         <div class='form-group'>
                            <label class='control-label col-xs-2' for='telefon'>Broj telefona</label>
                            <div class='col-xs-10'>
                                <input type='tel' id='telefon' name="telefon" class="form-control" placeholder="Unesite svoj broj telefona u pravilnom formatu, npr +381113093267">
                            </div>
                        </div>
                    </div>
                    
                    <div id='dio_formulara_za_pravno_lice'>
                         <div class='form-group'>
                            <label class='control-label col-xs-2' for='pib'>PIB</label>
                            <div class='col-xs-10'>
                                <input type='text' id='pib' name="pib" class="form-control" placeholder="Unesite PIB firme" pattern='^[0-9]{7}$'>
                            </div>
                        </div>
                        
                        <div class='form-group'>
                            <label class='control-label col-xs-2' for='mbr'>Maticni broj</label>
                            <div class='col-xs-10'>
                                <input type='text' id='mbr' name="mbr" class="form-control" placeholder="Unesite maticni broj firme" pattern='^[0-9]{6}$'>
                            </div>
                        </div>
                        
                        <div class='form-group'>
                            <label class='control-label col-xs-2' for='domaca_ili_strana'>Domaca ili strana firma</label>
                            <div class='col-xs-10'>
                                <select id='domaca_ili_strana' name="domaca_ili_strana" class="form-control" onchange='changedCompanyOrigin()'>
                                    <option value='1' selected>Domaca</option>
                                    <option value='2'>Strana</option>
                                </select>
                            </div>
                        </div>
                        
                        <div id='ako-je-strana-firma'>
                            <div class='form-group'>
                                <label class='control-label col-xs-2' for='drzava_porijekla'>Drzava</label>
                                <div class='col-xs-10'>
                                    <input type='text' id='drzava_porijekla' name="drzava_porijekla" class="form-control" placeholder="Unesite naziv drzave iz koje je ova firma">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class='form-group'>
                        <div class='col-xs-10 col-xs-offset-2'>
                            <button type='submit' class='btn btn-default'>Registruj se</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
        <script src='assets/js/jquery-min.js'></script>
        <script src='assets/js/bootstrap.min.js'></script>
        
        <script>
            function validateForm() {
                var form_ok = true;
                
                var odabrani_tip = $('#tip_naloga > option:selected').val();
                if (odabrani_tip == 1) {
                    if ($('#jmbg').val().length != 13) {
                        form_ok = false;
                        $('#jmbg').parent('div').parent('form-group').addClass('has-error');
                    } else {
                        $('#jmbg').parent('div').parent('form-group').removeClass('has-error');
                    }
                    
                    if ($('#telefon').val().length < 7) {
                        form_ok = false;
                        $('#telefon').parent('div').parent('form-group').addClass('has-error');
                    } else {
                        $('#telefon').parent('div').parent('form-group').removeClass('has-error');
                    }
                    
                } else if (odabrani_tip == 2) {
                    if ($('#pib').val().length != 7) {
                        form_ok = false;
                        $('#pib').parent('div').parent('form-group').addClass('has-error');
                    } else {
                        $('#pib').parent('div').parent('form-group').removeClass('has-error');
                    }
                    
                    if ($('#mbr').val().length != 6) {
                        form_ok = false;
                        $('#mbr').parent('div').parent('form-group').addClass('has-error');
                    } else {
                        $('#mbr').parent('div').parent('form-group').removeClass('has-error');
                    }
                    
                    var odabrana = $('#domaca_ili_strana > option:selected').val();
                    if (odabrana == 2) {
                        if ($('#drzava_porijekla').val().length < 2) {
                            form_ok = false;
                            $('#drzava_porijekla').parent('div').parent('form-group').addClass('has-error');
                        } else {
                            $('#drzava_porijekla').parent('div').parent('form-group').addClass('has-error');
                        }
                    }
                }
                
                
                
                return form_ok;
            }
            
            function changedAccountType() {
                var odabrani_tip = $('#tip_naloga > option:selected').val();
                
                if (odabrani_tip == 1) {
                    $('#dio_formulara_za_fizicko_lice').show();
                    $('#dio_formulara_za_pravno_lice').hide();
                } else if (odabrani_tip == 2) {
                    $('#dio_formulara_za_fizicko_lice').hide();
                    $('#dio_formulara_za_pravno_lice').show();
                }
            }
            
            function changedCompanyOrigin() {
                var odabrani_tip = $('#domaca_ili_strana > option:selected').val();
                
                if (odabrani_tip == 1) {
                    $('#ako-je-strana-firma').hide();
                } else if (odabrani_tip == 2) {
                    $('#ako-je-strana-firma').show();
                }
            }
            
            function init() {
                changedAccountType();
                changedCompanyOrigin();
            }
            
            $(init);
            
        </script>
    </body>
</html>

