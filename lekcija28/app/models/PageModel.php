<?php
    class PageModel implements ModelInterface {
        public static function getAll(){
            $SQL = 'SELECT * FROM page ORDER BY name;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute();
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }
        
        public static function getById($page_id){
            $page_id = intval($page_id);
            $SQL = 'SELECT * FROM page WHERE page_id = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$page_id]);
            return $prep->fetch(PDO::FETCH_OBJ);
        }
        
        public static function getBySeoUrl($seo_url){
            $SQL = 'SELECT * FROM page WHERE seo_url = ?;';
            $prep = DataBase::getInstance()->prepare($SQL);
            $prep->execute([$seo_url]);
            return $prep->fetch(PDO::FETCH_OBJ);
        }
    }
