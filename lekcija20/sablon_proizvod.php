<div class="poizvod">
    <h2><?php echo htmlspecialchars($proizvod->getNaslov()); ?></h2>
    <div class="opis">
        <?php echo htmlspecialchars($proizvod->getOpis()); ?>
    </div>
    <div class="cijena">
        <?php echo htmlspecialchars($proizvod->getCijena()); ?> &euro;
    </div>
</div>