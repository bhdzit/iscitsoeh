<?php
class modelView{

	protected function getModelViews($view){
		
		$rutesarray=["tutoria","home",
		"asesorias","actcomp",
		"serapoyo","profes",
		"reticula","DAMcb","welcome",
		"TASIcb"];
		
		if(in_array($view,$rutesarray)){
			return "./view/modulos/".$view."_view.php";
		}else{
			return "404";
		}
	
	}	
}