<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        canvas {
            background-color:cyan ;
            margin: auto;
        }

    </style>

</head>

<body>
    <canvas id="mycanvas"width="500" height="500">
    tu navegador no soporta canvas
    </canvas>
    <script type="text/javascript">

    var cv = null;
    var ctx = null;
    var player1 = null;
    var player2 =null;
    var super_x= 240, super_y = 240;
    var direction = 'right';
    var score = 0;
    var speed = 10;

    

    function start(){
    cv = document.getElementById('mycanvas');
    ctx = cv.getContext('2d');
   
    player1 = new Cuadrado(super_x,super_y,40,40,'red');
    player2 = new Cuadrado(generateRandomInteger(500),generateRandomInteger(100),40,40,'yellow');
        paint();  
    }

    function paint(){

        window.requestAnimationFrame (paint);
        
        ctx.fillStyle = 'pink';
        ctx.fillRect(0,0,500,500);

        ctx.fillStyle= rbgaRand();
    
        player1.c=rbgaRand();
        player1.dibujar(ctx);
        player2.dibujar(ctx);

        ctx.fillStyle='black';
        ctx.fillText("Score:"+score,20,20);
       
        update();
    }

    function update(){

        if(direction =='right'){
            player1.x +=speed;
            if(player1.x>=500){
                player1.x=0;
            } 
        }
        if(direction == 'left'){
            player1.y-=speed;
                if(player1.x<0){
                     player1.x=500;
                }
        }

        if(direction == 'down'){
            player1.x +=speed;
            if(player1.x>500){
                player1.x=0;
            } 
        }

        if(direction == 'up'){
            player1.y-=speed;
                if(player1.x<0){
                    player1.x=500;
                }
        }

        if(player1.se_tocan(player2)){
            player2.x=generateRandomInteger(500);
            player2.y=generateRandomInteger(500);

            score+=10;
            speed+=5;

        }
    }

    document.addEventListener('keydown', function(e){
        console.log(e)
        //arriba
        if(e.keyCode==87 || e.keyCode ==38){
            direction='up';
        }
        //abajo
        if(e.keyCode==83 || e.keyCode ==40){
            direction='down';
        }
        //izquierda
        if(e.keyCode==65 || e.keyCode ==37){
            direction='left';
        }
        //derechaa
        if(e.keyCode==68 || e.keyCode ==39){
            direction='right';
        }
      
       
    })

    window.addEventListener('load',start)

    window.requestAnimationFrame = (function () {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 17);
        };
    }());

    function Cuadrado(x,y,w,h,c){
        this.x=x;
        this.y=y;
        this.w=w;
        this.h=h;
        this.c=c;

        this.dibujar = function(ctx){
        ctx.fillStyle = this.c;
        ctx.fillRect(this.x,this.y,this.w,this.h);
        ctx.strokeRect(this.x,this.y,this.w,this.h);
        }

        this.se_tocan = function (target) { 

        if(this.x < target.x + target.w &&

        this.x + this.w > target.x && 

        this.y < target.y + target.h && 

        this.y + this.h > target.y)

        {

        return true;  

        }  

        };

    }

    function rbgaRand() {
        var o = Math.round, r = Math.random, s = 255;
        return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
    }

    function generateRandomInteger(max) {
    return Math.floor(Math.random() * max) + 1;
    }




</script>

</body>

</html>
