<?php

class View {

    public function showData($data) {
	$html = "<html><body>";
	$html .= "<p>".$data."</p>";
	$html .= "</body></html>";
	return $html;
    }

}