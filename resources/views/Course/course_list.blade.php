@extends('layout.app')

@include('frontend.program_style')

@section('content')

<br>
<br>
<br>
<br>




<div class="container">
    <div class="table-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">1st semester Course</h2>
                <input class="form-control mb-3 search-box" id="searchInput" type="text" placeholder="Search courses...">
                <table class="table table-bordered table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Credit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="courseTableBody">
                        @foreach ($data as $course)
                        <tr>
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->credit }}</td>
                            <td>
                                <button class="btn btn-info btn-sm view-details" data-id="{{ $course->course_id }}">View</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="div1">

</div>
<input type="submit" value="click me" id="btn1">



<!-- Modal for View Details -->
<div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseModalLabel">Course Details</h5>
                <button type="button" id="toggleButton" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark">
                <p class="text-dark"><strong>Course ID:</strong> <span id="modalCourseID"></span></p>
                <p class="text-dark"><strong>Course Code:</strong> <span id="modalCourseCode"></span></p>
                <p class="text-dark"><strong>Course Name:</strong> <span id="modalCourseName"></span></p>
                <p class="text-dark"><strong>Credit:</strong> <span id="modalcredit"></span></p>
            </div>
        </div>
    </div>
</div>






@endsection
