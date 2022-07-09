<html>
<head>
    <title>Please Sign In</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="bg-image">
<div class="container">
    <div class="row min-vh-100 align-items-center ">
        <div class="row justify-content-center align-items-center p-4 rounded min-vh-60 bg-image-random">
            <div class="col-lg-6 text-light">
                <h1><a href="/" class="text-decoration-none text-light">Blog Mahasiswa</a></h1>
                <p>Sign In</p>
                <small>Created by: Ma'rij Mokoginta</small>
            </div>
            <div class="col-lg-4">
                @if(session()->has('REGISTERED'))
                    <div class="alert alert-success alert-dismissible fade-show" role="alert">
                        <small>{{ session('REGISTERED') }}</small>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('LOGIN_FAILED'))
                    <div class="alert alert-danger alert-dismissible fade-show" role="alert">
                        <small>{{ session('LOGIN_FAILED') }}</small>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-floating bg-transparent text-light @error('email') is-invalid @enderror" placeholder="email" name="email" autofocus value="{{ old('email') }}" required>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-floating bg-transparent text-light @error('password') is-invalid @enderror" placeholder="password" name="password" required>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                </form>
                <small class="text-light">new user? <a href="/register" class="text-decoration-none mt-3">Sign Up</a></small>
            </div>
        </div>
    </div>
</div>

<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
