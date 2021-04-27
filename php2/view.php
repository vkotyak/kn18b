<?php

class View
{

	public function showData($data)
	{
		$html = "<html><body>";
		$html .= '<form action="?action=send" method="POST">
				<label for="textfield">File name: </label><input type="text" name="textfield" id="textfield"><br>
				<input type="number" name="numfield" id="numfield">
				<input type="hidden" name="sval" value="">
				<input type="submit" value="Send!">
				</form>';
		$html .= "<p>" . $data . "</p>";
		$html .= "</body></html>";
		return $html;
	}
}
