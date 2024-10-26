@extends('layout.app')

@include('frontend.program_style')

@section('content')

<br>
<br>
<br>
<br>



{{--
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
</div> --}}

<div class="container">
    <h1>Select Semester</h1>
    <div class="btn-group" role="group" aria-label="Semester buttons">
        @for ($i = 1; $i <= 8; $i++)
            <button type="button" class="btn btn-primary semester-button" data-semester="{{ $i }}">{{ $i }}{{ $i === 1 ? 'st' : ($i === 2 ? 'nd' : ($i === 3 ? 'rd' : 'th')) }} Semester</button>
        @endfor
    </div>

    <h2>Course List</h2>
    <div id="course-list" class="list-group"></div>
</div>

<script>
    const courseData = @json($courseData);

    $(document).ready(function() {
        $('.semester-button').click(function() {
            let semester = $(this).data('semester');

            // Clear previous course list
            $('#course-list').empty();


            if (semester) {
                // Get the course list for the selected semester
                const courses = courseData[semester];
                $.each(courses, function(index, course) {
                    $('#course-list').append(
                        `<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center p-3"
                        style="border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #f9fafc;">
                            <span style="font-weight: 500; color: #37517E;">${course.course_name} (${course.course_code})</span>
                            <span class="badge badge-dark badge-pill" style="font-size: 0.9em; background-color: #007bff;">${course.credit} Credits</span>
                        </a>`
                    );
                });
            }
        });
    });
</script>




@endsection
