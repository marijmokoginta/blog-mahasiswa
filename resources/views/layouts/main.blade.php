<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Blog Mahasiswa | {{$title}}</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<section class="header">
    @include('partials.navbar')
    @yield('text-box')
</section>

<div class="container mt-4">
    @yield('container')
</div>

<section class="footer container">
    <div class="row text-center mt-5">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ducimus expedita voluptatem?
            Amet animi magni molestiae placeat provident rerum ut! Atque, autem consequuntur ex illo quas similique
            suscipit. Praesentium, voluptas.</p>
        <div class="d-flex align-items-center justify-content-center">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram  m-2" aria-hidden="true"></i>
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
        </div>
    </div>
</section>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
