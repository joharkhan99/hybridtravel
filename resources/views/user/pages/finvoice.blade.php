﻿<!DOCTYPE html>

<html>

<head>

  <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

  <style>
    body {

      font-family: Arial;

    }





    @media print {

      .noprint {

        display: none;

      }

    }
  </style>

  <script>
    function printInvoice() {

      window.print();

    }
  </script>

</head>

<body>

  <div style="text-align: center;" class="noprint">

    <button type="button" onclick="printInvoice()" style=" cursor:pointer; background-color: #ed1d24; color: #fff; border: none; padding: 7px 20px; font-size: 18px; margin: 15px 0px;">

      Print Invoice

    </button>

    <a href="dashboard.html" style="text-decoration:none; background-color: #003580; color: #fff; border: none; padding: 11px 20px; font-size: 18px; margin: 15px 0px;">

      Go to Dashboard

    </a>

  </div>



  <table class="table table-bordered" style="width:1024px;margin:10px auto 50px;">

    <tr>

      <th colspan="4"><img src="../img/travel-engine-logo.png" alt="" width="260" /></th>

      <th colspan="3">

        Invoice Date:<br />

        24/Feb/19

      </th>

      <th colspan="4">

        Invoice No.:<br />

        AFB65467967

      </th>

    </tr>

    <tr>

      <td colspan="6">

        Travel Engine <br />

        Shaheen Bagh, Okhla, New Delhi<br />

        Service Tax No. xxxxxxxxxxxx

      </td>

      <td colspan="5">

        TollFree Number:-8888-88888-88<br />

        Email Id:support@yourdomain.com<br />

        Pan No. xxxxxxxxxxxxx

      </td>

    </tr>

    <tr>

      <td colspan="11">

        Client Name: xxxxxxx<br />

        Client Address: xxxxxxx<br />

        State: xxxxxxxx<br />

        GSTIN No: xxxxxxxx<br />

      </td>

    </tr>

    <tr>

      <td colspan="11">

        <table class="table">

          <tr>

            <th>Trip ID</th>

            <th>Invoice No</th>

            <th>Booking on</th>

            <th>Travel Date</th>

            <th>Flight No</th>

            <th>Sector</th>

            <th>User Name</th>

            <th>Ticket No</th>

            <th>PNR No</th>

          </tr>

          <tr>

            <td>620018770</td>

            <td>90690084</td>

            <td>24/Feb/19</td>

            <td>03/Mar/19</td>

            <td>6E787</td>

            <td>IXR-BOM</td>

            <td>Mohammad</td>

            <td>LCMD4S</td>

            <td>LCMD4S</td>

          </tr>

        </table>

      </td>

    </tr>

    <tr>

      <td colspan="7"></td>

      <td colspan="4">

        <table class="table">

          <tr>

            <td>Add: Base Fare:</td>

            <td>4,578.00</td>

          </tr>

          <tr>

            <td>Add: Tax and Fees:</td>

            <td>946.00</td>

          </tr>

          <tr>

            <td>Add: Convenience Fee:</td>

            <td>270.00</td>

          </tr>

          <tr>

            <td>Less: Customer Prom/ Discount:</td>

            <td>0.00</td>

          </tr>

          <tr>

            <th>Total:</th>

            <th>5,794.00</th>

          </tr>

        </table>

      </td>

    </tr>



    <tr>

      <td colspan="11" align="center">

        <small>

          Note: This is an electronically generated invoice and does not require a physical signature or stamp.

        </small>

      </td>

    </tr>

  </table>



</body>

</html>