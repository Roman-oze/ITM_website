@extends('layout.dashboard')

@section('main')


<main>
<div class="card  p-4">
    <h1 class="mt-4">Message</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Message List </li>
    </ol>

    <div class="card mb-4">
        <div class="card-header h3 text-bark text-center">
            <i class="fa-solid fa-envelope-open-text fa-lg"></i>
            Message List
        </div>



        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>View</th>
                    <th>Inbox</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $inbox)
                <tr>
                    <td scope="row">{{$inbox->id}}</td>
                    <td >{{$inbox->message}}</td>
                    <td>
                        <form action="{{route('inbox.delete',$inbox->id)}}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class=" btn btn-outline-danger p-3 " onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-black  fa-lg "></i></button>

                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection
