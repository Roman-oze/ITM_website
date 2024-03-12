@extends('layout.master')
@include('frontend.program_style')


@section('headerpage')
<div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
    <div class="col-lg-8 align-self-end">
        <h1 class="text-danger font-weight-bold">Course  Details</h1>
        <hr class="divider" />
    </div>
    <div class="col-lg-8 align-self-baseline d-flex">
        <p class="text-white-75 mb-5">"Embrace your course as a journey of growth. Every lesson is a step toward unlocking your potential. Stay committed, embrace challenges, and let curiosity drive your success. Transform knowledge into expertise and let the pursuit of learning be your motivation."</p>

    </div>
<div class="course text-center">
   


    <a href="#1stsemester" class="btn1">1st Semester</a>
    <a href="#2ndsemester" class="btn2">2nd Semester</a>
    <a href="#3rdsemester" class="btn3">3rd Semester</a>
    <a href="#4thsemester" class="btn4">4th Semester</a>
    <a href="#5thsemester" class="btn5">5th Semester</a>
    <a href="#6thsemester" class="btn6">6th Semester</a>
    <a href="#7thsemester" class="btn7">7th Semester</a>
    <a href="#8thsemester" class="btn8">8th Semester</a>
  
  </div>
</div>
@endsection

@section('content')
<div class="container-fluid mt-5">
  <br>
  <br>
  <br>

  <h2 class="dee1 bg-info text-white">Category of Courses</h2>

<table>
<thead>
  <tr>
    <th>Category of Courses</th>
    <th>No of Courses</th>
    <th>Credit per Course</th>
    <th>Total Credit</th>
    <th>Allocation</th>
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
    <th>142</th>
    <th></th>
    <th></th>
    <th>100%</th>
  </tr>
</tbody>
</table>

</div>

  <div class="dee1">
      <h2>List of Course</h2>
      <p class="">GED Courses: 27 credits  </p>
    </h1>
    </div>

<div class="container mt-4">

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
      <td colspan="3" class="text-right">Total Credits</td>
      <td>27</td>
    </tr>
  </tfoot>
</table>
</div>

<br>
<br>

<div class="container mt-5">
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
        <td>45</td>
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
<div class="container mt-5">
  
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
        <td>16</td>
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
<div class="container mt-5">
 
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
        <td>42</td>
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

<div class="container mt-5">
  
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

<div class="container mt-5">
  
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
<div class="container mt-5">
  
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


<section id="1stsemester">
    <h2 class="fst">1st Year</h2>
    <h4 class=" text-center text-muted">1st Semester</h4>

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
          <tr>
              <td colspan="2">Total Credits</td>
              <td colspan="1">19</td>
          </tr>
      </tfoot>
  </table>
</section>


<section id="2ndsemester">
 

  <h2 class="fst">1st Year</h2>
  <h4 class=" text-center text-muted">2nd Semester</h4>
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
          
              <td>ITM 211</td>
              <td>HCI and User Experience</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>ENG 102</td>
              <td>Business English</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>STA 101</td>
              <td>Introduction to Statistics</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 103</td>
              <td>Principles of Marketing</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 121</td>
              <td>Structurer Programming</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>ITM 122</td>
              <td>Structurer Programming Lab</td>
              <td>1</td>
              
          </tr>
          <tr>
              <td>ITM 203</td>
              <td>Social Media Marketing</td>
              <td>3</td>
             
          </tr>
      </tbody>
      <tfoot>
          <tr>
              <td colspan="2">Total Credits</td>
              <td colspan="1">19</td>
          </tr>
      </tfoot>
  </table>
</section>
<section id="3rdsemester">
  

  <h2 class="fst">2nd Year</h2>
  <h4 class=" text-center text-muted">3rd Semester</h4>

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
          
              <td>ITM 201</td>
              <td>Managerial Accounting</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>ITM 202</td>
              <td>Business Communication</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>AOL 101</td>
              <td>Art Of Living</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 217</td>
              <td>Data Structure and Algorithm</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 218</td>
              <td>Data Structure and Algorithm Lab</td>
              <td>1</td>
            
          </tr>
          <tr>
              <td>ITM 122</td>
              <td>Object Oriented Concepts</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 213</td>
              <td>Object Oriented Concepts Lab</td>
              <td>1</td>
             
          </tr>
      </tbody>
      <tfoot>
          <tr>
              <td colspan="2">Total Credits</td>
              <td colspan="1">17</td>
          </tr>
      </tfoot>
  </table>
</section>
<section id="4thsemester">
  

  <h2 class="fst">2nd Year</h2>
  <h4 class=" text-center text-muted">4th Semester</h4>

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
          
              <td>ITM 204</td>
              <td>Human Resource Management</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>GE 215</td>
              <td>Legal Environment in Business</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>ITM 206</td>
              <td>Entrepreneurship in IT</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 221</td>
              <td>Database Management System</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 222</td>
              <td>Database Management System Lab</td>
              <td>1</td>
            
          </tr>
          <tr>
              <td>ITM 223</td>
              <td>Website Application Development </td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 224</td>
              <td>Website Application Development Lab</td>
              <td>1</td>
             
          </tr>
          <tr>
              <td>GE 314</td>
              <td>Bangladesh Studies</td>
              <td>1</td>
             
          </tr>
      </tbody>
      <tfoot>
          <tr>
              <td colspan="2">Total Credits</td>
              <td colspan="1">20</td>
          </tr>
      </tfoot>
  </table>
</section>
<section id="5thsemester">
  <h2 class="fst">3rd Year</h2>
  <h4 class=" text-center text-muted">5th Semester</h4>

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
          
              <td>GE 337</td>
              <td>Engineering Economics</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>ITM 301</td>
              <td>Management Information System</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>ITM 306</td>
              <td>Introduction To Finance</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>ITM 313</td>
              <td>Moblile Application Development</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 314</td>
              <td>Moblile Application Development Lab</td>
              <td>1</td>
              
          </tr>
          <tr>
              <td>ITM 315</td>
              <td>Data Communication and Computer Networking</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>ITM 316</td>
              <td>Data Communication and Computer Networking Lab</td>
              <td>1</td>
            
          </tr>
          <tr>
              <td>MATH 312</td>
              <td>Numerical Method</td>
              <td>3</td>
              
          </tr>
         
      </tbody>
      <tfoot>
          <tr>
              <td colspan="2">Total Credits</td>
              <td colspan="1">20</td>
          </tr>
      </tfoot>
  </table>
</section>
<section id="6thsemester">
  <h2 class="fst">3rd Year</h2>
  <h4 class=" text-center text-muted">6th Semester</h4>

  
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
          
              <td>ITM 302</td>
              <td>Business and Web Analytics</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>ITM 303</td>
              <td>Production and Operation Management</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>ITM 328</td>
              <td>Introduction To Machine Learning</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>ITM 329</td>
              <td>Introduction To Machine Learning Lab</td>
              <td>1</td>
              
          </tr>
          <tr>
              <td>ITM 322</td>
              <td>Softoware and Web Security</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>ITM 323</td>
              <td>Software Quality Assurance and Testing</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>ITM 324</td>
              <td>Software Quality Assurance and Testing Lab</td>
              <td>1</td>
            
          </tr>
          <tr>
              <td>MATH 309</td>
              <td>Banking and Insurance</td>
              <td>3</td>
              
          </tr>
         
      </tbody>
      <tfoot>
          <tr>
              <td colspan="2">Total Credits</td>
              <td colspan="1">20</td>
          </tr>
      </tfoot>
  </table>
</section>
<section id="7thsemester">
  <h2 class="fst">4th Year</h2>
  <h4 class=" text-center text-muted">7th Semester</h4>

  
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
          
              <td>ITM 451</td>
              <td>Industrial Placement / Professional Certification / Study Aboard</td>
              <td>6</td>
            
          </tr>
          <tr>
              <td>ITM 421</td>
              <td>Open Source Software System</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>40X / 41X</td>
              <td>Elective-1</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>40X / 41X</td>
              <td>Elective-2</td>
              <td>3</td>
             
          </tr>
          <tr>
              <td>FIN 101</td>
              <td>Blockchain And Crypto Currency in Financial Technology</td>
              <td>3</td>
              
          </tr>
          <tr>
              <td>FIN 102</td>
              <td>Machine Learing and Artificial Intelligence in Finance</td>
              <td>3</td>
              
          </tr>
          
      </tbody>
      <tfoot>
          <tr>
              <td colspan="2">Total Credits</td>
              <td colspan="1">15</td>
          </tr>
      </tfoot>
  </table>
</section>
<section id="8thsemester">
  <h2 class="fst">4th Year</h2>
  <h4 class=" text-center text-muted">8th Semester</h4>

  
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
          
              <td>ITM 401</td>
              <td>Research Methodology</td>
              <td>3</td>
            
          </tr>
          <tr>
              <td>ITM 452</td>
              <td>Thesis / Project</td>
              <td>6</td>
             
          </tr>
          <tr>
              <td>ITM 321</td>
              <td>Software Documentation</td>
              <td>3</td>
             
          </tr>
          
          
      </tbody>
      <tfoot>
          <tr>
              <td colspan="2">Total Credits</td>
              <td colspan="1">12</td>
          </tr>
      </tfoot>
  </table>
</section>
@endsection

