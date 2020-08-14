<?php

session_start ();

require_once ("php/CreateDatabase.php");
require_once ("php/component.php");


$db = new CreateDatabase("Productdb", "Producttb");


if (isset($_POST['remove'])){

if($_GET['action'] == 'remove'){

    foreach ($_SESSION['cart'] as $key => $value)
    {

        if ($value["product_id"] == $_GET['id'] )
        {

            unset($_SESSION['cart'][$key]);
            echo "<script>alert('کالا حذف شده است...!')</script>";
            echo "<script>window.location = 'cart.php</script>";
        }
    }
}

}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>* سبد خرید *</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/all.min.js"/>
    <link href='https://cdn.fontcdn.ir/Font/Persian/Lotus/Lotus.css' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light" style="font-family: 'Lotus', sans-serif; font-weight: normal;">


<?php
require_once ('php/header.php');

?>

<div class="container-fluid">
    <div class="row px-5">

        <div class="col-md-7">
            <div class="shopping-cart" style="padding: 8% 0;">

                <h4 style="background-color: aquamarine;text-align: right; padding: 15px;"> سبد خرید من </h4>
                <hr>

                <?php

                $total = 0;

                if (isset($_SESSION['cart'])) {

                    $product_id = array_column ($_SESSION['cart'], "product_id");

                    $result = $db->getData ();
                    while ($row = mysqli_fetch_assoc ($result)) {

                        foreach ($product_id as $id) {

                            if ($row['id'] == $id) {

                                cartElement ($row['product_image'], $row['product_name'], $row['product_price'],$row['id']);

                                $total = $total + (int)$row['product_price'];

                            }
                        }
                    }


                }
                else {

                    echo " <h4 style='direction: rtl;text-align: right;'>خالی است </h4> ";
                }

                ?>

            </div>

        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-light h-25" style="padding-left: 24px; margin: 35px;" >

            <div class="pt-4">
                <h5 style="text-align: right; font-weight: bolder; font-size: 25px;">: جزئیات قیمت </h5>
                <hr>

                <div class="row price-details" style="padding: 3%  4%; ">
                    <div class="col-md-6" >
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $count = count ($_SESSION['cart']);
                            echo "<h6 style='font-size: 25px;'>قیمت($count موارد)</h6>";

                        }
                        else {
                            echo "<h6>Price(0 items)</h6>";
                        }
                        ?>
                        <h6 style="font-size: 25px;">هزینه های تحویل</h6>
                        <hr>
                        <h6 style="font-size: 25px;">مبلغ قابل پرداخت</h6>

                    </div>
                    <div class="col-md-6">

                        <h6 style="font-size: 25px;"> <span>تومان</span> <?php
                            echo number_format("$total")."<br>" ;

                            ?></h6>
                        <h6 class="text-warning" style="font-size: 25px;">رایگان</h6>
                        <hr>
                        <h6 style="font-size: 25px;"><span>تومان</span> <?php
                            echo number_format("$total")."<br>" ;

                            ?></h6>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>
</html>