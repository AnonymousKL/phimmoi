<?php

class Login extends DB{
    public function Authentication($user, $pass){
        $sql="SELECT * FROM user where userName='$user' AND passWord='$pass'";
        $result=mysqli_query($this->con, $sql);
        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $_SESSION['user']=$user;
            $_SESSION['pass']=$pass;
            $_SESSION['name']=$row['Ten'];
            setcookie("user",$user,time()+360);
            setcookie("pass",$pass,time()+360);
            setcookie("name",$row['Ten'],time()+360);
            return true;
        }
    }
    public function CheckUser($user){
        $sql = "SELECT userName FROM user WHERE userName='$user'";
        $result = mysqli_query($this->con, $sql);
        if(mysqli_num_rows($result)==1){
            return false;
        }
        return true;
    }

    public function RegisterAccount($user, $pass, $name){
        $sql = "INSERT INTO user VALUES (NULL, '$user', '$pass',1,'$name')";
        mysqli_query($this->con, $sql);
    }
}
?>