@extends('admin._master')

@section('main')
<nav>
    <ul>
        <li><a href="#" onclick="showRoutine('spring')">Spring</a></li>
        <li><a href="#" onclick="showRoutine('fall')">Fall</a></li>
    </ul>
</nav>

<div id="routineUpload" style="display: none;">
    <h2>Routine Upload</h2>
    <input type="file" id="fileUpload">
    <button onclick="uploadRoutine()">Upload</button>
</div>

<div id="uploadedRoutine" style="display: none;">
    <h2>Uploaded Routine</h2>
    <ul id="routineList"></ul>
</div>

@endsection
