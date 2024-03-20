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