<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>canvas</title>

    <style>
        canvas{
        background-color:cyan;

        }
    </style>
</head>
<body>
    <canvas id="mycanvas"width="500" height="500">
        tu navegador no soporta canvas
    </canvas>

    <img src="floresita.png" id="imagen" style="display:none;">

    <script type="text/javascript">
        
         /*var cv = document.getElementById('mycanvas');
         var ctx = cv.getContext('2d');
         var super_x= 240, super_y = 240;*/
         /*var color = 'red';
         var fig = 'arc';¨*/
         

        //Trabajo 1 Gradiante: día 17082022 

        /*var grd= ctx.createLinearGradient(0,0,200,0);
        grd.addColorStop(0,"red");
        grd.addColorStop(0.5,"white");
        grd.addColorStop(1,"green");
        
        ctx.fillStyle = grd;
        ctx.fillRect(0,200,200,80);*/

        // Trabajo 2 gradiante circular
         /*grd= ctx.createRadialGradient(75,50,5,90,60,100);
         grd.addColorStop(0,"green");
         grd.addColorStop(0.5,"white");
         grd.addColorStop(1,"red");

        ctx.fillStyle = grd;
        ctx.fillRect(0,40,200,80);*/

        //Trabajo 3 pintando imagenes
        /*var img = document.getElementById('imagen');
        ctx.drawImage(img,100,100);*/

       // Trabajo 4 Evento click - circulos de un solo color
        /*cv.addEventListener('click', function(e){
             ctx.beginPath();
             ctx.arc(e.offsetX-20,e.offsetY-20,50,0,2*Math.PI);
             ctx.fillStyle="rgba(100,0,200,0.5)";
             ctx.fill();
             ctx.stroke();
         });*/

        // Trabajo 5 Evento click - circulos  de color random
        /*cv.addEventListener('click', function(e){
            color = random_rgba();
             ctx.beginPath();
             ctx.arc(e.offsetX-20,e.offsetY-20,50,0,2*Math.PI);
             ctx.fillStyle=color;
             ctx.fill();
             ctx.stroke();

         });
         
         function random_rgba() {
            var o = Math.round, r = Math.random, s = 255;
            return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
        }*/
        
        // Trabajo 6 Evento click, mouseover y mouseout - circulos y cuadrados random 
        /* cv.addEventListener('click', function(e){
            console.log(e);
            ctx.fillStyle=color;
        if(fig=='rec'){
            ctx.fillRect(e.offsetX-20,e.offsetY-20,40,40);
            ctx.strokeRect(e.offsetX-20,e.offsetY-20,40,40);
        }else{
            ctx.beginPath();
            ctx.arc(e.offsetX-20,e.offsetY-20, 30, 0, 2 * Math.PI);
            ctx.fill();
            ctx.stroke();
        }
        });
        
        cv.addEventListener('mouseover',function(e){
            color=rbgaRand();
        });
        cv.addEventListener('mouseout',function(e){
            fig=(fig=='arc')?'rec':'arc';
        });
        function rbgaRand() {
        var o = Math.round, r = Math.random, s = 255;
        return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
    }*/

    //Trabajo 1 Evento mousemove
    /*cv.addEventListener('click', function(e){
            console.log(e);
            ctx.fillStyle=color;
        if(fig=='rec'){
            ctx.fillRect(e.offsetX-20,e.offsetY-20,40,40);
            ctx.strokeRect(e.offsetX-20,e.offsetY-20,40,40);
        }else{
            ctx.beginPath();
            ctx.arc(e.offsetX-20,e.offsetY-20, 30, 0, 2 * Math.PI);
            ctx.fill();
            ctx.stroke();
        }
        });
        
        cv.addEventListener('mouseover',function(e){
            color=rbgaRand();
        });
        cv.addEventListener('mouseout',function(e){
            fig=(fig=='arc')?'rec':'arc';
        });
        function rbgaRand() {
        var o = Math.round, r = Math.random, s = 255;
        return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
    }
    cv.addEventListener('mousemove',function(e){
        ctx.fillStyle = 'black';
        ctx.fillRect(e.offsetX-20,e.offsetY-20,10,10);
    });*/

    //Trabajo 2 Evento mouse move - mouseup y mousedown
    /*cv.addEventListener('click', function(e){
            console.log(e);
            ctx.fillStyle=color;
        if(fig=='rec'){
            ctx.fillRect(e.offsetX-20,e.offsetY-20,40,40);
            ctx.strokeRect(e.offsetX-20,e.offsetY-20,40,40);
        }else{
            ctx.beginPath();
            ctx.arc(e.offsetX-20,e.offsetY-20, 30, 0, 2 * Math.PI);
            ctx.fill();
            ctx.stroke();
        }
        });
        
        cv.addEventListener('mouseover',function(e){
            color=rbgaRand();
        });
        cv.addEventListener('mouseout',function(e){
            fig=(fig=='arc')?'rec':'arc';
        });
        function rbgaRand() {
        var o = Math.round, r = Math.random, s = 255;
        return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
    }
    cv.addEventListener('mousemove',function(e){
        ctx.fillStyle = 'black';
        ctx.fillRect(e.offsetX-20,e.offsetY-20,10,10);
    });
    cv.addEventListener('mousemove',function(e){
            if(press){
                ctx.fillStyle=color;
                ctx.fillRect(e.offsetX-20,e.offsetY-20,10,10);
            }
        });
        
        cv.addEventListener('mousedown',function(e){
            press=true;
        })
        cv.addEventListener('mouseup',function(e){
            press=false;
        })*/

    //Trabajo 3 Evento keydown - keyCode

    /*document.addEventListener('keydown', function(e){
        console.log(e)
        //arriba
        if(e.keyCode==87 || e.keyCode ==38){
            super_y-=10;
        }
        //abajo
        if(e.keyCode==83 || e.keyCode ==40){
            super_y+=10;
        }
        //izquierda
        if(e.keyCode==65 || e.keyCode ==37){
            super_x-=10;
        }
        //derechaa
        if(e.keyCode==68 || e.keyCode ==39){
            super_x+=10;
        }
        paint();
       
    })

    function paint(){
        ctx.fillStyle = "cyan";
        ctx.fillRect(0,0,500,500);

       
        ctx.fillStyle = "blue";
        ctx.fillRect(super_x,super_y,40,40);
        ctx.strokeRect(super_x,super_y,40,40);
    }*/


    //Trabajo 4

        /*var cv = null;
         var ctx = null;
         var super_x= 240, super_y = 240;

        function start(){
        cv = document.getElementById('mycanvas');
        ctx = cv.getContext('2d');
        paint();
         
    }
    function paint(){

        window.requestAnimationFrame (paint);

        ctx.fillStyle = 'pink';
        ctx.fillRect(0,0,500,500);

       
        ctx.fillStyle = rbgaRand();
        ctx.fillRect(super_x,super_y,40,40);
        ctx.strokeRect(super_x,super_y,40,40);

        update();
    }

    function update(){
        super_x +=10;
        if(super_x>=500){
            super_x=0;
        }

        super_y+=10;
        if(super_y>=500){
            super_y=0;
        }
    }

    window.addEventListener('load',start)

    window.requestAnimationFrame = (function () {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 17);
        };
    }());

    function rbgaRand() {
        var o = Math.round, r = Math.random, s = 255;
        return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
    }*/

    //Trabajo 5
    var cv = null;
    var ctx = null;
    var player1 = null;
    var super_x= 240, super_y = 240;

    function start(){
    cv = document.getElementById('mycanvas');
    ctx = cv.getContext('2d');
    paint();
    player1 = new Cuadrado(super_x,super_y,40,40,'red');
         
    }
    function paint(){

        window.requestAnimationFrame (paint);

        ctx.fillStyle = 'pink';
        ctx.fillRect(0,0,500,500);
        player1.c=rbgaRand();
        player1.dibujar(ctx);
       
        /*ctx.fillStyle = rbgaRand();
        ctx.fillRect(super_x,super_y,40,40);
        ctx.strokeRect(super_x,super_y,40,40);*/

        update();
    }

    function update(){
        player1.x +=10;
        if(player1.x>=500){
            player1.x=0;
        }

        player1.y+=10;
        if(player1.y>=500){
            player1.y=0;
        }
    }

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

    }

    function rbgaRand() {
        var o = Math.round, r = Math.random, s = 255;
        return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
    }
    

   
    



        

       



    

    </script>

</body>
</html>