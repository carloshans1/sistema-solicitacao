<!-- 	
 * Autor: Carlos Hans de Oliveira - Gestor de TI 
 * Data Criação: 21/06/2017
 * Data de Modificação: 21/06/2017
 * Cliente: SEDECT - Copyright 2017 Prefeitura de São Vicente.
 * Sistema: Gerenciamento de solicitações internas de serviços da SEDECT
 * Arquivo navbar Inicial - PHP
-->

  <!-- Pode utilizar-se tambem navbar navbar-default"-->
  <nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
    <!--<div class="container-fluid"> -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-menu-hamburger" ></span> Gerenciamento-Solicitações</a>
    </div>

    <!-- Início organização do NAV BAR -->        
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- Opção iniciar do sistema (home) <li class="active">-->
        <li><a href="../inicio.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>

        <!-- dropdown para CADASTRO 
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-file"> </span> Cadastro<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="_phphtml/cadastro_setor.php">Setor</a></li>
            <li><a href="_phphtml/cadastro_funcionario.php">Funcionário</a></li>
            <li><a href="_phphtml/cadastro_solicitacao.php">Solicitação</a></li>-->
            <!--<?php //if ($_SESSION['user_nivel'] == 7):  ?>              -->
              <!--<li><a href="_phphtml/cadastro_usuario.php" >Usuario</a></li>-->
            <!--<?php //endif;  ?>-->
            <!--<?php //if ($_SESSION['user_nivel'] < 7):  ?>-->
              <!--<li class="disabled"><a href="#">Usuario</a></li>-->
            <!--<?php //endif;  ?>-->
          <!--</ul>                             
        </li>-->


        <!-- dropdown para OPERAÇÃO - com Submenu-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Operação<b class="caret"></b></a>

          <ul class="dropdown-menu">
            <li><a href="_phphtml/ope_setor.php" class="glyphicon glyphicon-tags"> Setor</a></li>
            <li><a href="_phphtml/ope_funcionario.php" class=" glyphicon glyphicon-lock"> Funcionário</a></li> 
            <li class="divider"></li>
            <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" ></span> Solicitação</a>
            <!-- <span class="glyphicon glyphicon-cog"></span> Solicitação <b class="caret"></b></a> -->
              <ul class="dropdown-menu">
                <li><a href="_phphtml/ope_sol_aberta.php"><span class="glyphicon glyphicon-hand-right" style="color: green;"></span> Solicitações Abertas</a></li>
                <li><a href="_phphtml/ope_sol_concluido.php"><span class="glyphicon glyphicon-thumbs-up" style="color: blue;"></span> Solicitações Concluidas</a></li>
                <li><a href="_phphtml/ope_sol_cancelado.php"><span class="glyphicon glyphicon-thumbs-down" style="color: red; "></span> Solicitações Canceladas</a></li>
                <li><a href="_phphtml/ope_solicitacao.php"><span class="glyphicon glyphicon-cog" style="color: #D2691E;"></span> Todas Solicitações</a></li>
              </ul>
            </li> 
            
            <?php if ($_SESSION['user_nivel'] == 7):  ?>              
              <li><a href="_phphtml/ope_usuario.php" class="glyphicon glyphicon-user"> Usuario</a></li>
            <?php endif;  ?>

            <?php if ($_SESSION['user_nivel'] < 7):  ?>
              <li class="disabled"><a href="#" class="glyphicon glyphicon-user"> Usuario</a></li>
            <?php endif;  ?>
          </ul>                             
        </li>

        <!-- dropdown para RELATORIO com submenu -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-print"></span> Relatório<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="_phphtml/rel_grafico.php"> Solicitação Anual</a></li>
            <li><a href="_phphtml/rel_grafico2.php"> Gráfico 2</a></li>
            <li><a href="_phphtml/rel_grafico4.php"> Gráfico 4</a></li>
            <li><a href="_phphtml/rel_grafico3.php"> Gráfico 3</a></li>
            <li><a href="_phphtml/rel_grafico5.php"> Gráfico 5</a></li>
            <li class="divider"></li>                
            <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dropdown Link 4</a>
              <ul class="dropdown-menu">
                <li><a href="#"> Dropdown Submenu Link 4.1</a></li>
                <li><a href="#"> Dropdown Submenu Link 4.2</a></li>
                <li><a href="#"> Dropdown Submenu Link 4.3</a></li>
                <li><a href="#"> Dropdown Submenu Link 4.4</a></li>
              </ul>
            </li>

            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dropdown Link 5</a>
              <ul class="dropdown-menu">
                <li><a href="#"> Dropdown Submenu Link 5.1</a></li>
                <li><a href="#"> Dropdown Submenu Link 5.2</a></li>
                <li><a href="#"> Dropdown Submenu Link 5.3</a></li>
                <li class="divider"></li>
                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dropdown Submenu Link 5.4</a>
                  <ul class="dropdown-menu">
                    <li><a href="#"> Dropdown Submenu Link 5.4.1</a></li>
                    <li><a href="#"> Dropdown Submenu Link 5.4.2</a></li>
                    <li class="divider"></li>
                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dropdown Submenu Link 5.4.3</a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> Dropdown Submenu Link 5.4.3.1</a></li>
                        <li><a href="#"> Dropdown Submenu Link 5.4.3.2</a></li>
                        <li><a href="#"> Dropdown Submenu Link 5.4.3.3</a></li>
                        <li><a href="#"> Dropdown Submenu Link 5.4.3.4</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Dropdown Submenu Link 5.4.4</a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> Dropdown Submenu Link 5.4.4.1</a></li>
                        <li><a href="#"> Dropdown Submenu Link 5.4.4.2</a></li>
                        <li><a href="#"> Dropdown Submenu Link 5.4.4.3</a></li>
                        <li><a href="#"> Dropdown Submenu Link 5.4.4.4</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>               
            </li>
          </ul>   
        </li>

        <!-- AJUDA-->
        <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> Ajuda</a></li>        
        <!-- USUARIO          
          Lateral direita do navbar (class= nav navbar-nav navbar-right) -->
          <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" style="color: #008000;"></span> <?php echo $_SESSION['user_usuario'];?> </a></li>
        <!-- LOGOFF -->
          <li><a href="_php/acesso/logout.php"><span class="glyphicon glyphicon-log-in"> </span> Logoff</a></li>
      </ul>           
    </div>  <!-- /.navbar-collapse -->
  </nav>      
  
  <!-- ******************************************* -->
  <?php include("_php/dropdown_javascript.php") ?>
  <!-- ******************************************* -->
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ALTERAR SENHA</h4>
        </div>
        <div class="modal-body">
          <p>Digite a senha atual e a nova senha para alterar.</p>
          <!-- Formulario para a nova senha -->
          <form method="post" action="../_php/tb_trocasenha.php" id="formsetor" autocomplete="off">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="senha" id="sombraletrapreta">Senha Atual</label>
                <input type="password" class="form-control" name="senha" id="senha" required="required">
              </div>
              <div class="col-md-12 form-group">
                <label for="novasenha" id="sombraletrapreta">Nova Senha</label>
                <input type="password" class="form-control" name="novasenha" id="novasenha" required="required">
              </div>
              <div class="col-md-12 form-group">
                <!--Botão Salvar - Guarda no banco de dados-->
                <button type="submit" class="btn btn-primary " style="margin-top: 22px;">Alterar</button>
              </div>
            </div>
          </form>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
