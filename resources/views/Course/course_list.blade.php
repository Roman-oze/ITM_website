@extends('layout.app')

@section('content')

<br>
<br>
<br>
<br>
<div class="container mt-5">
    {{-- <button id="toggleButton" class="btn btn-primary">Show Data</button>

    <div id="dataContainer" class="data-container">
        @if(isset($data))
            <!-- Display your data here -->
            @foreach($data as $item)
                <p>{{ $item->cp }} - {{ $item->info }}</p>
            @endforeach
        @endif
    </div> --}}
    @foreach ($data as $course)
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $course->course_id }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">ITM Course</p>
                <p class="card-text">Course Code: {{ $course->course_code }}</p>
                <p class="card-text">Course Name: {{ $course->course_name }}</p>
            </div>
            </div>
    @endforeach
</div>



<section id="1stsemester">
    <h2 class="fst">1st Year</h2>
    <h4 class=" text-center ">1st Semester</h4>

  <table>
      <thead>
          <tr>
              <th>Course Code</th>
              <th>Course Title</th>
              <th>Total Credit</th>

          </tr>
      </thead>
      <tbody>
          <tr>

              <td>ENG 101</td>
              <td>Basic Functional English</td>
              <td>3</td>

          </tr>
          <tr>
              <td>MATH 101</td>
              <td>Mathematics</td>
              <td>3</td>

          </tr>
          <tr>
              <td>ITM 101</td>
              <td>Principles of Accounting</td>
              <td>3</td>

          </tr>
          <tr>
              <td>ITM 102</td>
              <td>Principles of Management</td>
              <td>3</td>

          </tr>
          <tr>
              <td>ITM 111</td>
              <td>Computer Fundamentals</td>
              <td>3</td>

          </tr>
          <tr>
              <td>ITM 112</td>
              <td>Computer Fundamentals Lab</td>
              <td>1</td>

          </tr>
          <tr>
              <td>ITM 123</td>
              <td>Software Requirement Analysis and Design</td>
              <td>3</td>

          </tr>
      </tbody>
      <tfoot>
          <tr class="text-white">
              <td colspan="2">Total Credits</td>
              <td colspan="1">19</td>
          </tr>
      </tfoot>
  </table>
</section>


{{-- <script>
    $(document).ready(function() {
        $('#toggleButton').click(function() {
            var $dataContainer = $('#dataContainer');
            var $button = $(this);

            if ($dataContainer.is(':visible')) {
                $dataContainer.hide();
                $button.text('Show Data');
            } else {
                $dataContainer.show();
                $button.text('Hide Data');
            }
        });
    });
</script> --}}

@endsection
