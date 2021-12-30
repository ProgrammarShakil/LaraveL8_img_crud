
@extends('students.master')

@section('create')



<div class="row justify-content-center mt-5 p-3 rounded" style="border: 3px solid black">
    <div>
        @if (session('Status'))
        <div class="alert alert-success mt-2">
            {{ session('Status') }}
        </div>
        @endif
     </div>
     
    <div class="col-md-9">
        <form action="{{ url('add-student') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Course</label>
              <input type="text" class="form-control" name="course" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" name="profile_img_path" id="exampleInputPassword1">
            </div>
        
            <button type="submit" class="btn btn-primary">Add Student</button>
        
          </form>
    </div>

    <div class="col-md-3 text-center mt-2">
        <a class="btn btn-warning " href="{{ url('/student') }}">Back</a>
    </div>
</div>


@endsection