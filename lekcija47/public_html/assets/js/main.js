function prikaziTab(tabId) {
    $('.tab').hide();
    $('#tab-' + tabId).show();
}

function init(){
    //prikaziTab(1);
    provjeraTabele();
    initTabs();
    initDugme();
}

$(init);

function provjeraTabele() {
    $('#rezultati tbody tr').each(function() {
       var tr = $(this);
       var brojPoena = $(tr).attr('data-broj-poena');
       
       $(tr).removeClass('pao');
       $(tr).removeClass('uslovno');
       $(tr).removeClass('polozio');
       
       if (brojPoena < 11) {
           $(tr).addClass('pao');
       } else if (brojPoena >= 11 && brojPoena < 17) {
           $(tr).addClass('uslovno');
       } else {
           $(tr).addClass('polozio');
       }
    });
}

function initTabs() {
    $('.tab').hide();
    
    var id = $('.tab-header button:first-child').attr('data-for');
    $(id).show();
    
    $('.tab-header button').bind('click', showTab);
}

function showTab() {
    var id = $(this).attr('data-for');
    $('.tab').hide();
    $(id).show();
}

function initDugme() {
    $('.dugme').hover(misPrekoDugmeta, misIzvanDugmeta);
}

function misPrekoDugmeta() {
    $(this).css('color', 'red');
    $(this).css('border-width', '50px');
    $(this).css('background-color', '#444');
    $(this).html('Mis je presao preko ovog dugmeta!');
}

function misIzvanDugmeta() {
    $(this).css('color', 'white');
    $(this).css('border-width', '10px');
    $(this).css('background-color', '#000');
    $(this).html('Mis je bio nad ovim dugmetom!');
}