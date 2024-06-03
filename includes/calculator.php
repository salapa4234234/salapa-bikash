<style>
.calculator-wrapper {
   display: flex;
   justify-content: space-between;
   align-items: stretch;
   gap: 2.5rem;
   padding: 4rem 0px;
   flex-wrap: wrap;
}

.calculator-section {
   flex-basis: 60%;
   border: 1px solid green;
   border-radius: 5px;
   padding: 10px;
   display: flex;
   align-items: center;
   justify-content: flex-end;
   flex-wrap:wrap;

}

form {
   width: 100%;
}

.calculator-footer-section {
   background: green;
   border-radius: 5px;
   padding: 10px;
   color: #ffff;
   width: 100%;
   justify-content: center;

}

.input-section {
   border: 1px solid green;
   border-radius: 1px;
   margin: 1rem 0px;
   overflow: hidden;
   font-size: 15px;
   height: 40px;
   /* min-width: 400px; */
   width: 100%;
   display: flex;
   align-items: center;

}

.input-section input {
   border: none;
   width: 100%;
   padding: 0px 10px;
   height: 100%;
   flex-basis: 85%;
}

.input-section span {
   background: green;
    color: #fff;
    /* height: 100%; */
    padding: 2rem 0.4rem;
    width: 100%;
    flex-basis: 15%;
    text-align: center;
}

.btn-submit {
   padding: 1rem 1rem;
   font-size: 15px;
   background: green;
   border: none;
   outline: none;
   color: #fff;
   border-radius: 1px;
   /* min-width: 400px; */
   flex-basis: 80%;
   /* width: 100%; */
}

.calculator-footer-section {
   display: flex;
   align-items: flex-start;
   flex-direction: column;

}

.calculator-footer-section span {
   font-size: 20px;
   display: block;
   padding: 2rem;
   font-weight: 600;

}

.tab {
   overflow: hidden;
   display: flex;
   align-items: center;
   justify-content: center;
   border-bottom: 2px solid green;
}

/* Style the buttons inside the tab */
.tab button {
   background-color: inherit;
   float: left;
   border: none;
   outline: none;
   cursor: pointer;
   padding: 14px 16px;
   transition: 0.3s;
   font-size: 16px;
   font-weight: 600;
}

/* Change background color of buttons on hover */
.tab button:hover {
   background-color: green;
   color: white;
}

/* Create an active/current tablink class */
.tab button.active {
   background-color: green;
   color: white;
}

/* Style the tab content */
.tabcontent {
   display: none;
   padding: 6px 12px;
}

.calculator-section {
   flex: 1;
   border: 1px solid green;
   padding: 1rem 2rem;
}

.input-group {
   width: 100%;
}

.btn-section {
   display: flex;
   align-items: center;
   justify-content: center;
   max-width: 500px;
   margin: auto;
   border-radius: 5px;
   font-weight: 600;
}

.table {
   width: 100%;
   border: 1px solid $color-form-highlight;
}

.table-header {
   display: flex;
   width: 100%;
   background: green;
   padding: 1rem;
}

.table-row {
   display: flex;
   width: 100%;
   padding: 1rem;

   &:nth-of-type(odd) {
      background: #e6fff2;
   }
}

.table-data,
.header__item {
   flex: 1 1 20%;
   text-align: center;
   margin: 0px 3px;
}

.header__item {
   text-transform: uppercase;
}

.filter__link {
   color: white;
   text-decoration: none;
   position: relative;
   display: inline-block;
   padding-left: $base-spacing-unit;
   padding-right: $base-spacing-unit;

   &::after {
      content: '';
      position: absolute;
      right: -($half-spacing-unit * 1.5);
      color: white;
      font-size: $half-spacing-unit;
      top: 50%;
      transform: translateY(-50%);
   }

   &.desc::after {
      content: '(desc)';
   }

   &.asc::after {
      content: '(asc)';
   }
}
.table-container{
   width: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   overflow: hidden;
}
.table-content{
   width: 100%;
}
table{
   width:100%;
   border: 1px solid white;
}
th{
   text-align:center;
   font-size: 2rem;
   background-color: green;
   color:white;
   padding: 1rem;
}
tr:nth-child(even) {background-color: #366b3b; color:white; padding: 0.6rem;}
@media screen and (min-width: 768px) {
   .calculator-footer-section {
    width: 42%; 
}
   
}
</style>

<div class="calculator-wrapper">
   <div class="container">
      <div class="tab">
         <button class="tablinks active" onclick="openCity(event, 'London')">Loan Calculator</button>
         <button class="tablinks" onclick="openCity(event, 'Paris')">EMI Calculator</button>
      </div>
      <div id="London" class="tabcontent">
         <div class="calculator-wrapper">
            <div class="calculator-section">
               <form id="loan-form">
                 <div class="input-group">
                     <div class="input-section">
                        <span>Rs</span>
                        <input type="number" id="amount" placeholder="Loan Amount">
                     </div>
                  </div>
                 <div class="input-group">
                     <div class="input-section">
                        <span>%</span>
                        <input type="number" id="interest" placeholder="Interest">
                     </div>
                  </div>
                  <div class="input-group">
                     <div class="input-section">
                        <span>years</span>
                        <input type="number" id="years" placeholder="Years To Repay">
                     </div>
                  </div>
                    <div class="btn-section">
                     <input type="submit" value="Calculate" class="btn-submit">
                  </div>
               </form>
            </div>
            <div class="calculator-footer-section">
               <span>Monthly payment : 32423432423</span>
               <span>Total payment : 32423432423</span>
               <span>Total Interest : 32423432423</span>
            </div>
         </div>
      </div>
      <div id="Paris" class="tabcontent">
      <div class="calculator-wrapper">
            <div class="calculator-section">
               <form id="loan-forms">
                 <div class="input-group">
                     <div class="input-section">
                        <span>Rs</span>
                        <input type="number" id="amountEmi" placeholder="Loan Amount">
                     </div>
                  </div>
                 <div class="input-group">
                     <div class="input-section">
                        <span>%</span>
                        <input type="number" id="interestEmi" placeholder="Interest">
                     </div>
                  </div>
                  <div class="input-group">
                     <div class="input-section">
                        <span>months</span>
                        <input type="number" id="yearsEmi" placeholder="Years To Repay">
                     </div>
                  </div>
                    <div class="btn-section">
                     <input type="submit" value="Calculate" class="btn-submit">
                  </div>
               </form>
            </div>
            <!-- <div class="calculator-footer-section" id="calculator">
               <span>Monthly payment : 32423432423</span>
               <span>Total payment : 32423432423</span>
               <span>Total Interest : 32423432423</span>
            </div> -->
         </div>
   <div class="table-container" >
   <div class="table" id="table">
   </div>
      </div>
   </div>
</div>
</div>
<script>
document.getElementsByClassName("tabcontent")[0].style.display = "block";
document.getElementsByClassName("tablinks")[0].className.replace(" active", "");

function openCity(evt, cityName) {
   var i, tabcontent, tablinks;
   tabcontent = document.getElementsByClassName("tabcontent");
   for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
   }
   tablinks = document.getElementsByClassName("tablinks");
   for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
   }
   document.getElementById(cityName).style.display = "block";
   evt.currentTarget.className += " active";
}
document.getElementById('loan-form').addEventListener('submit', function(e) {
         e.preventDefault();
         // Get form values
         const amount = parseFloat(document.getElementById('amount').value);
         const interest = parseFloat(document.getElementById('interest').value);
         const years = parseFloat(document.getElementById('years').value);

         // Calculate monthly interest rate
         const monthlyInterestRate = (interest / 100) / 12;
         // Calculate number of payments
         const numberOfPayments = years * 12;

         // Calculate monthly payment
         const monthlyPayment = amount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments) / (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);

         // Calculate total payment
         const totalPayment = monthlyPayment * numberOfPayments;

         // Calculate total interest
         const totalInterest = totalPayment - amount;

         // Display results
         document.querySelector('.calculator-footer-section').innerHTML = `
            <span>Monthly payment: ${monthlyPayment.toFixed(2)}</span>
            <span>Total payment: ${totalPayment.toFixed(2)}</span>
            <span>Total Interest: ${totalInterest.toFixed(2)}</span>
         `;
      });
      document.getElementById('loan-forms').addEventListener('submit', function(e) {
         e.preventDefault();
         // Get form values
         const amount = parseFloat(document.getElementById('amountEmi').value);
         const interest = parseFloat(document.getElementById('interestEmi').value);
         const years = parseFloat(document.getElementById('yearsEmi').value);
         // Calculate monthly interest rate
         const monthlyInterestRate = (interest / 100) / 12;
         // Calculate number of payments
         const numberOfPayments = years * 12;

         // Calculate monthly payment
         const monthlyPayment = amount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, numberOfPayments) / (Math.pow(1 + monthlyInterestRate, numberOfPayments) - 1);

         // Calculate total payment
         const totalPayment = monthlyPayment * numberOfPayments;

         // Calculate total interest
         const totalInterest = totalPayment - amount;
         document.getElementById('table').innerHTML = amort(amount,interest,years)
         // Display results
    document.querySelector('#calculator').innerHTML = `
            <span>Monthly payment: ${monthlyPayment.toFixed(2)}</span>
            <span>Total payment: ${totalPayment.toFixed(2)}</span>
            <span>Total Interest: ${totalInterest.toFixed(2)}</span>
         `;

         function amort(balance, interestRate, terms)
{
    //Calculate the per month interest rate
	var monthlyRate = interestRate/12;
	
	//Calculate the payment
    var payment = balance * (monthlyRate/(1-Math.pow(
        1+monthlyRate, -terms)));
	    
	//begin building the return string for the display of the amort table
    var result = "";
        
    //add header row for table to return string
	result += "<table border='1'><tr><th>Month </th><th>Balance</th>" + 
        "<th>Interest</th><th>Principal</th>";
    
    /**
     * Loop that calculates the monthly Loan amortization amounts then adds 
     * them to the return string 
     */
	for (var count = 0; count < terms; ++count)
	{ 
		//in-loop interest amount holder
		var interest = 0;
		
		//in-loop monthly principal amount holder
		var monthlyPrincipal = 0;
		
		//start a new table row on each loop iteration
		result += "<tr align=center>";
		
		//display the month number in col 1 using the loop count variable
		result += "<td>" + (count + 1) + "</td>";
		
		
		//code for displaying in loop balance
		result += "<td>" + balance.toFixed(2) + "</td>";
		
		//calc the in-loop interest amount and display
		interest = balance * monthlyRate;
		result += "<td>" + interest.toFixed(2) + "</td>";
		
		//calc the in-loop monthly principal and display
		monthlyPrincipal = payment - interest;
		result += "<td>" + monthlyPrincipal.toFixed(2) + "</td>";
		
		//end the table row on each iteration of the loop	
		result += "</tr>";
		
		//update the balance for each loop iteration
		balance = balance - monthlyPrincipal;		
	}
	
	//Final piece added to return string before returning it - closes the table
    result += "</table>";
	
	//returns the concatenated string to the page
    return result;
}
      });
      
      

</script>