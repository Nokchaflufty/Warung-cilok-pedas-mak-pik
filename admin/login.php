<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Warung Cilok Pedas Mak Pik</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="login container">
            <div class="login-logo">
                🌶️
            </div>

            <div class="login-header">
                <h1>Login Admin</h1>
                <p>Masuk untuk mengelola Warung Cilok Pedas Mak Pik</p>
            </div>

            <form action="proses-login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Masukan Username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password" required>
                </div>

                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ingat Saya</label>
                </div>

                <button type="submit" class="btn-login">Masuk</button>
            </form>

            <div class="back-to-home">
                <a href="../index.php">← Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>
</body>
</html>