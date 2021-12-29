
@extends('students.master')

@section('create')

<div class="row justify-content-center mt-5 p-3 rounded" style="border: 3px solid black">
    <div class="col-md-9">
        <form action="" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        
          </form>
    </div>

    <div class="col-md-3 text-center mt-2">
        <a class="btn btn-warning " href="{{ url('/') }}">Back</a>
    </div>
</div>

@endsection