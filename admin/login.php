<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Warung Cilok Pedas Mak Pik</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="container-fluid d-flex align-items-center justify-content-center min-vh-100">
        <div class="card login-card shadow-lg">
            <div class="card-body p-4">
                <h2 class="card-title text-center mb-4 fw-bold">Login Admin</h2>
                <p class="text-center text-muted mb-4">Warung Cilok Pedas Mak Pik</p>
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username Anda" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password Anda" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-semibold mb-3">Login</button>
                </form>
                <div class="text-center">
                    <a href="register.html" class="btn btn-secondary w-100 fw-semibold">Register</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>