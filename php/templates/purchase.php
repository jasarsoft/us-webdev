<?php require_once 'templates/_header.php'; ?>

<div class="auto-width-content">
    <p><b class="label">Ime:</b> <?php echo $FORENAME; ?></p>
    <p><b class="label">Prezime:</b> <?php echo $SURNAME; ?></p>
    <p><b class="label">Načun plaćanja:</b> <?php echo $PAYMENT_TYPE_NAME; ?></p>
    <p><b class="label">Broj kupljenih ETH:</b> <?php echo $AMOUNT; ?></p>
    <p><b class="label">Trenutna cena:</b> USD <?php echo $CURRENT_PRICE; ?></p>
    <p><b class="label">Procena cene:</b>  <?php echo $PRICE_LEVEL; ?></p>
    <p><b class="label">Iznos transakcije:</b> USD <?php echo $TOTAL_PRICE; ?></p>
    <p><b class="label">Vreme transakcije:</b> <?php echo $TIME; ?></p>
</div>

<?php require_once 'templates/_footer.php';
