<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo htmlspecialchars($seo_naslov); ?></title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <img alt="Logo kompanije" src="">
            </div>
            <div id="nav">
                <ul>
                    <li><a href="#">Pocetna</a></li>
                    <li><a href="#">O nama</a></li>
                    <li><a href="#">Proizvodi</a></li>
                    <li><a href="#">Usluge</a></li>
                    <li><a href="#">Kontakt</a></li>
                </ul>
            </div>
            <div id="main">
                <h1><?php echo htmlspecialchars($naslov); ?></h1>
                
                <div class="products">
                    <?php 
                        foreach ($proizvodi as $proizvod){
                            require 'sablon_proizvod.php';
                        }
                    ?>
                </div>
            </div>
            <div id="footer">
                &copy; <?php echo htmlspecialchars($godina); ?> - Ta i ta kompanija
            </div>
        </div>
    </body>
</html>
