// JavaScript (modal.js)

// Get the modal element
var modal = document.getElementById("login-failure-modal");

// Get the close button element
var closeBtn = document.getElementsByClassName("close")[0];

// Function to display the modal
function displayModal() {
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// Close the modal when clicking the close button
closeBtn.onclick = closeModal;

// Close the modal when clicking anywhere outside the modal
window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
}

// Check if there's a query parameter indicating login failure
var urlParams = new URLSearchParams(window.location.search);
if (urlParams.has('loginFailure')) {
  displayModal();
}
