
@extends('students.master')

@section('edit')



<div class="row justify-content-center mt-5 p-3 rounded" style="border: 3px solid black">
    <div>
        @if (session('Status'))
        <div class="alert alert-success mt-2">
            {{ session('Status') }}
        </div>
        @endif
     </div>
     
    <div class="col-md-9">
        <form action="{{ url('update-student/' . $students->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" value="{{$students->name}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Course</label>
              <input type="text" class="form-control" name="course" value="{{$students->course}}" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" name="profile_img_path" id="exampleInputPassword1">
                <img class="mt-2" src="{{ asset('uploads/students_images/' . $students->img_name) }}" width="100px">
            </div>
        
            <button type="submit" class="btn btn-primary">Update</button>
        
          </form>
    </div>

    <div class="col-md-3 text-center mt-2">
        <a class="btn btn-warning " href="{{ url('/student') }}">Back</a>
    </div>
</div>


@endsection