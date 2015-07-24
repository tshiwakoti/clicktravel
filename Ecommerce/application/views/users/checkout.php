<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <?='<script type="text/javascript">Stripe.setPublishableKey("' . STRIPE_PUBLIC_KEY . '");</script>';?>
  <style type="text/css">
  html, body { 
    height: 100%; 
    margin: 0; 
    padding: 0; 
    text-align: center;
    background: #000 url(../images/body_bg_new.jpg) repeat fixed center top;
    background-image: url(http://www.css3maker.com/images/body_bg_new.jpg);
    background-position-x: 50%;
    background-position-y: 0%;
    background-size: initial;
    background-repeat-x: repeat;
    background-repeat-y: repeat;
    background-attachment: fixed;
    background-origin: initial;
    background-clip: initial;
    background-color: rgb(0, 0, 0);
    color: white;
    font-family: sans-serif;
  }
}
#header {
  margin-bottom: 80px;
  margin-top: 60px;
}
#payment-form{
  width: 450px;
  height: 500px;
  background-color: rgba(0,0,0,.5);
  border: 3px solid yellow;
  border-radius: 10px;
  font-family: sans-serif;
  margin: 0px auto;
  display: inline-block;
  vertical-align: top;
  margin-top: 50px;
  margin-right: 50px;
}
#payment-form form{
  margin-top: 40px;
  display: inline-block;
  vertical-align: top;
}
#payment-form input{
  background-color: black;
  margin: 3px;
  display: inline-block;
  color: white;
  line-height: 0px; 
  text-align: center;
}
#payment-form #checkoutLabels, #checkoutInfo{
  display: inline-block;
}
#payment-form #checkoutLabels{
  text-align: right;
  line-height: 26px;
}
#billing{
  width: 450px;
  height: 620px;
  background-color: rgba(0,0,0,.5);
  border: 3px solid hotpink;
  border-radius: 10px;
  font-family: sans-serif;
  margin: 0px auto;
  display: inline-block;
}
#billing form{
  margin-top: 40px;
  display: inline-block;
  vertical-align: top;
}
#billing input{
  background-color: black;
  margin: 3px;
  display: inline-block;
  color: white;
  line-height: 0px; 
  text-align: center;
}
#billingLabels {
  vertical-align: top;
}
/*#billingLabels p*/
#billing #billingLabels, #billingInfo{
  display: inline-block;
}
#billing #billingLabels{
  text-align: right;
  line-height: 26px;
}
#paynow {
  height: 30px;
  width: 90px;
  border-radius: 10px;
}
#cart {
  width: 800px;
  background-color: rgba(0,0,0,.5);
  border-radius: 10px;
  border: 3px solid limegreen;
  margin: 0px auto 40px auto;
  text-align: center;
  padding: 10px;
}

#submitBtn{
  padding: 10px;
}
</style>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUrqgqo3AkPxzn9xH5Rn97MC--bZJDGwk">
</script>
<script type="text/javascript">
// This function is just used to display error messages on the page.
// Assumes there's an element with an ID of "payment-errors".
function reportError(msg) {
  // Show the error in the form:
  $('#payment-errors').text(msg).addClass('alert alert-error');
  // re-enable the submit button:
  $('#submitBtn').prop('disabled', false);
  return false;
}

// Assumes jQuery is loaded!
// Watch for the document to be ready:
// $(document).ready(function() {

//   // Watch for a form submission:
//   $("#payment-form").submit(function(event) {

//     // Flag variable:
//     var error = false;

//     // disable the submit button to prevent repeated clicks:
//     $('#submitBtn').attr("disabled", "disabled");

//     // Get the values:
//     var ccNum = $('.card-number').val(), cvcNum = $('.card-cvc').val(), expMonth = $('.card-expiry-month').val(), expYear = $('.card-expiry-year').val();

//     // Validate the number:
//     if (!Stripe.card.validateCardNumber(ccNum)) {
//       error = true;
//       reportError('The credit card number appears to be invalid.');
//     }

//     // Validate the CVC:
//     if (!Stripe.card.validateCVC(cvcNum)) {
//       error = true;
//       reportError('The CVC number appears to be invalid.');
//     }

//     // Validate the expiration:
//     if (!Stripe.card.validateExpiry(expMonth, expYear)) {
//       error = true;
//       reportError('The expiration date appears to be invalid.');
//     }

//     // Validate other form elements, if needed!

//     // Check for errors:
//     if (!error) {

//       // Get the Stripe token:
//       Stripe.card.createToken({
//         number: ccNum,
//         cvc: cvcNum,
//         exp_month: expMonth,
//         exp_year: expYear
//       }, stripeResponseHandler);

//     }

//     // Prevent the form from submitting:
//     return false;

//   }); // Form submission

// }); // Document ready.

// // Function handles the Stripe response:
// function stripeResponseHandler(status, response) {

//   // Check for an error:
//   if (response.error) {

//     reportError(response.error.message);

//   } else { // No errors, submit the form:

//     var f = $("#payment-form");

//     // Token contains id, last4, and card type:
//     var token = response['id'];

//     // Insert the token into the form so it gets submitted to the server
//     f.append("<input type='hidden' name='stripeToken' value='" + token + "' />");

//     // Submit the form:
//     f.get(0).submit();

//   }

} // End of stripeResponseHandler() function.
</script>
</head>
<body>
  <div id="header">
    <h1>Checkout 'n Bounce</h1>
  </div>
  <div id="cart">
    Item(s) currently in your cart<br>
    <p>(<?= $ord['quantity']?>) <?= $ord['pickPack'] ?> Day Package(s) to <?= $ord['name'] ?></p>
    <a href="/" id="map">Return to the map  </a><a href="/Controller/returnToTrips" id="trips">  Back to city selection </a>

  </div>
  <div id="payment-errors"></div>
  <div id="payment-form">
    <h2>Shipping Information</h2>
    <form action="confirmation" method="post">
      <div id="checkoutLabels">
        <p>First Name:</p>
        <p>Last Name:</p>
        <p>Address:</p>
        <p>Address 2:</p>
        <p>City:</p>
        <p>State:</p>
        <p>Zipcode:</p>
      </div>
      <div id="checkoutInfo">
        <p><input type="text" name="first_name"></p>
        <p><input type="text" name="last_name"></p>
        <p><input type="text" name="address"></p>
        <p><input type="text" name="address2"></p>
        <p><input type="text" name="city"></p>
        <p><input type="text" name="state"></p>
        <p><input type="text" name="zipcode"></p>
        <!-- </form> -->
      </div>
    </div>
    <div id="billing">
      <h2>Billing Information</h2>
      <p>Same as shipping<input type="checkbox"></p>
      <div id="billingLabels">
        <p>First Name:</p>
        <p>Last Name:</p>
        <p>Address:</p>
        <p>Address 2:</p>
        <p>City:</p>
        <p>State:</p>
        <p>Zipcode:</p>
        <p><label>Card Number:</label></p>
        <p><label>CVC:</label></p>
        <p><label>Expiration Date (MM:YYY):</label>:</p>
      </div>
      <div id="billingInfo">
        <p><input type="text" name="bill_first_name"></p>
        <p><input type="text" name="bill_last_name"></p>
        <p><input type="text" name="bill_address"></p>
        <p><input type="text" name="bill_address2"></p>
        <p><input type="text" name="bill_city"></p>
        <p><input type="text" name="bill_state"></p>
        <p><input type="text" name="bill_zipcode"></p>
        <p><input type="text" size="20" autocomplete="off"></p>
        <p><input type="text" size="4" automplete="off"></p>
        <p><input type="text" size="2">
        <span> / </span>
        <input type="text" size="4"></p>
        <input type="submit" id="submitBtn"><br>
      </form>
    </div>
  </body>
  </html>