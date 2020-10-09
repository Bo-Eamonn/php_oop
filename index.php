<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1{
        font-family: fantasy;
        color: darkblue;
        padding: auto;
    }
    </style>
</head>
<body>
    
<h1>Is this working?</h1>


<?php
use mvc\model;
include_once ("mvc/model.php");
use mvc\view;
include_once ("mvc/view.php");
use mvc\controller;
include_once ("mvc/controller.php");

$model = new Model();
$view = new View($model);
$controller = new Controller($view, $model);

$view->viewContent();
$controller->updateModel("Nieuwe content: [student naam], [student nr]!!");
$controller->updateView();

?>


</body>
</html>