<?php

class View
{

	public function showHeader($data, $resdb)
	{
		$html = "<html><body>";
		$html .="<p>".$data['table']."</p>";
		$html .='<form>
		<select name="table">
		<option value="department" ';
		if ($data['table']=='department') { 
			$html.= 'selected';
		}
		$html .=' > Department</option>
		<option value="stuff" ';
		if ($data['table']=='stuff') { 
			$html.= 'selected';
		}
		$html .='> Peoples</option>
		</select>
		<input type="submit" value="Send">
		</form>';
		return $html;
	}
	public function showData($data,$resdb)
	{
		$html='';
		foreach($resdb as $d) {
			$html .= "<p>";
			foreach ($d as $k=>$v) {
				$html .=  $k ."=". $v." ";
			}
			$html .= "</p>";
		}
		$html .= "</body></html>";
		return $html;
	}
}
