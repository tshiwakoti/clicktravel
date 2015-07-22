<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUrqgqo3AkPxzn9xH5Rn97MC--bZJDGwk">
    </script>
    <script type="text/javascript">
      $(document).ready(function(){

      });
    </script>
  </head>
  <form action="/#/#" method="post">
    </h2>Shipping Information</h2>
    First Name:<input type="text" name="first_name">
    Last Name:<input type="text" name="last_name">
    Address:<input type="text" name="address">
    Address 2:<input type="text" name="address2">
    City:<input type="text" name="city">
    State:<input type="text" name="state">
    Zipcode:<input type="text" name="zipcode">

    <h2>Billing Information</h2>
    Same as shipping<input type="radio">
    First Name:<input type="text" name="bill_first_name">
    Last Name:<input type="text" name="bill_last_name">
    Address:<input type="text" name="bill_address">
    Address 2:<input type="text" name="bill_address2">
    City:<input type="text" name="bill_city">
    State:<input type="text" name="bill_state">
    Zipcode:<input type="text" name="bill_zipcode">
    Card Number:<input type="password" name="ccnumber">
    Security Code:<input type="password" name="cvv">
    Expiration:
      <select name="exp_month">
        <option> - Month - </option>
        <option value="January">January</option>
        <option value="Febuary">Febuary</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select>
      <select name="exp_year">
        <option> - Year - </option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
    </select>
  </form>