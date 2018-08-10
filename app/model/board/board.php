<?php

class board {

    public function addBoard($data = []) {
        $con = Application::myConnect();
        $sql = "INSERT INTO tbl_board2("
                . "board_title,"
                . "board_content,"
                . "board_master,"
                . "board_date) "
                . " VALUES("
                . "'$data[title]',"
                . "'$data[content]',"
                . "'$data[master]',"
                . "'" . Application::myDate() . "')";
        if (!empty($data[title])) {
            if ($rs = $con->query($sql)) {
                echo "<script>history.go(-1);</script>";
                //header("Location: /".DOMAIN."/board");
            } else {
                echo " <font color='red'>ERROR = " . $con->error . "</font>";
            }
        }
    }

}
