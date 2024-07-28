<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @if(session('message'))
            <p>{{ session('message') }}</p>
        @endif
        <form action="{{ route('postLogin') }}" method="POST">
            @csrf
            <div class="mb-3">
                Email:
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                Password:
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                
                <input type="checkbox" name="remember" id="remember">
                <label for="remember"> remember me</label>
            </div>
            <button class="btn btn-primary" type="submit">Đăng nhập</button>
        </form>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
