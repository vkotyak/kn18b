<?php
//controller

include "./model.php";
include "./view.php";

$model = new Model();
$view = new View();

$d = $model->getData();
$v = $view->showData($d);

echo $v;