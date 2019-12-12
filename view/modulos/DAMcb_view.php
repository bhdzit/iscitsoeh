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
    <img src="./view/dist/img/dam.jpg">
 </div>
   <div  id="dam_perfil"class="card-body  card-hide">
    <img src="./view/dist/img/slider2.jpg">
 </div>

    <div  id="dam_malla"class="card-body card-hide ">
    <img src="./view/dist/img/dam.jpg">
  </div>
     <div  class="card-body card-hide ">
 
    <canvas id="myCanvas" width="480" height="320"></canvas>
      <button onclick="stratGame()" class="btn btn-block btn-primary">Empezar</button>
  </div>


</div>

<script>
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var ballRadius = 10;
    var x = canvas.width/2;
    var y = canvas.height-30;
    var dx = 2;
    var dy = -2;
    var paddleHeight = 10;
    var paddleWidth = 75;
    var paddleX = (canvas.width-paddleWidth)/2;
    var rightPressed = false;
    var leftPressed = false;
    var brickRowCount = 10;
    var brickColumnCount = 4;
    var brickWidth = 35;
    var brickHeight = 20;
    var brickPadding = 10;
    var brickOffsetTop = 30;
    var brickOffsetLeft = 30;
    var score = 0;
    var lives = 3;

    var bricks = [];
    for(var c=0; c<brickColumnCount; c++) {
        bricks[c] = [];
        for(var r=0; r<brickRowCount; r++) {
            bricks[c][r] = { x: 0, y: 0, status: 1 };
        }
    }

    document.addEventListener("keydown", keyDownHandler, false);
    document.addEventListener("keyup", keyUpHandler, false);
    document.addEventListener("mousemove", mouseMoveHandler, false);

    function keyDownHandler(e) {
        if(e.keyCode == 39) {
            rightPressed = true;
        }
        else if(e.keyCode == 37) {
            leftPressed = true;
        }
    }
    function keyUpHandler(e) {
        if(e.keyCode == 39) {
            rightPressed = false;
        }
        else if(e.keyCode == 37) {
            leftPressed = false;
        }
    }
    function mouseMoveHandler(e) {
        var relativeX = e.clientX - canvas.offsetLeft;
        if(relativeX > 0 && relativeX < canvas.width) {
            paddleX = relativeX - paddleWidth/2;
        }
    }
    function collisionDetection() {
        for(var c=0; c<brickColumnCount; c++) {
            for(var r=0; r<brickRowCount; r++) {
                var b = bricks[c][r];
                if(b.status == 1) {
                    if(x > b.x && x < b.x+brickWidth && y > b.y && y < b.y+brickHeight) {
                        dy = -dy;
                        b.status = 0;
                        score++;
                        if(score == brickRowCount*brickColumnCount) {
                            alert("GANASTE, FELICIDADES!");
                            draw();
                            drawBricks();
                         //   document.location.reload();
                        }
                    }
                }
            }
        }
    }

    function drawBall() {
        ctx.beginPath();
        ctx.arc(x, y, ballRadius, 0, Math.PI*2);
        ctx.fillStyle = "#222d32";
        ctx.fill();
        ctx.closePath();
    }
    function drawPaddle() {
        ctx.beginPath();
        ctx.rect(paddleX, canvas.height-paddleHeight, paddleWidth, paddleHeight);
        ctx.fillStyle = "#222d32";
        ctx.fill();
        ctx.closePath();
    }
    function drawBricks() {
        for(var c=0; c<brickColumnCount; c++) {
            for(var r=0; r<brickRowCount; r++) {
                if(bricks[c][r].status == 1) {
                    var brickX = (r*(brickWidth+brickPadding))+brickOffsetLeft;
                    var brickY = (c*(brickHeight+brickPadding))+brickOffsetTop;
                    bricks[c][r].x = brickX;
                    bricks[c][r].y = brickY;
                    ctx.beginPath();
                    ctx.rect(brickX, brickY, brickWidth, brickHeight);
                    ctx.fillStyle = "#222d32";
                    ctx.fill();
                    ctx.closePath();
                }
            }
        }
    }
    function drawScore() {
        ctx.font = "16px Arial";
        ctx.fillStyle = "#222d32";
        ctx.fillText("Puntos: "+score, 20, 20);
    }
    function drawLives() {
        ctx.font = "16px Arial";
        ctx.fillStyle = "#222d32";
        ctx.fillText("Vidas: "+lives, canvas.width-65, 20);
    }

    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawBricks();
        drawBall();
        drawPaddle();
        drawScore();
        drawLives();
        collisionDetection();

        if(x + dx > canvas.width-ballRadius || x + dx < ballRadius) {
            dx = -dx;
        }
        if(y + dy < ballRadius) {
            dy = -dy;
        }
        else if(y + dy > canvas.height-ballRadius) {
            if(x > paddleX && x < paddleX + paddleWidth) {
                dy = -dy;
            }
            else {
                lives--;
                if(!lives) {
                    alert("FIN DEL JUEGO PERDISTE");
                 //   document.location.reload();
                  for(var c=0; c<brickColumnCount; c++) {
                      bricks[c] = [];
                      for(var r=0; r<brickRowCount; r++) {
                          bricks[c][r] = { x: 0, y: 0, status: 1 };
                      }
                  }
                  lives=4;
                  score=0;
                }
                else {
                    x = canvas.width/2;
                    y = canvas.height-30;
                    dx = 3;
                    dy = -3;
                    paddleX = (canvas.width-paddleWidth)/2;
                }
            }
        }

        if(rightPressed && paddleX < canvas.width-paddleWidth) {
            paddleX += 7;
        }
        else if(leftPressed && paddleX > 0) {
            paddleX -= 7;
        }

        x += dx;
        y += dy;
        requestAnimationFrame(draw);
    }
    function stratGame(){
      
   draw();      
    }

</script>