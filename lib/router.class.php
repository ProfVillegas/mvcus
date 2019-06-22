<?php
class Router{
    
    protected $uri;
    protected $controller;
    protected $action;
    protected $params;
    
    public function getUri(){
        return $this->uri;
    }
    public function setUri($u){
        $this->uri=$u;
    }
    
    public function getAction(){
        return $this->action;
    }
    public function getController(){
        return $this->controller;
    }
    public function getParams(){
        return $this->params;
    }
}