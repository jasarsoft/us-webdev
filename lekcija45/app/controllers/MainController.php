<?php
    class MainController extends Controller {
        function index(){
            if (!Session::exists('user_id')) {
                Misc::redirect('logout');
            }
        }
        
        function login(){
            if ($_POST){
                $username = filter_input(INPUT_POST, 'username');
                $password = filter_input(INPUT_POST, 'password');
                
                if (preg_match('/^[a-z0-9]{4,}$/', $username) and preg_match('/^.{6,}$/', $password)){
                    $passwordHash = hash('sha512', $password . Configuration::SALT);
                    $user = UserModel::getActiveUserByUsernameAndPasswordHash($username, $passwordHash);
                    
                    if ($user){
                        Session::set('user_id', $user->user_id);
                        Session::set('username', $username);
                        Session::set('user_ip', filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_FLAG_IPV4));
                        Session::set('user_agent', filter_input(INPUT_SERVER, 'HTTP_USER_AGENT'));
                        Misc::redirect('');
                    } else {
                        $this->set('message', 'Username or password are incorrect or the user is not active.');
                    }
                } else {
                    $this->set('message', 'Invalid username or password format.');
                }
            }
        }
        
        function logout(){
            Session::end();
            Misc::redirect('login');
        }
    }
