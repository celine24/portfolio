<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Mon portfolio</title>
    <link rel="stylesheet" href="css/_style.css" type="text/css" />
    <link rel="stylesheet" href="css/menu_mobile/slicknav.css" type="text/css" />
    <link rel="stylesheet" href="font/fontawesome/font-awesome.css" type="text/css" />
</head>
<body>
    <div class="main-wrapper">

        <!-- Menu -->
        <?php include("partials/menu.php"); ?>
        <!-- /Menu -->

        <div class="main-container">

            <!-- Home -->
            <?php include("partials/home.php"); ?>
            <!-- /Home -->

            <!-- Portfolio -->
            <?php include("partials/portfolio.php"); ?>
            <!-- /Portfolio -->

            <!-- About -->
            <?php include("partials/about.php"); ?>
            <!-- /About -->

            <!-- Contact -->
            <?php include("partials/contact.php"); ?>
            <!-- /Contact -->
        </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/structure.js"></script>
    <script type="text/javascript" src="js/portfolio.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/menu_mobile/jquery.slicknav.min.js"></script>
    <script type="text/javascript" src="js/menu_mobile/menu.js"></script>
</body>
</html>
<?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
unset($_SESSION['sending']);
unset($_SESSION['errors']);

