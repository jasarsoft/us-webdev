<?php
    class ProductModel implements ModelInterface {
        public static function getAll(){
            $SQL = 'SELECT * FROM product ORDER BY name;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute();
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }
        
        public static function getById($product_id){
            $product_id = intval($product_id);
            $SQL = 'SELECT * FROM product WHERE product_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$product_id]);
            return $prep->fetch(PDO::FETCH_OBJ);
        }
        
        public static function getByUserId($user_id){
            $user_id = intval($user_id);
            $SQL = 'SELECT * FROM product WHERE user_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$user_id]);
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }
        
        public static function getByKeyword($keyword) {
            $SQL = 'SELECT * FROM product WHERE name LIKE ? OR description LIKE ? ORDER BY product_id;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $string = '%' . trim($keyword) . '%';
            $prep->execute([$string, $string]);
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }
        
        public static function add($name, $description, $price, $user_id) {
            $SQL = 'INSERT INTO product (`name`, `description`, `price`, `user_id`) VALUES (?, ?, ?, ?);';
            $prep = DataBase::getInstance()->prepare($SQL);
            $res = $prep->execute([$name, $description, $price, $user_id]);
            if ($res) {
                return DataBase::getInstance()->lastInsertId();
            } else {
                return $res;
            }
        }
        
        public static function edit($product_id, $name, $description, $price) {
            $product_id = intval($product_id);
            $SQL = 'UPDATE product SET name = ?, description = ?, price = ? WHERE product_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            return $prep->execute([$name, $description, $price, $product_id]);
        }
        
        public static function delete($product_id) {
            $product_id = intval($product_id);
            $SQL = 'DELETE FROM product WHERE product_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            return $prep->execute([$product_id]);
        }
        
         public static function getProductCategories($product_id){
//            $product_id = intval($product_id);
            $SQL = 'SELECT * FROM product_category_product WHERE product_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$product_id]);
            $items = $prep->fetchAll(PDO::FETCH_OBJ);
            $list = [];
            foreach ($items as $item) {
                $list[] = ProductCategoryModel::getById($item->product_category_id);
            }
            return $list;
        }
    }
