<html>

<head>
    <title> Singidunum Univerzitet </title>
</head>
<body>
    <?php
        echo '<b> PHP podrzava tip promenljiva promenljive (eng. variable variable)</b><br/>';
        
        $ime="Ivana";
        $$ime="student"; // ovo je ekvivalentno sa $Ivana="student"

        echo 'Vrednost promenljive $Ivana je: ', "$Ivana";
        //ime konstante u PHP-u ne pocinje sa znakom $
        // imena konstanti se pisu velikim slovima
        echo '<br/>';

        define('BEOGRAD',11000);

        echo 'Vrednost konstante BEOGRAD JE: ', BEOGRAD;
    ?>
</body>
</html>