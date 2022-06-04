<?php 
    class Home extends Bridge{
        
        function __construct(){
            $this->users = $this->model("UsersModel");
            $this->GetUsers = $this->users -> getUsers();

            $this -> user = $this -> model("UsersModel");
            $this -> createUser = $this -> model("UsersModel");
            $this -> DeleteUser = $this -> model("UsersModel");
            $this -> UpdateUser = $this -> model("UsersModel");
            
        }
        
        function ViewPage(){
            
            $this->view("Home", [
                "Title" => "Trang Chủ",
                "Users" => $this -> GetUsers,
            ]);
        }

        function Detail($id){
            $GetUser = $this -> user -> getUser($id); 

            $this->view("Detail", [
                "Title" => "Detail Page",
                "User" => $GetUser
            ]);
        }

        function CreateUser(){
            $username = "";
            $password = "";
            $email = "";
            $phone = "";
            if(isset($_POST["username"])){
                $username = $_POST["username"];
            }
            if(isset($_POST["password"])){
                $password = $_POST["password"];
            }
            if(isset($_POST["email"])){
                $email = $_POST["email"];
            }
            if(isset($_POST["phone"])){
                $phone = $_POST["phone"];
            }

            $this -> createUser -> createUser($username, $password, $email, $phone);
            header('location: http://localhost/PHPCRUD/Home');
        }

        function DeleteUser($id){
            $this -> DeleteUser -> DeleteUser($id);

            header('location: http://localhost/PHPCRUD/Home');
        }

        function UpdateUser($id1){
            $id = $username = $password = $email = $phone = "";
            if(isset($_POST["id"])){
                $id = $_POST["id"];
            }
            if(isset($_POST["username"])){
                $username = $_POST["username"];
            }
            if(isset($_POST["password"])){
                $password = $_POST["password"];
            }
            if(isset($_POST["email"])){
                $email = $_POST["email"];
            }
            if(isset($_POST["phone"])){
                $phone = $_POST["phone"];
            }
            echo $id.$username.$password.$email.$phone;
            if($id && $username && $password && $email && $phone){
                $this -> UpdateUser -> UpdateUser($id, $username, $password, $email, $phone);
                header('location: http://localhost/PHPCRUD/Home');
            } else{
                $GetUser = $this -> user -> getUser($id1);
                $this->view("Update", [
                    "Title" => "Update Page",
                    "User" => $GetUser
                ]);
            }
        }
    }

?>
