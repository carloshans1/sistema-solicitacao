<!--  
 * Autor: Carlos Hans de Oliveira - Gestor de TI
 * Data Criação: 04/04/2018
 * Cliente: SEDECT - Copyright 2017 Prefeitura de São Vicente.
 * Sistema: Gerenciamento de solicitações internas de serviços da SEDECT
-->

<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Projeto: Teste de graficos">
    <meta name="Autor" content="Carlos Hans de Oliveira">
    <meta name="Data Criação" content="06/04/2018">

    <title>GRAFICO</title>

    <?php
      $queryview = array(); 
      include("../_php/head2.php"); 
      include("../_php/navbar2.php"); 
      include("../_php/sql_funcoes.php");      
      $queryview = retornojson();
      //echo $queryview;
    ?>

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average', { role: 'style' }],
          ['2004/05',  165,      938,         522,             998,           450,      614.6, 'stroke-opacity: 0.7'],
          ['2005/06',  135,      1120,        599,             1268,          288,      682, 'stroke-opacity: 0.7'],
          ['2006/07',  157,      1167,        587,             807,           397,      623,'stroke-opacity: 0.7'],
          ['2007/08',  139,      1110,        615,             968,           215,      609.4, 'stroke-opacity: 0.7'],
          ['2008/09',  136,      691,         629,             1026,          366,      569.6, 'stroke-opacity: 0.7']
        ]);

        //Colocar rótulo
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
          { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" },2,3,4,5,6
        ]);


        var options = {
          width: 900,
          height: 413,          
          title : 'Monthly Coffee Production by Country',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(view, options);
      }
    </script>
  </head>
  <body id="corfundogradleft">    
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>