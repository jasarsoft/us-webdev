<?php
    return [
        [
            'Pattern'     => '|^products/?$|',
            'Controller'  => 'Products',
            'Method'      => 'index'
        ],
        [
            'Pattern'     => '|^products/([0-9]+)/?$|',
            'Controller'  => 'Products',
            'Method'      => 'detalji'
        ],
        [
            'Pattern'     => '|^contact/?$|',
            'Controller'  => 'Contact',
            'Method'      => 'index'
        ],
        [
            'Pattern'     => '|^contact/send/?$|',
            'Controller'  => 'Contact',
            'Method'      => 'handle'
        ],
        [
            'Pattern'     => '|^page/([a-z0-9\-]+)/?$|',
            'Controller'  => 'Page',
            'Method'      => 'index'
        ],
        [
            'Pattern'     => '|^.*$|',
            'Controller'  => 'Products',
            'Method'      => 'index'
        ]
    ];