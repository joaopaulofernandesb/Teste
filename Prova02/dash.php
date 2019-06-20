<?php
session_start();
 
require_once 'init.php';
 
require 'check.php';

include_once 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Wallet</title>
  <!-- Favicon -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="index.html">
        <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="assets/img/theme/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bem Vindo!</h6>
            </div>

            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="index.html">
                <img src="assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dash.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal-default">
              <i class="ni ni-planet text-blue"></i> Depositar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">
              <i class="ni ni-pin-3 text-orange"></i> Sacar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php" data-toggle="modal" data-target="#exampleModalTransferencia">
              <i class="ni ni-single-02 text-yellow"></i>Transferir
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="extrato.php">
              <i class="ni ni-bullet-list-67 text-red"></i> Extratos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#conviteModal">
              <i class="ni ni-key-25 text-info"></i> Convidar
            </a>
          </li>
        
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="index.html"></a>
        <!-- Form -->

        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['user_name'];?> <?php echo $_SESSION['user_sobrenome']; ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bem Vindo!</h6>
              </div>
              
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Saldo</h5>
                      <span class="h2 font-weight-bold mb-0">
                         <?php

                         $retira = $saldo - $saque -$transfer;
                         echo  number_format($retira, 2, ',', '.');
                         ?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                    <span class="text-nowrap">Saldo Díspoinivel</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Retirada</h5>
                      <span class="h2 font-weight-bold mb-0"><?php  echo  number_format($saque+$transfer, 2, ',', '.');?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i></span>
                    <span class="text-nowrap">Tatal de Retiradas</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Convidados Cadastrados</h5>
                      <span class="h2 font-weight-bold mb-0">0</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
                    <span class="text-nowrap">Total de Usuários Convidados Cadastrados</span>
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>



<?php
//saldo

require_once('conexao/conexao.php');


//header('Location: index.php');

try {
    $stmt = $pdo->query("SELECT * FROM wallet  ");

    echo "    <!-- Page content -->
    <div class='container-fluid mt--7'>
      <!-- Table -->
      <div class='row'>
        <div class='col'>
          <div class='card shadow'>
            <div class='card-header bg-white border-0'>
              <div class='row align-items-center'>
                <div class='col-8'>
                  <h3 class='mb-0'>Ultimos Depósitos</h3>
                </div>
               
              </div>
            </div>

            <div class='table-responsive'>
              <table class='table align-items-center table-flush'>
                <thead class='thead-light'>
                  <tr>
                    <th scope='col'>Categoria</th>
                    <th scope='col'>Valor</th>
                    <th scope='col'>Data</th>
                     <th scope='col'>Usuario</th>
                    <th scope='col'></th>
                  </tr>
                </thead>
                <tbody>";


    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {


      $num =  number_format($linha['entrada'], 2, ',', '.');

      if ($linha['operacao'] === 'saque') {
        $img = 'drop-down-arrow.svg';
      }elseif($linha['operacao'] === 'deposito'){
        $img = 'drop-up-arrow.svg';
      }elseif($linha['operacao'] === 'transferencia'){
        $img = 'drop-down-arrow.svg';
      }

      echo "<tr>
                    <th scope='row'>
                      <div class='media align-items-center'>
                       
                          <img alt='Image placeholder' src='assets/img/theme/$img' style='width:15px;'>
                      
                      </div>
                    </th>
                    <td>
                      
                    $num
                    </td>
                    <td>
                      <span class='badge badge-dot mr-4'>
                        <i class='bg-warning'></i> $linha[data]
                      </span>
                    </td>
                   <td>$linha[operacao]</td>
                    <td class='text-right'>
                      <div class='dropdown'>
                        <a class='btn btn-sm btn-icon-only text-light' href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                          <i class='fas fa-ellipsis-v'></i>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right dropdown-menu-arrow'>
                          <a class='dropdown-item' href='#'>Action</a>
                          <a class='dropdown-item' href='#'>Another action</a>
                          <a class='dropdown-item' href='#'>Something else here</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                 ";

       


    }


} catch (PDOExceptio $erro) {

    echo $erro->getMessage();

}


?>

                  
                  
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                 </li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>



            <div class="col-md-4">

                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h3>Depósito</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                                <form method="POST" action="dados.php">
                            <div class="modal-body">
                                <input class="form-control form-control-alternative" placeholder="Valor" type="text" name="entrada">
                                <br>
                                <input class="form-control form-control-alternative" value="<?php echo date('d/m/Y'); ?>" placeholder="Data" type="bootstrap-datepicker" name="data">
                                <br>

                                <input class="form-control form-control-alternative" value="<?php echo $_SESSION['user_cpf'];?>"  type="hidden" name="usuario">

                                <input class="form-control form-control-alternative" value="deposito"  type="hidden" name="operacao">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Depositar</button>
                                </form>
                                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Fechar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Sacar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form method="POST" action="dados.php">
                  <div class="modal-body">
                      <input class="form-control form-control-alternative" placeholder="Valor" type="text" name="entrada">
                      <br>
                      <input class="form-control form-control-alternative" value="<?php echo date('d/m/Y') ?>" type="hidden" name="data">
                      <br>

                      <input class="form-control form-control-alternative" value="<?php echo $_SESSION['user_cpf'];?>"  type="hidden" name="usuario">

                      <input class="form-control form-control-alternative" value="saque"  type="hidden" name="operacao">

                  </div>

                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Sacar</button>
              </form>
              <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Fechar</button>
          </div>

      </div>
  </div>
  </div>
  </div>
<!--    Moda de Transferencia-->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalTransferencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Transferencia</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form method="POST" action="dados.php">
                            <div class="modal-body">
                                <input class="form-control form-control-alternative" placeholder="Valor" type="text" name="entrada">
                                <br>
                                <input class="form-control form-control-alternative" value="<?php echo date('d/m/Y'); ?>" placeholder="Data" type="bootstrap-datepicker" name="data">
                                <br>

                                <input class="form-control form-control-alternative" value="<?php echo $_SESSION['user_cpf'];?>"  type="hidden" name="usuario">

                                <input class="form-control form-control-alternative" value="transferencia"  type="hidden" name="operacao">
                                <input class="form-control form-control-alternative" placeholder="CPF do Destinatario" value=""  type="text" name="destinatario">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Depositar</button>
                                </form>
                                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Fechar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



<!--Modal Convite -->

<!-- Modal -->
<div class="modal fade" id="conviteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Convite</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input class="form-control form-control-alternative" value="<?php echo $_SESSION['user_meuconvite'];?>" type="text" name="entrada" disabled>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

    


  <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.0.0"></script>
</body>

</html>