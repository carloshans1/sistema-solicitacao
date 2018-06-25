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
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1, 2, 3,
                         { calc: "stringify",
                           sourceColumn: 2,
                           type: "string",
                           role: "annotation" },
                         2]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            width: 600,
            height: 400,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(view, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>