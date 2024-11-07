@extends('layout.dashboard')

@section('main')
<main class="container mt-2">

    <h1 class="mt-4">Menu Control Panel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Menu list </li>
    </ol>
    <br>

    <a href="{{route('menus.create')}}" class="btn btn-outline-dark  float-center   "> <i class="fas fa-plus-circle"></i> Create Menu</a>

    <div class="card-body p-3 p-md-4">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Menu</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->name }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center flex-wrap gap-1">
                                    @can('update permission')
                                        <a href="{{ url('menus/' . $menu->id . '/edit') }}" class="btn btn-sm btn-outline-primary p-2">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    @endcan

                                    @can('delete permission')
                                        <button onclick="if(confirm('Are you sure?')) { window.location.href='{{ url('menus/' . $menu->id . '/delete') }}' }"
                                            class="btn btn-sm btn-outline-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</main>
@endsection





