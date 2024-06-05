

@extends('admin._master')

@section('main')






<div class="container">
    <h2 class="mt-5">Teacher Information</h2>
    <br>
    <br>
    <a href="{{route('teacher_create')}}" class="btn btn-dark text-white">Add Profile</a>
    <br>
    <br>
    <table class="table table-striped bg-dark ">
      <thead>
        <tr>
        <th class="text-white">ID</th>
        <th class="text-white">Image</th>
        <th class="text-white">Name</th>
        <th class="text-white">Designation</th>
        <th class="text-white">Facebook</th>
        <th class="text-white">LinkedIn</th>
        <th class="text-white">Email</th>
        <th class="text-white">Phone</th>
        <th class="text-white">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teachers as $teacher)

      <tr>
          <td>{{$teacher->teacher_id}}</td>
        <td><img src="{{asset('public/teachers'.$teacher->image) }}" style="width: 25px; height:25px; border-radius:100% " ></td>
        <td class="text-white-50">{{$teacher->name}}</td>
        <td class="text-white-50">{{$teacher->designation}}</td>
        <td class="text-white-50">{{$teacher->fb}}</td>
        <td class="text-white-50">{{$teacher->linked}}</td>
        <td class="text-white-50">{{$teacher->email}}</td>
        <td class="text-white-50">{{$teacher->phone}}</td>
        <td class="d-flex">

          <a href="{{ route('faculty_edit',$teacher->teacher_id) }}"  class=" btn btn-info">Edit</a>

           <form  action="{{route('faculty_delete',$teacher->teacher_id)}}" method="POST" >
               @csrf
               @method('DELETE')
               <button class=" btn btn-danger" type="submit" > Delet </button>
           </form>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>









@endsection
