<!--<div style="width: 100%;height: 100%;" id="game-contenier" onmousemove="moveimg(event)">-->
<div class="container-fluid" onclick="setCarusel(this)" >
 <!-- <div id="gusano"></div>-->
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
      <img class="carousel-item-img" src="<?php echo SERVERURL?>view/dist/img/isc15.jpg" style="width: 100%;">
    </div>
    <div class="carousel-item">

      <img style="width: 100%;" class="carousel-item-img" src="<?php echo SERVERURL?>view/dist/img/slider2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img class="carousel-item-img" style="width: 100%;" src="<?php echo SERVERURL?>view/dist/img/slider5.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  <a  href="<?php echo SERVERURL?>home" class="btn btn-primary welcome-home-btn">Conócenos</a>
</div>
<script type="text/javascript">
 var img=document.getElementById("gusano");
 function moveimg(e) {
  console.log(e.clientX);
  img.style.left=(e.clientX-0)+"px";
  img.style.top=(e.clientY-0)+"px";
  }
	function setCarusel(div){
		div.classList.add("d-none");
		document.getElementById("carousel").classList.remove("d-none");
	}
</script>