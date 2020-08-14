<?php


function component ($productname, $producprice, $productimg, $productid)

{

    $element = "

<div class=\"col-md-3 col-sm-6 my-3 my-md-0\" style='padding: 8px 8px;'>
            <form action=\"index.php\" method=\"post\">
                <div class=\"card shadow\">
                    <div>
                        <img src=\"$productimg\" alt=\"Image\" class=\"img-fluid card-img-top\" style=\"padding: 4px 4px; width: 230px;height: 230px; background-color:#fff;\">
                </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$productname </h5>
                        <h6>
                        
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"far fa-star\"></i>
                        </h6>
                        <p class=\"card-text\">
                            
                        </p>
                        <h5><hr>
                            <p>:قیمت </p>

                            <del><small class=\"text-secondary\">$producprice  <span>تومان</span></small></del>
                            <br>
                            <span class=\"price\">  
                            
                            <span> تومان</span> 
                              $producprice 
      
                             </span>
                        </h5>

                        <button type=\"submit\" class=\"btn btn-success my-3 \" name=\"add\" style=\"border: 0;padding: 8px;\">اضافه کردن به سبد خرید <i class=\"fas fa-shopping-cart\"></i></button>
                        <input type='hidden' name='product_id' value='$productid'>
                    </div>
                </div>
            </form>
        </div>

";
    echo $element;
}

function cartElement ($productimg, $productname, $productprice, $productid)
{
    $element = "
    
     <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\" style='border-radius: 5px;'>
                            <div class=\"col-md-3\" style='padding: 10px 0;'>
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\" style='padding: 29px 29px;'>

                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\" style='font-size: 20px;'>قیمت فروش :</small>
                                <h5 class=\"pt-2\"> <span>تومان</span> $productprice </h5>
                                <button type=\"submit\" class=\"btn btn-success\">ذخیره خرید</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">حذف کردن خرید</button>
                            </div>
                            <div class=\"col-md-3 py-5\" style='text-align: center;'>

                                <div style='padding-top: 25px;'>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\">
                                        <i class=\"fas fa-minus\" style=\"text-align: center; padding: 0 9px; font-weight: bold;font-size: 15px; outline: 0;\">-</i>
                                    </button>
                                    <input type=\"text\" value=\"1\" style=\"text-align: center;\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\">
                                        <i class=\"fas fa-plus\" style=\"text-align: center; padding: 0 9px;font-weight: bold; font-size: 15px;\">+</i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
    
    ";

    echo $element;

}
















