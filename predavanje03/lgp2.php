<html>

<body>
<?php
    $x=20;
    
    function Test(){
        echo $x; //nece raditi, jer se globalna promenljiva $x ne vidi unutar funkcije Test
    }

    Test(); // poziv funkcije
?>
</body>
</html>