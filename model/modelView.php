<?php
class modelView{

	protected function getModelViews($view){
		$rutesarray=["tutoria"];
		if(in_array($view,$rutesarray)){
			return "./view/modulos/".$view."_view.php";
		}else{
			return "404";
		}
	
	}	
}