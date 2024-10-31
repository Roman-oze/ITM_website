


@extends('layout.dashboard')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">ITM Office Staff</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">staff List </li>
        </ol>
        <br>

    <div class="row ">
        <div class=" text-left">
          <a href="{{ route('staff.create') }}" class="btn btn-dark text-white">Add Profile</a>

        </div>
      </div>


      <div class="table-responsive">
        <table class="table table-striped">
        <thead>
            <tr >
                <th >ID</th>
                <th >Image</th>
                <th >Name</th>
                <th >Position</th>
                <th >Email</th>
                <th >Phone</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($staffs as $staff)

        <td >{{$staff->id}}</td>
        <td><img src="{{ asset($staff->image) }}"  width="40" height="40" class="rounded-circle" ></td>
        <td >{{$staff->name}}</td>
        <td >{{$staff->position}}</td>
        <td >{{$staff->email}}</td>
        <td>{{$staff->mobile}}</td>

        <td class="d-flex">

            <a href="{{route('staff.edit',$staff->id)}}" onclick="return confirm('Are you sure?')"  class="p-3" ><i class="fa-solid fa-pen-to-square text-info  fa-lg"></i></a>

            @can('delete')
            <form  action="{{route('staff.delete',$staff->id)}}" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-dark" class="p-2 "><i class="fa-regular fa-trash-can text-danger"></i>
                </button>

            </form>
            @endcan


        </td>
      </tr>





      @endforeach
        </tbody>
    </table>
    </div>


    <div class="row">
        {{-- {{ $record->links('pagination::bootstrap-5') }} --}}
    </div>

</div>
</div>



</main>

@endsection
