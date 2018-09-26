Ime i prezime: <?php echo htmlspecialchars($this->getPosebanSadrzaj()->getImeIPrezime()); ?><br>
Telefon: <?php echo htmlspecialchars($this->getPosebanSadrzaj()->getTelefon()); ?><br>
e-Mail: <a href="mailto:<?php echo htmlspecialchars($this->getPosebanSadrzaj()->getEmail()); ?>">
            <?php echo htmlspecialchars($this->getPosebanSadrzaj()->getEmail()); ?>
        </a>