<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>   
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <style >
            *{
                font-family: 'Roboto Condensed', sans-serif;
            }
        </style>
        <!-- Icon -->
        <link rel="stylesheet" href="assets/fonts/line-icons.css">
        <!-- Slicknav -->
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
        <!-- Animate -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Main Style -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!-- Responsive Style -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <title>proyecto</title>
    </head>
    <body>
        <header>
            <?php
                require_once('header.php');
            ?>
        </header>  
    <section>
        <div class="container">   
            <?php
                require_once('../routing.php'); // aqui trae la entidad que se desea ver
            ?>
        </div>
    </section>
            <?php
                //require_once('footer.php');
            ?>
    </body>
</html>
    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
        $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
        });
    </script>