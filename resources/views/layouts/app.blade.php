<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Task Manager</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Task Manager</a>
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to Task Manager</h1>
            <p class="lead">Organize your tasks efficiently with Task Manager.</p>
            <hr class="my-4">
            <p>Get started now by logging in or creating an account.</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="d-grid gap-2">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-success btn-lg mt-2">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Konten Aplikasi akan Ditampilkan di Sini -->
        @yield('content')
    </div>

    <!-- jQuery dan Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
