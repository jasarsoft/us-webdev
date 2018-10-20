<?php require_once 'app/views/_global/beforeContent.php'; ?>

<article class="blok">
    <header>
        <h1><?php echo $DATA['product']->name; ?></h1>
    </header>
    
    <p><?php echo $DATA['product']->description; ?></p>
    <p><?php echo $DATA['product']->price; ?> &euro;</p>
</article>

<?php require_once 'app/views/_global/afterContent.php'; ?>