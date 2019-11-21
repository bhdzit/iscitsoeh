<!DOCTYPE html>
<html>
<?php 	 include("content/head_js.php");?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper" >
	<?php 	 include("content/header_view.php");?>

	<?php

			 $view= new controllerView();
			 $rute=$view->getViewsController();
		

	 if($rute!="404"&&$rute!="welcome"){

	 	include("content/menu_view.php");
	 	require_once($rute);	
	 		include("content/footer.php");

	 }
	 else{
	 	if($rute=="welcome"){

	 	 	include("./view/modulos/welcome_view.php");
	 	}
	 	else{
		 	include("./view/modulos/404.php");
	 		include("content/footer.php");	
	 	}

	 }
	
?>

		</div>
	</body>
</html>
