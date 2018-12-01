<?php
    class ApiProductsController extends ApiController {
        public function show($id) {
            $product_id = intval($id);
            $product = ProductModel::getById($product_id);
            if ($product) {
                $this->set('product', $product);
                $this->set('status', 'success');
            } else {
                $this->set('status', 'error');
                $this->set('message', 'Could not find selected product');
            }
        }
        
        public function categories() {
            $categories = ProductCategoryModel::getAll();
            if( $categories) {
                $this->set('categories', $categories);
                $this->set('status', 'success');
            } else {
                $this->set('status', 'error');
                $this->set('message', 'There are no product categories yet.');
            }
        }
        
        public function category($id) {
            $product_category_id = intval($id);
            $products = ProductCategoryModel::getProducts($product_category_id);
            if( $products) {
                $this->set('products', $products);
                $this->set('status', 'success');
            } else {
                $this->set('status', 'error');
                $this->set('message', 'Could not find any products in this category.');
            }
        }
        
        public function search($keyword) {
            $products = ProductModel::getByKeyword($keyword);
            if ($products) {
                $this->set('products', $products);
                $this->set('status', 'success');
            } else {
                $this->set('status', 'error');
                $this->set('message', 'Could not find any products that match this keyword.');
            }
        }
    }
