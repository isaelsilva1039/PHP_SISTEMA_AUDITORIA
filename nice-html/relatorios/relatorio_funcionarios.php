<?php
include 'Class.relatorios.php';
include '../ltr/controle_sesao.php';
$relatrofuncionarios = new Relatorios();
@$cargo = $_GET['cargo'];
$filtro_cargo = new Relatorios();
if (empty($cargo) || !isset($cargo)) {
    $cargo = 'todos';
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" cont  ent="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
        <title>Nice admin Template - The Ultimate Multipurpose admin template</title>
        <!-- Custom CSS -->
        <link href="../../dist/css/style.css" rel="stylesheet">
        <link href="../ltr/cssmanipulado" rel="stylesheet">
        <link href="relatorios.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
             data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin6">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                            <i class="ti-menu ti-close"></i>
                        </a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <div class="navbar-brand">
                            <a href="index.html" class="logo">
                                <!-- Logo icon -->
                                <b class="logo-icon">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                    <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                    <!-- Light Logo icon -->
                                    <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                                    <!-- dark Logo text -->
                                    <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                    <!-- Light Logo text -->
                                    <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                                </span>
                            </a>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                           data-toggle="collapse" data-target="#navbarSupportedContent"
                           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto">
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item search-box">
                                <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-magnify font-20 mr-1"></i>
                                        <div class="ml-1 d-none d-sm-block">
                                            <span>Search</span>
                                        </div>
                                    </div>
                                </a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter">
                                    <a class="srh-btn">
                                        <i class="ti-close"></i>
                                    </a>
                                </form>
                            </li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle"
                                        width="31"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                        My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                        My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                        Inbox</a>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../ltr/index.php"
                                   aria-expanded="false">
                                    <i class="mdi mdi-av-timer"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                   href="relatorio_funcionarios.php" aria-expanded="false">
                                    <i class="mdi mdi-file"></i>
                                    <span class="hide-menu">Relatorios Funcionarios</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                   href="relatorio_moradores.php" aria-expanded="false">
                                    <i class="mdi mdi-clipboard-text"></i>
                                    <span class="hide-menu">Relatorios Moradores</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-5 align-self-center">
                            <h4 class="page-title">Quadro Funcionario</h4>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex align-items-center justify-content-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Starter Page</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div cass="card-body">
                        <form class="from_filtro" method="GET" action="relatorio_funcionarios.php">
                            <input class="campoBusca" name="cargo" type="text" placeholder="Busca " style=" width: 200px; border: 1px solid gainsboro; border-radius: 40px; height: 40px;">
                            </select>
                            <input type="submit" name="filtra" class="btm_filtra" value="Filtra">
                        </form>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive m-t-20">
                                        <?php

                                        //  var_dump($relatrofuncionarios->mesagenConcluido());
                                        if(isset($_SESSION["mensagem"])){
                                            $relatrofuncionarios->mesagenConcluido();
                                        }else{
                                            $relatrofuncionarios->mesagenErro();
                                        }

                                        ?>
                                        <table class="table table-bordered table-responsive-lg">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">CPF</th>
                                                    <th scope="col">Cargo</th>
                                                    <th scope="col">Horario</th>
                                                    <th scope="col">Adimisão</th>
                                                    <th scope="col">Salario</th>
                                                    <th scope="col">Açoes</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            foreach ($relatrofuncionarios->RelatorioFuncionarios($cargo) as $lista) :
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $lista['id'] ?></td>
                                                        <td><?php echo $lista['nome_completo'] ?></td>
                                                        <td><?php echo $lista['cpf'] ?></td>
                                                        <td><?php echo $lista['cargo'] ?></td>
                                                        <td><?php echo $lista['horario'] ?></td>
                                                        <td><?php echo $lista['data_entrada_admisao'] ?></td>
                                                        <td><?php echo "R$" . " " . $lista['salario'] ?></td>
                                                        <td>

                                                            <button type="button" class="btnAcoes" data-toggle="modal" data-target="#exampleModal" 
                                                            data-whatever="<?=                  $lista['id'];  ?>"
                                                            data-whatevernome="<?=              $lista['nome_completo']; ?>"
                                                            data-whatevercpf="<?=               $lista['cpf']; ?>"
                                                            data-whatevercargo="<?=             $lista['cargo']; ?>"
                                                            data-whateveradmisao="<?=           $lista['data_entrada_admisao']; ?>"
                                                            data-whateverahorario="<?=          $lista['horario']; ?>"
                                                            data-whateversalario="<?=           $lista['salario']; ?>">
                                                                    <i class="mdi mdi-border-color"></i>
                                                            </button>

                                                            <form style="float: left ;" method="POST"
                                                                  action="../../Controlle/Controle_delete_funcionario.php">
                                                                <button class="btnAcoesPromover">
                                                                    <i class="mdi mdi-certificate"></i>
                                                                </button>
                                                            </form>
                                                            
                                                            <form style="float: left ;" method="POST"action="controle_delete_funcionario.php">
                                                                <button class="btnAcoesexcluir" name="id" value="<?= $lista['id'] ?>"  >
                                                                    <i class="mdi mdi-delete"></i>
                                                                </button>
                                                            </form>
                                                            
                                                            <form style="float: left ;" method="POST"
                                                                  action="controle_detalhes_funcionario.php">
                                                                <button class="btnAcoesPromover" name="id"
                                                                            value="<?= $lista['id'] ?>">
                                                                    <i class="mdi mdi-face"></i>
                                                                </button>
                                                            </form>
                                                            

                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!-- modal -->
                                                <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <?php
                            require_once '../../model/Class.configue.php';
                            $contaRe = new Validacao();
                            $s = $contaRe->valorSalario();
                            foreach ($s as $key) {
                                echo"Total Salario ". " ". "$" . " " . $salariofuncionario = ( $key[0]);
                            }
                            ?>

                        </div>
                    </div>
                </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 >Altera dados Funcionario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="POST" action="edita_funcionario.php">
          
        <div class="form-group">
            <label for="recipient-id" class="col-form-label">ID:</label>
            <input type="text" class="form-control" nome="id" id="id" disabled>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" >
          </div>
          <div class="form-group">
            <label for="recipient-cpf" hidden class="col-form-label">cpf:</label>
            <input type="text" class="form-control" hidden name="cpf" id="cpf">
          </div>

          <div class="form-group">
            <label for="recipient-cargo" class="col-form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo" id="cargo">
          </div>

          <div class="form-group">
            <label for="recipient-Admisao" class="col-form-label">Adimisão</label>
            <input type="date" class="form-control" name="admisao" id="admisao">
          </div>

          <div class="form-group">
            <label for="recipient-Admisao" class="col-form-label">Horario</label>
            <input type="text" class="form-control" name="horario" id="horario">
          </div>
          
          <div class="form-group">
            <label for="recipient-salario" class="col-form-label">Salario</label>
            <input type="text" class="form-control" id="salario" name="salario"> 
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    All Rights Reserved by Nice admin. Designed and Developed by
                    <a href="https://wrappixel.com">WrapPixel</a>.
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="../../dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../../dist/js/custom.min.js"></script>
        <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever')
            var recipientnome = button.data('whatevernome')        // Extract info from data-* attributes
            var recipientcpf = button.data('whatevercpf')        // Extract info from data-* attributes
            var recipientcargo = button.data('whatevercargo') 
            var recipientadmisao = button.data('whateveradmisao')      // Extract info from data-* attributes
            var recipienthorario = button.data('whateverahorario')      // Extract info from data-* attributes
            var recipientasalario = button.data('whateversalario')      // Extract info from data-* attributes
            var recipientaidNumero = button.data('whateversalarioidNumero')      // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('#id').val(recipient)
            modal.find('#nome').val(recipientnome)
            modal.find('#cpf').val(recipientcpf)
            modal.find('#cargo').val(recipientcargo)
            modal.find('#admisao').val(recipientadmisao)
            modal.find('#horario').val(recipienthorario)
            modal.find('#salario').val(recipientasalario)
            modal.find('#idNumero').val(recipientaidNumero)
            })
    
        </script> 
    </body>
</html>
