<?php
    class ProductsController extends Controller {
        public function index(){
            $this->set('seo_title', 'Lista proizvoda');
            
            $this->set('products', ProductModel::getAll());
        }
        
        public function detalji($product_id){
            $product = ProductModel::getById($product_id);
            
            $this->set('seo_title', 'Detalji proizvoda ' . $product->name);
            $this->set('product', $product);
        }
    }
