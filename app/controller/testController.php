<?php

class testController extends Controller {

    public function testAction() {
        echo "ACTION <br> include test <br>";
    }

    public function modelAction() {
        $this->model("test/model");
    }

    public function addAction() {
        echo "ADD ".date("Y-m-d");
        
        for ($n = 11; $n <= 100; $n++) {

            $dates = date("Y-m-d");
            $title = "หัวข้อข่าวที่ ".$n;
            $content = "<h5>Conveying meaning to assistive technologies</h5>

<p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code >.sr-only</code> class.</p>";
         
            //$con = Application::myConnect();
            $sql = "INSERT INTO tbl_board2(board_title,board_content,board_master,board_date)"
                    . " VALUES "
                    . "('$title',"
                    . "'$content',"
                    . "'user01',"
                    . "'$dates')";

            $con->query($sql);
            echo $con->error;
        }
    }

}
