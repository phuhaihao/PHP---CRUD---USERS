<?php 
    //localhost/Page/action/params
    class middleware {
        protected $controller = "Home";
        protected $action = "ViewPage";
        protected $params = [];
        function __construct(){
            //Handle Url to array 
            $arr = $this -> urlProcess();
            //Handle Controller
            if($arr != []){
                if(file_exists("./src/controllers/".$arr[0].".php")){
                    $this -> controller = $arr[0];
                    unset($arr[0]);
                }
                require_once "./src/controllers/".$this -> controller.".php";
                $this -> controller = new $this -> controller;
                //Handle Action
                if(isset($arr[1])){
                    if(method_exists($this->controller, $arr[1])){
                        $this -> action = $arr[1];
                    }
                    unset($arr[1]);
                }
    
                //Handle Params
                if($arr != []){
                    $this->params = array_values($arr);
                }else{
                    $this -> params = [];
                }
    
                //call function array
                call_user_func_array(([$this->controller, $this->action]), $this->params);
            }else{
                $this -> controller = "Home";
                require_once "./src/controllers/".$this -> controller.".php";
                $this -> controller = new $this -> controller;
                //Handle Action
                $this -> action = "ViewPage";
                //Handle Params
                $this-> params = [];
                //call function array
                call_user_func_array(([$this->controller, $this->action]), $this->params);
            }
            
        }

        //handle url
        function urlProcess() {
            if(isset($_GET["url"])){
                //explode("/", filter_var(trim($_GET["url"], "/")))
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }

?>
