<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/all.min.js"/>
    <link href='https://cdn.fontcdn.ir/Font/Persian/Lotus/Lotus.css' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>حساب کاربری</title>

</head>


<body class="bg-light" style="font-family: 'Lotus', sans-serif; font-weight: normal;">

<?php
require_once ('php/header.php');

?>


<div class="container">

    <div class="c-login__box"
         style="text-align :center;border:1px solid #ededed; width: 350px; height: 450px;   margin-left: 370px; top: 30%; position: absolute; ">
        <form class="c-login__form">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="154" height="41"
                 viewBox="0 0 68 19" style="margin-top: 25px;">
                <defs>
                    <path id="a" d="M0 18.174h67.903V.03H0z"/>
                </defs>
                <g fill="none" fill-rule="evenodd">
                    <path fill="#EF5661" d="M54 14h2V0h-2z"/>
                    <path fill="#76787A" d="M28 15h2V4h-2zM12 15h2V4h-2z"/>
                    <g>
                        <path fill="#EF5661"
                              d="M65.657 11.967h-4.51c-.596 0-1.182-.587-1.182-1.184V7.318c0-.57.543-1.058 1.182-1.058h4.51v5.707zm-5.142-7.965c-1.554 0-2.797 1.259-2.797 2.836v4.572c0 1.586 1.216 2.806 2.797 2.806h7.388V4.002h-7.388zM49.83 11.967h-4.51c-.596 0-1.182-.587-1.182-1.184V7.318c0-.57.543-1.058 1.182-1.058h4.51v5.707zm-5.142-7.965c-1.554 0-2.797 1.259-2.797 2.836v4.572c0 1.586 1.216 2.806 2.797 2.806h7.388V4.002h-7.388z"/>
                        <mask id="b" fill="#fff">
                            <use xlink:href="#a"/>
                        </mask>
                        <path fill="#EF5661" d="M31.66 14.216h2.246V.03H31.66z" mask="url(#b)"/>
                        <path fill="#EF5661" d="M41.041 4.002h-2.917l-4.218 5.107 4.218 5.107h2.917l-4.218-5.107z"
                              mask="url(#b)"/>
                        <path fill="#76787A"
                              d="M18.083 10.783V7.318c0-.57.543-1.058 1.182-1.058h4.51v5.707h-4.51c-.596 0-1.182-.587-1.182-1.184zm7.938-6.78h-7.388c-1.555 0-2.797 1.258-2.797 2.834v4.573c0 1.586 1.216 2.806 2.797 2.806h7.388V4.002z"
                              mask="url(#b)"/>
                        <path fill="#76787A"
                              d="M23.774 11.686v3.05c0 .597-.586 1.185-1.181 1.185h-4.511l1.698 2.253h3.438c1.582 0 2.798-1.22 2.798-2.805v-3.683h-2.242zM11.883 2.282h2.247V.03h-2.247zM27.713 2.282h2.247V.03h-2.247zM7.938 11.958H3.43c-.64 0-1.182-.487-1.182-1.057v-.115V7.308c0-.57.542-1.057 1.181-1.057h4.51v5.707zm0-11.928v3.972H2.797C1.216 4.002 0 5.222 0 6.808v4.573c0 1.577 1.242 2.835 2.797 2.835h7.388V.03H7.938z"
                              mask="url(#b)"/>
                    </g>
                </g>
            </svg>


        </form>


        <p style="right: 9%; position: absolute; padding-top: 25px;font-weight: 700;
    margin-bottom: 8px;     font-size: 18px;
    line-height: 50px; color: #232933;">
            ورود / ثبت‌نام
        </p>

        <span style="    font-size: 1rem;
    line-height: 21px;
    color: #62666d;
    margin-bottom: 20px; right: 9%; position: absolute; margin-top: 75px; direction: rtl;">
                    شماره موبایل یا پست الکترونیک  خود را وارد کنید.
                </span>

        <input type="text" placeholder="   شماره موبایل یا پست الکترونیک " style="border: 1px solid #e0e0e2; outline: 0;
    font-size: 18px;
    line-height: 24px;
    width: 85%;
    color: #030a16; direction: rtl; margin-top:125px; height:44px;border-radius: 5px; ">
        <br>

        <button type="submit" style="margin-top: 25px;width: 85%; padding: 9px 16px;

    font-size: 1.5rem;
    font-weight: 700;
    background-color: #ef394e;
    color: #fff;
    border: 1px solid #ef394e; border-radius: 5px;height: 49px;">
            <span style="text-align: center">
            ادامه</span>
        </button>

        <p class="c-login__footer" style=" text-align: center;
    color: #62666d;

    font-size: 15px;
    line-height: 25px;
    direction: rtl;
    padding: 45px 8px;
    ">
            با ورود و یا ثبت نام در دیجی‌کالا شما
            <a href="" target="_blank">
                شرایط و قوانین
            </a>
            استفاده از سرویس های سایت دیجی‌کالا و
            <a href="" target="_blank">
                قوانین حریم خصوصی
            </a>
            آن را می‌پذیرید.
        </p>


    </div>
</div>


</body>
</html>
