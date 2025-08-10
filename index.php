<?php
function loadContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $safePage = preg_replace('/[^a-zA-Z0-9_-]/', '', $page);
    $path = __DIR__ . '/pages/' . $safePage . '.php';

    if (file_exists($path)) {
        require_once $path;
    } else {
        require_once __DIR__ . '/404.php';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Amparo – Cuidando de quem não pode pedir ajuda</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./public/css/animate.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./public/css/magnific-popup.css">
    <link rel="stylesheet" href="./public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./public/css/jquery.timepicker.css">
    <link rel="stylesheet" href="./public/css/flaticon.css">
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>

    <?php
    require_once __DIR__ . '/templates/navbar.php';
    loadContent();
    require_once __DIR__ . '/templates/footer.php';
    ?>

    <!-- JS -->
    <script src="./public/js/jquery.min.js"></script>
    <script src="./public/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/jquery.easing.1.3.js"></script>
    <script src="./public/js/jquery.waypoints.min.js"></script>
    <script src="./public/js/jquery.stellar.min.js"></script>
    <script src="./public/js/jquery.animateNumber.min.js"></script>
    <script src="./public/js/bootstrap-datepicker.js"></script>
    <script src="./public/js/jquery.timepicker.min.js"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/jquery.magnific-popup.min.js"></script>
    <script src="./public/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="./public/js/google-map.js"></script>
    <script src="./public/js/main.js"></script>
    <script src="./public/js/main.js"></script>

</body>

</html>