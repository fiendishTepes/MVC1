<?php

class loginController extends Controller {
    public function __construct() {
        $this->view('login/login');
    }
    public function loginAction(){
        //Application::myDump($_POST['login']);
    }
}
