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
      echo '<pre>'; print_r($queryview);
      echo '</br>';
      echo '</pre>';

    ?>

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Diretoria', 'Solicitado', 'Cancelado', 'Análise', 'Concluido', 'Aprovado', 'Ponto Média'],
          ['DITEC',     165,          938,          522,       998,         450,        614.6],
          ['DIEXP',     135,          1120,         599,       1268,        288,        682],
          ['GABINETE',  157,          1167,         587,       807,         397,        623],
          ['DIPLAN',    139,          1110,         615,       968,         215,        609.4],
          ['DECON',     136,          691,          629,       1026,        366,        569.6]
        ]);
        //Colocar rótulo
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 
          1, { calc: "stringify", sourceColumn: 1, type: "string", role: "annotation" },
          2, { calc: "stringify", sourceColumn: 2, type: "string", role: "annotation" },
          3, { calc: "stringify", sourceColumn: 3, type: "string", role: "annotation" },
          4, { calc: "stringify", sourceColumn: 4, type: "string", role: "annotation" },
          5, { calc: "stringify", sourceColumn: 5, type: "string", role: "annotation" },
          6
        ]);

        var options = {
          annotations: {
            textStyle: {
              fontName: 'Times-Roman',
              fontSize: 11,
              bold: true,
              italic: true,              
              color: '#2F4F4F', // Cor do texto
              auraColor: '#E8E8E8', //Cor fundo do texto
              opacity: 0.8 //Transparencia do texto
            }
          },
          //width: 900,
          //height: 413,
          //bar: {groupWidth: "95%"},
          //legend: { position: "none" },          
          //legend: { position: 'top', maxLines: 3 }
          title : 'Grafico das solicitações no mes 04/2018',
          vAxis: {
            //Formatar o eixo Y (vaxis)
            format:'##.###',
            //Determina Espaços entre linhas na GRID
            gridlines: {
              //color: '# 333',
              count:9
            },
            minValue: 0, 
            //maxValue: 2000, 
            title: 'QTDE', 
            titleTextStyle: { 
              color: '#DAA520',
              fontName: "arial",
              fontSize: 16,
              negrito: true,
              itálico: false
            },
            textStyle: {
              color: 'black',
              fontName: "arial",
              fontSize: 12,
              negrito: true,
              itálico: true
            }
          },
          hAxis: {title: 'Diretoria', titleTextStyle: {    color: '#FF0000'  }},
          seriesType: 'bars',
          series: {5: {type: 'line'}}          
        };
        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(view, options);
      }
    </script>
  </head>
  <body id="corfundogradleft">    
    <div style="position: relative; top:10px; left:180px; width:936px; height:450px; border:16px #4682B4 ridge; margin:40px;">
      <div id="chart_div" style="position: relative; top:2px; left:2px; width:900px; height:413px;"></div>
      <div style="position: relative; top: 24px; left: -1px;">
        <!-- Configurar botão com modal -->
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Imprimir</button>      
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#bt_novo" >Novo</button>
      </div>
    </div>
    <!-- TAMANHO BOTÃO
      btn-lg    Large
      btn-md    Medium
      btn-sm    Small
      btn-xs    XSmall
    -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Titulo do Modal</h4>
          </div>
          <div class="modal-body">
            <p>Corpo do texto MODAL.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
