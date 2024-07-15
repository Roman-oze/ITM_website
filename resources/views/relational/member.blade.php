{{-- <!-- resources/views/members/index.blade.php -->



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

                </tr>
            @endforeach
        </tbody>
    </table>
</div>





@endsection --}}


<!-- resources/views/members/index.blade.php -->

@foreach ($members as $member)
    <h2>{{ $member->name }}</h2>
    <p>Roll: {{ $member->roll }}</p>
    <p>Batch: {{ $member->batch }}</p>
    <p>Department: {{ $member->depart }}</p>
    <p>Email: {{ $member->email }}</p>

    <h3>Groups</h3>
    @foreach ($member->groups as $group)
        <p>Blood: {{ $group->blood }}</p>
        <p>Mobile: {{ $group->mobile }}</p>
        <p>Address: {{ $group->address }}</p>
        <p>Status: {{ $group->status }}</p>
    @endforeach
@endforeach
