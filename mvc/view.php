<?php
namespace mvc;

class View
{
    private $model;
    private $content;
    
    public function __construct(MOdel $model)    {
        $this->model = $model;
    }
    public function viewContent(){
        $this->content = $this->model->getContent();
        echo "<hr>Content is : " . $this->content;
    }
}

?>