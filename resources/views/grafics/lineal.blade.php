<?php

$valoresY=array();//numero de ingresos
$valoresX=array();//fecha

while ($ver=mysqli_fetch_row($resul)){
    $valoresY[]=$ver[1];
    $valoresX[]=$ver[0];
}
$datosX=json_encode($valoresX);
$datosY=json_encode($valoresY);
?>

<div id="graficaLineal"> </div>
<script type="text/javascript" >
    function crearCadenaLineal(json){//no va pedir un json que es el creamos enla parte de arriba
        var parsed = JSON.parse(json);//esa cadena la vamos a convertir a un objeto json llamado parsed
        var arr = [];//inicializar aun arreglo
        for(var x in parsed){//for crear obj x que nos miueba totdo nuestrso json
            arr.push(parsed[x]);//metiendo dentro del arregloo tosdos lo daton dentro del json
        }
        return arr;
    }
</script>

<script type="text/javascript">

    datosX=crearCadenaLineal('<?php echo $datosX ?>');
    datosY=crearCadenaLineal('<?php echo $datosY ?>');

var trace1 = {
  x: datosX,
  y: datosY,
  type: 'scatter',
   marker: {
    color: 'rgb(81, 185, 76)',
    size: 9,
    line: {
      color: 'white',
      width: 1
    }
}
};
var data = [trace1];

Plotly.newPlot('graficaLineal', data);
</script>