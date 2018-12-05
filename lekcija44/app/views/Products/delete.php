<?php require_once 'app/views/_global/beforeContent.php'; ?>

<article class="blok">
    <header>
        <h1>Edit product &QUOT; <?php echo htmlspecialchars($DATA['product']->name); ?> &QUOT;</h1>
    </header>
    
    <form method="post" action="<?php echo Configuration::BASE; ?>product/delete/<?php echo $DATA['product']->product_id; ?>">
        <input type="hidden" name="confirmed" value="1">
        <button type="submit" class="button">Delete this product</button>
        <a class="button" href="<?php echo Configuration::BASE; ?>product/list">Back to the list</a>
    </form>
    
    <?php if (isset($DATA['message'])): ?>
    <p><?php echo htmlspecialchars($DATA['message']); ?></p>
    <?php endif ?>
</article>

<?php require_once 'app/views/_global/afterContent.php'; ?>