$(init);

function init() {
    $('#matrix').css('position', 'relative');
    $('#matrix').css('height', 1000);
    $('#matrix').css('width', 1000);
    
    for (var i=1; i <= 16; i++) {
        var el = $('<div>');
        
        var y = (Math.floor((i-1) / 4)) * 60 + 5;    //i=1, y=0; i=5, y=1 = 55
        var x = ((i-1) % 4) * 60 + 5;               //i=1, x=0; i=5, x=2 = 105
        
        $(el).css('position', 'absolute');
        $(el).css('left', x);
        $(el).css('top', y);
        $(el).css('height', 50);
        $(el).css('width', 50);
        $(el).css('background-color', '#ddf');
        $(el).css('border', '1px solid #999');
        
        $(el).attr('data-original-x', x);
        $(el).attr('data-original-y', y);
        
        $(el).hover(onOver, onOut);
        
        $(el).bind('click', clicked);
        
        $('#matrix').append(el);
    }
}

function onOver() {
    var el = $(this);
    
    if ( $(el).attr('data-inactive') === '1') return;
    
    var x = $(el).attr('data-original-x');
    var y = $(el).attr('data-original-y');
    
    $(el).animate({
        'left'      : (x-5),
        'top'       : (y-5),
        'width'     : 60,
        'height'    : 60,
        'background-color' : '#9f9',
    }, 100);
    
    $(el).delay(200);
    
    $(el).animate({
        'background-color' : '#f77',
        'border-color': '#000'
    }, 100);
}

function onOut() {
    var el = $(this);
    
    if ( $(el).attr('data-inactive') === '1') return;
    
    var x = $(el).attr('data-original-x');
    var y = $(el).attr('data-original-y');
    
    $(el).animate({
        'left'      : x,
        'top'       : y,
        'width'     : 50,
        'height'    : 50,
        'background-color' : '#ddf',
        'border-color': '#999'
    }, 50);
}

function clicked() {
    $(this).attr('data-inactive', 1);
    $(this).animate({
        'background-color' : '#eeeeee'
    }, 5000);
    
    $(this).delay(4000);
    $(this).hide(500);
}