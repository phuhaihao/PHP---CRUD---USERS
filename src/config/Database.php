<?php 
    class ConnectDB{
        //connect
        public $connect;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "db_nodejs";

        function __construct(){
            $this->connect = mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_select_db($this->connect, $this->dbname);
            mysqli_query($this->connect, "SET NAMES 'utf8'");
        }
    }

?>
