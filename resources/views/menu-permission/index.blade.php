@extends('layout.dashboard')

@section('main')




<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">


            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif


            <div class="card">
                <div class="card-header">
                    <h4>Roles
                        <a href="{{route('permissions.create')}}" class="btn btn-primary float-end">Add Menu Permission</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Menu ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menuPermission as $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>{{ $permission->user_id }}</td>
                                <td>{{ $permission->menu_id }}</td>
                                <td>
                        {{-- <a href="{{url('permissions/'.$permission->id.'/edit')}}" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{url('permissions/'.$permission->id.'/delete')}}" class="btn btn-danger">

                                <i class="fa fa-trash"></i> --}}
                                </a>
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

