
@extends('students.master')

@section('index')

<div class="row justify-content-center mt-5 rounded" style="border: 3px solid black">
    <div class="col-md-8">
        <table class="table table-dark">
            <table class="table bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </table>
    </div>
    <div class="col-md-4 text-center">
        <a class="btn btn-success mt-3" href="{{ url('add-student') }}">Add Student</a>
    </div>
</div>
@endsection