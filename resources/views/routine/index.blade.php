


@extends('admin._master')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}


<div class="container">
    <h2 class="text-dark mt-5 text-center p-2">Semester Routine</h2>

    <div class="row  p-4 text-center ">
        <div class=" text-left">
          <a href="{{ route('routine.create') }}" class="btn btn-dark text-white">Add Routine</a>

        </div>
      </div>

    <table class="table table-striped bg-dark ">
        <thead>
            <tr >
                <th class="text-white">File</th>
                <th class="text-white">Type</th>
                <th class="text-white">Date</th>
                <th class="text-white">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($routines as $routine)

        <td><img src="{{ asset($routine->file) }}"  width="50" height="50" ></td>
        <td class="text-white-50">{{$routine->type}}</td>
        <td class="text-white-50">{{$routine->date}}</td>

        <td class="d-flex">

          <a href=""  class=" btn btn-info">show</a>

          <a href=""  class=" btn btn-info">Edit</a>

           <form  action="" method="POST" >
               @csrf
               @method('DELETE')
               <button class=" btn btn-danger p-2" type="submit" > Delete </button>
           </form>
        </td>
      </tr>

      @endforeach
        </tbody>
    </table>


    <div class="row">
        {{-- {{ $record->links('pagination::bootstrap-5') }} --}}
    </div>

</div>
</div>


@endsection



