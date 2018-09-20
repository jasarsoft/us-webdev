<div>
    <h2>
        <?php echo htmlspecialchars($this->ime . ' ' . $this->prezime); ?>
    </h2>
    
    Broj indexa: <?php echo htmlspecialchars($this->brojIndexa); ?><br>
    Godina upisa studenta: <?php echo htmlspecialchars($this->godinaUpisa()); ?>
</div>