<?php require_once 'app/views/_global/beforeContent.php'; ?>

<article class="blok">
    <header>
        <h1>List of products</h1>
    </header>
    
    <p><a class="button" href="<?php echo Configuration::BASE; ?>product/add/">Add new product</a></p>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th colspan="2">Options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($DATA['products'] as $item): ?>
            <tr>
                <th><?php echo $item->product_id; ?></th>
                <td><?php echo htmlspecialchars($item->name); ?></td>
                <td><?php echo $item->price; ?></td>
                
                <td><a href="<?php echo Configuration::BASE; ?>product/edit/<?php echo $item->product_id; ?>">Edit</a></td>
                <td><a href="<?php echo Configuration::BASE; ?>product/delete/<?php echo $item->product_id; ?>">Delete</a></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</article>

<?php require_once 'app/views/_global/afterContent.php'; ?>