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
        
        public static function add($name, $description, $price, $user_id) {
            $SQL = 'INSERT INTO product (`name`, `description`, `price`, `user_id`) VALUES (?, ?, ?, ?);';
            $prep = DataBase::getInstance()->prepare($SQL);
            return $prep->execute([$name, $description, $price, $user_id]);
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
    }
