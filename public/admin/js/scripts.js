/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    //
// Scripts
//

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// Function to show routine upload section
function showRoutine(season) {
    document.getElementById('routineUpload').style.display = 'block';
    document.getElementById('uploadedRoutine').style.display = 'block';

    // You can fetch the uploaded routines for the specific season and display them below
    fetchUploadedRoutines(season);
}

// Function to simulate routine upload
function uploadRoutine() {
    var file = document.getElementById('fileUpload').files[0];
    // You can upload the file using AJAX or any other method here
    console.log('File uploaded:', file.name);
}

// Function to fetch uploaded routines
function fetchUploadedRoutines(season) {
    // Assuming there's some API endpoint to fetch routines
    // You can replace this with actual API call
    var uploadedRoutines = ['Routine 1', 'Routine 2', 'Routine 3'];

    var routineList = document.getElementById('routineList');
    routineList.innerHTML = ''; // Clear previous list

    uploadedRoutines.forEach(function(routine) {
        var li = document.createElement('li');
        li.textContent = routine;
        routineList.appendChild(li);
    });
}

