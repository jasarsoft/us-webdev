<html>

<body>
<?php
    $x=5; // globalna
    $y=10; // globalna

    function mojTest(){
        global $x,$y;
        $y=$x+$y;
    }

    mojTest();
    echo $y; // izbacuje 15
?> 
</body>
</html>