<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        canvas {
            background-color: rgba(253,253,150,0.5);
            margin: auto;
        }
    </style>
</head>

<body>
    <canvas id="mycanvas"width="700" height="700">
        tu navegador no soporta canvas
    </canvas>
    <script type="text/javascript">
         var cv = document.getElementById('mycanvas');
         var ctx = cv.getContext('2d');
         
        //circulo fondo
        ctx.fillStyle = "rgba(148,0,211,0.5)";
        ctx.beginPath();
        ctx.arc(350,380,270,0,2*Math.PI);
        ctx.fill();

        //circulo cabeza
        ctx.fillStyle = "rgba(253,221,202,1)";
        ctx.beginPath();
        ctx.arc(350,280,100,0,2*Math.PI);
        ctx.fill();

        //cuello
        ctx.fillStyle = "rgb(253,221,202,1)";
		ctx.fillRect(350,400,50,50);
        
        ctx.fillStyle = "rgba(253,221,202,1)"
		ctx.fillRect(320,350,60,50);

        //arco del cuello
        ctx.beginPath();
        ctx.arc(340, 400, 30, 0, 1 * Math.PI);
        ctx.fillStyle = "rgba(253,221,202,1)";
        ctx.fill();
        ctx.closePath();

        //cabello cafe oscuro
        ctx.beginPath();
        ctx.arc(440, 370, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(450, 330, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(450, 290, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(450, 250, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(430, 210, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(400, 180, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath()

        ctx.beginPath();
        ctx.arc(370, 170, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(340, 170, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(310, 170, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(280, 180, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(260, 210, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(240, 250, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(240, 290, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(245, 330, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(260, 370, 30, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        //ojos
        //ojo izquierdo
        ctx.beginPath();
        ctx.arc(320, 250, 10, 1, 0 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        //destello blanco ojo izquierdo
        ctx.beginPath();
        ctx.arc(320, 250, 5, 2, 1.5 * Math.PI);
        ctx.fillStyle = 'white';
        ctx.fill();
        ctx.closePath();

        //ojo derecho
        ctx.beginPath();
        ctx.arc(370, 250, 10, 1, 0 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        //destello blanco ojo derecho
        ctx.beginPath();
        ctx.arc(370, 250, 5, 2, 1.5 * Math.PI);
        ctx.fillStyle = 'white';
        ctx.fill();
        ctx.closePath();

        //boca
        ctx.beginPath();
        ctx.arc(345, 320, 20, 0, 1 * Math.PI);
        ctx.fillStyle = "rgba(108,59,42,1)";
        ctx.fill();
        ctx.closePath();

        ctx.beginPath();
        ctx.arc(345, 330, 10, 0, 1 * Math.PI);
        ctx.fillStyle = "rgba(255,203,219,1)";
        ctx.fill();
        ctx.closePath();
        
        //pecho
        ctx.fillStyle = "rgb(200,0,0)";
		ctx.fillRect(250,400,200,200);

        //manga de la blusa
        ctx.beginPath();
		ctx.arc(250,410,50,1,0*Math.PI);
		ctx.fill(); 

        ctx.beginPath();
		ctx.arc(450,410,50,0,2*Math.PI);
		ctx.fill(); 

        //brazos
        //brazo izquierdo
        ctx.fillStyle="rgb(253,221,202,1)";
        ctx.fillRect(205,430,45,130);
        //brazo derecho
        ctx.fillStyle="rgb(253,221,202,1)";
        ctx.fillRect(450,430,45,130);

        //mano izquierda
        ctx.beginPath();
        ctx.arc(220, 580, 35, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(253,221,202,1)";
        ctx.fill();
        ctx.closePath();
        //mano derecha
        ctx.beginPath();
        ctx.arc(480, 580, 35, 0, 2 * Math.PI);
        ctx.fillStyle = "rgba(253,221,202,1)";
        ctx.fill();
        ctx.closePath();

        //pantalón semivisible
        ctx.fillStyle="rgb(62,95,138)";
        ctx.fillRect(250,600,200,50);
        
        //Texto avatar
        ctx.fillStyle = "rgba(148,0,211,1)"
        ctx.font="30px Arial";
       
        ctx.strokeStyle = "blue"
        ctx.fillText("Avatar #suzettVictorio",200,50);

    </script>

</body>

</html>