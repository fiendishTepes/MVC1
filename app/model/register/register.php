<?php

class register {

    public function regUser($data) {
        $rs = new mysqli(HOST, USER, PASS, DB);
        $rs->set_charset("utf8");
        //Application::myDump($data);
        $sql = "INSERT INTO tbl_user(user_name,user_lname,user_address,user_username,user_password) "
                . "VALUES "
                . "('{$data[name]}','{$data[lname]}',"
                . "'{$data[address]}','{$data[user]}',"
                . "'{$data[pass]}')";
        if(!empty($data['name']) && !empty($data['lname']) && !empty($data['user']) && !empty($data['pass'])){
            if($rs->query($sql)){
              echo "<font color=green><b>ลงทะเบียนสำเร็จ</b></font>"; 
            }
        }else{
            echo "<font color=red><b>กรุณากรอกข้อมูลให้ครบ</b></font>";
        }
        $rs->close();
    }

}
