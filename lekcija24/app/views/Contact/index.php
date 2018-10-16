<?php require_once 'app/views/_global/beforeContent.php'; ?>

<h2>Kontakt forumalar:</h2>
<form method="post" action="?Controller=Contact&Method=handle">
    Adresa e-poste: <input type="email" name="email" required><br>
    Naslov poruke: <input type="text" name="subject" required><br>
    Tekst poruke: <br>
    <textarea name="message" rows="10" required></textarea><br>
    <button type="submit">Posalji poruku</button>
</form>


<?php require_once 'app/views/_global/afterContent.php'; ?>