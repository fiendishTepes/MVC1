<?php

class Application {

    protected $controller = 'homeController'; //Class
    protected $action = 'index'; //Method
    protected $prams = [];

    public function __construct() {

        $ss = $this->getUrl();
        if (file_exists(CONTROLLER . $this->controller . '.php')) {
            $this->controller = new $this->controller;
            if (method_exists($this->controller, $this->action)) {
                call_user_func_array([$this->controller, $this->action], $this->prams);
            }
        }
    }

    public function Old_construct() {
        $this->prepareURL();
        //echo $this->controller,'<br>',$this->action,'<br>',print_r($this->prams);
        if (file_exists(CONTROLLER . $this->controller . '.php')) {
            $this->controller = new $this->controller;
            if (method_exists($this->controller, $this->action)) {
                call_user_func_array([$this->controller, $this->action], $this->prams);
            }
        }
    }

    protected function getUrl() {
        $require = $_SERVER['REQUEST_URI'];
        if (!empty($require)) {
            $url = explode('/', trim($require));
            $this->controller = !empty($url[3]) ? $url[3] . 'Controller' : 'homeController';
            $this->action = isset($url[4]) ? $url[4] . 'Action' : 'indexAction';
            unset($url[3], $url[4]);
            $this->prams = !empty($url) ? array_values($url) : [];
        }
    }

    public function getAction() {
        $require = $_SERVER['REQUEST_URI'];
        if (!empty($require)) {
            return explode('/', trim($require));
        }
    }

    public function myConnect() {
        $con = new mysqli(HOST, USER, PASS, DB);
        $con->set_charset("utf8");
        return $con;
    }

    public function myDate() {
        return date("Y-m-d");
    }

    public function myDump($data) {
        echo '<pre>';
        print_r($data);
    }

    //MPDF

    public function myMpdf() {
        require_once MPDF . '/vendor/autoload.php';

        return new \Mpdf\Mpdf(['tempDir' => ROOT . '/custom/temp/dir/path',
            'default_font_size' => 16,
            'default_font' => 'sartbun'
        ]);
//        $mpdf->WriteHTML($data);
//        $mpdf->Output();
    }

}
