<!DOCTYPE html>
<html>
<?php 	 include("content/head_js.php");?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
	<?php 	 include("content/header_view.php");?>

	<?php

			 $view= new controllerView();
			 $rute=$view->getViewsController();
		include("content/menu_view.php");
		include("modulos/index_view.php");
	    
		include("content/footer.php");
?>

		</div>
	</body>
</html>
