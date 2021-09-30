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

                        <form class="forms-sample" method="post" action="{{ url('updatecourse/'.$courses->id) }}" enctype="multipart/form-data" >
                        @csrf
                        {{method_field('PUT')}}
                         <input type="hidden" name="id" value="{{$courses->id}}">
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">Course Name<</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  value="{{$courses->name}}" name="name">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Short Description</label>
                               <textarea type="text" class="form-control" name="description">{{ $courses->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                              <input type="text"  class="form-control" id="birthday" value="{{$courses->price}}" name="price">
                          </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Start Date</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" value=" {{$courses->start_date}}" name="start_date">
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">Course Objectives</label>
                            <textarea id="w3review" class="form-control" rows="8" name="objectives">{{ $courses->objectives }}</textarea>
                          </div>
                          
                            <div class="form-group">
                            <label for="exampleInputEmail1">Course Duration</label>
                            <textarea id="w3review" class="form-control" name="duration" rows="5" cols="50">{{ $courses->duration }}</textarea>
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Additional Info (optional)</label>
                            <textarea id="w3review" class="form-control" name="extra" rows="3" cols="50">{{ $courses->extra }}</textarea>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Cakto mesimdhenesin</label>
                              <select name="teacher_id" class="form-control">
                              @foreach ($teachers as $teacher)
                                <option value="{{$teacher->id}}"> {{$teacher->emri}}</option>
                               @endforeach
                               </select>
                           </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Foto</label>
                            <input type="file" class="form-control" value="{{$courses->image}}" id="exampleInputEmail1" name="image">
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