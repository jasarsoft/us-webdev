function prikaziTab(tabId) {
    $('.tab').hide();
    $('#tab-' + tabId).show();
}

function init(){
    prikaziTab(1);
    provjeraTabele();
    initTabs();
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
    $('.tab-header button').bind('click', showTab);
}

function showTab() {
    var id = $(this).attr('data-for');
    $('.tab').hide();
    $(id).show();
}