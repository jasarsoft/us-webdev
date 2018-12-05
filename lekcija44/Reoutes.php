<?php
    return [
        [
            'Pattern'     => '|^login/?$|',
            'Controller'  => 'Main',
            'Method'      => 'login'  
        ],
        [
            'Pattern'     => '|^logout/?$|',
            'Controller'  => 'Main',
            'Method'      => 'logout'  
        ],
        [
            'Pattern'     => '|^product/list/?$|',
            'Controller'  => 'Products',
            'Method'      => 'index'  
        ],
        [
            'Pattern'     => '|^product/add/?$|',
            'Controller'  => 'Products',
            'Method'      => 'add'  
        ],
        [
            'Pattern'     => '|^product/edit/([0-9]+)/?$|',
            'Controller'  => 'Products',
            'Method'      => 'edit'  
        ],
        [
            'Pattern'     => '|^product/delete/([0-9]+)/?$|',
            'Controller'  => 'Products',
            'Method'      => 'delete'  
        ],
        [
            'Pattern'     => '|^api/product/show/([0-9]+)/?$|',
            'Controller'  => 'ApiProducts',
            'Method'      => 'show'  
        ],
        [
            'Pattern'     => '|^api/product/categories/([0-9]+)/?$|',
            'Controller'  => 'ApiProducts',
            'Method'      => 'categories'  
        ],
        [
            'Pattern'     => '|^api/product/category/([0-9]+)/?$|',
            'Controller'  => 'ApiProducts',
            'Method'      => 'category'  
        ],
        [
            'Pattern'     => '|^api/product/search/([A-z 0-9]+)/?$|',
            'Controller'  => 'ApiProducts',
            'Method'      => 'search'  
        ],
        [ //posljednja ruta
            'Pattern'     => '|^.*$|',
            'Controller'  => 'Main',
            'Method'      => 'index'
        ]
    ];