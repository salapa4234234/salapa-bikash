AOS.init();

const menuIcon = document.querySelector("#nav-toggler");
const mainNav = document.querySelector(".main-nav");
const handleOpen = () => {
  mainNav.classList.toggle("main-nav--open");
};


menuIcon.addEventListener("click", handleOpen);

// document.getElementById("loan-form").addEventListener("submit", function (e) {
//   alert("hellow nabaraj");
//   //Hide results
//   document.getElementById("results").style.display = "none";

//   //Show loader
//   document.getElementById("loading").style.display = "block";

//   setTimeout(calculateResults, 2000);

//   e.preventDefault();
// });

// //Calculate results
// function calculateResults() {
//   //Form variables
//   const amount = document.getElementById("amount");
//   const interest = document.getElementById("interest");
//   const years = document.getElementById("years");
//   const monthlyPayment = document.getElementById("monthly-payment");
//   const totalPayment = document.getElementById("total-payment");
//   const totalInterest = document.getElementById("total-interest");

//   //Calculation variables
//   const principal = parseFloat(amount.value);
//   const calculatedInterest = parseFloat(interest.value) / 100 / 12;
//   const calculatedPayments = parseFloat(years.value) * 12;

//   //Compute monthly payment
//   const x = Math.pow(1 + calculatedInterest, calculatedPayments);
//   const monthly = (principal * x * calculatedInterest) / (x - 1);

//   if (isFinite(monthly)) {
//     monthlyPayment.value = monthly.toFixed(2);
//     totalPayment.value = (monthly * calculatedPayments).toFixed(2);
//     totalInterest.value = (monthly * calculatedPayments - principal).toFixed(2);

//     //Show result
//     document.getElementById("results").style.display = "block";

//     //Hide loader
//     document.getElementById("loading").style.display = "none";
//   } else {
//     //Hide result
//     document.getElementById("results").style.display = "none";

//     //Hide loader
//     document.getElementById("loading").style.display = "none";

//     showError("Please check your numbers");
//   }
// }

// //Show error
// function showError(error) {
//   //Get elements
//   const card = document.querySelector(".card");
//   const heading = document.querySelector(".heading");

//   //Create a div
//   const errorDiv = document.createElement("div");

//   //Add a class
//   errorDiv.className = "alert alert-danger";

//   //Create text node and append to div
//   errorDiv.appendChild(document.createTextNode(error));

//   //Insert error above heading
//   card.insertBefore(errorDiv, heading);

//   //Clear error after 3 seconds
//   setTimeout(clearError, 3000);
// }

// function clearError() {
//   document.querySelector(".alert").remove();
// }

// //js output to html

// function getValues() {
//   //button click gets values from inputs
//   var balance = parseFloat(document.getElementById("principal").value);
//   var interestRate = parseFloat(
//     document.getElementById("interest").value / 100.0
//   );
//   var terms = parseInt(document.getElementById("terms").value);

//   //set the div string
//   var div = document.getElementById("Result");

//   //in case of a re-calc, clear out the div!
//   div.innerHTML = "";

//   //validate inputs - display error if invalid, otherwise, display table
//   var balVal = validateInputs(balance);
//   var intrVal = validateInputs(interestRate);

//   if (balVal && intrVal) {
//     //Returns div string if inputs are valid
//     div.innerHTML += amort(balance, interestRate, terms);
//   } else {
//     //returns error if inputs are invalid
//     div.innerHTML += "Please Check your inputs and retry - invalid values.";
//   }
// }

// /**
//  * Amort function:
//  * Calculates the necessary elements of the loan using the supplied user input
//  * and then displays each months updated amortization schedule on the page
//  */
// function amort(balance, interestRate, terms) {
//   //Calculate the per month interest rate
//   var monthlyRate = interestRate / 12;

//   //Calculate the payment
//   var payment =
//     balance * (monthlyRate / (1 - Math.pow(1 + monthlyRate, -terms)));

//   //begin building the return string for the display of the amort table
//   var result =
//     "Loan amount: $" +
//     balance.toFixed(2) +
//     "<br />" +
//     "Interest rate: " +
//     (interestRate * 100).toFixed(2) +
//     "%<br />" +
//     "Number of months: " +
//     terms +
//     "<br />" +
//     "Monthly payment: $" +
//     payment.toFixed(2) +
//     "<br />" +
//     "Total paid: $" +
//     (payment * terms).toFixed(2) +
//     "<br /><br />";

//   //add header row for table to return string
//   result +=
//     "<table border='1'><tr><th>Month #</th><th>Balance</th>" +
//     "<th>Interest</th><th>Principal</th>";

//   /**
//    * Loop that calculates the monthly Loan amortization amounts then adds
//    * them to the return string
//    */
//   for (var count = 0; count < terms; ++count) {
//     //in-loop interest amount holder
//     var interest = 0;

//     //in-loop monthly principal amount holder
//     var monthlyPrincipal = 0;

//     //start a new table row on each loop iteration
//     result += "<tr align=center>";

//     //display the month number in col 1 using the loop count variable
//     result += "<td>" + (count + 1) + "</td>";

//     //code for displaying in loop balance
//     result += "<td> $" + balance.toFixed(2) + "</td>";

//     //calc the in-loop interest amount and display
//     interest = balance * monthlyRate;
//     result += "<td> $" + interest.toFixed(2) + "</td>";

//     //calc the in-loop monthly principal and display
//     monthlyPrincipal = payment - interest;
//     result += "<td> $" + monthlyPrincipal.toFixed(2) + "</td>";

//     //end the table row on each iteration of the loop
//     result += "</tr>";

//     //update the balance for each loop iteration
//     balance = balance - monthlyPrincipal;
//   }

//   //Final piece added to return string before returning it - closes the table
//   result += "</table>";

//   //returns the concatenated string to the page
//   return result;
// }

// function validateInputs(value) {
//   //some code here to validate inputs
//   if (value == null || value == "") {
//     return false;
//   } else {
//     return true;
//   }
// }
