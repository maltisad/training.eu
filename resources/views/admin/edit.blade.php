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

                        <form class="forms-sample" method="post" action="{{ url('updatepost/'.$teachers->id) }}" enctype="multipart/form-data" >
                        @csrf
                        {{method_field('PUT')}}
                         <input type="hidden" name="id" value="{{$teachers->id}}">
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">Emri</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  value="{{$teachers->emri}}" name="emri">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mbiemri</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value=" {{$teachers->mbiemri}}" name="mbiemri">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Titulli</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value=" {{$teachers->titulli}}" name="titulli">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Foto</label>
                            <input type="file" class="form-control" value="{{$teachers->image}}" id="exampleInputEmail1" name="image">
                          </div>
                          <div class="form-group">  
                            <input type="submit" value="Update">
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                 </div>
              </div>
          </div>



</form>