<!DOCTYPE html>
<html lang="<?php echo $this->getJezik(); ?>">
    <head>
        <title><?php echo htmlspecialchars($this->getSeoNaslov()); ?></title>
        
        <?php if($this->getSeoKljucneRijeci()): ?>
            <meta name="keywords" content="<?php echo htmlspecialchars($this->getSeoKljucneRijeci()); ?>">
        <?php endif; ?>
        
        <?php if($this->getSeoOpisStranice()): ?>
            <meta name="description" content="<?php echo htmlspecialchars($this->getSeoOpisStranice()); ?>">
        <?php endif; ?>
        <?php if($this->getIkonica()): ?>
            <meta rel="shortcut icon" href="<?php echo htmlspecialchars($this->getIkonica()); ?>">
        <?php endif; ?>
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
                <h1><?php echo htmlspecialchars($this->getNaslov()); ?></h1>
                
                <?php if($this->getTipStranice() == 'tekst'): ?>
                    <div class="text">
                        <?php echo $this->getSadrzaj(); ?>
                    </div>
                <?php elseif($this->getTipStranice() == 'proizvodi'): ?>
                    <div class="products">
                        <?php 
                            if($this->getPosebanSadrzaj() and is_array($this->getPosebanSadrzaj())){
                                foreach ($this->getPosebanSadrzaj() as $proizvod){
                                    require 'sablon_proizvod.php';
                                }
                            }
                        ?>
                    </div>
                <?php elseif($this->getTipStranice() == 'kontakt'): ?>
                    <div class="kontakt">
                        <?php if($this->getPosebanSadrzaj() and is_object($this->getPosebanSadrzaj())): ?>
                            Ime i prezime: <?php echo htmlspecialchars($this->getPosebanSadrzaj()->imeIPrezime); ?><br>
                            Telefon: <?php echo htmlspecialchars($this->getPosebanSadrzaj()->telefon); ?><br>
                            e-Mail: <a href="mailto:<?php echo htmlspecialchars($this->getPosebanSadrzaj()->email); ?>">
                                        <?php echo htmlspecialchars($this->getPosebanSadrzaj()->email); ?>
                                    </a>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <!-- nepoznat tip stranice -->
                <?php endif; ?>
            </div>
            <div id="footer">
                &copy; <?php echo date('Y'); ?> - Ta i ta kompanija
            </div>
        </div>
    </body>
</html>
