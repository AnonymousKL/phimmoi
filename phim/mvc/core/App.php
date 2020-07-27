<?php

class App{

    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];

    function __construct(){
        //Xu li URL
        $url=$this->Urlprocess();
        //Xu li controller
        if(file_exists("./mvc/controllers/".$url[0].".php")){
            $this->controller=$url[0];
            unset($url[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller=new $this->controller;

        //Action
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->action=$url[1];
            }
            unset($url[1]);
        }

        //Xu li params
        $this->params=$url?array_values($url):[0,0];
        call_user_func_array([$this->controller,$this->action],$this->params);
        
    }
    function Urlprocess(){
        if(isset($_GET['url'])){
            return explode("/",filter_var(trim($_GET['url']),FILTER_DEFAULT,"/"));
            
        }
    }
}
?>