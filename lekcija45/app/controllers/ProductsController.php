<?php
    class ProductsController extends AdminController {
        public function index(){
            $products = ProductModel::getByUserId(Session::get('user_id'));
            for ($i = 0; $i < count($products); $i++) {
                $products[$i]->categories = ProductModel::getProductCategories($products[$i]->product_id);
            }
            $this->set('products', $products);
        }
        
        public function add() {
            
            
            if ($_POST) {
                $name = filter_input(INPUT_POST, 'name');
                $description = filter_input(INPUT_POST, 'description');
                $price = floatval(filter_input(INPUT_POST, 'price'));
                
                $categories = filter_input(INPUT_POST, 'categories', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
                
                if ($name == '' or $description == '' or $price == 0 ) {
                    $this->set('message', 'Incorrect values submitted!');
                } else {
                    $id = ProductModel::add($name, $description, $price, Session::get('user_id'));
                    if ($id) {
                        foreach ($categories as $category) {
                           ProductCategoryModel::addProduct($id, $category);
                        }
                        
                        Misc::redirect('product/list');
                    } else {
                        $this->set('message', 'Could not add a new product!');
                    }
                }
            }
            
            $this->set('categories', ProductCategoryModel::getAll());
        }
        
        public function edit($product_id) {
            $product_id = ProductModel::getById($product_id);
            if ($product_id->user_id != Session::get('user_id')){
                Misc::redirect('product/list');
            }
            
            if ($_POST) {
                $name = filter_input(INPUT_POST, 'name');
                $description = filter_input(INPUT_POST, 'description');
                $price = floatval(filter_input(INPUT_POST, 'price'));
                
                if ($name == '' or $description == '' or $price == 0 ) {
                    $this->set('message', 'Incorrect values submitted!');
                } else {
                    $res = ProductModel::edit($product_id, $name, $description, $price);
                    if ($res) {
                        Misc::redirect('product/list');
                    } else {
                        $this->set('message', 'Could not edit this product!');
                    }
                }
            }
            
            $product = ProductModel::getById($product_id);
            $this->set('product', $product);
        }
        
        public function delete($product_id) {
            $product_id = ProductModel::getById($product_id);
            if ($product_id->user_id != Session::get('user_id')){
                Misc::redirect('product/list');
            }
            
            if ($_POST) {
                $confirmed = filter_input(INPUT_POST, 'confirmed', FILTER_SANITIZE_NUMBER_INT);
                
                if ($confirmed == 1) {
                    $res = ProductModel::delete($product_id);
                    if ($res) {
                        Misc::redirect('product/list');
                    } else {
                        $this->set('message', 'Could not delete this product!');
                    }
                }
            }
            
            $product = ProductModel::getById($product_id);
            $this->set('product', $product); 
        }
    }
