<?php

class Admin extends Controller{
    
    function Login(){
        $this->view("Login",""); 
        $authen = $this->model("Login");
        if(isset($_POST['btnLogin'])){
            $user=$_POST['user'];
            $pass=md5($_POST['pass']);
            if( $authen->Authentication($user, $pass)){
                echo "Login Successfull! Redirecting...";
                //$this->view("Manage","");
                header('location:'.URL_ROOT.'admin/Manage');
            }
            else{
                echo "Account not found!";
                $this->view("Login",""); 
            }
        }   
    }
    
    function Register(){
        $this->view("Register","");
        $register = $this->model("Login");
        if(isset($_POST['btnSignup'])){
            $name=$_POST['name'];
            $user=$_POST['user'];
            $pass=md5($_POST['pass']);
            $repass=$_POST['repass'];
            if($register->CheckUser($user) == false){
                echo "username existed";
            }
            else{
                $register->RegisterAccount($user, $pass, $name);
                echo "Success";
            }
        }
    }
    function Manage(){
        if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
            $this->view("Manage","");
            if(isset($_POST["btnLogout"])){
                session_destroy();
                unset($_SESSION['user']);
                unset($_SESSION['pass']);
                unset($_SESSION['name']);
                setcookie("user","",time()-36000);
                setcookie("pass","",time()-36000);
                setcookie("name","",time()-36000);
                header('location:'.URL_ROOT.'admin/Login');
            }
            if(isset($_POST['btnThem'])){
                $tenphim=$_POST['tenphim'];
                $tenphim_el=$_POST['tenphim_el'];
                $urlphim=$_POST['urlphim'];
                $idTL=$_POST['idTL'];
                    settype($idTL,"int");
                $idLP=$_POST['idLP'];
                    settype($idLP,"int");
                $urlThumbnail=$_POST['urlThumbnail'];
                $urlPoster=$_POST['urlPoster'];
                $update = $this->model("Manage");
                $update->Post($tenphim,$tenphim_el,$urlphim,$idTL,$idLP,$urlThumbnail,$urlPoster);
            }
        }
        else{
        header('location:'.URL_ROOT.'admin/Login');
        }
  
    }
}
?>