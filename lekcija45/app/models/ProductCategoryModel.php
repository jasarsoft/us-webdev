<?php
    class ProductCategoryModel implements ModelInterface {
        public static function getAll(){
            $SQL = 'SELECT * FROM product_category ORDER BY name;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute();
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }
        
        public static function getById($product_category_id){
            $product_category_id = intval($product_category_id);
            $SQL = 'SELECT * FROM product_category WHERE product_category_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$product_category_id]);
            return $prep->fetch(PDO::FETCH_OBJ);
        }
        
        public static function getProducts($product_category_id) {
            $SQL = 'SELECT * FROM product_category_product WHERE product_category_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$product_category_id]);
            $items = $prep->fetchAll(PDO::FETCH_OBJ);
            $list = [];
            foreach ($items as $item) {
                $list[] = ProductModel::getById($item->product_id);
            }
            return $list;
        }
        
        public static function addProduct ($product_id, $product_category_id) {
            $SQL = 'INSERT IGNORE INTO product_category_product (product_id, product_category_id) VALUES (?, ?);';
            $prep = DataBase::getInstance()->prepare($SQL);
            return $prep->execute([$product_id, $product_category_id]);
        }
    }
