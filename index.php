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
         var cv = document.getElementById('mycanvas');
         var ctx = cv.getContext('2d');
         var color = 'red';
         var fig = 'arc';

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
    }*/


        

       



    

    </script>

</body>
</html>