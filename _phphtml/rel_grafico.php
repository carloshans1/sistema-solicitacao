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
      google.charts.load('current', {'packages':['bar']}); //'corechart'
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        //var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          [ {label: 'Diretoria', id: 'Diretoria', type: 'string'}, 
            {label: 'Conluido', id: 'Conluido', type: 'number'},
            {label: 'Cancelado', id: 'Cancelado', type: 'number'},
            {label: 'Analise', id: 'Analise', type: 'number'},
            {label: 'Solicitado', id: 'Solicitado', type: 'number'},
            {type: 'string', role: 'annotation'}
          ],
          //['Diretoria', 'Conluido', 'Cancelado', 'Analise', 'Solicitado', { role: 'annotation' }],
          ['DITEC',   2000, 500,  300,  11000,  'A'],
          ['SEDECT',  1865, 1500, 700,  5000,   'B'], 
          ['DIPLAN',  1500, 500,  3000, 4000,   'C'],   //{v:1500, f:'1,500'}
          ['DIMAT',   2000, 200,  500,  6000,   'D'], 
          ['DIEXP',   5000, 2000, 800,  15000,  'E']
        ],false);


// Mostra algumas colunas diretamente dos dados subjacentes.
// Mostra a coluna 3 duas vezes.
view.setColumns ([3, 4, 3, 2]);

// A tabela subjacente tem uma coluna especificando um valor em centímetros.
// A exibição importa isso diretamente e cria uma coluna calculada
// que converte o valor em polegadas.
view.setColumns ([1, {calc: cmToInches, tipo: 'number', label: 'Solicitacao Concluida'}]);


 /*['Year', 'Asia', { role: 'annotation'} ,'Europe', { role: 'annotation'}],
               ['2012',  900,'900',      390, '390'],
               ['2013',  1000,'1000',      400,'400'],
               ['2014',  1170,'1170',      440,'440'],
               ['2015',  1250,'1250',       480,'480'],
               ['2016',  1530,'1530',      540,'540']
*/

       /*[ {label: 'Year', id: 'year'},
         {label: 'Sales', id: 'Sales', type: 'number'}, // Use object notation to explicitly specify the data type.
         {label: 'Expenses', id: 'Expenses', type: 'number'} ],
       ['2014', 1000, 400],
       ['2015', 1170, 460],
       ['2016', 660, 1120],
       ['2017', 1030, 540]]); */

/*var data = new google.visualization.DataTable();
data.addColumn('string', 'Month'); // Implicit domain label col.
data.addColumn('number', 'Sales'); // Implicit series 1 data col.
data.addColumn({type:'number', role:'interval'});  // interval role col.
data.addColumn({type:'number', role:'interval'});  // interval role col.
data.addColumn({type:'string', role:'annotation'}); // annotation role col.
data.addColumn({type:'string', role:'annotationText'}); // annotationText col.
data.addColumn({type:'boolean',role:'certainty'}); // certainty col.
data.addRows([
    ['April',1000,  900, 1100,  'A','Stolen data', true],
    ['May',  1170, 1000, 1200,  'B','Coffee spill', true],
    ['June',  660,  550,  800,  'C','Wumpus attack', true],
    ['July', 1030, null, null, null, null, false]
]);*/


        //Colocar rótulo
        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,2,3,4]);

        //view.setColumnLabel('Cancelado','', 'A');
        /*view.setColumns([0, 1, 2, 3, 4, 5,
          { calc: "stringify", sourceColumn: 5, type: "string", role: "annotation" },5
        ]);*/

        var materialOptions = {
          /*annotations: {
            textStyle: {
              fontName: 'Times-Roman',
              fontSize: 18,
              bold: true,
              italic: true,
              // The color of the text.
              //color: '#871b47',
              // The color of the text outline.
              //auraColor: '#d799ae',
              // The transparency of the text.
              opacity: 1.3
            }
          },*/
          width: 900,
          height: 413,
          chart: {
            title: 'Gráfico Anual de Solicitações',
            subtitle: 'Subtitulo do grafico'
          },
          //hAxis: {format: 'decimal'},
          //colors: ['#1b9e77', '#d95f02', '#7570b3']
          //bars: 'vertical', //horizontal
          /*{format: 'none'}: displays numbers with no formatting (e.g., 8000000)
          {format: 'decimal'}: displays numbers with thousands separators (e.g., 8,000,000)
          {format: 'scientific'}: displays numbers in scientific notation (e.g., 8e6)
          {format: 'currency'}: displays numbers in the local currency (e.g., $8,000,000.00)
          {format: 'percent'}: displays numbers as percentages (e.g., 800,000,000%)
          {format: 'short'}: displays abbreviated numbers (e.g., 8M)
          {format: 'long'}: displays numbers as full words (e.g., 8 million)*/

          vAxis: {title: 'Opção de label vAxis', format: ''},
          hAxis: {
            textStyle: { color: '#000000', fontSize: 10, bold: true, italic: true },
            title: 'Diretoria'},
          //seriesType: 'bars', //define tipo barra
          //series: {5: {type: 'line'}}

          series: {
            0: { axis: 'label_left'  }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'label_right' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              label_left: {label: 'lateral esquerda Y'}, // Left y-axis.
              label_right: {side: 'right', label: 'lateral direita X'} // Right y-axis.
            }
          }
        };

        /*var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Titulo',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'titulo'},
            1: {title: 'titulo 2'}
          }
        };*/

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(view, google.charts.Bar.convertOptions(materialOptions));
        }
        drawMaterialChart();
      };
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
