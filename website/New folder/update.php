<?php
// including the database connection file
include_once("config.php");

if (isset($_POST['update']))  {
    $paymentid =  $_POST['ID'];
    $name = $_POST['nameoncard'];
    $card =  $_POST['cardnumber'];
    $expMonth =  $_POST['Expmonth'];
    $expYear =  $_POST['Expyear'];
    $cvv =  $_POST['CVV'];

    if (empty($name) || empty($card) || empty($expMonth) || empty($expYear) || empty($cvv)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($card)) {
            echo "<font color='red'>Card Number field is empty.</font><br/>";
        }

        if (empty($expMonth)) {
            echo "<font color='red'>Expire Month is empty.</font><br/>";
        }

        if (empty($expYear)) {
            echo "<font color='red'>Expire Year is empty.</font><br/>";
        }

        if (empty($cvv)) {
            echo "<font color='red'>CVV is empty.</font><br/>";
        }
    } else {

        $result = mysqli_query($conn, "UPDATE payment SET nameoncard='$name', cardnumber='$card',Expmonth='$expMonth', Expyear='$expYear', CVV='$cvv' WHERE  ID=" . (int)$paymentid);

        if ($result) {
            echo '<script type="text/javascript">';
            echo ' alert("Card Updated Successfully!")';
            echo '</script>';
            echo "<script>window.location.assign('payment.php');</script>";
        } else {
            echo "Error updating card: " . mysqli_error($conn);
        }
    }
}


mysqli_close($conn);
?>




<!DOCTYPE HTML>
<html>
<head>
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="css/payment.css">
    <script src="js/payment.js"></script>
    <style>
        body {
            background-image: url("images/pay.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <form name="form" method="POST" action="payment.php" onsubmit="return validateForm()">
            <div class="row">
                <div class="col">
                    <fieldset>
                        <h3 class="title"> Amount Payable: $21</h3>
                    </fieldset>
                    <div class="input">
                        <span>ID:</span>
                        <input type="text" name="ID" placeholder="123" >
                    </div>

                    <div class="input">
                        <span>Name on card:</span>
                        <input type="text" name="nameoncard" placeholder="Sarah Davis" >
                    </div>

                    <div class="input">
                        <span>Card Number:</span>
                        <input type="text" name="cardnumber" placeholder="0000-1111-2222-3333"  >
                    </div>

                    <div class="flex">
                        <div class="input">
                            <span>Exp Month:</span>
                            <input type="text" name="Expmonth" placeholder="January"  >
                        </div>
                    </div>

                    <div class="flex">
                        <div class="input">
                            <span>Exp Year:</span>
                            <input type="text" name="Expyear" placeholder="2023"  >
                        </div>
                    </div>

                    <div class="input">
                        <span>CVV:</span>
                        <input type="text" name="CVV" placeholder="888"  >
                    </div>

                    <div class="input">
                        <span>Accepted Payment Methods:</span>
                        <img src="images/paymethods.png" alt="">
                    </div>
                </div>
            </div>

            <input type="submit" name="update" value="update" class="submitBtn">
        </form>
    </div>

</body>
</html>
