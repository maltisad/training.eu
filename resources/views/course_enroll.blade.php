  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
  

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
  </head>

    
          <div class="content-wrapper">
             <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">

                        <form class="forms-sample" method="post" action="/enroll" enctype="multipart/form-data" >
                        @csrf
               
                        <input type="hidden" name="course_id" value="{{$courses->id}}">
                        <p> {{$courses->titulli}} </p>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Write your full name" name="name">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Write your email" name="email">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Write your phone number"  name="number">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Write your country" name="country">
                        </div>
                         
                          <div class="form-group">  
                            <input type="submit" value="Apply">
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                 </div>
              </div>
          </div>



</form>