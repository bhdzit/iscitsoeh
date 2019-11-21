<div class="container-fluid" onclick="setCarusel(this)">
		<div class="row">
			<center>
				<div class="circule_container ">
					<div class="internocirculo circuloder">
						<div class="internocirculo criculoisq">
						<img src="<?php echo SERVERURL?>view/dist/img/isclogo.png">
					</div>
					</div>	
				</div>
			</center>
		</div>
	</div>

<div id="carousel" class="carousel slide d-none" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.w3schools.com/bootstrap/la.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<script type="text/javascript">
	function setCarusel(div){
		div.classList.add("d-none");
		document.getElementById("carousel").classList.remove("d-none");
	}
</script>