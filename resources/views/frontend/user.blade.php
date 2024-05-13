

    @extends('layout._club_master')


    @section('main_content')


        <div class="container mt-5">
            <h1 class="text-danger mt-5">Single Show Data </h1>
        <table class="table table-striped">
            <thead>
                @foreach ($students as $student)
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$student->id}}</td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->email}}</td>
                  <td>{{$student->password}}</td>

                    <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-primary">Delet</a>
                            <a href="{{route('show',$student->id)}}" class="btn btn-primary">Show</a>

                    </td>

                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    @endsection
