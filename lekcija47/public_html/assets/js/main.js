function prikaziTab(tabId) {
    $('.tab').hide();
    $('#tab-' + tabId).show();
}

function init(){
    prikaziTab(1);
    provjeraTabele();
}

$(init);

function provjeraTabele() {
    $('#rezultati tbody tr').each(function() {
       var tr = $(this);
       var brojPoena = $(tr).attr('data-broj-poena');
       
       if (brojPoena < 11) {
           $(tr).css('color', 'red');
       } else if (brojPoena >= 11 && brojPoena < 17) {
           $(tr).css('color', 'blue');
       } else {
           $(tr).css('color', 'green');
       }
    });
}