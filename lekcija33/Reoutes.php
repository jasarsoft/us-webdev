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
            'Pattern'     => '|^.*$|',
            'Controller'  => 'Main',
            'Method'      => 'index'
        ]
    ];