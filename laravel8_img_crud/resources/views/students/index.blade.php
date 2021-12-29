
@extends('students.master')

@section('index')

<div class="row justify-content-center mt-5 rounded" style="border: 3px solid black">
    <div class="col-md-8 ">
            <table class="table bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Image</th> 
                    <th scope="col"> Edit | Delete</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach ($students as $student)
                      <tr>
                        <th>{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->course }}</td>
                        <td> <img src="{{ asset('uploads/students_images/' . $student->img_name) }}" width="40px"> </td>
                        <td><a href="{{ url('edit-student/' . $student->id) }}"><i class="fas fa-edit ms-1 me-3 "></i></a> |  
                            <a href="{{ url('delete-student/' . $student->id) }}"><i class="fas fa-trash ms-3"></i></a>
                        </td>
                      </tr>
                      @endforeach

                </tbody>
            </table>
    </div>
    <div class="col-md-4 text-center">
        <a class="btn btn-success m-3 " href="{{ url('add-student') }}">Add Student</a>
    </div>
</div>
@endsection