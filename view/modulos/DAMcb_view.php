  <div class="content-wrapper pt-5" >
        <center>
          <h1>Especialidad Desarrollo de Aplicaciones Móviles. DAM</h1>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li id="1" class="nav-item" name="dam_objetivo" onclick="navbarChange(this)">
        <a class="nav-link active" >Ovjetivo</a>
      </li>
      <li id="2" class="nav-item"  onclick="navbarChange(this)">
        <a class="nav-link">Perfil de Egreso</a>
      </li>
      <li id="3" class="nav-item" onclick="navbarChange(this)">
        <a class="nav-link ">Malla Curricular</a>
      </li>
      <li id="4" class="nav-item" onclick="navbarChange(this)">
        <a class="nav-link ">Juego</a>
      </li>
    </ul>
  </div>
  <div  id="dam_objetivo" class="card-body  ">
    <img src="./view/dist/img/slider1.jpg">
 </div>
   <div  id="dam_perfil"class="card-body  card-hide">
    <img src="./view/dist/img/slider2.jpg">
 </div>

    <div  id="dam_malla"class="card-body card-hide ">
    <img src="./view/dist/img/dam.jpg">
  </div>
     <div onmousemove="moveimg(event)" id="dam_juego" class="card-body card-hide ">
    <div class="game-obstacul"></div>
    <img id="logo-android" src="./view/dist/img/android-game.png">
      
  </div>


</div>
<script type="text/javascript">
  var img=document.getElementById("logo-android");
 function moveimg(e) {
  console.log(e.clientX);
  img.style.left=(e.clientX-250)+"px";
  img.style.top=(e.clientY-250)+"px";
  }
</script>