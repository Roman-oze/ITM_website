@extends('layout.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-danger">Members List</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Member ID</th>
                <th>Group ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Batch</th>
                <th>Depart</th>
                <th>Email</th>
                <th>Blood</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->member_id }}</td>
                    <td>{{ $member->member_id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->roll }}</td>
                    <td>{{ $member->batch }}</td>
                    <td>{{ $member->depart }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->blood }}</td>
                    <td>{{ $member->mobile }}</td>
                    <td>{{ $member->group_id->address }}</td>
                    <td>{{ $member->status }}</td>
                    {{-- <td>
                        @if ($status==active){
                            <span class="badge bg-success">Active</span>
                        }
                        @else{
                            <span class="badge bg-danger">Inactive</span>
                        }

                        @endif
                        </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
