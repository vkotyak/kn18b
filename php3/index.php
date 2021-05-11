<?php
//controller

include "./model.php";
include "./view.php";
$data = array();
$data['action'] = 'show';
$data['table'] = 'department';
if (isset($_GET['action'])) {
    $data['action'] = htmlspecialchars(strip_tags($_GET['action']));
}
if (isset($_GET['table'])) {
    $data['table'] = htmlspecialchars(strip_tags($_GET['table'])); 
}
//$data['textfield'] = htmlspecialchars(strip_tags($_POST['textfield']));
//$data['numfield'] = intval(htmlspecialchars(strip_tags($_POST['numfield'])));  // not used for now

$model = new Model();
$view = new View();

switch ($data['action']) {
    case 'show':
        $d = $model->getData($data);
        $v = $view->showHeader($data,$d);
        $v .= $view->showData($data,$d);
        break;
}



echo $v;
