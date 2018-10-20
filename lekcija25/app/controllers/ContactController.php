<?php
    class ContactController extends Controller {
        public function index(){
            $this->set('seo_title', 'Kontaktirajte nas');
        }
        
        public function handle(){
           if ($_POST) {
               $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
               $subject = filter_input(INPUT_POST, 'subject');
               $message = filter_input(INPUT_POST, 'message');
               
               $res = MessageModel::insert($email, $subject, $message);
               if ($res){
                   $this->set('message', 'Vasa poruka je poslana.');
               } else {
                   $this->set('message', 'Doslo je do greske prilikom slanja Vase poruke.');
               }
           }else {
               $this->set('message', 'Doslo je do greske, nepravilan poziv ove stranice.');
           }
        }
    }
