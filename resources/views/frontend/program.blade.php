@extends('layout.app')
@include('frontend.program_style')

@section('headerpage')

<br>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-end">
        <div class="col-auto">
            <a target="_blank" class="btn0" href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">
                Course List <i class="fa-solid fa-circle-down conic fa-lg"></i>
            </a>
        </div>
    </div>

    <div class="row gx-4 gx-lg-3 mt-3  align-items-center justify-content-center text-center">
        <div class="col-lg-8 col-md-10 align-self-end">
            <h1 class="text-info font-weight-bold">Course Details</h1>
            <hr class="divider text-white" />
        </div>

        <div class="col-lg-8 col-md-10 align-self-baseline d-flex">
            <p class="text-dark mb-5">
                "Embrace your course as a journey of growth. Every lesson is a step toward unlocking your potential. Stay committed, embrace challenges, and let curiosity drive your success. Transform knowledge into expertise and let the pursuit of learning be your motivation."
            </p>
        </div>
    </div>
</div>


<div class="container mt-5">
    <a href="#catagory" class="btn0">Course Category</a>

    @for ($i = 1; $i <= 8; $i++)
        <button type="button" class="btn semester-button mx-1 my-1"
                data-semester="{{ $i }}"
                style="padding: 9px 12px; color:black ; border-radius: 40px;
                    background-color: {{ $i === 1 ? '#4FDADA' : ($i === 2 ? '#81EE8A' : ($i === 3 ? '#37517E' : ($i === 4 ? '#F1B25F' : ($i === 5 ? '#6f42c1' : ($i === 6 ? '#F1B25F' : ($i === 7 ? '#37517E' : '#20c997')))))) }};
                    color: white; border: none;">
            {{ $i }}{{ $i === 1 ? 'st' : ($i === 2 ? 'nd' : ($i === 3 ? 'rd' : 'th')) }} Semester
        </button>
    @endfor

    <h2 class="mt-5 text-center">Course List</h2>
    <div id="course-list" class="list-group p-2"></div>

    <!-- Use a row and col to align the total credits to the right -->
    <div class="row mt-3">
        <div class="col text-end"> <!-- Align text to the right -->
            <div id="total-credits" style="font-weight: bold; color: #37517E;"></div> <!-- Total credits display -->
        </div>
    </div>
</div>

<script>
    const courseData = @json($courseData);

    $(document).ready(function() {
        $('.semester-button').click(function() {
            let semester = $(this).data('semester');

            // Clear previous course list and total credits
            $('#course-list').empty();
            $('#total-credits').empty();

            if (semester) {
                // Get the course list for the selected semester
                const courses = courseData[semester];
                let totalCredits = 0; // Initialize total credits variable

                $.each(courses, function(index, course) {
                    // Sum the credits
                    totalCredits += parseInt(course.credit); // Ensure the credit is treated as an integer

                    // Append course to the course list
                    $('#course-list').append(
                        `<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between p-3"
                        style="border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); background-color: #f9fafc;">
                            <span style="font-weight: 500; color: #37517E;">
                                (${course.course_code})
                            </span>
                            <span style="font-weight: 500; text-align: start; color: #37517E;">
                                (${course.course_name})
                            </span>
                            <span class="badge badge-dark badge-pill" style="font-size: 0.9em; background-color: #4B628B;">
                                ${course.credit} Credits
                            </span>
                        </a>`
                    );
                });

                // Display total credits
                $('#total-credits').text(`Total Credits: ${totalCredits}`);
            }
        });
    });
</script>

@endsection

@section('content')


{{-- <div class="container">
    <h1>Select Semester</h1>
    <div class="btn-group mb-4" role="group" aria-label="Semester buttons">
        @for ($i = 1; $i <= 8; $i++)
            <a href="{{ $i === 1 ? route('course_list') : '#'.$i.'thsemester' }}" class="btn btn-primary semester-button mx-1" data-semester="{{ $i }}">
                {{ $i }}{{ $i === 1 ? 'st' : ($i === 2 ? 'nd' : ($i === 3 ? 'rd' : 'th')) }} Semester
            </a>
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
                        `<a href="#" class="list-group-item list-group-item-action">${course.course_name} (${course.course_code}) - ${course.credit} Credits</a>`
                    );
                });
            }
        });
    });
</script> --}}






{{-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--<h4 class="mb-5 text-center">Information Technology &amp; Management</h4>-->
            <div class="accordion " id="accordionExample">
                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button btn btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            B.Sc. in Information Technology and Management (ITM)
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row pt-2 pb-2 bg-light">
                                <div class="col-md-5">Credit Hours</div>
                                <div class="col-md-7">142</div>
                            </div>
                            <div class="row pt-2 pb-2 mt-2 bg-light">
                                <div class="col-md-5">Program Duration</div>
                                <div class="col-md-7">4 Years</div>
                            </div>
                            <div class="row pt-2 pb-2 mt-2 bg-light">
                                <div class="col-md-5">Admission Fees (Tk)</div>
                                <div class="col-md-7">54500</div>
                            </div>
                            <div class="row pt-2 pb-2 mt-2 bg-light">
                                <div class="col-md-5">Semester Cost (Tk)</div>
                                <div class="col-md-7">85,000</div>
                            </div>
                            <div class="row pt-2 pb-2 mt-2 bg-light">
                                <div class="col-md-5">Total Tuition Fees (Tk)</div>
                                <div class="col-md-7">509,900</div>
                            </div>
                            <div class="row pt-2 pb-2 mt-2 bg-light">
                                <div class="col-md-5">Total Fees (Tk)</div>
                                <div class="col-md-7">727,100</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Additional accordion items can be added here -->
            </div>
        </div>
    </div>
</div> --}}


<br>
<br>
<br>
<br>

<section id="catagory" class="">
    <div class="container mt-5 catagory">
        <div class="row p-1 text-center">
            <h2 class="dee1 text-dark p-3">Category of Courses</h2>

<table class="table-striped">
<thead>
  <tr>
    <th scope="col">Category of Courses</th>
    <th scope="col">No of Courses</th>
    <th scope="col">Credit per Course</th>
    <th scope="col">Total Credit</th>
    <th scope="col">Allocation</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>GED Courses</td>
    <td>9</td>
    <td>3</td>
    <td>27</td>
    <td>19.01</td>
  </tr>
  <tr>
    <td>Management Core Courses</td>
    <td>14</td>
    <td>3</td>
    <td>42</td>
    <td>29.6</td>
  </tr>
  <tr>
    <td>IT Core Courses</td>
    <td>15</td>
    <td>3</td>
    <td>45</td>
    <td>31.69</td>
  </tr>
  <tr>
    <td>IT Core Courses Lab</td>
    <td>10</td>
    <td>1</td>
    <td>10</td>
    <td>7.04</td>
  </tr>
  <tr>
    <td>IT Electives/Management Electives</td>
    <td>2</td>
    <td>3</td>
    <td>6</td>
    <td>4.22</td>
  </tr>
  <tr>
    <td>Placement/Study Abroad/Professional Certification</td>
    <td>1</td>
    <td>6</td>
    <td>6</td>
    <td>4.22</td>
  </tr>
  <tr>
    <td>Thesis/Project</td>
    <td>1</td>
    <td>6</td>
    <td>6</td>
    <td>4.22</td>
  </tr>
  <tr>
    <th>Total</th>
    <th></th>
    <th></th>
    <th>142</th>
    <th >100%</th>

  </tr>
  {{-- <td colspan="3" class="text-right">Total Credits</td>
      <td colspan="2">27</td> --}}
</tbody>
</table>

</div>
</div>
</section>




  <div class="dee1">
      <h2>List of Course</h2>
      <p class="">GED Courses: 27 credits  </p>
    </h1>
    </div>

<div class="container mt-4 catagory">
<table>
  <thead>
    <tr>
      <th scope="col">S.I</th>
      <th scope="col">Code</th>
      <th scope="col">Course Name</th>
      <th scope="col">Credits</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>ENG 101</td>
      <td>Basic Functional English</td>
      <td>3</td>
    </tr>
    <tr>
      <td>2</td>
      <td>MATH 101</td>
      <td>Mathematics</td>
      <td>3</td>
    </tr>
    <tr>
      <td>3</td>
      <td>ENG 102</td>
      <td>Business English</td>
      <td>3</td>
    </tr>
    <tr>
      <td>4</td>
      <td>STA 101</td>
      <td>Introduction to Statistics</td>
      <td>3</td>
    </tr>
    <tr>
      <td>5</td>
      <td>AOL 101</td>
      <td>Art of Living</td>
      <td>3</td>
    </tr>
    <tr>
      <td>6</td>
      <td>GE 314</td>
      <td>Bangladesh Studies</td>
      <td>3</td>
    </tr>
    <tr>
      <td>7</td>
      <td>GE 215</td>
      <td>Legal Environment in Business</td>
      <td>3</td>
    </tr>
    <tr>
      <td>8</td>
      <td>GE 337</td>
      <td>Engineering Economics</td>
      <td>3</td>
    </tr>
    <tr>
      <td>9</td>
      <td>MATH 312</td>
      <td>Numerical Method</td>
      <td>3</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>


      <th colspan="3">Total Credits</th>
      <th colspan="2">27</th>
    </tr>
  </tfoot>
</table>
</div>

<br>
<br>

<div class="container mt-5 catagory">
  <div class="dee1">
      <h2>Information Technology Core Courses: 45 credits
    </div>


  <table >
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Credits</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ITM 111</td>
        <td>Computer Fundamentals</td>
        <td>3</td>
      </tr>
      <tr>
        <td>2</td>
        <td>ITM 121</td>
        <td>Structured Programming</td>
        <td>3</td>
      </tr>
      <tr>
        <td>3</td>
        <td>ITM 123</td>
        <td>Software Requirement Analysis and Design</td>
        <td>3</td>
      </tr>
      <tr>
        <td>4</td>
        <td>ITM 211</td>
        <td>HCI and User Experience</td>
        <td>3</td>
      </tr>
      <tr>
        <td>5</td>
        <td>ITM 213</td>
        <td>Object Oriented Concepts</td>
        <td>3</td>
      </tr>
      <tr>
        <td>6</td>
        <td>ITM 217</td>
        <td>Data Structure and Algorithm</td>
        <td>3</td>
      </tr>
      <tr>
        <td>7</td>
        <td>ITM 221</td>
        <td>Database Management System</td>
        <td>3</td>
      </tr>
      <tr>
        <td>8</td>
        <td>ITM 223</td>
        <td>Website Application Development</td>
        <td>3</td>
      </tr>
      <tr>
        <td>9</td>
        <td>ITM 313</td>
        <td>Mobile Application Development (Android)</td>
        <td>3</td>
      </tr>
      <tr>
        <td>10</td>
        <td>ITM 315</td>
        <td>Data Communication and Computer Networking</td>
        <td>3</td>
      </tr>
      <tr>
        <td>11</td>
        <td>ITM 328</td>
        <td>Introduction to Machine Learning</td>
        <td>3</td>
      </tr>
      <tr>
        <td>12</td>
        <td>ITM 322</td>
        <td>Software and Web Security</td>
        <td>3</td>
      </tr>
      <tr>
        <td>13</td>
        <td>ITM 323</td>
        <td>Software Quality Assurance and Testing</td>
        <td>3</td>
      </tr>
      <tr>
        <td>14</td>
        <td>ITM 421</td>
        <td>Open Source Software System</td>
        <td>3</td>
      </tr>
      <tr>
        <td>15</td>
        <td>ITM 321</td>
        <td>Software Documentation</td>
        <td>3</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="3">Total Credits</th>
        <th colspan="3">45</th>
      </tr>
    </tfoot>
  </table>
</div>

<br>
<br>
<div class="dee1">
  <h2>Information Technology Lab Courses: 10 credits
  </h2>
</div>
<div class="container mt-5 catagory">

  <table>
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Credits</th>
      </tr>
    </thead>
    <tbody>
      <!-- First set of courses -->
      <tr>
        <td>1</td>
        <td>ITM 111</td>
        <td>Computer Fundamentals</td>
        <td>3</td>
      </tr>
      <!-- ... (previous courses) ... -->
      <tr>
        <td>15</td>
        <td>ITM 321</td>
        <td>Software Documentation</td>
        <td>3</td>
      </tr>

      <!-- Second set of courses -->
      <tr>
        <td>16</td>
        <td>ITM 112</td>
        <td>Computer Fundamental Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>17</td>
        <td>ITM 122</td>
        <td>Structured Programming Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>18</td>
        <td>ITM 214</td>
        <td>Object Oriented Concepts Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>19</td>
        <td>ITM 218</td>
        <td>Data Structure and Algorithm Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>20</td>
        <td>ITM 222</td>
        <td>Database Management System Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>21</td>
        <td>ITM 224</td>
        <td>Website Application Development Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>22</td>
        <td>ITM 314</td>
        <td>Mobile Application Development (Android) Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>23</td>
        <td>ITM 316</td>
        <td>Data Communication and Computer Networking Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>24</td>
        <td>ITM 324</td>
        <td>Software Quality Assurance and Testing Lab</td>
        <td>1</td>
      </tr>
      <tr>
        <td>25</td>
        <td>ITM 329</td>
        <td>Introduction to Machine Learning Lab</td>
        <td>1</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="3">Total Credits</th>
        <th colspan="3">16</th>
      </tr>
    </tfoot>
  </table>
</div>
<br>
<br>
<div class="dee1">
  <h2>Management Core Courses: 42 credits
      </h2>
      </div>
<div class="container mt-5 catagory">

  </h2>
  <table>
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Credits</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>ITM 101</td>
        <td>Principles of Accounting</td>
        <td>3</td>
      </tr>
      <tr>
        <td>2</td>
        <td>ITM 102</td>
        <td>Principles of Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td>3</td>
        <td>ITM 103</td>
        <td>Principles of Marketing</td>
        <td>3</td>
      </tr>
      <tr>
        <td>4</td>
        <td>ITM 201</td>
        <td>Managerial Accounting</td>
        <td>3</td>
      </tr>
      <tr>
        <td>5</td>
        <td>ITM 202</td>
        <td>Business Communication</td>
        <td>3</td>
      </tr>
      <tr>
        <td>6</td>
        <td>ITM 203</td>
        <td>Social Media Marketing</td>
        <td>3</td>
      </tr>
      <tr>
        <td>7</td>
        <td>ITM 204</td>
        <td>Human Resource Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td>8</td>
        <td>ITM 206</td>
        <td>Entrepreneurship in IT</td>
        <td>3</td>
      </tr>
      <tr>
        <td>9</td>
        <td>ITM 301</td>
        <td>Management Information System</td>
        <td>3</td>
      </tr>
      <tr>
        <td>10</td>
        <td>ITM 302</td>
        <td>Business and Web Analytics</td>
        <td>3</td>
      </tr>
      <tr>
        <td>11</td>
        <td>ITM 304</td>
        <td>Production and Operation Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td>12</td>
        <td>ITM 306</td>
        <td>Introduction to Finance</td>
        <td>3</td>
      </tr>
      <tr>
        <td>13</td>
        <td>ITM 309</td>
        <td>Banking and Insurance</td>
        <td>3</td>
      </tr>
      <tr>
        <td>14</td>
        <td>ITM 401</td>
        <td>Research Methodology</td>
        <td>3</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>

        <th colspan="3">Total Credits</th>
        <th colspan="3">42</th>
      </tr>
    </tfoot>
  </table>
</div>
<br>
<br>
<div class="dee1">
  <h2>Elective courses from pool A/B: 6 credits</h2>
      <h3>Pool A: Information Technology (Any 2)</h3>

      </div>

<div class="container mt-5 catagory">

  <table>
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Credits</th>
      </tr>
    </thead>
    <tbody>
      <!-- E-commerce -->
      <tr>
        <td>1</td>
        <td>ITM 411</td>
        <td>E-commerce and E-Business</td>
        <td>3</td>
      </tr>
      <tr>
        <td></td>
        <td>ITM 412</td>
        <td>Digital Marketing</td>
        <td>3</td>
      </tr>

      <!-- IT Security -->
      <tr>
        <td>2</td>
        <td>ITM 413</td>
        <td>Principles of Cyber Security</td>
        <td>3</td>
      </tr>
      <tr>
        <td></td>
        <td>ITM 414</td>
        <td>Digital Forensics</td>
        <td>3</td>
      </tr>

      <!-- HCI -->
      <tr>
        <td>3</td>
        <td>ITM 415</td>
        <td>Human Computer Interaction</td>
        <td>3</td>
      </tr>
      <tr>
        <td></td>
        <td>ITM 416</td>
        <td>Enterprise Resource Planning System</td>
        <td>3</td>
      </tr>

      <!-- Database -->
      <tr>
        <td>4</td>
        <td>ITM 417</td>
        <td>Advanced Database</td>
        <td>3</td>
      </tr>
      <tr>
        <td></td>
        <td>ITM 418</td>
        <td>Distributed System & Cloud Computing</td>
        <td>3</td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<br>
<div class="dee1">
  <h2>Pool B: Management (Any 2)
  </h2>
      </div>

<div class="container mt-5 catagory">

  <table>
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Credits</th>
      </tr>
    </thead>
    <tbody>
      <!-- Marketing -->
      <tr>
        <td>1</td>
        <td>ITM 402</td>
        <td>Brand Management</td>
        <td>3</td>
      </tr>
      <tr>
        <td></td>
        <td>ITM 403</td>
        <td>Retail Management</td>
        <td>3</td>
      </tr>

      <!-- Human resource -->
      <tr>
        <td>2</td>
        <td>ITM 404</td>
        <td>Training and Development</td>
        <td>3</td>
      </tr>
      <tr>
        <td></td>
        <td>ITM 405</td>
        <td>Compensation Theory and Administration</td>
        <td>3</td>
      </tr>

      <!-- Accounting -->
      <tr>
        <td>3</td>
        <td>ITM 406</td>
        <td>Auditing</td>
        <td>3</td>
      </tr>
      <tr>
        <td></td>
        <td>ITM 407</td>
        <td>Accounting Information System</td>
        <td>3</td>
      </tr>

      <!-- Management -->
      <tr>
        <td>4</td>
        <td>ITM 409</td>
        <td>Project Management</td>
        <td>3</td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<br>
<div class="dee1">
  <h2>Additional Mandatory Courses: 12 credits
  </h2>
      </div>
<div class="container mt-5 catagory">

  <table>
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Credits</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>ITM 451</td>
        <td>Industrial Placement/Professional Certification/Study Abroad/</td>
        <td>6</td>
      </tr>
      <tr>
        <td>ITM 452</td>
        <td>Thesis/ Project</td>
        <td>6</td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<br>

</section>


@endsection

