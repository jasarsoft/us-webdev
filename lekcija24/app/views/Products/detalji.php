<?php require_once 'app/views/_global/beforeContent.php'; ?>

<a href="?Controller=Products&Method=index">Vrati se nazad</a>

<article>
    <h1><?php echo $DATA['product']->name; ?></h1>
    <p><?php echo $DATA['product']->description; ?></p>
    <p><?php echo $DATA['product']->price; ?> &euro;</p>
</article>

<?php require_once 'app/views/_global/afterContent.php'; ?>