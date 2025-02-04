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
 // Function to update counter
 function updateCounter(counter) {
    var start = parseInt(counter.getAttribute('data-purecounter-start'));
    var end = parseInt(counter.getAttribute('data-purecounter-end'));
    var duration = parseInt(counter.getAttribute('data-purecounter-duration'));
    var range = end - start;
    var current = start;
    var increment = end > start ? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));

    function count() {
        counter.innerText = current;
        if (current !== end) {
            current += increment;
            setTimeout(count, stepTime);
        }
    }

    count();
}

// Function to handle scroll event
function handleScroll() {
    if (!scrolled) {
        counters.forEach(function (counter) {
            if (isInViewport(counter)) {
                updateCounter(counter);
                scrolled = true;
            }
        });
    }
}


// JavaScript to start typing effect after page load
window.onload = function() {
// Get the text container
var textContainer = document.getElementById('typing-text');
// Get the text content
var text = textContainer.innerHTML;
// Clear the text content
textContainer.innerHTML = '';
// Define a function to simulate typing effect
function typeWriter(text, i) {
if (i < text.length) {
textContainer.innerHTML += text.charAt(i);
i++;
setTimeout(function() {
typeWriter(text, i);
}, 100); // Adjust typing speed here (in milliseconds)
}
}
// Start the typing effect
typeWriter(text, 0);
};


function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";
}





document.addEventListener('DOMContentLoaded', function () {
var counters = document.querySelectorAll('.purecounter');
var speed = 200; // The speed of counting in milliseconds

counters.forEach(function (counter) {
  var start = parseInt(counter.getAttribute('data-purecounter-start'));
  var end = parseInt(counter.getAttribute('data-purecounter-end'));
  var duration = parseInt(counter.getAttribute('data-purecounter-duration'));
  var range = end - start;
  var current = start;
  var increment = end > start ? 1 : -1;
  var stepTime = Math.abs(Math.floor(duration / range));

  function updateCounter() {
      counter.innerText = current;
      if (current !== end) {
          current += increment;
          setTimeout(updateCounter, stepTime);
      }
  }

  updateCounter();
});
});


document.addEventListener("DOMContentLoaded", function() {
    // Select all alumni cards
    const alumniCards = document.querySelectorAll('.alumni-card');

    alumniCards.forEach(card => {
        // Create the graduated label
        const graduatedLabel = document.createElement('div');
        graduatedLabel.className = 'graduated-label';
        graduatedLabel.innerText = 'Graduated';

        // Append the label to the card
        card.appendChild(graduatedLabel);
    });
});


function searchTable() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase().split(" "); // Split input by spaces for multiple terms
    const table = document.querySelector('.table tbody');
    const rows = table.getElementsByTagName('tr');

    // Loop through all table rows
    for (let i = 0; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName('td');
        let matchAllTerms = true;

        // Check if each search term is found in any cell of the row
        for (const term of filter) {
            let termFound = false;
            for (let j = 0; j < cells.length; j++) {
                const cell = cells[j];
                if (cell.textContent.toLowerCase().includes(term)) {
                    termFound = true;
                    break; // Term found, move to next term
                }
            }
            // If a term isn't found in any cell, mark matchAllTerms as false and stop checking
            if (!termFound) {
                matchAllTerms = false;
                break;
            }
        }

        // Toggle row visibility based on whether all terms were matched
        rows[i].style.display = matchAllTerms ? '' : 'none';
    }
}


// function searchTable() {
//     const input = document.getElementById('searchInput');
//     const filter = input.value.toLowerCase();
//     const table = document.querySelector('.table tbody');
//     const rows = table.getElementsByTagName('tr');

//     // Loop through all rows, except the header
//     for (let i = 0; i < rows.length; i++) {
//         const cells = rows[i].getElementsByTagName('td');
//         let found = false;

//         // Check only the "Course Code" and "Course Name" columns
//         if (cells[0].textContent.toLowerCase().indexOf(filter) > -1 || cells[1].textContent.toLowerCase().indexOf(filter) > -1) {
//             found = true;
//         }

//         // Toggle the visibility of the row based on the search result
//         rows[i].style.display = found ? '' : 'none';
//     }
// }

function searchTable() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const table = document.querySelector('table tbody');
    const rows = table.querySelectorAll('tr');

    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        // Column indices based on your provided column names
        const courseCode = cells[0].textContent.toLowerCase(); // course_code
        const courseName = cells[1].textContent.toLowerCase(); // course_name
        const facultyName = cells[2].textContent.toLowerCase(); // name
        const roomNo = cells[3].textContent.toLowerCase(); // room_no
        const day = cells[4].textContent.toLowerCase(); // day

        // Check if input matches any of the relevant fields
        if (courseCode.includes(input) ||
            courseName.includes(input) ||
            facultyName.includes(input) ||
            roomNo.includes(input) ||
            day.includes(input)) {
            row.style.display = ''; // Show row
        } else {
            row.style.display = 'none'; // Hide row
        }
    });
}

function toggleSection(sectionId) {
    // Hide all sections
    const sections = document.querySelectorAll('.row.p-3');
    sections.forEach(section => {
        section.style.display = 'none';
        section.style.opacity = '0';
        section.style.transition = 'opacity 0.5s';
    });

    // Display the selected section and animate opacity
    const selectedSection = document.getElementById(sectionId);
    selectedSection.style.display = 'flex'; // or 'block' if using block elements
    setTimeout(() => {
        selectedSection.style.opacity = '1';
    }, 50); // Delay to ensure the transition is noticeable
}

// Initialize by showing one section on page load
document.addEventListener('DOMContentLoaded', () => {
    toggleSection('fall-section'); // or 'spring-section' based on your preference
});
document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.getElementById('toggle-password');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        // Toggle password visibility
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Toggle eye icon
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
});
