@extends('admin.Admin layout._master')


@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}


<div class="container">
    <h2 class="text-dark mt-5  p-2">Admin Details</h2>

    <div class="row  p-4">
        <div class=" text-left">
          <a href="{{ route('register') }}" class="btn btn-dark text-white">New Add</a>

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
            @foreach ( $users as $user)
            <tr>
                <td class="text-white-50 text-center">{{ $user->id }}</td>
                <td class="text-white-50">{{$user->name }}</td>
                <td class="text-white-50">{{ $user->email }}</td>
                <td class="text-white-50">{{$user->password }}</td>

                <td class="text-center justify-content-evenly">
                    <a href="{{route('show.user',$user->id)}}" class="p-3"><i class="fa-solid fa-eye text-white  fa-lg "></i></a>
                    <a href="{{route('edit.user',$user->id)}}" class="p-3"><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

                    <form action="{{route('user.delete',$user->id)}}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="p-2 bg-dark"><i class="fa-regular fa-trash-can text-danger"></i>
                        </form>




                </td>

                </tr>
                @endforeach
        </tbody>
    </table>


    <div class="row">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>

</div>
</div>


@endsection
