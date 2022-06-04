<?php 
    class Bridge{
        //Model Setting
        public function model($model){
            require_once "./src/models/".$model.".php";
            return new $model;
        }

        //View Setting
        public function view($view, $data=[]){
            require_once "./src/views/".$view.".php";
        }
    }

?>
