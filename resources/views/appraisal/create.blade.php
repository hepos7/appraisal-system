@extends('layouts.Master')

@section('content')

    <div class="row h-100 d-flex align-items-center justify-content-center" >
        <div class="card card-primary col-6 p-0">
            <div class="card-header d-flex ui-sortable-handle">
              <h3 class="card-title">Appraise employee</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/employees/appraisal/{{ $user_id }}" method="POST" enctype="multipart/form-data" >
                @csrf  
              <div class="card-body">
                <div class="form-group">
                  <label for="h1">First year appraise in June</label>
                  <input id="h1" type="number" class="form-control" name="h1" value="{{ $appraisal->h1?? 1 }}" min="1" max="5" placeholder="rate from 1 to 5">
                </div>

                <div class="form-group">
                  <label for="h2">Second year appraise in December</label>
                  <input id="h2" type="number" class="form-control" name="h2" value="{{ $appraisal->h2?? 1 }}" min="1" max="5" placeholder="rate from 1 to 5">
                </div>
                               
                 
              </div>
              <!-- /.card-body -->
        
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
            <div class="col-5">
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                  </div>
              @endif
            </div>
          </div>
    
          
        </div>

        <script>
            var currentDate = new Date();

            //change disabled time
            var h1Date = 5; 

            var h2Date = 11; 

            if (currentDate.getMonth() != h1Date) {

                document.getElementById("h1").disabled = true;
            }

            if (currentDate.getMonth() != h2Date) {

                document.getElementById("h2").disabled = true;
            }

        </script>
@endsection