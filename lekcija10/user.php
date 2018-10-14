<div class="user">
    <h2>
        <?php echo htmlspecialchars($user['ime'] . " " . $user['prezime']); ?>
    </h2>
    
    <a href='mailto:'<?php echo htmlspecialchars($user['email']); ?> > 
        <?php echo htmlspecialchars($user['email']); ?>
    </a>
</div>