<?php
$s = $_GET; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Paymexx Confirmation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="  crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <style>
            body{ font-family:'Open Sans';font-size:16px;}
            h1,h2,h3{
                color:#0c4775;
            }
            h3{
               font-size:22px;
               font-weight:600;
            }
            .spacer{ margin: 1% 2%;width:auto;clear:both;}
            .masthead{ background:#40babd; color:#fff; font-weight:600;}
            .checkout{
                margin:1.2%;
                padding:2% 6%;
                background:#eeeeee;
            }
            table.table > tr > td{
                padding:2%;
            }
            .right{text-align:right;}
             .aggregate{ background:#40babd; color:#333; font-weight:600;font-size:20px;}
        </style>
    </head>
    <body>
        <div class="spacer"></div>
       <div class="container">
            <h1><b>Test Web Store</b></h1>
            <h2>Payment Confirmation </h2>
            <br/><br/><br/>
            <div class="row">
                <div class="col-sm-2 col-sx-2 col-md-2 col-lg-2"></div>
                <div class="col-sm-8 col-sx-8 col-md-8 col-lg-8">
<table>
    <tr>
        <td><p>Amount</p></td>
        <td><h2><?php  echo $s['currency']; ?><?php  echo $s['amount']; ?></h2></td>
    </tr>
    <tr>
        <td>Customer</td>
        <td><h2><?php  echo $s['cust_id']; ?></h2></td>
    </tr>
    <tr>
        <td>Transaction Ref:</td>
        <td><h2><?php  echo $s['transaction_ref']; ?></h2></td>
    </tr>
    <tr>
        <td>Message</td>
        <td><h2><?php  echo $s['response_message']; ?></h2></td>
    </tr>
  
</table>

<br/><br/>

<a href="index.html">Back to Checkout page</a>
<br/><br/><br/>
            
            
            
            
       </div>
            </div></div>
    </body>
</html>
