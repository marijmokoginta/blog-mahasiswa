<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row min-vh-100 align-items-center ">
        <div class="row justify-content-center align-items-center p-4 rounded min-vh-60 bg-image-random">
            <div class="col-lg-5 text-light">
                <h1><a href="/" class="text-decoration-none text-light">Blog Mahasiswa</a></h1>
                <p>Sign Up</p>
                <small>Created by: Ma'rij Mokoginta</small>
            </div>
            <div class="col-lg-5">
                <form action="/register" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-floating @error('name') is-invalid @enderror" placeholder="name" name="name" required value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-floating @error('email') is-invalid @enderror" placeholder="email" name="email" required value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-floating @error('password') is-invalid @enderror" placeholder="password" name="password" required>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                </form>
                <small class="text-light">already taken? <a href="/login" class="text-decoration-none">Sign In</a></small>
            </div>
        </div>
    </div>
</div>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
