<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/ionicons.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/icheck/skins/all.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
    
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="/addteacher">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Add teacher</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="/addcourse" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Add Course</span>
                <i class="menu-arrow"></i>
              </a>
             
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Tables</span>
              </a>
            </li>
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Regjistro nje mesimdhenes</h4>
                        
                        <form class="forms-sample" action="/addteacher/create" method="post"  enctype="multipart/form-data" >
                          {{csrf_field() }}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Emri</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Emri juaj" name="emri">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Mbiemri</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mbiemri juaj" name="mbiemri">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Titulli i punes</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulli juaj" name="titulli">
                          </div>
                             <div class="form-group">
                            <label for="exampleInputEmail1">Foto</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" name="image">
                          </div>
                        
                            <div class="form-group">  
        <input type="submit" value="upload">
      </div>
                        </form>
                      </div>
                    </div>
                  </div>
                 
                    </div>
                  </div>
                </div>

<!--TABELA-->



                   <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Emri</th>
                          <th>Mbiemri</th>
                          <th>Titulli</th>
                          <th>Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                        <tr>
                          
                        
                        </tr>
                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      
             
     
  </body>
</html>