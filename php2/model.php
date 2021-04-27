<?php

class Model {

    public function getData($data) {
        $res='';
        $lines = file($data['textfield']);
        $res = implode('<br>', $lines);
	    return $res;
    }

}