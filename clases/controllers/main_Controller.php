<?php 

include 'clases/mycontrollermain_Controller.php';

class main_Controller extends mycontrollermain_Controller {

    public function index_Action() {        
        
        $master_page = 'main_View';
        $page = 'home_View';
        require_once 'view/viewMaster/'.$master_page.'.php';
    }
    
    public function reg_Action() {
        
        $name = '';
        $first_name = '';
        $patronumic = '';
        $tel = '';
        $email = '';
        
        $error = '';
        $error_name = '';
        $error_first_name = '';
        $error_patronumic = '';
        $error_tel = '';
        $error_email = '';
        $error_password = '';
        $error_akcept_password = '';
  
        $master_page = 'main_View';
        $page = 'reg_View';
        require_once 'view/viewMaster/'.$master_page.'.php';
        
    }
    
    public function auth_Action() {
        
        $data = array();
        
        $master_page = 'main_View';
        $page = 'auth_View';
        require_once 'view/viewMaster/'.$master_page.'.php';
        
    }
    
    public function logout_Action() {
        
    }
}
