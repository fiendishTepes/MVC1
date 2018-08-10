<?php
class boardController extends Controller {
    public function __construct() {
        $this->view("board/index");
    }
    public function addAction(){
        $this->model('board/board')->addBoard($_POST['input']);
    }
}
