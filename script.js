document
  .getElementById("loanForm")
  .addEventListener("submit", function (event) {
    let amount = document.getElementById("amount").value;
    let term = document.getElementById("term").value;

    if (amount <= 0 || term <= 0) {
      event.preventDefault();
      alert("Please enter valid loan amount and term.");
    }
  });
