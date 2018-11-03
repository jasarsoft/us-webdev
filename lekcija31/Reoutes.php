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
            'Pattern'     => '|^.*$|',
            'Controller'  => 'Main',
            'Method'      => 'index'
        ]
    ];