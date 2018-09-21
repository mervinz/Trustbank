function calculate() {
    //Look up the input and output elements in the document
    var amount = document.getElementById("amount");
    var apr = document.getElementById("apr");
    var years = document.getElementById("years");
    var payment = document.getElementById("payment");
    var total = document.getElementById("total");
    var totalinterest = document.getElementById("totalinterest");

// Get the user's input from the input elements.
// Convert interest from a percentage to a decimal, and convert from
// an annual rate to a monthly rate. Convert payment period in years
// to the number of monthly payments.
    var principal = parseFloat(amount.value);
    var interest = parseFloat(apr.value) / 100 / 12;
    var payments = parseFloat(years.value) * 12;

// compute the monthly payment figure
    var x = Math.pow(1 + interest, payments); //Math.pow computes powers
    var monthly = (principal*x*interest)/(x-1);

// If the result is a finite number, the user's input was good and
// we have meaningful results to display
    if (isFinite(monthly)){
        // Fill in the output fields, rounding to 2 decimal places
        payment.innerHTML = monthly.toFixed(2);
        total.innerHTML = (monthly * payments).toFixed(2);
        totalinterest.innerHTML = ((monthly*payments)-principal).toFixed(2);

// Save the user's input so we can restore it the next time they visit
        save(amount.value, apr.value, years.value, zipcode.value);

        // Advertise: find and display local lenders, but ignore network errors
        try { // Catch any errors that occur within these curly braces
            getLenders(amount.value, apr.value, years.value, zipcode.value);
        }

        catch(e) { /* And ignore those errors */ }
        // Finally, chart loan balance, and interest and equity payments
        chart(principal, interest, monthly, payments);
    }
    else {
        // Result was Not-a-Number or infinite, which means the input was
        // incomplete or invalid. Clear any previously displayed output.
        payment.innerHTML = ""; // Erase the content of these elements
        total.innerHTML = ""
        totalinterest.innerHTML = "";
        chart(); // With no arguments, clears the chart
    }
}
