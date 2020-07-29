<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/node_modules/bootstrap-grid/dist/grid.min.css">
    <link rel="stylesheet" href="/node_modules/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="/node_modules/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="/node_modules/flexmasonry/dist/flexmasonry.css">
    <link rel="stylesheet" href="/css/layout/layout.css">
    <link rel="stylesheet" href="css/checkbox.css">
    <link rel="stylesheet" href="/css/styles/styles.css">

    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/node_modules/slick-carousel/slick/slick.min.js"></script>
    <script src="/node_modules/flexmasonry/dist/flexmasonry.js"></script>
</head>
    <div class="page">
        <nav class="top-nav">
            <div class="brand">
                <img src="/img/logo.png" alt="">
                <div>
                    <h1>Arab American Association</h1>
                    <h2>Of Engineers & Architects</h2>
                </div>
            </div>

            <div class="links">
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Opportunities</a></li>
                    <li><a href="#">Who We Are</a></li>
                    <li><a href="#">Archive</a></li>
                </ul>
            </div>
        </nav>
        </div>
        
        <body>
        @yield('content')
        </body>
<script>
    $(".slicker").slick({
        fade: true
    });

    FlexMasonry.init('.masonry', {
        responsive: false,
        numCols: 3
    });
</script>
</html>