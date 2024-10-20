@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                    @if (session('status'))
                    <div class="alert alert-success" >{{session('status')}}</div>
                    @endif

                <div class="card">
                    <div class="card-header">
                        <h4> Roles : {{$role->name}}
                            <a href="{{url('roles')}}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('roles/'.$role->id.'/give-permission')}}" method="POST">
                            @csrf
                            @method('PUT')


                            <div class="mb-3">

                                @error('permission')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <label for="">Permission</label>
                            </div>

                        <div class="row">

                            @foreach ($permissions as $permission)
                            <div class="col-md-3">
                               <label for="">
                                    <input
                                    type="checkbox"
                                    name="permissions[]"
                                    value="{{$permission->name}}"
                                    {{
                                        $role->permissions->contains('name',$permission->name) ? 'checked' : ''
                                    }}


                                    />
                                    {{$permission->name}}

                                </label>
                                </div>
                                @endforeach

                            <div class="mb-5 mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
   @endsection
