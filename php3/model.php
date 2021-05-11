<?php

class Model {

    private $db = null;

    public function __construct()
    {
        $this->db = new mysqli("localhost", "root", "root", "example");
        if ($this->db->connect_errno) {
            die ("Не удалось подключиться к MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error);
        }
    }
    public function getData($data) {
        $res=array();
        $q = "SELECT * FROM ". $data['table']." LIMIT 100";
        $result = $this->db->query($q);
            while($obj = $result->fetch_assoc()){
                $res[] =$obj;
            }
	    return $res;
    }

}