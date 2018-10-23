<?php
    class ProductsController extends Controller {
        public function index(){
            $this->set('seo_title', 'Lista proizvoda');
            
            $this->set('products', ProductModel::getAll());
        }
        
        public function detalji(){
            $product_id = filter_input(INPUT_GET, 'product_id', FILTER_SANITIZE_NUMBER_INT);
            #$product_id = intval($_GET['product_id']);
            $product = ProductModel::getById($product_id);
            
            $this->set('seo_title', 'Detalji proizvoda ' . $product->name);
            $this->set('product', $product);
        }
    }
