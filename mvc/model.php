<?php
namespace mvc;
class Model
{
    public $content;

    public function __contruct ()
    {
        $this->content = "Hello WOrld!";
    }
    public function getContent(){
        return $this->content; 
    }
    public function setContent(String $content){
        $this->content = $content;  
    }
}

?>