
@extends('students.master')

@section('index')

<div class="row justify-content-center mt-5 rounded" style="border: 3px solid black">
    <div class="col-md-8 col-md-p5">
        <table class="table table-dark">
            <table class="table bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach ($students as $student)
                      <tr>
                        <th>{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->course }}</td>
                        <td> <img src="{{ asset('uploads/students_images/' . $student->img_name) }}" width="40px"> </td>
                      </tr>
                      @endforeach

                </tbody>
              </table>
        </table>
    </div>
    <div class="col-md-4 text-center">
        <a class="btn btn-success m-3 " href="{{ url('add-student') }}">Add Student</a>
    </div>
</div>
@endsection