@extends('layout.dashboard')

@section('main')
<main>
    <div class="container px-4">
        <h1 class="mt-4">Event</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Event List</li>
        </ol>

        <div class="row mb-3">
            <div class="col text-left">
                <a href="{{ route('event/create') }}" class="btn btn-dark text-white">Add Profile</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                    <tr>
                        <td>{{$event->id}}</td>
                        <td>{{$event->name}}</td>
                        <td>
                            <img src="{{ asset($event->image) }}" width="50" height="50" class="rounded-circle" alt="Event Image">
                        </td>
                        <td>{{$event->date}}</td>
                        <td>{{$event->time}}</td>
                        <td>{{$event->location}}</td>
                        <td>{{$event->description}}</td>
                        <td class="d-flex justify-content-center gap-2 p-2">
                            <a href="{{ route('event_show', $event->id) }}" class="btn btn-outline-success btn-sm">
                                <i class="fa-solid fa-eye"></i>
                                
                            </a>
                            <a href="{{ route('event_edit', $event->id) }}" class="btn btn-outline-info btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            @can('delete')
                            <form action="{{ route('event_delete', $event->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-sm">
                                    <i class="fa fa-trash"></i>
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
            {{-- Pagination --}}
            {{-- {{ $events->links('pagination::bootstrap-5') }} --}}
        </div>
    </div>
</main>
@endsection
