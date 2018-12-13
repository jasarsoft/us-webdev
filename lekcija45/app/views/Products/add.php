<?php require_once 'app/views/_global/beforeContent.php'; ?>

<article class="blok">
    <header>
        <h1>Add new product</h1>
    </header>
    
    <form method="post" action="<?php echo Configuration::BASE; ?>product/add">
        <div class="input-block">
            <label for="f1_name">Name:</label>
            <input type="text" name="name" id="f1_name" required class="input-field"">
        </div>
        
        <div class="input-block">
            <label for="f1_description">Description:</label>
            <textarea name="description" rows="10" id="f1_description" required class="input-field"></textarea>
        </div>
        
        <div class="input-block">
            <label for="f1_price">Name:</label>
            <input type="number" min="0.01" step="any" name="price" id="f1_price" required class="input-field">
        </div>
        
        <div class="input-block">
            <label >Categories:</label>
            <?php foreach ($DATA['categories'] as $cat): ?>
            <input type='checkbox' name='categories[]' values='<?php echo $cat->product_category_id; ?>'> <?php echo htmlspecialchars($cat->name); ?><br>
            <?php endforeach; ?>
        </div>
        
        <button type="submit" class="button">Add new product</button>
        <a class="button" href="<?php echo Configuration::BASE; ?>product/list">Back to the list</a>
    </form>
    
    <?php if (isset($DATA['message'])): ?>
    <p><?php echo htmlspecialchars($DATA['message']); ?></p>
    <?php endif ?>
</article>

<?php require_once 'app/views/_global/afterContent.php'; ?>