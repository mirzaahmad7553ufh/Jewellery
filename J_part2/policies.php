<?php
session_start();
$show_name = false;

if (!isset($_SESSION["logedin"])) {
    // header("Location:login.php");
} else if (isset($_SESSION["logedin"])) {
    $show_name = true;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AS Collection-Privacy</title>
    <link rel="icon" type="img/jpg" href="favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link  type="stylesheet" href="css/style.css"> -->
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="partials/style.css">
</head>
<style>

</style>

<body style="background-color: #000000">
    <!-- navigation -->
    <div><?php
            include 'partials/nav.php';
            ?></div>
    <!-- navbar end -->


    <!-- <div class="change" id="ty"> -->

        <!-- content -->
        <div class="main  " style="background-color: #181510; height:100%; margin-left:0px; padding-left:0px; overflow: hidden;">
            <div class="container  py-4 col-10">

                <h3 class="color-grey">PRIVACY POLICY</h3>
                <hr class="line text-light" style="height: 0.4px;padding-top:1px;">
                <div class="row py-2">
                    <div class="col-md-12 color-grey">
                        <h4>AS Collection Privacy Policy</h4>
                        <p style="text-transform: lowercase;">This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a
                            purchase from www.alacouture.com (the “Site”).</p>
                        <h4>PERSONAL INFORMATION WE COLLECT</h4>
                        <p style="text-transform: lowercase;">When you visit the Site, we automatically collect certain information about your device, including information about your
                            web browser, IP address, time zone, and some of the cookies that are installed on your device. Additionally, as you browse the Site, we collect information
                            about the individual web pages or products that you view, what websites or search terms referred you to the Site, and information about how you interact with
                            the Site. We refer to this automatically-collected information as “Device Information.”</p>
                        <h4>We collect Device Information using the following technologies:</h4>
                        <p style="text-transform: lowercase;">- “Cookies” are data files that are placed on your device or computer and often include an anonymous unique identifier.
                            For more information about cookies, and how to disable cookies, visit http://www.allaboutcookies.org.</p>
                        <p style="text-transform: lowercase;">-“Web beacons,” “tags,” and “pixels” are electronic files used to record information about how you browse the Site.</p>
                        <p style="text-transform: lowercase;">- “Log files” track actions occurring on the Site, and collect data including your IP address, browser type, Internet
                            service provider, referring/exit pages, and date/time stamps.
                            - “Web beacons,” “tags,” and “pixels” are electronic files used to record information about how you browse the Site.<br><br>

                            Additionally when you make a purchase or attempt to make a purchase through the Site, we collect certain information from you, including your name, billing address, shipping address,
                            payment information (including credit card numbers, email address, and phone number. We refer to this information as “Order Information.”<br><br>

                            When we talk about “Personal Information” in this Privacy Policy, we are talking both about Device Information and Order Information.<br><br>

                        </p>
                        <h4>HOW DO WE USE YOUR PERSONAL INFORMATION?</h4>
                        <p style="text-transform: lowercase;">We use the Order Information that we collect generally to fulfill any orders placed through the Site
                            (including processing your payment information, arranging for shipping, and providing you with invoices and/or
                            order confirmations). Additionally, we use this Order Information to:</p>
                        <h4>Communicate with you;</h4>
                        <p style="text-transform: lowercase;">Screen our orders for potential risk or fraud; and<br>
                            When in line with the preferences you have shared with us, provide you with information or advertising relating to our products or services.<br><br><br>
                            We use the Device Information that we collect to help us screen for potential risk and fraud (in particular, your IP address),
                            and more generally to improve and optimize our Site (for example, by generating analytics about how our customers browse and interact with the Site,
                            and to assess the success of our marketing and advertising campaigns).</p>

                        <h4>SHARING YOUR PERSONAL INFORMATION</h4>
                        <p style="text-transform: lowercase;">We share your Personal Information with third parties to help us use your Personal Information, as described above.
                            For example, we use Shopify to power our online store--you can read more about how Shopify uses your Personal Information here: https://www.shopify.com/legal/privacy.
                            We also use Google Analytics to help us understand how our customers use the Site--you can read more about how Google uses
                            your Personal Information here: https://www.google.com/intl/en/policies/privacy/. You can also opt-out of Google Analytics
                            here: https://tools.google.com/dlpage/gaoptout.<br><br>

                            Finally, we may also share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or
                            other lawful request for information we receive, or to otherwise protect our rights.</p>

                        <h4>BEHAVIOURAL ADVERTISING</h4>
                        <p style="text-transform: lowercase;">As described above, we use your Personal Information to provide you with targeted advertisements or marketing communications
                            we believe may be of interest to you. For more information about how targeted advertising works,
                            you can visit the Network Advertising Initiative’s (“NAI”) educational page at http://www.networkadvertising.org/understanding-online-advertising/how-does-it-work.<br><br>

                            You can opt out of targeted advertising by:<br>
                            FACEBOOK - https://www.facebook.com/settings/?tab=ads<br>
                            GOOGLE - https://www.google.com/settings/ads/anonymous<br>
                            BING - https://advertise.bingads.microsoft.com/en-us/resources/policies/personalized-ads<br>Additionally, you can opt out of some of these services by visiting the Digital Advertising Alliance’s opt-out portal at: http://optout.aboutads.info/.</p>
                    </div>
                </div>
            </div>
</body>

</html>

<!-- </div> -->


<!-- footer -->
<div><?php
        include 'partials/footer.php';
        ?></div>