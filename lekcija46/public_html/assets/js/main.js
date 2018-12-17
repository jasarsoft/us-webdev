function main(){
    //learning();
    loadCategories();
}

$(main);

function learning(){
    $('#categories')
            .append('ovo je priv primjer')
            .css('color', '#f00');
}

function loadCategories(){
    $.getJSON('http://localhost:8080/lekcija45/api/product/categories', {}, createCategories);
}

function createCategories(rezultat){
    if ( $.isPlainObject(rezultat) ) {
        if ( rezultat.status == 'success' ) {
            $('#categories').html('');
            $('#f1_categories').html('');
            for (var i in  rezultat.categories) {
                var category = rezultat.categories[i];
                
                var span = $('<span>');
                $(span).append(category.name);
                $(span).attr('data-category_id', category.product_category_id);
                $(span).bind('click', loadProductsForThisCategory);
                
                $('#categories').append(span).append('<br>');
                
                var span2 = $('<span>');
                var input = $('<input>');
                $(input).val(category.product_category_id);
                $(input).attr('type', 'checkbox');
                $(input).addClass('f1_categories');
                $(span2).append(input);
                $(span2).append(' ' + category.name + '<br>');
                
                $('#f1_categories').append(span2);
            }
        } else {
            $('#categories').html('Could not get the category list.');
        }
    }
}

function loadProductsForThisCategory(sender) {
    var category_id = $(sender.target).attr('data-category_id');
    $.getJSON('http://localhost:8080/lekcija45/api/product/category/' + category_id, {}, createProduct);
}

function createProduct(rezultat) {
    if ( $.isPlainObject(rezultat) ) {
        if ( rezultat.status == 'success' ) {
            $('#products').html('');
            for (var i in  rezultat.products) {
                var product = rezultat.products[i];
                
                var span = $('<span>');
                $(span).append(product.name + ' - ' + product.price + ' &euro;');
                $(span).attr('data-product_id', product.product_id);
                $(span).bind('click', loadProductsDetails);
                
                $('#products').append(span).append('<br>');
            }
        } else {
            $('#products').html('There was an error.');
        }
    }
}

function loadProductsDetails(sender) {
    var product_id = $(sender.target).attr('data-product_id');
    $.getJSON('http://localhost:8080/lekcija45/api/product/show/' + product_id, {}, showDetails);
}

function showDetails(rezultat){
    if ( $.isPlainObject(rezultat) ) {
        if ( rezultat.status == 'success') {
            var product = rezultat.product;
            
            $('#details').html('');
            $('#details').append('Name: ' + product.name + '<br>');
            $('#details').append('Price: ' + product.price + '<br>');
            $('#details').append('Description: ' + product.description + '<br>');
            $('#details').append('Belongs to categories: ');
            
            for (var i in product.categories) {
                var category = product.categories[i];
                $('#details').append(category.name + ', ');
            }
        } else {
            $('#details').html('There was an error.');
        }
    }
}

function addNewProduct() {
    var name    = $('#f1_name').val();
    var description = $('#f1_description').val();
    var price = $('#f1_price').val();
    
    var categories = [];
    
    $('.f1_categories:checked').each(function(){
       var checkedCategory = $(this).val();
       categories.push(checkedCategory);
    });
    
    if ( name == '' || description == '' || price == '' || price < 0.01 || categories.length == 0 ) {
        $('#f1_message').html('Please fill out all the fields in the form.');
    } else {
        $('#f1_message').html('Please wait...');
        $.post(
                'http://localhost:8080/lekcija45/api/product/add',
                {
                    'name' : name,
                    'description' : description,
                    'price' : price,
                    'categories' : categories
                },
                function(rezultat){
                    if ( $.isPlainObject(rezultat) ) {
                        if ( rezultat.status == 'success' ) {
                            var product_id = rezultat.product_id;
                            $('#f1_message').html('A new product was add and has the iD: ' + product_id);
                            
                            $('#f1_name').val('');
                            $('#f1_description').val('');
                            $('#f1_price').val('');
                            
                            $('#f1_categories').removeAttr('checked');
                        } else {
                            $('#f1_message').html('There was an error!');
                        }
                    }
                },
                'json'
            );
    }
    
    return false;
}