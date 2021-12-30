
@extends('students.master')

@section('index')

<div class="row justify-content-center mt-5 rounded" style="border: 3px solid black">
    <div>
        @if (session('Status'))
        <div class="alert alert-success mt-3">
            {{ session('Status') }}
        </div>
        @endif
     </div>
    <div class="col-md-8 ">
            <table class="table bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Image</th> 
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach ($students as $student)
                      <tr>
                        <th>{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->course }}</td>
                        <td> <img src="{{ asset('uploads/students_images/' . $student->img_name) }}" width="50px"> </td>
                        <td class="">
                            <a class="btn btn-success btn-sm" href="{{ url('edit-student/' . $student->id) }}"><i class="fas fa-edit"></i></a> 
                        </td>
                        <td class="ps-3">
                            {{-- <a href="{{ url('delete-student/' . $student->id) }}"><i class="fas fa-trash"></i></a> --}}
                            <form action="{{ url('delete-student/' . $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
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