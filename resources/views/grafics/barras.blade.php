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

<div id="graficaBarras"></div>
<script type="text/javascript" >
    function crearCadenaBarras(json){//no va pedir un json que es el creamos enla parte de arriba
        var parsed = JSON.parse(json);//esa cadena la vamos a convertir a un objeto json llamado parsed
        var arr = [];//inicializar aun arreglo
        for(var x in parsed){//for crear obj x que nos miueba totdo nuestrso json
            arr.push(parsed[x]);//metiendo dentro del arregloo tosdos lo daton dentro del json
        }
        return arr;
    }
</script>


<script type="text/javascript">

datosX=crearCadenaBarras('<?php echo $datosX ?>');
 datosY=crearCadenaBarras('<?php echo $datosY ?>');

    var data = [
  {
    x: datosX,
    y: datosY,
    type: 'bar',
    text: datosY.map(String),
    marker: {
    color: 'rgb(81, 185, 76)'
  }
  }
];

Plotly.newPlot('graficaBarras', data);
</script>