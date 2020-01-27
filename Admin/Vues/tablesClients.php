<!DOCTYPE html>

<head>
  <title>
    Gestion des Traducteurs
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <link href="../assets/css/table.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Doc-Traductor
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./adminProfile.html">
              <i class="material-icons">person</i>
              <p>Profile Administrateur</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tablesTraducteurs.php">
              <i class="material-icons">table_chart</i>
              <p>Table des traducteurs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tablesClients.php">
              <i class="material-icons">table_chart</i>
              <p>Table des clients</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tablesDocuments.html">
              <i class="material-icons">table_chart</i>
              <p>Table des documents</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">supervised_user_circle</i>
              <p>Validation des traducteurs</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">euro</i>
              <p>Validation des paiements</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">report</i>
              <p>Gestion des signalements</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">pie_chart</i>
              <p>Graphes</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="adminProfile.html">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
            <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Tableau des clients</h4>
                  <p class="card-category">Vous pouvez ici rechercher et filtrer les clients</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table my-table mdl-data-table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Wilaya</th>
                      </thead>
                      <tbody>
                        
                        <?php
                          require_once("../ControllerAdmin.php");
                          $tc = new ClientController();
                          $r = $tc->getClients();
                          foreach($r as $lg){
                            echo '<tr>';
                            echo '<td>'.$lg["Id"].'</td>';
                            echo '<td>'.$lg["Nom"].'</td>';
                            echo '<td>'.$lg["Prenom"].'</td>';
                            echo '<td>'.$lg["Email"].'</td>';
                            echo '<td>'.$lg["wilaya"].'</td>';
                            echo '<td>
                                    <div class="dropdown">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Voir Détails</a>
                                      <a class="dropdown-item" href="#">Modifier</a>
                                      <a class="dropdown-item" href="#">Supprimer</a>
                                      <a class="dropdown-item" href="#">Bloquer</a>
                                    </div>
                                  </div>
                                  </td>';
                            echo '</tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid row justify-content-center d-flex">
        <div class="col-md-10 ">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Profile</h4>
              <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body row d-flex">
              <div class="col-md-2 mt-2 text-center">
                <img src="../../assests/images/2.jpg" class="img-fluid"/>
                <a href="#">Uploader une image</a>
              </div>
              <div class="col-md-10">
              <form>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nom</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Prenom</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Numero de telephone</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Modifier Profile</button>
                <div class="clearfix"></div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid row justify-content-center d-flex">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Profile</h4>
              <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nom</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Prenom</label>
                      <input type="text" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="bmd-label-floating">Wilaya</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="bmd-label-floating">Commune</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="bmd-label-floating">Adresse</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Numero de telephone</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Fax</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-warning">
                <h4 class="card-title">Demandes de traduction faites</h4>
                <p class="card-category">Vous pouvez ici visualisez toutes les demandes faites par </p>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>ID</th>
                    <th>Client</th>
                    <th>Type</th>
                    <th>Date</th>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-danger">
                <h4 class="card-title">Demandes de devis faites</h4>
                <p class="card-category">Vous pouvez ici visualisez toutes les demandes faites par</p>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>ID</th>
                    <th>Client</th>
                    <th>Type</th>
                    <th>Date</th>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-info">
                <h4 class="card-title">Historique des notes</h4>
                <p class="card-category">Il s'agit de toutes les notes attribuées par </p>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>Client</th>
                    <th>Note</th>
                    <th>Date</th>
                    <th>DemandeId</th>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-success">
                <h4 class="card-title">Historique signalement</h4>
                <p class="card-category">Vous allez retrouvez touts les signalement faits par </p>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>Client</th>
                    <th>Date</th>
                    <th>Cause</th>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Page d'accueil
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  Blog
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Traducteurs
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  A propos
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </footer>
    </div>
  </div>
  </div>

  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script src="../../assests/tablefilter/tablefilter.js" type="text/javascript"></script>
  <script src="../assets/js/table.js" type="text/javascript"></script>
  <script>
    var tf = new TableFilter(document.querySelector('.my-table'), {
        base_path: '../../assests/tablefilter/',
        paging: {
          results_per_page: ['Records: ', [10, 25, 50, 100]]
        },
        no_results_message: true,
        auto_filter: {
            delay: 1100 //milliseconds
        },
        filters_row_index: 1,
        state: true,
        rows_counter: true,
        btn_reset: true,
        status_bar: true,
        msg_filter: 'Recherche...',
        col_5: 'select',
        col_6: "null",
        col_types: [
        'string',
        'string',
        'string',
        'string',
        'string',
        'string'
        ],
        extensions: [{ name: 'sort' }],
        themes: [{
            name: 'transparent'
        }],
    });
    tf.init();
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#data').DataTable();
      } );
  </script>
  
  <script>
    $(document).ready(function() {
      md.initDashboardPageCharts();

    });
  </script>
  
</body>

</html>