<?php require_once 'templates/_header.php'; ?>

<!-- 
za prosledjivanje vrednosti PHP skripti, najvazniji je atribut name polja html forme.
Podaci se iz HTML forme PHP skripti prosledjuju preko globanog niza $_POST ili $_GET
u ovom primeru koristi se $_POST. Metod slanja (prosledjivanja) se definise pomocu atributa
action u HTML formi, u ovom slucaju method="post". Kada PHP skripta primi vrednosti, ona cita
vrednost globalnog niza post za odredjeni indeks, a indeks je ime HTML elementa, npr.
$_POST['surname'] cita se vrednost polja prezime.
-->

<!-- U NAVEDENOM PRIMERU SU KORISCENI OBRASCI (UZORCI) PRILIKOM VALIDACIJE VREDNOSTI U POLJIMA.
  U PROJEKTU 1 NIJE NEOPHODNO URADITI VALIDACIJU -->


<div class="auto-width-content">
    <p>
        <strong><span class="label">Valuta:</span> Ethereum</strong>
    </p>

    <form action="?action=purchase" method="post">
        <p>
            <span class="label">Vaše ime:</span>
            <input type="text" name="forename" required pattern="^\S{4,}$">
        </p>

        <p>
            <span class="label">Vaše prezime:</span>
            <input type="text" name="surname" required pattern="^\S{4,}$">
        </p>

        <p>
            <span class="label">Unesite godinu rođenja:</span>
            <input type="number" name="year" min="1900" max="<?php echo date('Y')-18; ?>" step="1" required>
        </p>

        <p>
            <span class="label">Izaberite pol:</span>
            <input type="radio" name="gender" value="male"> muški
            <input type="radio" name="gender" value="female"> ženski
        </p>

        <p>
            <span class="label">Izaberite način plaćanja:</span>
            <select name="payment_type">
                <option value="CC_VISA">VISA</option>
                <option value="CC_MC">Master Card</option>
                <option value="CC_AMEX">American Express</option>
                <option value="WIRED">Bank Wired Transfer</option>
            </select>
        </p>

        <p>
            <span class="label">Želim da kupim:</span>
            <input type="number" name="amount" min="0.001" step="0.001" required>
        </p>

        <p>
            <span class="label">&nbsp;</span>
            <button type="submit">
                Potvrdi
            </button>
        </p>
    </form>
<!-- u slucaju da promenljiva $MESSAGE ima podatke, stampa se sadrzaj promenljive $MESSAGE.
     $MESSAGE je kontrolna promenljiva, koja stampa poruku u slucaju da nesto nije u redu sa izvrsavanjem programa.
     Na primer, ako komunikacija sa web servisom za citanje trenutne cene ETH valute ne moze da se uspostavi, promenljiva $MESSAGE dobija vrednost, itd.
     Testirati kod tako sto cete da disable-ujete privremeno internet konekciju.
-->
    <?php if ($MESSAGE): ?>
    <p>
        <?php echo htmlspecialchars($MESSAGE); ?>
    </p>
    <?php endif; ?>
</div>

<?php require_once 'templates/_footer.php';
