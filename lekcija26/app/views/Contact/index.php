<?php require_once 'app/views/_global/beforeContent.php'; ?>

<article class="blok">
    <header>
        <h1>Kontakt forumalar:</h1>
    </header>
    
    <form method="post" action="?Controller=Contact&Method=handle">
        <div class="input-block">
            <label form="f1_email">Adresa e-poste:</label>
            <input type="email" name="email" id="f1_email" required class="input-field">
        </div>
        
        <div class="input-block">
            <label form="f1_subject">Naslov poruke:</label>
            <input type="text" name="subject" id="f1_subject" required class="input-field">
        </div>
        
        
        <div class="input-block">
            <label form="f1_message">Tekst poruke:</label>
            <textarea name="message" rows="10" id="f1_message" required class="input-field"></textarea>
        </div>
        
        <button type="submit" class="button">Posalji poruku</button>
    </form>
</article>

<?php require_once 'app/views/_global/afterContent.php'; ?>