<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Registration Page</title>
    <link rel="stylesheet" href="{{asset('css/auth/register.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="register-box">
            <div class="register-header">
                <h2>REGISTER</h2>
                <p>Isi detail dibawah ini untuk daftar</p>
            </div>
            <form class="register-form" id="registerForm" onsubmit="return validateForm()">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" id="fullname" placeholder="Nama Lengkap" required>
                    </div>
                    
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="tel" id="phone" placeholder="Nomor HP" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-location-dot"></i>
                        <textarea id="address" placeholder="Alamat" required></textarea>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" placeholder="Password" required>
                        <i class="far fa-eye toggle-password" onclick="togglePassword('password')"></i>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="confirmPassword" placeholder="Konfirmasi Password" required>
                        <i class="far fa-eye toggle-password" onclick="togglePassword('confirmPassword')"></i>
                    </div>

                    <button type="submit" class="register-btn">Buat Akun</button>
                </div>
            </form>
            <div class="register-footer">
                <p>Sudah memiliki akun? <a href="{{ url('/login') }}">Masuk</a></p>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }

        function validateForm() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const phone = document.getElementById('phone').value;
            
            // Password validation
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }

            if (password.length < 8) {
                alert("Password must be at least 8 characters long!");
                return false;
            }

            // Phone number validation
            const phoneRegex = /^[0-9]{10,13}$/;
            if (!phoneRegex.test(phone)) {
                alert("Please enter a valid phone number (10-13 digits)!");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>