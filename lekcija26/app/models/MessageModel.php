<?php
    class MessageModel implements ModelInterface {
        public static function getAll() {
            $SQL = 'SELECT * FROM message ORDER BY name;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute();
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }

        public static function getById($message_id) {
            $message_id = intval($message_id);
            $SQL = 'SELECT * FROM message WHERE message_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$message_id]);
            return $prep->fetch(PDO::FETCH_OBJ);
        }
        
        public static function insert($email, $subject, $text){
            $SQL = 'INSERT INTO message (datetime, email, subject, `text`) VALUES (NOW(), ?, ?, ?);';
            $prep = DataBase::getInstance()->prepare($SQL);
            return $prep->execute([$email, $subject, $text]);
        }
}
