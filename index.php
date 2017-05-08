<!DOCTYPE html>
<html>
    <head>
        <title>Paymexx Gateway Payment</title>
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
      <?php 
         include 'functions.php';
         $secretKey = 'MERCHANT-SECRET-KEY';
         $amount = 10050.50;
         $total = encrypt3Des($amount,$secretKey);
      ?>
        <div class="container">
            <h1><b>Test Web Store</b></h1>
            <h2>Checkout </h2>
           <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-8 col-sx-8">
            <table  class="table table-striped table-hover table-responsive">
                <tr>
                    <th class="masthead">Items</th>
                    <th class="masthead">Quantity</th>
                    <th class="masthead">Price</th>
                </tr>
                <tr>
                    <td><b>Tommy Hilfiger Jeans</b></td>
                    <td>1</td>
                    <td><b>&#8358; 1200.50</b></td>
                </tr>
                <tr>
                    <td><b>Versace Gold Bracelet</b></td>
                    <td>2</td>
                    <td><b>&#8358; 1500.00</b></td>
                </tr>
                <tr>
                    <td><b>Gucci Handbags</b></td>
                    <td>3</td>
                    <td><b>&#8358; 6350.00</b></td>
                </tr>
                <tr>
                    <td colspan="2" class="aggregate"><b>Total</b></td>
                    <td class="aggregate"><b>&#8358; 9,050.50</b></td>
                </tr>
                <tr>
                    <td colspan="2" class="aggregate"><b>Shipping</b></td>
                    <td class="aggregate"><b>&#8358; 1000.00</b></td>
                </tr>
                <tr>
                    <td colspan="2" class="aggregate"><b>Total + Shipping</b></td>
                    <td class="aggregate"><b>&#8358; 10,050.50</b></td>
                </tr>
            </table>
               </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-sx-4">
                    <div class="checkout">
                        <h3>Order Summary</h3><div style="font-size:15px;">
                        <table  width="100%">
                            <tr>
                                <td width="60%">Items</td>
                                <td width="40%"><b>&#8358; 9,050.50</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><br/></td>
                            </tr>
                            <tr>
                                <td width="60%">Shipping and Handling</td>
                                <td width="40%"><b>&#8358; 1000.00</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><br/></td>
                            </tr>
                            <tr>
                                <td width="60%">Total</td>
                                <td width="40%"><b>&#8358; 10,050.50</b></td>
                            </tr>
                        </table></div><br/>
                        <div style="border:#333; width:100%;"></div>
                        <h3>Shipping Address</h3>
                        <p>55 Kanike Street, Ikoyi, Lagos</p>
                        <div style="border:#333; width:100%;"></div>
                        <h3>Billing Information</h3>
                        <p>John Sparks</p>
                        <p>55 Kanike Street, Ikoyi, Lagos</p>
                        <br/>
                        <!-- Append payment form -->
                        <input type="hidden" name="pmx_product" id="pmx_product" value="" >
                        <input type="hidden" name="pmx_email" id="pmx_email" value="" >
                        <input type="hidden" name="pmx_phone" id="pmx_phone" value="" >
                        <input type="hidden" name="pmx_firstname" id="pmx_firstname" value="" >
                        <input type="hidden" name="pmx_lastname" id="pmx_lastname" value="">
                        <input type="hidden" name="pmx_city" id="pmx_city" value="" >
                        <input type="hidden" name="pmx_address" id="pmx_address" value="" >
                        <input type="hidden" name="pmx_postcode" id="pmx_postcode" value="" >
                        <input type="hidden" name="pmx_country" id="pmx_country" value="" >
                        <input type="hidden" name="pmx_amount" id="pmx_amount" value="<?php echo $total;   ?>" >
                        <input type="hidden" name="pmx_response_url" id="pmx_response_url" value="confirm.php" >
                        <input type="hidden" name="pmx_mid" id="pmx_mid" value="" >
                        <input type="hidden" name="pmx_currency" id="pmx_currency" value="">
                        <input type="hidden" name="pmx_env" id="pmx_env" value="" >
                        <p style="text-align:center;"><button class="z-gateway-btn" id="pmx_paynow-btn" > </button></p>
                      
                    </div>
                </div>
        </div>
            
    <!---- Embed Paymexx  API --->
<script src="https://paymexx.com/gateway/1.0/paymexx.js" type="text/javascript"></script>

    </body>
</html>
