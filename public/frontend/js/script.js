const modeToggle = document.getElementById('mode-toggle');
        const body = document.body;
        const modeIcon = document.getElementById('mode-icon');

        // Check for user's preference in local storage
        document.addEventListener('DOMContentLoaded', () => {
            const isDarkMode = localStorage.getItem('dark-mode');
            if (isDarkMode === 'true') {
                body.classList.add('dark-mode');
                modeIcon.classList.replace('fa-sun', 'fa-moon');
            }
        });

        // Toggle between light and dark mode
        modeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            if (body.classList.contains('dark-mode')) {
                modeIcon.classList.replace('fa-sun', 'fa-moon');
                localStorage.setItem('dark-mode', 'true');
            } else {
                modeIcon.classList.replace('fa-moon', 'fa-sun');
                localStorage.setItem('dark-mode', 'false');
            }
        });
    // Text to be typed
    const textToType = "Department of Information Technology & Management";

    // Get the text container
    const typingTextContainer = document.getElementById('typing-text');

    // Function to simulate typing effect
    function typeText(index) {
      typingTextContainer.innerHTML = textToType.slice(0, index);
      if (index < textToType.length) {
        setTimeout(() => {
          typeText(index + 1);
        }, 100); // Adjust the typing speed (in milliseconds)
      }
    }

    // Start the typing animation
    typeText(0);

  var i = 0;

  var txt = 'Im sincere,responsible,dedicate,straight forward person.I believe in connectivity because connectivity is producativity.Always i try to encourage every people confidance is my power.Im 23 years old.I was born in Brahmanbaria.I grew up in Dhaka.My school was B-Baria then i completed my HSC from Dhanmondi Ideal collage.Afterthat i went china for study then .I did completed my 2 years study .Afterworth i came bangladesh in vaccation thats time i didnt go there .Then i took decision  to admit in Daffodil Internation University department of ITM.Now im gonna say about my family.My father Businessman & Mother is housewife.We are four brother mah first brother is Softoware engineer & second brother aboard then me last but not least 4th brother doing study in class 7.So that was me and my whole family Introduction';


  var speed = 10;

  function typeWriter() {
    if (i < txt.length) {
      document.getElementById("demo").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);

    }
  }

   //Non-stop typing
document.addEventListener('DOMContentLoaded', function () {
    var counters = document.querySelectorAll('.purecounter');
    var speed = 10; // The speed of counting in milliseconds
    var scrolled =false;

    // Function to check if element is in viewport
    function isInViewport(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
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

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
});
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


// const modeToggle = document.getElementById('mode-toggle');
//         const body = document.body;
//         const modeIcon = document.getElementById('mode-icon');

//         // Check for user's preference in local storage
//         document.addEventListener('DOMContentLoaded', () => {
//             const isDarkMode = localStorage.getItem('dark-mode');
//             if (isDarkMode === 'true') {
//                 body.classList.add('dark-mode');
//                 modeIcon.classList.replace('fa-sun', 'fa-moon');
//             }
//         });

//         // Toggle between light and dark mode
//         modeToggle.addEventListener('click', () => {
//             body.classList.toggle('dark-mode');
//             if (body.classList.contains('dark-mode')) {
//                 modeIcon.classList.replace('fa-sun', 'fa-moon');
//                 localStorage.setItem('dark-mode', 'true');
//             } else {
//                 modeIcon.classList.replace('fa-moon', 'fa-sun');
//                 localStorage.setItem('dark-mode', 'false');
//             }
//         });
//     // Text to be typed
//     const textToType = "Department of Information Technology & Management";

//     // Get the text container
//     const typingTextContainer = document.getElementById('typing-text');

//     // Function to simulate typing effect
//     function typeText(index) {
//       typingTextContainer.innerHTML = textToType.slice(0, index);
//       if (index < textToType.length) {
//         setTimeout(() => {
//           typeText(index + 1);
//         }, 100); // Adjust the typing speed (in milliseconds)
//       }
//     }

    // Start the typing animation
    typeText(0);

  var i = 0;

  var txt = 'Im sincere,responsible,dedicate,straight forward person.I believe in connectivity because connectivity is producativity.Always i try to encourage every people confidance is my power.Im 23 years old.I was born in Brahmanbaria.I grew up in Dhaka.My school was B-Baria then i completed my HSC from Dhanmondi Ideal collage.Afterthat i went china for study then .I did completed my 2 years study .Afterworth i came bangladesh in vaccation thats time i didnt go there .Then i took decision  to admit in Daffodil Internation University department of ITM.Now im gonna say about my family.My father Businessman & Mother is housewife.We are four brother mah first brother is Softoware engineer & second brother aboard then me last but not least 4th brother doing study in class 7.So that was me and my whole family Introduction';


  var speed = 10;

  function typeWriter() {
    if (i < txt.length) {
      document.getElementById("demo").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);

    }
  }

  //Non-stop typing
  document.addEventListener('DOMContentLoaded', function () {
              var counters = document.querySelectorAll('.purecounter');
              var speed = 10; // The speed of counting in milliseconds
              var scrolled =false;

              // Function to check if element is in viewport
              function isInViewport(element) {
                  var rect = element.getBoundingClientRect();
                  return (
                      rect.top >= 0 &&
                      rect.left >= 0 &&
                      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                  );
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

              // Add scroll event listener
              window.addEventListener('scroll', handleScroll);
          });
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






