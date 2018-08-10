<?php

class login {
    public function login($data = []) {
        $con = Application::myConnect();
        //Application::myDump($data);
        $sql = "SELECT * FROM tbl_member WHERE mem_username = '".$data['username']."' AND "
                . "mem_password = '".$data['password']."'  ";
       $rs = $con->query($sql);
       if($rs->num_rows == 1){
           $arr = $rs->fetch_object();
           $_SESSION['name'] = $arr->mem_name;
           $_SESSION['lv'] = $arr->mem_class;
           $_SESSION['ststus'] = '1';
       }
       return true;
    }
}
