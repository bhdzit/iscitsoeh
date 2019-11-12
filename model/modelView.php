<?php
class modelView{

	protected function getModelViews($view){
		
		$rutesarray=["tutoria","index",
		"asesorias","actcomp",
		"serapoyo","profes",
		"reticula","DAMcb",
		"TASIcb"];
		
		if(in_array($view,$rutesarray)){
			return "./view/modulos/".$view."_view.php";
		}else{
			return "404";
		}
	
	}	
}