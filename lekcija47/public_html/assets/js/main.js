function prikaziTab(tabId) {
    $('.tab').hide();
    $('#tab-' + tabId).show();
}

function init(){
    prikaziTab(1);
}

$(init);