<?php
    class ProductsController extends Controller {
        public function index(){
            $this->set('seo_title', 'Lista proizvoda');
        }
        
        public function detalji(){
            $this->set('seo_title', 'Detalji proizvoda...');
        }
    }
