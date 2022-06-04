<?php 
    class UsersModel extends connectDB{
        function getUsers(){
            $query = "SELECT * FROM users ";
            return mysqli_query($this->connect ,$query);
        }

        function getUser($id){
            $query = "SELECT * FROM users WHERE id = ".$id."";
            return mysqli_query($this->connect, $query);
        }

        function createUser($username, $password, $email, $phone){
            $query = "INSERT INTO users (username, password, email, phone) VALUES ('".$username."', '".$password."', '".$email."', '".$phone."')";
            return mysqli_query($this->connect, $query);
        }

        function DeleteUser($id){
            $query = "DELETE FROM users WHERE id = ".$id."";
            return mysqli_query($this->connect, $query);


        }

        function UpdateUser($id, $username, $password, $email, $phone){
            $query = "UPDATE users SET username = '".$username."', password='".$password."', email = '".$email."', phone= '".$phone."' WHERE id=".$id."";
            return mysqli_query($this->connect, $query);
        }
    }

?>