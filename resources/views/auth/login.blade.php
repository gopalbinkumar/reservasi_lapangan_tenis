<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Page</title>
    <link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="login-header">
                <h2>LOGIN</h2>
                <p>Silakan masuk menggunakan akun anda</p>
            </div>
            <form class="login-form">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Lupa Password?</a>
                    </div>
                    <button type="submit" class="login-btn">Masuk</button>
                </div>
            </form>
            <div class="login-footer">
                <p>Belum punya akun? <a href="{{ url('/register') }}">Daftar</a></p>
            </div>
        </div>
    </div>
</body>
</html>