<?php
class loginController extends Controller {
    public function __construct() {
        //Application::myDump($_POST['input']);
        if($this->model('member/login/login')->login($_POST['input'])){
            header("Location:/".DOMAIN."/");
        }
    }
}
