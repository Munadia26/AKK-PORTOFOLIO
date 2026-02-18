<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Arti Kata Kita</title>
    
    <!-- Branding & Fonts -->
    <link rel="icon" href="<?= base_url('assets/img/logo-akk.png') ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* SOLID COLORS FROM LOGO */
            --cyan: #40E0D0;
            --yellow: #FFD700;
            --dark: #2C3E50;
            --dark-gray: #4A5568;
            --light-gray: #64748B;
            --bg-light: #F8FAFC;
            --white: #FFFFFF;
            --radius: 20px;
            --radius-sm: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark);
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Animated Background Pattern */
        body::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(64, 224, 208, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 215, 0, 0.08) 0%, transparent 50%);
            animation: backgroundShift 20s ease infinite;
        }

        @keyframes backgroundShift {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(-50px, -50px); }
        }

        /* Floating particles */
        .particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            animation: float 15s infinite;
        }

        .particle.cyan {
            background: rgba(64, 224, 208, 0.15);
        }

        .particle.yellow {
            background: rgba(255, 215, 0, 0.15);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) translateX(100px); opacity: 0; }
        }

        .login-wrapper {
            width: 100%;
            max-width: 480px;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .login-card {
            background: var(--white);
            backdrop-filter: blur(20px);
            padding: 50px 45px;
            border-radius: var(--radius);
            box-shadow: 0 20px 60px -15px rgba(0,0,0,0.3);
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Top Border - Cyan and Yellow Split */
        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 5px;
            background: var(--cyan);
        }

        .login-card::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 5px;
            background: var(--yellow);
        }

        /* Decorative Circles */
        .deco-circle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0.05;
        }

        .deco-circle-1 {
            width: 200px;
            height: 200px;
            top: -100px;
            right: -100px;
            background: var(--cyan);
        }

        .deco-circle-2 {
            width: 150px;
            height: 150px;
            bottom: -75px;
            left: -75px;
            background: var(--yellow);
        }

        .brand-logo-container {
            width: 120px;
            height: 120px;
            margin: 0 auto 25px;
            background: var(--dark);
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 15px 40px -10px rgba(0, 0, 0, 0.3);
            position: relative;
            animation: logoFloat 3s ease-in-out infinite;
            border: 3px solid var(--cyan);
        }

        @keyframes logoFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .brand-logo {
            width: 100px;
            height: auto;
        }

        .login-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            color: var(--cyan);
            margin-bottom: 8px;
            font-size: 2rem;
            letter-spacing: -0.5px;
        }

        .login-subtitle {
            font-size: 0.95rem;
            color: var(--light-gray);
            margin-bottom: 35px;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 24px;
            text-align: left;
            position: relative;
        }

        .form-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--dark-gray);
            margin-bottom: 10px;
            display: block;
            letter-spacing: 0.3px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--light-gray);
            font-size: 1.1rem;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .form-control {
            padding: 14px 16px 14px 48px;
            border-radius: var(--radius-sm);
            border: 2px solid #E2E8F0;
            background-color: var(--bg-light);
            font-size: 0.95rem;
            transition: all 0.3s ease;
            width: 100%;
            font-weight: 500;
        }

        .form-control:focus {
            background-color: var(--white);
            border-color: var(--cyan);
            box-shadow: 0 0 0 4px rgba(64, 224, 208, 0.1);
            outline: none;
        }

        .form-control:focus + .input-icon {
            color: var(--cyan);
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--light-gray);
            cursor: pointer;
            padding: 5px;
            z-index: 2;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: var(--cyan);
        }

        /* Button with Cyan background */
        .btn-primary {
            background: var(--cyan);
            border: none;
            padding: 15px;
            border-radius: var(--radius-sm);
            font-weight: 700;
            letter-spacing: 0.5px;
            width: 100%;
            margin-top: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px -5px rgba(64, 224, 208, 0.4);
            font-size: 1rem;
            position: relative;
            overflow: hidden;
            color: white;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px -5px rgba(64, 224, 208, 0.5);
            background: #3DD4C4;
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Alternative: Button with Yellow background */
        .btn-primary.yellow-variant {
            background: var(--yellow);
            color: var(--dark);
            box-shadow: 0 10px 25px -5px rgba(255, 215, 0, 0.4);
        }

        .btn-primary.yellow-variant:hover {
            background: #FFC700;
            box-shadow: 0 15px 35px -5px rgba(255, 215, 0, 0.5);
        }

        .alert-custom {
            border-radius: var(--radius-sm);
            font-size: 0.9rem;
            padding: 14px 16px;
            margin-bottom: 25px;
            border: none;
            display: flex;
            align-items: center;
            gap: 12px;
            text-align: left;
            animation: slideDown 0.4s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .alert-danger {
            background: #FEF2F2;
            color: #991B1B;
            border-left: 4px solid #EF4444;
        }

        .alert-danger i {
            font-size: 1.2rem;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 30px;
            font-size: 0.9rem;
            color: var(--light-gray);
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
        }

        .back-link:hover {
            color: var(--cyan);
            background-color: rgba(64, 224, 208, 0.05);
        }

        .footer-text {
            text-align: center;
            margin-top: 30px;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .footer-text strong {
            font-weight: 700;
            color: var(--yellow);
        }

        /* Responsive */
        @media (max-width: 576px) {
            .login-card {
                padding: 40px 30px;
            }

            .login-title {
                font-size: 1.75rem;
            }

            .brand-logo-container {
                width: 100px;
                height: 100px;
            }

            .brand-logo {
                width: 85px;
            }
        }

        /* Loading animation */
        .btn-primary.loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .btn-primary.loading::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            top: 50%;
            left: 50%;
            margin-left: -8px;
            margin-top: -8px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.6s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>

<!-- Floating Particles -->
<div class="particle cyan" style="width: 60px; height: 60px; left: 10%; animation-delay: 0s;"></div>
<div class="particle yellow" style="width: 40px; height: 40px; left: 80%; animation-delay: 2s;"></div>
<div class="particle cyan" style="width: 50px; height: 50px; left: 50%; animation-delay: 4s;"></div>
<div class="particle yellow" style="width: 30px; height: 30px; left: 70%; animation-delay: 6s;"></div>
<div class="particle cyan" style="width: 45px; height: 45px; left: 30%; animation-delay: 8s;"></div>

<div class="login-wrapper">
    <div class="login-card">
        <!-- Decorative Circles -->
        <div class="deco-circle deco-circle-1"></div>
        <div class="deco-circle deco-circle-2"></div>
        
        <!-- Brand Logo -->
        <div class="brand-logo-container">
            <img src="<?= base_url('assets/img/logo-akk.png') ?>" alt="AKK Logo" class="brand-logo">
        </div>
        
        <h1 class="login-title">Admin AKK</h1>
        <p class="login-subtitle">Arti Kata Kita Website</p>

        <!-- Notification -->
        <?php if($this->session->flashdata('pesan')): ?>
            <div class="alert alert-custom alert-danger">
                <i class="fas fa-exclamation-triangle"></i>
                <div>
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="<?= base_url('index.php/login/aksi_login'); ?>" method="post" id="loginForm">
            <div class="form-group">
                <label class="form-label">Username</label>
                <div class="input-wrapper">
                    <i class="fas fa-user input-icon"></i>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan username admin" required autocomplete="off">
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" name="password" id="passwordField" class="form-control" placeholder="Masukkan password" required>
                    <button type="button" class="password-toggle" onclick="togglePassword()">
                        <i class="fas fa-eye" id="toggleIcon"></i>
                    </button>
                </div>
            </div>

            <!-- Button dengan Cyan (default) -->
            <button type="submit" class="btn btn-primary" id="loginBtn">
                <span>Masuk</span>
                
            </button>

            <!-- ALTERNATIVE: Uncomment untuk button Yellow variant
            <button type="submit" class="btn btn-primary yellow-variant" id="loginBtn">
                <span>Masuk Dashboard</span>
                <i class="fas fa-arrow-right ms-2"></i>
            </button>
            -->
        </form>

        <a href="<?= base_url(); ?>" class="back-link">
            <i class="fas fa-home"></i>
            <span>Kembali ke Halaman Utama</span>
        </a>
    </div>
    
    <div class="footer-text">
        &copy; <?= date('Y'); ?> <strong>Arti Kata Kita</strong>. All Rights Reserved.
    </div>
</div>

<script>
    // Toggle Password Visibility
    function togglePassword() {
        const passwordField = document.getElementById('passwordField');
        const toggleIcon = document.getElementById('toggleIcon');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }

    // Form Submit Loading State
    document.getElementById('loginForm').addEventListener('submit', function() {
        const btn = document.getElementById('loginBtn');
        btn.classList.add('loading');
        btn.querySelector('span').textContent = 'Memproses...';
    });

    // Input Animation on Focus
    document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.parentElement.classList.remove('focused');
        });
    });
</script>

</body>
</html>