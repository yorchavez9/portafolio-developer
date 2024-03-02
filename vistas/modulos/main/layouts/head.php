
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Jorge Chávez Huincho</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="vistas/dist/main/assets/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="vistas/dist/main/assets/css/plugins/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="vistas/dist/main/assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="vistas/dist/main/assets/css/style.css">

    <!-- Dark css here -->
    <link rel="stylesheet" href="vistas/dist/main/assets/css/dark.css">

    <!-- Rtl css here -->
    <link rel="stylesheet" href="vistas/dist/main/assets/css/rtl.css">

    <!-- FontAweson -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        }
        if (localStorage.getItem("theme-color") === "light") {
            document.documentElement.classList.remove("dark");
        }
    </script>

</head>

<body class="bg-dark_primary_bg">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->