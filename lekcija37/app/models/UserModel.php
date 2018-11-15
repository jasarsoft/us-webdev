<?php
    class UserModel implements ModelInterface {
        public static function getAll(){
            $SQL = 'SELECT * FROM user ORDER BY username;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute();
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }
        
        public static function getById($user_id){
            $user_id = intval($user_id);
            $SQL = 'SELECT * FROM user WHERE user_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$user_id]);
            return $prep->fetch(PDO::FETCH_OBJ);
        }
        
        public static function getActiveUserByUsernameAndPasswordHash($username, $passwordHash){
            $user_id = intval($user_id);
            $SQL = 'SELECT * FROM user WHERE `username` = ? AND `password` = ? AND `active` = 1;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$username, $passwordHash]);
            return $prep->fetch(PDO::FETCH_OBJ);
        }
    }
