<!DOCTYPE html>

<html lang="en">

<head>
    
    
<?php

$dbhost   = "artificialx.com.br.mysql";   #Nome do host
$db       = "artificialx_com_br";   #Nome do banco de dados
$user     = "artificialx_com_br"; #Nome do usuário
$password = "zTtdc6t7DMmdbkCvLJx9xcP8";   #Senha do usuário

// Dados da tabela
$tabela = "nometabela";    #Nome da tabela
$campo1 = "campo1tabela";  #Nome do campo da tabela
$campo2 = "campo2tabela";  #Nome de outro campo da tabaela

$conn = new mysqli($dbhost, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo 'error';
} 


 
  $query = "SELECT result FROM allianceVS WHERE result = 'NOK'";
 $result = $conn->query($query);
 $nok= $result->num_rows;
 
  $query = "SELECT result FROM allianceVS WHERE result = 'OK'";
 $result = $conn->query($query);
 $ok= $result->num_rows;

$query = "SELECT result FROM allianceVS WHERE result = 'KWID'";
 $result = $conn->query($query);
 $kwid= $result->num_rows;
 
?>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Watson/Obturadores</title>
  <meta http-equiv="refresh" content="5">
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/alliance_logo.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/alliance_logo.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-image-filter"></i>Home</a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-cloud-circle"></i>Obturadores</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-calendar"></i>Tracking</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-ring"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">Você tem 4 novas notificações
                </p>
                <span class="badge badge-pill badge-warning float-right">Ver todas</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Forecast Março/2018 disponivel!</h6>
                  <p class="font-weight-light small-text">
                    Agora
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Configurações</h6>
                  <p class="font-weight-light small-text">
                    Atualização disponível
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Novo usuário registrado</h6>
                  <p class="font-weight-light small-text">
                    2 dias atrás
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-variant"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">Você tem 7 mensagens não lidas
                </p>
                <span class="badge badge-info badge-pill float-right">Ver todas</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face5.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Jessica Jones
                    <span class="float-right font-weight-light small-text">1 Minuto atrás</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Analisar Forecast de Março
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Ana Yuge
                    <span class="float-right font-weight-light small-text">15 Minutos atrás</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Produtividade baixa dia 02/03
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Felipe Rodrigues
                    <span class="float-right font-weight-light small-text">18 Minutos atrás</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Veja a produtividade do dia 25/03
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="#">
              <img class="img-xs rounded-circle" src="images/faces/face4.jpg" alt="">
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Mark Jacob</p>
                <p class="designation">Trainee</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="index.html"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Dashboard Watson/Obturadores</span></a></li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="images/no.png" width="80" height="80"/></a>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Reprovados</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0"><?php echo $nok ?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 90% Assertividade
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <img src="images/yes.png" width="80" height="80"/></a>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Aprovados</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0"><?php echo $ok ?></h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>  96% Assertividade
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                       <img src="images/kwid.png" width="160" height="80"/></a>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Renault Kwid</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0"> <?php echo $kwid ?> </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                   <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 96% Assertividade
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-right">Produtividade Março/2018</p>
                      <div class="fluid-container">
                        <h3 class="card-title font-weight-bold text-right mb-0">-3</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>  2% Abaixo
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Realizado</h5>
                  <canvas id="dashoard-area-chart" height="100px"></canvas>
                </div>
              </div>
            </div>
          </div>
		  
		  
		  <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Labor Planning</h5>
				  
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr>
                          <th class="border-bottom-0">Labor (função) Regular</th>
						   <th class="border-bottom-0">P1</th>
                          <th class="border-bottom-0">P2</th>
                          <th class="border-bottom-0">P3</th>
                          <th class="border-bottom-0">P4</th>
                          <th class="border-bottom-0">P5</th>
                          <th class="border-bottom-0">P6</th>
                          <td><label class="badge badge-teal">Real</label></td>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Aprovado</td>
                          <td>34</td>
                          <td>58</td>
                          <td>46</td>
                          <td>50</td>
                          <td>43</td>
						  <td>51</td>
						  <td>42</td>
                          
                        </tr>
                        <tr>
                          <td>Reprovado</td>
                          <td>12</td>
                          <td>19</td>
                          <td>19</td>
                          <td>15</td>
                          <td>17</td>
						  <td>16</td>
						  <td>16</td>
                         
                        </tr>
                        <tr>
                          <td>Kwid</td>
                          <td>14</td>
                          <td>22</td>
                          <td>22</td>
                          <td>18</td>
                          <td>20</td>
						  <td>19</td>
						  <td>9</td>
                          
                        </tr>
                        <tr>
                          <td>Operador</td>
                          <td>10</td>
                          <td>15</td>
                          <td>15</td>
                          <td>12</td>
                          <td>14</td>
						  <td>13</td>
						   <td>25</td>
                        
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  
		  
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Efetividade 2017</h5>
                 
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr>
                          <th class="border-bottom-0">Projeto</th>
                           <th class="card-title mb-4">Status Agosto/2017</th>
                           <th class="border-bottom-0">Status Setembro/2017</th>
                          <th class="border-bottom-0">Status Outubro/2017</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>BBB</td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                        </tr>
                        <tr>
                          <td>HHA</td>
                          <td><label class="badge badge-warning">Atention</label></td>
                          <td><label class="badge badge-warning">Atention</label></td>
                          <td><label class="badge badge-warning">Atention</label></td>
                        </tr>
                        <tr>
                          <td>SC5</td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                          <td><label class="badge badge-warning">Atention</label></td>
                        </tr>
                        <tr>
                          <td>X87</td>
                          <td><label class="badge badge-danger">Time Fail</label></td>
                          <td><label class="badge badge-danger">Time Fail</label></td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                        </tr>
                        <tr>
                          <td>KXX</td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                          <td><label class="badge badge-teal">Ontime</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  
          
		  
		    <h5 class="card-title mb-4">Obervações</h5>
                    <div class="row ticket-card mt-3 pb-2 border-bottom">
                      <div class="col-1">
                        <img class="img-sm rounded-circle" src="images/faces/face4.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-9">
                        <div class="d-flex">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Mark Jacob :</p>
                          <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                          <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                        <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum sequi a, nostrum.</p>
                        <div class="row text-muted d-flex">
                          <div class="col-4 d-flex">
                            <p class="mb-0 mr-2">Última Resposta :</p>
                            <p class="Last-responded mr-2 mb-0">3 horas atrás</p>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ação
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Resposta rápida</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Outras ações</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolver questão</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Encerrar questão</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2">
                      <div class="col-1">
                        <img class="img-sm rounded-circle" src="images/faces/face5.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-9">
                        <div class="d-flex">
                          <p class="text-primary font-weight-bold mr-2 mb-0 no-wrap">Jessica Jones :</p>
                          <p class="font-weight-medium mr-1 mb-0">[#23034]</p>
                          <p class="font-weight-bold mb-0 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi amet totam, dignissimos fugiat voluptates, ab magni, necessitatibus excepturi inventore, mollitia ipsa quaerat aliquam.</p>
                        </div>
                        <p class="text-small text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae animi omnis, a?</p>
                        <div class="row text-muted d-flex">
                          <div class="col-4 d-flex">
                           <p class="mb-0 mr-2">Última Resposta :</p>
                            <p class="Last-responded mr-2 mb-0">3 horas atrás</p>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-teal dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ação
                          </button>
                           <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Resposta rápida</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Outras ações</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolver questão</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Encerrar questão</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
             <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="https://www.alliance-2022.com/" target="_blank">Renault–Nissan–Mitsubishi Alliance</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Designed by <a href="#" target="_blank">GoHorse Startup</a> in Curitiba. <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>