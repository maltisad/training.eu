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
                <span class="menu-title">Teachers</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="/addcourse" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Courses</span>
                <i class="menu-arrow"></i>
              </a>
             
            </li>
              <li class="nav-item">
              <a class="nav-link" href="/allcourses">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">All Courses </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/allstudents">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Students </span>
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
                        <h4 class="card-title">Add Course</h4>
                        
                        <form class="forms-sample" action="/addcourse/create" method="post"  enctype="multipart/form-data" >
                          {{csrf_field() }}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Course Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course name" name="name">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Short Description</label>
                            <textarea id="w3review" class="form-control" name="description" rows="8" cols="50"> </textarea>
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                              <input type="text"  class="form-control" id="birthday" name="price">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Start Date</label>
                              <input type="date"  class="form-control" id="birthday" name="start_date">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Course Objectives</label>
                            <textarea id="w3review" class="form-control" name="objectives" rows="10" cols="50"> </textarea>
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Course Duration</label>
                            <textarea id="w3review" class="form-control" name="duration" rows="5" cols="50"> </textarea>
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Additional Info (optional)</label>
                            <textarea id="w3review" class="form-control" name="extra" rows="3" cols="50"> </textarea>
                          </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Choose Teacher</label>
                              <select name="teacher" class="form-control">
                              @foreach ($teachers as $teacher)
                                <option value="{{$teacher->id}}"> {{$teacher->emri}}</option>
                               @endforeach
                               </select>
                           </div>

                             <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
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
              </div>
      
               
           
      
             
     
  </body>
</html>