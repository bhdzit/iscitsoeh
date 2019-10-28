<!DOCTYPE html>
<html>
<?php 	 include("content/head_js.php");?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	<?php 	 include("content/header_view.php");?>

	<?php

			 $view= new controllerView();
			 $rute=$view->getViewsController();
		
  
	 if($rute!="404"){

	 	include("content/menu_view.php");
	 	require_once($rute);	
	 
	 }
	 else{
	 	include("./view/modulos/404.php");
	 }
		include("content/footer.php");
?>

		</div>
	</body>
</html>
