@extends('admin.Admin layout._master')



@section('main')




<div class="container">
    <h2 class="text-dark mt-5  p-2">Single Data Show</h2>

    <div class="row  p-4">
        <div class=" text-left">
          <a href="{{ route('admin_registration') }}" class="btn btn-dark text-white">New Add</a>

        </div>
      </div>

    <table class="table table-striped bg-dark ">
        <thead>
            <tr >
                <th class="text-white text-center">User ID</th>
                <th class="text-white">Name</th>
                <th class="text-white">Email</th>
                <th class="text-white">Password</th>
                <th class="text-white text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-white-50 text-center">{{ $users->id }}</td>
                <td class="text-white-50">{{ $users->name }}</td>
                <td class="text-white-50">{{ $users->email }}</td>
                <td class="text-white-50">{{ $users->password }}</td>
                <td>
                    <a href="{{route('admin.user')}}" class="btn btn-primary">Back</a>

            </td>


                </tr>
        </tbody>
    </table>
</div>


<br>
<br>
<br>
<br>
@endsection
