<?php

class Controller  
{
    public function model($model = '',$data = []) 
    {
        $round = count($row = explode('/', $model));
        //Application::myDump($row);
        if ($round > 1) {
            include MODEL . $model . '.php';
            return new $row[$round - 1];
        } else {
            include MODEL . $model . '.php';
            return new $model;
        }
    }
    public function view($view = '', $data = []) 
    {
        include VIEW . $view . '.php';
    }

}