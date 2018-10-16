<?php require_once 'app/views/_global/beforeContent.php'; ?>

<p>Spisak nasih proizvoda</p>

<ul>
    <?php if(is_array(@$DATA['products'])) foreach ($DATA['products'] as $product): ?>
    <li>
        <h2>
            <a href="?Controller=Products&Method=detalji&product_id=<?php echo $product->product_id; ?>">
                <?php echo $product->name; ?> (<?php echo $product->price; ?> &euro;)</h2>
            </a> 
    </li>
    <?php endforeach; ?>
</ul>

<?php require_once 'app/views/_global/afterContent.php'; ?>