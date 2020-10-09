<?php
namespace mvc;
class Model
{
    public $content;

    public function __construct(){
        $this->content = "Hello World!";
    }
    public function getContent(){
        return $this->content; 
    }
    public function setContent(String $content){
        $this->content = $content;  
    }
}

?>