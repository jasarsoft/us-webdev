<html>

<body>
    <?php
        $x=5; // globalna promenljiva
        
        function Test(){
            $x=1;
            echo $x; // lokalna promenljiva
        }

        Test(); // prikazace se 1
        echo "<br/>";
        echo $x; // prikazace se 5
    ?>
</body>
</html>
