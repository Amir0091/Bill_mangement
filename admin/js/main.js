// Mobile Hamburger Menu
document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });

});

// Modal
document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    if(event.key === "Escape") {
      closeAllModals();
    }
  });
});

/*
// Get all elements with class "sendButton"
var buttons = document.querySelectorAll(".addFactor");

// Loop through each button to attach event listeners
buttons.forEach(function(button) {
    // Attach click event listener to each button
    button.addEventListener("click", function() {
        // Get the value associated with the clicked button
        var valueToSend = this.getAttribute("data-value");

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Define what happens on successful data submission
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                // Request was successful, do something if needed
                console.log("Value sent successfully!");
            } else {
                // Request failed, handle errors if needed
                console.error("Error sending value:", xhr.statusText);
            }
        };

        // Define what happens in case of an error
        xhr.onerror = function() {
            console.error("Request failed:", xhr.statusText);
        };

        // Open a new POST request to the target file
        xhr.open("POST", "../includes/addfactor.inc.php");

        // Set the content type
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        // Send the value
        xhr.send(encodeURIComponent(valueToSend));
    });
});
*/