<?php
    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    //or, if you DO want a file to cache, use:
    //header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)
?>

<!DOCTYPE <!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Trang chủ</title>
        <link rel="shortcut icon" href="img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--
        <link rel="stylesheet" type="text/css" media="screen" href="index.css">
        <script src="index.js"></script>
        -->

        <!--Google adsense-->
        <!--
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-2817105554366366",
                enable_page_level_ads: true
            });
        </script>
        -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!--
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134530849-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-134530849-4');
        </script>
        -->

        <style>
            * {
                padding: 0px !important;
                margin: 0px !important;
                box-sizing: border-box;
            }

            /*Hide scrollbar*/
            body::-webkit-scrollbar {
                display: none;
                /*Firefox*/
                /*scrollbar-width: none;*/
            }



            body {
                overflow: auto;
            }

            /*Google search*/
            h1 {
                text-align: center !important;
                position: absolute !important;
                overflow: hidden !important;
                width: 0px !important;
                height: 0px !important;
            }
        </style>

    </head>

    <body>

        <h1>Trang chủ</h1>

    </body>

</html>