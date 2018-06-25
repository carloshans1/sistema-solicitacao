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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Element", "Density", { role: "style" } ],
          ["Copper", 8.94, "#b87333"],
          ["Silver", 10.49, "silver"],
          ["Gold", 19.30, "gold"],
          ["Platinum", 21.45, "color: #e5e4e2"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var options = {
          title: "Density of Precious Metals, in g/cm^3",
          width: 600,
          height: 400,
          bar: {groupWidth: "95%"},
          legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
      }
    </script>
  </head>
  <body>
    <div id="columnchart_values" style="width: 800px; height: 500px;"></div>
  </body>
</html>