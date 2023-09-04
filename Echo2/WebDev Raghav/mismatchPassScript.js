document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registrationForm");
    const passwordInput = document.getElementById("id_reg");
    const confirmPasswordInput = document.getElementById("id_reg2");
    const passwordMismatchMessage = document.getElementById("passwordMismatch");
  
    form.addEventListener("submit", function (e) {
      if (passwordInput.value !== confirmPasswordInput.value) {
        e.preventDefault(); // Prevent form submission
        passwordMismatchMessage.style.display = "block"; // Display the message
      } else {
        passwordMismatchMessage.style.display = "none"; // Hide the message if passwords match
      }
    });
  });
  