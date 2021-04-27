<?php
//controller

include "./model.php";
include "./view.php";
$data = array();
if (isset($_GET['action'])) {
    $data['action'] = htmlspecialchars(strip_tags($_GET['action'])); // not used for now
}
$data['textfield'] = htmlspecialchars(strip_tags($_POST['textfield']));
$data['numfield'] = intval(htmlspecialchars(strip_tags($_POST['numfield'])));  // not used for now

$model = new Model();
$view = new View();

$d = $model->getData($data);
$v = $view->showData($d);

echo $v;
