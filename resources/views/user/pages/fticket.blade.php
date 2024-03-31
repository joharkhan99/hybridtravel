<!DOCTYPE html>

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

      Print Ticket

    </button>

    <a href="dashboard.html" style="text-decoration:none; background-color: #003580; color: #fff; border: none; padding: 11px 20px; font-size: 18px; margin: 15px 0px;">

      Go to Dashboard

    </a>

  </div>



  <table class="table table-bordered" style="width:1024px;margin:10px auto 50px;">

    <tr>

      <th colspan="4" align="left"><img src="../img/travel-engine-logo.png" alt="" width="260" /></th>

      <th colspan="7" align="left">

        E-Ticket for Order<br />

        620018770890690084

      </th>

    </tr>

    <tr>

      <th colspan="11">

        Trip 1: Ranchi to Mumbai Sun, 03 Mar 2019

      </th>

    </tr>

    <tr>

      <th colspan="7" align="left">IndiGo 6E-786</th>

      <th colspan="4" align="left">



      </th>

    </tr>

    <tr>

      <td colspan="4">

        <b>IXR 16:45</b>

        <br />

        Sun, 03 Mar 2019

        <br />

        Birsa Munda Airport

      </td>

      <td colspan="3" align="center">

        <small>

          2h45m

          <br />

          Economy | Meal

        </small>

      </td>

      <td colspan="4">

        <b>19:30 BOM</b>

        <br />

        Sun, 03 Mar 2019

        <br />

        Chhatrapati Shivaji Int'l Airport

      </td>

    </tr>

    <tr>

      <td colspan="11">

        Baggage Info - Check-in: 15KG, Cabin: 7KG

      </td>

    </tr>

    <tr>

      <td colspan="11">

        <table class="table table-bordered">

          <tr>

            <th>Travellers</th>

            <th>Airline PNR</th>

            <th>

              Ticket No

            </th>

          </tr>

          <tr>

            <td>

              Mr. Mohammad

            </td>

            <td>

              LCMD4S

            </td>

            <td>

              LCMD4S

            </td>

          </tr>

        </table>

      </td>

    </tr>

    <tr>

      <th colspan="11">

        About This Trip

      </th>

    </tr>

    <tr>

      <td colspan="11">

        <ul>

          <li>

            Use your Order ID 620018770890690084 for all

            communication with Travel Engine about this booking

          </li>

          <li>

            Check-in counters at all airports close 60 minutes before

            departure

          </li>

          <li>

            Your baggage shouldn't weigh more than the limits

            mentioned above.

          </li>

          <li>

            Carry your photo identification and print this ticket. You

            will need them as proof of identity while checking-in.

          </li>

          <li>

            For hassle free refund processing, cancel/amend your

            tickets with Travel Engine Customer Care instead of

            doing so directly with airline.

          </li>

        </ul>

      </td>

    </tr>

  </table>



</body>

</html>