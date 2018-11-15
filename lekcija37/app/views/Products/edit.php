<?php require_once 'app/views/_global/beforeContent.php'; ?>

<article class="blok">
    <header>
        <h1>Edit product &QUOT; <?php echo htmlspecialchars($DATA['product']->name); ?> &QUOT;</h1>
    </header>
    
    <form method="post" action="<?php echo Configuration::BASE; ?>product/edit/<?php echo $DATA['product']->product_id; ?>">
        <div class="input-block">
            <label form="f1_name">Name:</label>
            <input type="text" name="name" id="f1_name" required class="input-field" value="<?php echo htmlspecialchars($DATA['product']->name); ?>">
        </div>
        
        <div class="input-block">
            <label form="f1_description">Description:</label>
            <textarea name="description" rows="10" id="f1_description" required class="input-field"><?php echo htmlspecialchars($DATA['product']->description); ?></textarea>
        </div>
        
        <div class="input-block">
            <label form="f1_price">Name:</label>
            <input type="number" min="0.01" step="any" name="price" id="f1_price" required class="input-field" value="<?php echo htmlspecialchars($DATA['product']->price); ?>">
        </div>
        
        <button type="submit" class="button">Save new values</button>
        <a class="button" href="<?php echo Configuration::BASE; ?>product/list">Back to the list</a>
    </form>
    
    <?php if (isset($DATA['message'])): ?>
    <p><?php echo htmlspecialchars($DATA['message']); ?></p>
    <?php endif ?>
</article>

<?php require_once 'app/views/_global/afterContent.php'; ?>