<?php
// Site
$site_info = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo strip_tags($site_info->tentang) . ', ' . $title ?>">
    <meta name="keywords" content="<?php echo $site_info->keywords . ', ' . $title  ?>">
    <meta name="author" content="<?php echo $site_info->namaweb ?>">
    <meta name="keywords" content="poltekkes">
    <meta name="keywords" content="poltekkes jakarta 3">
    <meta name="keywords" content="poltekkes jakarta">
    <meta name="keywords" content="jakarta 3">
    <meta name="keywords" content="poltekkes 3">
    <meta name="keywords" content="poltekkes jati">
    <!-- icon -->
    <link rel="shortcut icon" href="<?php echo $this->website->icon(); ?>">
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Plugin css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/animate.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/flexslider.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/jquery.nstSlider.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/lightcase.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/fonts/flaticon.css" />


    <!-- own style css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/style.css" media="all" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/rtl.css" media="all" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/responsive.css" media="all" />
    <!-- end own style css -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/css/swiper.min.css" />

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/datatables/dataTables.bootstrap4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/select2/select2.min.css">
    <!-- dflip StyleSheet -->
    <link href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/dflip/css/dflip.min.css" rel="stylesheet">
    <!-- dflip Icons Stylesheet -->
    <link href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/dflip/css/themify-icons.min.css" rel="stylesheet">

    <!-- Recaptcha Google -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <style type="text/css" media="screen">
        p {
            margin-bottom: 15px;
        }
    </style>

    <!-- Running Text On Modals Popup -->


</head>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function() {
        var options = {
            call: "+6281112021333", // Call phone number
            whatsapp: "+6281113102256", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "call,whatsapp", // Order of buttons
        };
        var proto = 'https:',
            host = "getbutton.io",
            url = proto + '//static.' + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

<!-- google analytic -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-77QD9RNNKJ"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-77QD9RNNKJ', {
        'debug_mode': true
    });
</script>
<!-- end google analytic -->


<body>
    <div id="google_translate_element"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!--Klik kanan-->
    <script type="text/javascript">
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        }, false);

        // Menonaktifkan pintasan keyboard tertentu
        document.addEventListener('keydown', function(e) {
            // Disable F12 key
            if (e.key === 'F12') {
                e.preventDefault();
            }

            // Disable Ctrl+Shift+I (DevTools), Ctrl+U (View Source), Ctrl+Shift+J (Console)
            if (e.ctrlKey && (e.shiftKey && (e.key === 'I' || e.key === 'J')) || e.key === 'U') {
                e.preventDefault();
            }
        }, false);
    </script>