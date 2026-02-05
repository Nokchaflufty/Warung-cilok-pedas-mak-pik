<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin - Warung Cilok Pedas Mak Pik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>
    <div class="container">
        <div class="illustration">
            <svg viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
                <circle cx="200" cy="150" r="50" fill="#c1121f"/>
                <rect x="175" y="200" width="50" height="100" fill="#c1121f"/>
                <rect x="160" y="300" width="80" height="20" fill="#c1121f"/>
                <circle cx="180" cy="140" r="10" fill="white"/>
                <circle cx="220" cy="140" r="10" fill="white"/>
                <path d="M190 160 Q200 170 210 160" stroke="white" stroke-width="3" fill="none"/>
                <circle cx="150" cy="320" r="15" fill="#ff6b6b"/>
                <circle cx="200" cy="320" r="15" fill="#ff6b6b"/>
                <circle cx="250" cy="320" r="15" fill="#ff6b6b"/>
                <text x="200" y="370" text-anchor="middle" font-family="Poppins, sans-serif" font-size="18" fill="#c1121f" font-weight="600">Warung Cilok Pedas</text>
                <text x="200" y="390" text-anchor="middle" font-family="Poppins, sans-serif" font-size="14" fill="#666">Mak Pik</text>
            </svg>
        </div>
        <div class="form-container">
            <h1>Register Admin</h1>
            <p class="subtitle">Daftar sebagai Admin Warung Cilok Pedas Mak Pik</p>
            <form>
                <div class="form-group">
                    <label for="nama">Nama Admin</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Konfirmasi Password</label>
                    <input type="password" id="confirm-password" name="confirm_password" placeholder="Konfirmasi password" required>
                </div>
                <button type="submit" class="btn-register">Daftar</button>
            </form>
            <div class="toggle">
                <a href="../admin/login.php">Kembali ke halaman login</a>
            </div>
        </div>
    </div>
</body>
</html>