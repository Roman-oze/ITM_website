

    @extends('layout._club_master')


    @section('main_content')

    <div class="container mt-5 p-5">
        <h1 class="text-danger ">Student Details</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->email}}</td>
                  <td>{{$student->password}}</td>

                    <td>
                        <a href="{{route('view',$student->id)}}" class="btn btn-info">View</a>
                        <a href="{{route('edit',$student->id)}}" class="btn btn-danger">edit</a>

                        <form action="{{route('delete',$student->id)}}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>


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



{{--
      this show code
    <div class="container mt-5">
        <h1 class="text-danger mt-5">Single Show Data </h1>
    <table class="table table-striped">
        <thead>
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
                        <a href="{{route('user')}}" class="btn btn-primary">Back</a>

                </td>

                </tr>

        </tbody>
    </table>
</div>
<br>
<br>
<br>
<br> --}}
