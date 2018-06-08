<?php

class testController extends Controller {

    public function testAction() {
        echo "ACTION";
    }
    
    public function modelAction(){
        $this->model("test/model");
    }

}
