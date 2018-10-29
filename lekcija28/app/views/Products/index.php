<?php require_once 'app/views/_global/beforeContent.php'; ?>

<article class="blok">
    <header>
        <h1>Spisak nasih proizvoda</h1>
    </header>
 
    <ul class="spisak-proizvoda">
        <?php if(is_array(@$DATA['products'])) foreach ($DATA['products'] as $product): ?>
        <li>
            <h2>
                <a href="product/<?php echo $product->product_id; ?>">
                    <?php echo $product->name; ?>(<span class="price"><?php echo $product->price; ?> &euro;</span>)            
                </a> 
            </h2>
        </li>
        <?php endforeach; ?>
    </ul>
</article>


<?php require_once 'app/views/_global/afterContent.php'; ?>