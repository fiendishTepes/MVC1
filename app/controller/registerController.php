<?php

class registerController extends Controller {

    public function __construct() {
        $this->view("register/register");
    }

    public function regAction() {
        $this->model("register/register")->regUser($_POST['reg']);
    }

}
