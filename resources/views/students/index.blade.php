<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Show Student Data</title>
</head>
<body>
    <!-- resources/views/students/index.blade.php -->
<!-- resources/views/students/index.blade.php -->


<!-- resources/views/students/index.blade.php -->

<div class="container mt-5 p-5">
<h1 class="text-danger mt-5">Index file</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th >ID</th>
            <th >Name</th>
            <th >Department</th>
            <th >Address</th>
            <th >Mobile</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->department }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>
                            <a href="<?php echo url('students/show',$student->id)?>" class="btn btn-info">View</a>
                            <a href="<?php echo url('students/edit',$student->id)?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo url('students/show',$student->id)?>" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
    </tbody>
</table>
</div>


</body>
</html>