function downloadAndRedirect() {
  var countdown = 3; // Countdown timer in seconds

  // Start countdown
  var countdownInterval = setInterval(function () {
    if (countdown === 0) {
      clearInterval(countdownInterval); // Stop countdown
      startDownload(); // Trigger file download
    } else {
      document.getElementById("countdown").innerText = countdown; // Update countdown text
      countdown--;
    }
  }, 1000); // Update every second

  function startDownload() {
    // Trigger file download
    window.location.href = "../iso/Mini11 22H2.iso";

    // Redirect to another page after a short delay
    setTimeout(function () {
      window.location.href = "../../Contact.php";
    }, 1000); // Wait for 5 seconds before redirecting
  }
}
