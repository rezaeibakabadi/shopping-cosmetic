<?php


session_start ();

require_once ('php/CreateDatabase.php');
require_once ('./php/component.php');


$database = new CreateDatabase("Productdb", "producttb");

if (isset($_POST['add'])) {
//print_r ($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column ($_SESSION['cart'], "product_id");


        if (in_array ($_POST['product_id'], $item_array_id)) {
            echo "<script>alert('این کالا قبلا به سبد خرید شما اضافه شده است...!')</script>";
            echo "<script>window.location = 'index.php'</script>";

        }
        else {

            $count = count ($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }
    else {

        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        $_SESSION['cart'][0] = $item_array;
        print_r ($_SESSION['cart']);
    }
}



?>


<!doctype html>
<html lang="en,fa">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کازماتیک آنلاین</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" />


    <link href='https://cdn.fontcdn.ir/Font/Persian/Lotus/Lotus.css' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css"
       >

    <link rel="stylesheet" href="style.css">



</head>
<body style="font-family: 'Lotus', sans-serif; font-weight: normal;" >

<?php
require_once ("php/header.php");
?>


<div class="container" style="font-family: 'Lotus', sans-serif; font-weight: normal;">
    <div class="row text-center py-5" style="font-family: 'Lotus', sans-serif; font-weight: normal;">

        <?php
        $result = $database->getData ();
        while ($row = mysqli_fetch_assoc ($result)) {
            component ($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);



        }

        ?>

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