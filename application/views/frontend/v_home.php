<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AKK | Arti Kata Kita</title>

<!-- Branding & Fonts -->
    <link rel="icon" href="<?= base_url('assets/img/logo-akk.png') ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* AKK Brand Colors - Matching Logo */
            --cyan: #40E0D0;
            --cyan-light: #5FFAF0;
            --yellow: #FFD700;
            --yellow-bright: #FFE44D;
            --dark: #2C3E50;
            --dark-gray: #4A5568;
            --secondary: #64748B;
            --light: #F8FAFC;
            --white: #FFFFFF;
            
            /* Dark Theme Colors */
            --dark-bg: #0F1419;
            --dark-card: #1A1F26;
            --dark-card-hover: #242931;
            --text-primary: #E8EAED;
            --text-secondary: #B8BABD;
            --text-muted: #7A7D82;
            --border-color: #2F3640;
            
            /* Spacing & Radius */
            --section-padding: 100px;
            --card-radius: 12px;
            --btn-radius: 8px;
            
            /* Shadows */
            --shadow-subtle: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-float: 0 10px 30px -10px rgba(0,0,0,0.1);
            --shadow-glow-cyan: 0 0 20px rgba(64, 224, 208, 0.3);
            --shadow-glow-yellow: 0 0 25px rgba(255, 215, 0, 0.4);
            
            /* Dark Shadows */
            --shadow-dark-subtle: 0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
            --shadow-dark-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 10px 10px -5px rgba(0, 0, 0, 0.3);
            --shadow-dark-float: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--secondary);
            background-color: var(--white);
            line-height: 1.7;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            font-weight: 600;
            letter-spacing: -0.5px;
        }
        
        a { text-decoration: none; transition: 0.3s ease; }
        
        /* --- CLEAN NAVBAR (ORIGINAL - TIDAK DIUBAH) --- */
        .navbar {
            padding: 20px 0;
            background-color: rgba(0, 0, 0, 0.1); 
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            z-index: 1030;
        }

        .navbar-scrolled {
            background-color: rgba(15, 20, 30, 0.55);
            backdrop-filter: blur(18px) saturate(160%);
            -webkit-backdrop-filter: blur(18px) saturate(160%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.25);
            padding: 15px 0;
        }
        
        .navbar-toggler {
            border: none;
            padding: 0;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* toggler tetap putih di semua kondisi */
        
        .navbar-brand {
            padding: 0;
            margin-right: 1rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img {
            height: 70px;
            width: auto;
            transition: all 0.3s ease;
        }
        
        .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9) !important;
            margin-left: 2rem;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--yellow) !important;
            opacity: 1;
        }

        /* Scrolled State */
        .navbar-scrolled .nav-link { color: rgba(255, 255, 255, 0.9) !important; }
        .navbar-scrolled .nav-link:hover, .navbar-scrolled .nav-link.active { color: var(--yellow) !important; }

        /* Mobile Menu */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(255, 255, 255, 0.98);
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                margin-top: 15px;
            }
            .nav-link {
                color: var(--dark) !important;
                margin-left: 0;
                padding: 12px 0;
                border-bottom: 1px solid rgba(0,0,0,0.05);
            }
            .nav-link:hover { color: var(--cyan) !important; }
            .nav-link:last-child { border-bottom: none; }
            .btn-login { width: 100%; margin-top: 10px; text-align: center; }
        }
        
        .btn-login {
            background-color: var(--cyan);
            color: white !important;
            padding: 10px 28px;
            border-radius: var(--btn-radius);
            font-weight: 500;
            box-shadow: var(--shadow-subtle);
        }
        .btn-login:hover {
            background-color: #3DD4C4;
            transform: translateY(-1px);
            box-shadow: var(--shadow-hover);
        }

        /* --- IMMERSIVE HERO SECTION (ORIGINAL - TIDAK DIUBAH) --- */
        .hero {
            position: relative;
            padding: 0;
            background: url('<?= base_url('assets/img/background2.jpeg') ?>') center/cover no-repeat fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        /* Overlay with Cyan tint */
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, rgba(44, 62, 80, 0.9) 0%, rgba(64, 224, 208, 0.3) 100%);
            z-index: 1;
        }
        
        .hero .container {
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: var(--white);
            font-weight: 700;
        }
        
        .hero-lead {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2.5rem;
            max-width: 600px;
            font-weight: 300;
        }
        
        /* Badge with Yellow */
        .hero .badge-soft {
            background-color: var(--yellow);
            color: var(--dark);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 215, 0, 0.3);
        }

        /* --- DARK SECTIONS (MODIFIED) --- */
        section {
            padding: var(--section-padding) 0;
        }
        
        /* Dark theme untuk section selain hero */
        section#about,
        section#program,
        section#dokumentasi {
            background-color: var(--dark-bg);
        }
        
        section#program {
            background-color: #141920 !important;
        }
        
        /* Dark theme untuk heading di section gelap */
        section#about h1, section#about h2, section#about h3, section#about h4, section#about h5, section#about h6,
        section#program h1, section#program h2, section#program h3, section#program h4, section#program h5, section#program h6,
        section#dokumentasi h1, section#dokumentasi h2, section#dokumentasi h3, section#dokumentasi h4, section#dokumentasi h5, section#dokumentasi h6 {
            color: var(--text-primary);
        }
        
        /* Dark theme untuk paragraf di section gelap */
        section#about p, section#about .text-secondary,
        section#dokumentasi p {
            color: var(--text-secondary) !important;
        }
        
        .section-header {
            margin-bottom: 4rem;
            max-width: 700px;
        }
        
        .badge-soft {
            background: linear-gradient(135deg, rgba(64, 224, 208, 0.15), rgba(255, 215, 0, 0.15));
            color: var(--yellow-bright);
            padding: 6px 16px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
            display: inline-block;
            border: 1px solid rgba(255, 215, 0, 0.3);
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);
        }

        /* Underline untuk heading */
        section#about h2::after,
        section#program h2::after,
        section#dokumentasi h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--yellow), var(--cyan));
            margin-top: 1rem;
            border-radius: 2px;
        }

        /* --- DARK CARDS WITH YELLOW ACCENT --- */
        .clean-card {
            background: var(--dark-card);
            border: 1px solid var(--border-color);
            border-radius: var(--card-radius);
            padding: 2.5rem;
            height: 100%;
            box-shadow: var(--shadow-dark-subtle);
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }
        
        .clean-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--cyan), var(--yellow));
            border-radius: var(--card-radius) var(--card-radius) 0 0;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .clean-card:hover::before {
            opacity: 1;
        }
        
        .clean-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-dark-float);
            background: var(--dark-card-hover);
            border-color: var(--yellow);
        }
        
        .icon-circle {
            width: 64px; height: 64px;
            background: linear-gradient(135deg, rgba(64, 224, 208, 0.15), rgba(255, 215, 0, 0.15));
            color: var(--yellow-bright);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 215, 0, 0.3);
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.1);
        }

        .clean-card:hover .icon-circle {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            color: var(--dark-bg);
            transform: rotate(-3deg) scale(1.1);
            box-shadow: var(--shadow-glow-yellow);
        }
        
        .card-link {
            color: var(--yellow-bright);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }
        
        .card-link:hover {
            color: var(--cyan-light);
            text-shadow: 0 0 10px rgba(64, 224, 208, 0.5);
        }
        
        .card-link i { margin-left: 8px; transition: 0.3s; }
        .clean-card:hover .card-link i { margin-left: 12px; }

        /* --- MODAL DARK THEME --- */
        .modal-content-custom {
            border-radius: 16px;
            border: 1px solid var(--border-color);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
            background-color: var(--dark-card);
        }

        .modal-header-custom {
            border-bottom: 1px solid var(--border-color);
            padding: 1.5rem;
            background: linear-gradient(135deg, rgba(15, 20, 25, 0.5), rgba(26, 31, 38, 0.5));
        }

        .modal-body-custom {
            background-color: var(--dark-bg);
            padding: 2rem;
        }

        .modal-title {
            color: var(--text-primary);
        }

        .modal-header-custom small {
            color: var(--text-muted);
        }

        .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
            opacity: 0.8;
        }

        .btn-close:hover {
            opacity: 1;
        }

        /* Program Cards */
        .program-mini-card {
            background: var(--dark-card);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow-dark-subtle);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid var(--border-color);
            margin-bottom: 10px;
            position: relative;
        }

        .program-mini-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--yellow), var(--cyan));
            z-index: 2;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .program-mini-card:hover::before {
            opacity: 1;
        }

        .program-mini-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-dark-hover);
            border-color: var(--yellow);
        }

        .program-img-wrapper {
            height: 220px;
            overflow: hidden;
            position: relative;
        }

        .program-img-wrapper::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(15, 20, 25, 0.7) 100%);
        }

        .program-img-wrapper img {
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            transition: transform 0.5s ease;
        }

        .program-mini-card:hover .program-img-wrapper img {
            transform: scale(1.1);
        }

        .program-content { 
            padding: 1.5rem;
        }

        /* Update warna teks di dalam modal program */
.program-content h5 {
    color: var(--cyan) !important; /* Mengubah judul program jadi Cyan */
    text-shadow: 0 0 10px rgba(64, 224, 208, 0.2);
    margin-bottom: 15px;
}

.program-description-full {
    font-size: 0.95rem;
    color: var(--text-secondary) !important; /* Menggunakan warna abu-abu terang */
    line-height: 1.7;
}

        /* --- DOCUMENTATION SLIDER DARK --- */
        .dokumentasi-wrapper {
            position: relative;
            padding: 0 50px;
        }

        .dokumentasi-container {
            overflow: hidden;
            width: 100%;
        }

        .dokumentasi-slider {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            gap: 24px;
        }

        .dokumentasi-card {
            flex: 0 0 calc(33.333% - 16px);
            min-width: calc(33.333% - 16px);
            background: var(--dark-card);
            border-radius: var(--card-radius);
            box-shadow: var(--shadow-dark-subtle);
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid var(--border-color);
            position: relative;
        }

        .dokumentasi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--cyan), var(--yellow));
            z-index: 2;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .dokumentasi-card:hover::before {
            opacity: 1;
        }

        .dokumentasi-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-dark-hover);
            border-color: var(--yellow);
        }

        .doc-img-box {
            position: relative;
            width: 100%;
            aspect-ratio: 16/9;
            overflow: hidden;
            flex-shrink: 0;
        }

        .doc-img-box img {
            width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;
        }
        .dokumentasi-card:hover .doc-img-box img { transform: scale(1.05); }

        .slide-nav-btn {
            position: absolute; top: 50%; transform: translateY(-50%);
            width: 48px; height: 48px;
            background: var(--dark-card);
            border: 1px solid var(--border-color);
            border-radius: 50%;
            color: var(--yellow-bright);
            font-size: 1rem;
            z-index: 10;
            cursor: pointer;
            box-shadow: var(--shadow-dark-subtle);
            display: flex; align-items: center; justify-content: center;
            transition: all 0.2s;
        }
        .slide-nav-btn:hover {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            color: var(--dark-bg);
            border-color: var(--yellow);
            box-shadow: var(--shadow-glow-yellow);
        }
        .slide-prev { left: 0; }
        .slide-next { right: 0; }
        .slide-nav-btn.disabled { opacity: 0.3; pointer-events: none; }

        @media (max-width: 992px) {
            .dokumentasi-card { flex: 0 0 calc(50% - 12px); min-width: calc(50% - 12px); }
        }
        @media (max-width: 768px) {
            .dokumentasi-wrapper { padding: 0 10px; }
            .dokumentasi-card { flex: 0 0 100%; min-width: 100%; }
            .slide-nav-btn { 
                width: 40px; height: 40px; 
            }
        }

        /* Button Primary with Gradient */
        .btn-primary {
            background: linear-gradient(135deg, var(--cyan), var(--yellow));
            border: none;
            color: var(--dark-bg);
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            color: var(--dark-bg);
            box-shadow: var(--shadow-glow-yellow);
            transform: translateY(-2px);
        }
        
        .btn-outline-light:hover {
            background-color: var(--yellow);
            border-color: var(--yellow);
            color: var(--dark);
        }

        .btn-outline-primary {
            color: var(--yellow-bright);
            border-color: var(--yellow);
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            border-color: var(--yellow);
            color: var(--dark-bg);
        }

        /* Badge in documentation */
        .badge.bg-white {
            background: linear-gradient(135deg, var(--dark-card), rgba(26, 31, 38, 0.95)) !important;
            color: var(--yellow-bright) !important;
            border: 1px solid var(--yellow);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }
        
        .text-primary {
            color: var(--yellow-bright) !important;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.2);
        }

        /* --- FOOTER COMPACT MODERN (DARK) --- */
        footer {
            background: linear-gradient(135deg, #0a0e13 0%, #141920 100%);
            color: var(--text-secondary);
            padding: 30px 0;
            border-top: 3px solid var(--yellow);
            box-shadow: 0 -4px 20px rgba(0,0,0,0.5), 0 -2px 10px rgba(255, 215, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .footer-brand-wrapper {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-brand-img {
            height: 40px;
            width: auto;
        }
        
        .footer-brand-text h5 {
            background: linear-gradient(135deg, var(--cyan-light), var(--yellow-bright));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        
        .footer-brand-text p {
            margin: 0;
            font-size: 0.8rem;
            color: var(--text-muted);
            white-space: nowrap;
        }

        .footer-contact-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-left: 15px;
            font-size: 0.85rem;
            color: var(--text-secondary);
            background: rgba(64, 224, 208, 0.1);
            padding: 6px 12px;
            border-radius: 50px;
            transition: 0.3s;
            border: 1px solid rgba(255, 215, 0, 0.2);
        }
        
        .footer-contact-item:hover {
            background: rgba(255, 215, 0, 0.2);
            color: var(--yellow-bright);
            border-color: var(--yellow);
            box-shadow: var(--shadow-glow-yellow);
        }
        
        .footer-contact-item i {
            color: var(--yellow-bright);
        }
        
        .social-link-modern {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, rgba(64, 224, 208, 0.1), rgba(255, 215, 0, 0.1));
            color: var(--text-primary);
            display: inline-flex; align-items: center; justify-content: center;
            margin: 0 4px;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 215, 0, 0.2);
        }
        
        .social-link-modern:hover {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            border-color: var(--yellow);
            color: var(--dark-bg);
            transform: translateY(-3px);
            box-shadow: var(--shadow-glow-yellow);
        }

        @media (max-width: 991px) {
            .footer-brand-wrapper { flex-direction: column; text-align: center; margin-bottom: 1rem; }
            .footer-contact-item { margin: 5px; display: flex; width: 100%; justify-content: center; }
            .col-lg-4 { margin-bottom: 15px; }
        }

        /* Mobile tweaks */
        @media (max-width: 991px) {
            .hero { padding-top: 120px; text-align: center; }
            .hero-lead { margin-left: auto; margin-right: auto; }
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 12px;
                box-shadow: var(--shadow-hover);
                margin-top: 10px;
            }
            .nav-link { margin-left: 0; padding: 10px 0; }
        }
    </style>
</head>
<body>

    <!-- Minimalist Navbar (ORIGINAL) -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/img/logo-akk.png'); ?>" alt="AKK Community" height="60">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#program">Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="#dokumentasi">Dokumentasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gabung">Gabung Volunteer</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Clean Hero Section (ORIGINAL) -->
    <header id="hero" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <span class="badge-soft">Official Website</span>
                    <h1 class="hero-title">Arti Kata Kita</h1>
                    <p class="hero-lead">Memanusiakan Manusia dengan cara Manusiawi</p>
                    <div class="d-flex gap-3 justify-content-start">
                        <a href="#about" class="btn btn-primary px-4 py-3 rounded-3 fw-bold shadow-lg">Jelajahi Kami</a>
                        <a href="#program" class="btn btn-outline-light px-4 py-3 rounded-3 fw-bold">Lihat Program</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Spacious About Section (DARK THEME) -->
    <section id="about">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="<?= base_url('assets/img/profil/' . ($profil['foto_sejarah'] ?? 'default.jpg')); ?>" 
                         class="img-fluid rounded-4 shadow-lg w-75" alt="About Image">
                </div>
                <div class="col-lg-6">
                    <div class="section-header ms-lg-4 mb-4">
                        <span class="badge-soft">Tentang Kami</span>
                        <h2 class="mt-3">Sejarah</h2>
                    </div>
                    <div class="ms-lg-4 text-secondary">
                        <?= nl2br($profil['sejarah'] ?? 'Konten sejarah belum tersedia.'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Code — Fondasi Kita Bersama (setelah Sejarah) -->
    <section id="the-code" style="background: #0a0e13; padding: 70px 0; border-top: 1px solid #1e2530;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <span class="badge-soft">PRINSIP KAMI</span>
                    <h2 style="color: #e8eaed; margin-top: 1rem; font-size: 2rem; font-weight: 700;">Fondasi Kita Bersama</h2>
                    <p style="color: #7a7d82; margin-top: .8rem; font-size: .95rem; max-width: 520px; margin-left: auto; margin-right: auto; line-height: 1.7;">Tiga prinsip yang menjadi jiwa dari setiap langkah gerakan AKK.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div style="background: linear-gradient(135deg, #141920, #0d1117); border: 1px solid #2f3640; border-left: 4px solid var(--yellow); padding: 2rem; border-radius: 0 12px 12px 0; height: 100%; transition: transform .3s;" onmouseenter="this.style.transform='translateY(-4px)'" onmouseleave="this.style.transform='translateY(0)'">
                        <div style="font-size: 1.8rem; margin-bottom: 1rem;">👑</div>
                        <h5 style="color: var(--yellow-bright); font-weight: 700; margin-bottom: .8rem; font-family: 'Poppins', sans-serif;">Etika, Moral & Karakter Adalah Raja</h5>
                        <p style="color: #7a7d82; font-size: .85rem; line-height: 1.7; margin: 0;">Skill bisa dipelajari kapan saja. Tapi attitude dan karakter adalah harga mati, fondasi dari segalanya. Kami tidak mencari yang paling pintar, tapi yang paling jujur.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background: linear-gradient(135deg, #141920, #0d1117); border: 1px solid #2f3640; border-left: 4px solid var(--cyan); padding: 2rem; border-radius: 0 12px 12px 0; height: 100%; transition: transform .3s;" onmouseenter="this.style.transform='translateY(-4px)'" onmouseleave="this.style.transform='translateY(0)'">
                        <div style="font-size: 1.8rem; margin-bottom: 1rem;">🔍</div>
                        <h5 style="color: #40e0d0; font-weight: 700; margin-bottom: .8rem; font-family: 'Poppins', sans-serif;">Hadir dengan Hati Terbuka</h5>
                        <p style="color: #7a7d82; font-size: .85rem; line-height: 1.7; margin: 0;">Tidak ada tes, tidak ada persyaratan ketat. Yang dibutuhkan hanya ketulusan untuk hadir dan semangat untuk belajar bersama dalam keberagaman latar belakang.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="background: linear-gradient(135deg, #141920, #0d1117); border: 1px solid #2f3640; border-left: 4px solid #a78bfa; padding: 2rem; border-radius: 0 12px 12px 0; height: 100%; transition: transform .3s;" onmouseenter="this.style.transform='translateY(-4px)'" onmouseleave="this.style.transform='translateY(0)'">
                        <div style="font-size: 1.8rem; margin-bottom: 1rem;">🌱</div>
                        <h5 style="color: #c4b5fd; font-weight: 700; margin-bottom: .8rem; font-family: 'Poppins', sans-serif;">Tumbuh Bersama, Bukan Sendiri</h5>
                        <p style="color: #7a7d82; font-size: .85rem; line-height: 1.7; margin: 0;">Di AKK, tidak ada yang tertinggal. Setiap langkah pertumbuhan adalah perjalanan kolektif, karena kami percaya kekuatan sejati lahir dari kebersamaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section id="program">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <span class="badge-soft">Program</span>
                <h2 class="mt-3">Enam Pilar Pergerakan</h2>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            $icons = ['fa fa-leaf', 'fa fa-comments', 'fa fa-heartbeat', 'fa fa-network-wired', 'fa fa-user-graduate', 'fa fa-microchip'];
            foreach($divisi as $i => $d): 
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="clean-card d-flex flex-column h-100" data-bs-toggle="modal" data-bs-target="#modalDivisi<?= $d['id_divisi'] ?>" style="cursor: pointer;">
                    <div class="icon-circle">
                        <i class="fas <?= $icons[$i % 6] ?>"></i>
                    </div>
                    <h4 class="mb-3"><?= $d['nama_divisi'] ?></h4>
                    <p class="text-secondary mb-4 flex-grow-1 small"><?= $d['deskripsi_singkat'] ?></p>
                    <div class="card-link mt-auto">
                        Lihat Detail <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalDivisi<?= $d['id_divisi'] ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                    <div class="modal-content modal-content-custom">
                        
                        <div class="modal-header modal-header-custom align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle mb-0 me-3" style="width: 48px; height: 48px; font-size: 1.25rem;">
                                    <i class="fas <?= $icons[$i % 6] ?>"></i>
                                </div>
                                <div>
                                    <h5 class="modal-title fw-bold">Divisi <?= $d['nama_divisi'] ?></h5>
                                    <small style="color: var(--yellow); opacity: 0.8;">Daftar Program Kerja Unggulan</small>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body modal-body-custom">
                            <div class="row g-4">
                                <?php 
                                $programs = $this->M_data->get_program_by_divisi($d['id_divisi']);
                                if(empty($programs)): ?>
                                    <div class="col-12 text-center py-5">
                                        <div class="text-muted mb-3"><i class="far fa-folder-open fa-3x opacity-25"></i></div>
                                        <p class="text-secondary">Belum ada program yang terdaftar untuk divisi ini.</p>
                                    </div>
                                <?php else: foreach($programs as $p): ?>
                                    <div class="col-lg-6 col-md-12"> 
                                        <div class="program-mini-card">
                                            <div class="program-img-wrapper">
                                                 <img src="<?= base_url('assets/img/program/'.$p['foto_program']) ?>" 
                                                      onerror="this.src='https://via.placeholder.com/600x400?text=No+Image'"
                                                      alt="<?= $p['nama_program'] ?>">
                                            </div>
                                            <div class="program-content">
                                                <h5 class="fw-bold text-primary mb-3"><?= $p['nama_program'] ?></h5>
                                                <div class="program-description-full">
                                                    <?= nl2br($p['deskripsi_lengkap']) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



    <!-- Modern Documentation Slider (DARK THEME) -->
    <section id="dokumentasi">
        <div class="container">
            <div class="row mb-5 align-items-center">
                 <div class="col-lg-6">
                    <span class="badge-soft">Galeri</span>
                    <h2 class="mt-3">Dokumentasi Kegiatan</h2>
                </div>
                <div class="col-lg-6 text-lg-end d-none d-lg-block">
                    <a href="<?= base_url('dokumentasi') ?>" class="btn btn-outline-primary rounded-pill px-4 py-2">
                        <i class="fas fa-th-large me-2"></i>Lihat Semua Dokumentasi
                    </a>
                </div>
            </div>
            
            <div class="dokumentasi-wrapper">
                <button class="slide-nav-btn slide-prev" onclick="slideDoc('prev')" id="prevBtn">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <div class="dokumentasi-container">
                    <div class="dokumentasi-slider" id="docSlider">
                        <?php foreach(array_slice($dokumentasi, 0, 6) as $doc): ?>
                        <div class="dokumentasi-card">
                            <div class="doc-img-box">
                                <div class="position-absolute top-0 start-0 m-3 z-2">
                                    <span class="badge bg-white text-dark shadow-sm">
                                        <?= date('d M Y', strtotime($doc['tgl_upload'])) ?>
                                    </span>
                                </div>
                                <img src="<?= base_url('assets/img/dokumentasi/'.$doc['foto']) ?>" alt="<?= $doc['judul'] ?>">
                            </div>
                            <div class="p-4 d-flex flex-column flex-grow-1">
                                <span class="text-primary fw-bold small text-uppercase mb-2"><?= $doc['kategori'] ?></span>
                                <h5 class="fw-bold mb-3"><?= $doc['judul'] ?></h5>
                                <p class="text-secondary small mb-3 flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                    <?= strip_tags($doc['deskripsi']) ?>
                                </p>
                                <?php $slug = url_title($doc['judul'], 'dash', true); ?>
                                <a href="<?= base_url('dokumentasi/'.$doc['id_dokumentasi'].'/'.$slug) ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                    Detail Kegiatan
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button class="slide-nav-btn slide-next" onclick="slideDoc('next')" id="nextBtn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- Tombol Lihat Semua (mobile & bawah slider) -->
        </div>
    </section>


    <!-- ── PENGENALAN MENDALAM AKK ── -->
    <section id="pengenalan" style="background: #0a0e13; padding: 100px 0; border-top: 1px solid #1e2530;">
        <div class="container">
            <!-- Identity Block -->
            <div class="row align-items-center mb-5 pb-4" style="border-bottom: 1px solid #1e2530;">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <span class="badge-soft" style="margin-bottom: 1.2rem; display: inline-block;">SIAPA KAMI?</span>
                    <h2 style="font-size: 2.5rem; line-height: 1.2; color: #e8eaed; font-weight: 700; margin-bottom: 1rem;">
                        Laboratorium <span style="background: linear-gradient(135deg, var(--cyan), var(--yellow)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Kemanusiaan</span>
                    </h2>
                    <p style="color: #b8babd; line-height: 1.8; font-size: 1rem; margin-bottom: 1.5rem;">
                        ArtiKataKita bukan sekadar komunitas biasa. Kami adalah ruang hidup tempat di mana akal sehat, seni, dan kebudayaan dirawat bersama-sama. Berdiri lebih dari 10 tahun, kami percaya bahwa perubahan sejati dimulai dari cara manusia memperlakukan sesama.
                    </p>
                    <div style="margin-top: 2rem; display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
                        <div style="display: flex; align-items: center; gap: .6rem; background: #141920; border: 1px solid #2f3640; padding: .6rem 1.2rem; border-radius: 8px;">
                            <span style="color: var(--yellow); font-size: 1.2rem;">📍</span>
                            <span style="color: #b8babd; font-size: .85rem;">Magelang, Jawa Tengah</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: .6rem; background: #141920; border: 1px solid #2f3640; padding: .6rem 1.2rem; border-radius: 8px;">
                            <span style="width: 8px; height: 8px; background: #3ddc84; border-radius: 50%; display: inline-block; animation: pulse-green 2s infinite;"></span>
                            <span style="color: #b8babd; font-size: .85rem;">Aktif Bergerak</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div style="background: #141920; border: 1px solid #2f3640; padding: 2rem; border-radius: 12px; border-top: 3px solid var(--yellow); transition: all 0.3s ease;" onmouseenter="this.style.borderColor='var(--yellow)'; this.style.transform='translateY(-4px)'" onmouseleave="this.style.transform='translateY(0)'">
                            <div style="font-size: 2rem; margin-bottom: .8rem;">🧠</div>
                            <h5 style="color: #e8eaed; font-size: .95rem; font-weight: 600; margin-bottom: .5rem;">Napak Bumi</h5>
                            <p style="color: #7a7d82; font-size: .82rem; line-height: 1.6; margin: 0;">Metodologi observasi partisipan yang mengajak kita turun langsung ke realita sosial untuk belajar dari tanah, bukan dari layar.</p>
                        </div>
                        <div style="background: #141920; border: 1px solid #2f3640; padding: 2rem; border-radius: 12px; border-top: 3px solid var(--cyan); transition: all 0.3s ease;" onmouseenter="this.style.transform='translateY(-4px)'" onmouseleave="this.style.transform='translateY(0)'">
                            <div style="font-size: 2rem; margin-bottom: .8rem;">🤝</div>
                            <h5 style="color: #e8eaed; font-size: .95rem; font-weight: 600; margin-bottom: .5rem;">Komunitas Inklusif</h5>
                            <p style="color: #7a7d82; font-size: .82rem; line-height: 1.6; margin: 0;">Terbuka tanpa syarat latar belakang. Seniman, akademisi, aktivis, kreator ,semua punya tempat di sini.</p>
                        </div>
                        <div style="background: #141920; border: 1px solid #2f3640; padding: 2rem; border-radius: 12px; border-top: 3px solid var(--cyan); transition: all 0.3s ease;" onmouseenter="this.style.transform='translateY(-4px)'" onmouseleave="this.style.transform='translateY(0)'">
                            <div style="font-size: 2rem; margin-bottom: .8rem;">🌿</div>
                            <h5 style="color: #e8eaed; font-size: .95rem; font-weight: 600; margin-bottom: .5rem;">Akar Budaya Lokal</h5>
                            <p style="color: #7a7d82; font-size: .82rem; line-height: 1.6; margin: 0;">Program seperti Wayang Godhong dan Festival Jogo Kali hadir sebagai jembatan antara tradisi dan gerakan masa kini.</p>
                        </div>
                        <div style="background: #141920; border: 1px solid #2f3640; padding: 2rem; border-radius: 12px; border-top: 3px solid var(--yellow); transition: all 0.3s ease;" onmouseenter="this.style.transform='translateY(-4px)'" onmouseleave="this.style.transform='translateY(0)'">
                            <div style="font-size: 2rem; margin-bottom: .8rem;">🎙️</div>
                            <h5 style="color: #e8eaed; font-size: .95rem; font-weight: 600; margin-bottom: .5rem;">Suara yang Didengar</h5>
                            <p style="color: #7a7d82; font-size: .82rem; line-height: 1.6; margin: 0;">Dari Ngobrol Aja Podcast hingga Diskusi Berisix karena kami percaya setiap cerita layak untuk disuarakan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 
            <div class="row g-3 mb-5 pb-4" style="border-bottom: 1px solid #1e2530;">
                <div class="col-6 col-lg-4">
                    <div style="background: #141920; border: 1px solid #2f3640; padding: 2rem; border-radius: 12px; text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 800; font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, var(--yellow), var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; line-height: 1;">10+</div>
                        <div style="color: #7a7d82; font-size: .75rem; letter-spacing: 1px; margin-top: .5rem; text-transform: uppercase;">Tahun Berjalan</div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div style="background: #141920; border: 1px solid #2f3640; padding: 2rem; border-radius: 12px; text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 800; font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, var(--cyan), var(--yellow)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; line-height: 1;">6</div>
                        <div style="color: #7a7d82; font-size: .75rem; letter-spacing: 1px; margin-top: .5rem; text-transform: uppercase;">Pilar Program</div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div style="background: #141920; border: 1px solid #2f3640; padding: 2rem; border-radius: 12px; text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 800; font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, var(--cyan), var(--yellow)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; line-height: 1;">∞</div>
                        <div style="color: #7a7d82; font-size: .75rem; letter-spacing: 1px; margin-top: .5rem; text-transform: uppercase;">Ruang Tumbuh</div>
                    </div>
                </div>
            </div>
                        -->
            <!-- CTA to Volunteer -->
            <div class="row">
                <div class="col-12">
                    <div style="background: linear-gradient(135deg, #0d1117, #141920); border: 1px solid #2f3640; border-radius: 16px; padding: 3rem; text-align: center; position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, var(--cyan), var(--yellow), var(--cyan));"></div>
                        <span class="badge-soft" style="margin-bottom: 1.2rem; display: inline-block;">PANGGILAN VOLUNTEER</span>
                        <h2 style="color: #e8eaed; font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">Sudah Kenal Kami? <span style="background: linear-gradient(135deg, var(--yellow), var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Ayo Bergabung!</span></h2>
                        <p style="color: #7a7d82; max-width: 500px; margin: 0 auto 2rem; line-height: 1.7;">Setelah mengenal kami, kini saatnya kamu menjadi bagian dari perjalanan ini.</p>
                        <a href="#gabung" class="btn btn-primary px-5 py-3 rounded-3 fw-bold" style="font-size: .95rem; letter-spacing: .5px;" onclick="document.getElementById('gabung').scrollIntoView({behavior:'smooth'}); return false;">
                            <i class="fas fa-rocket me-2"></i>Gabung Volunteer Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── SECTION VOLUNTEER / GABUNG ── -->
    <section id="gabung" style="background: #0f1419; padding: 100px 0; border-top: 1px solid #1e2530;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <span class="badge-soft" style="margin-bottom: 1.2rem; display: inline-block;">DAFTAR SEKARANG</span>
                    <h2 style="color: #e8eaed; font-size: 2.2rem; font-weight: 700; line-height: 1.3; margin-bottom: 1rem;">
                        Siap <span style="background: linear-gradient(135deg, var(--yellow), var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Berlayar Bersama</span> Kami?
                    </h2>
                    <p style="color: #7a7d82; font-size: 1rem; line-height: 1.7;">Terbuka untuk semua, tanpa tuntutan latar belakang</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Alur Bergabung -->
                <div class="col-lg-4">
                    <div style="background: #141920; border: 1px solid #2f3640; border-radius: 12px; padding: 2rem; height: 100%;">
                        <h5 style="color: #e8eaed; font-weight: 700; margin-bottom: 1.5rem; padding-bottom: .8rem; border-bottom: 1px solid #2f3640; font-family: 'Poppins', sans-serif;">🗺 Alur Bergabung</h5>
                        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                            <div style="display: flex; gap: 1rem; align-items: flex-start;">
                                <div style="width: 32px; height: 32px; min-width: 32px; background: linear-gradient(135deg, var(--yellow), var(--cyan)); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #0f1419; font-weight: 700; font-size: .85rem; font-family: 'Poppins', sans-serif;">1</div>
                                <div>
                                    <h6 style="color: #e8eaed; margin: 0 0 .3rem;">Isi Formulir</h6>
                                    <p style="color: #7a7d82; font-size: .82rem; line-height: 1.6; margin: 0;">Lengkapi form nama, kontak, minat pilar.</p>
                                </div>
                            </div>
                            <div style="display: flex; gap: 1rem; align-items: flex-start;">
                                <div style="width: 32px; height: 32px; min-width: 32px; background: linear-gradient(135deg, var(--cyan), var(--yellow)); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #0f1419; font-weight: 700; font-size: .85rem; font-family: 'Poppins', sans-serif;">2</div>
                                <div>
                                    <h6 style="color: #e8eaed; margin: 0 0 .3rem;">Dihubungi Tim</h6>
                                    <p style="color: #7a7d82; font-size: .82rem; line-height: 1.6; margin: 0;">Tim AKK menghubungimu via WhatsApp untuk orientasi ringan.</p>
                                </div>
                            </div>
                            <div style="display: flex; gap: 1rem; align-items: flex-start;">
                                <div style="width: 32px; height: 32px; min-width: 32px; background: linear-gradient(135deg, var(--yellow), var(--cyan)); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #0f1419; font-weight: 700; font-size: .85rem; font-family: 'Poppins', sans-serif;">3</div>
                                <div>
                                    <h6 style="color: #e8eaed; margin: 0 0 .3rem;">Onboarding & Hadir</h6>
                                    <p style="color: #7a7d82; font-size: .82rem; line-height: 1.6; margin: 0;">Kenalan dengan komunitas, rasakan suasana kegiatan perdanamu.</p>
                                </div>
                            </div>
                            <div style="display: flex; gap: 1rem; align-items: flex-start;">
                                <div style="width: 32px; height: 32px; min-width: 32px; background: linear-gradient(135deg, var(--cyan), var(--yellow)); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #0f1419; font-weight: 700; font-size: .85rem; font-family: 'Poppins', sans-serif;">4</div>
                                <div>
                                    <h6 style="color: #e8eaed; margin: 0 0 .3rem;">Aktif Bergerak</h6>
                                    <p style="color: #7a7d82; font-size: .82rem; line-height: 1.6; margin: 0;">Mulai berkontribusi di pilar pilihanmu dan tumbuh bersama Nakama AKK.</p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 2rem; padding: 1.2rem; background: #0f1419; border: 1px solid #2f3640; border-radius: 12px; display: flex; align-items: center; justify-content: space-between;">
    <div>
        <p style="font-size: .8rem; color: #7a7d82; line-height: 1.6; margin: 0;">
            📞 Kontak langsung:<br>
            <strong style="color: #ffff00;">Zoro (Ridho Agung)</strong>
        </p>
    </div>
    
    <a href="https://wa.me/628157642627" target="_blank" 
       style="background: #25D366; color: white; width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: 0.3s; box-shadow: 0 4px 10px rgba(37, 211, 102, 0.2);"
       onmouseover="this.style.transform='scale(1.1)'; this.style.background='#128C7E'" 
       onmouseout="this.style.transform='scale(1)'; this.style.background='#25D366'">
        <i class="fab fa-whatsapp" style="font-size: 1.5rem;"></i>
    </a>
</div>
                    </div>
                </div>

                <!-- Bekal / Manfaat -->
                <div class="col-lg-4">
                    <div style="background: #141920; border: 1px solid #2f3640; border-radius: 12px; padding: 2rem; height: 100%;">
                        <h5 style="color: #e8eaed; font-weight: 700; margin-bottom: 1.5rem; padding-bottom: .8rem; border-bottom: 1px solid #2f3640; font-family: 'Poppins', sans-serif;">🎒 Bekal yang Kamu Dapat</h5>
                        <div style="display: flex; flex-direction: column; gap: 1.2rem;">
                            <div style="display: flex; gap: 1rem; align-items: flex-start; background: #0f1419; border: 1px solid #2f3640; padding: 1rem; border-radius: 8px; transition: border-color .2s;" onmouseenter="this.style.borderColor='var(--yellow)'" onmouseleave="this.style.borderColor='#2f3640'">
                                <span style="font-size: 1.3rem;">🔬</span>
                                <div>
                                    <h6 style="color: #e8eaed; margin: 0 0 .3rem; font-size: .88rem;">Metode Napak Bumi</h6>
                                    <p style="color: #7a7d82; font-size: .8rem; line-height: 1.5; margin: 0;">Pendekatan observasi partisipan ala Antropologi.</p>
                                </div>
                            </div>
                            <div style="display: flex; gap: 1rem; align-items: flex-start; background: #0f1419; border: 1px solid #2f3640; padding: 1rem; border-radius: 8px; transition: border-color .2s;" onmouseenter="this.style.borderColor='var(--yellow)'" onmouseleave="this.style.borderColor='#2f3640'">
                                <span style="font-size: 1.3rem;">🌐</span>
                                <div>
                                    <h6 style="color: #e8eaed; margin: 0 0 .3rem; font-size: .88rem;">Networking Lintas Latar Belakang</h6>
                                    <!-- <p style="color: #7a7d82; font-size: .8rem; line-height: 1.5; margin: 0;">Terhubung dengan seniman, akademisi, aktivis & kreator.</p> -->
                                </div>
                            </div>
                            <div style="display: flex; gap: 1rem; align-items: flex-start; background: #0f1419; border: 1px solid #2f3640; padding: 1rem; border-radius: 8px; transition: border-color .2s;" onmouseenter="this.style.borderColor='var(--cyan)'" onmouseleave="this.style.borderColor='#2f3640'">
                                <span style="font-size: 1.3rem;">📜</span>
                                <div>
                                    <h6 style="color: #e8eaed; margin: 0 0 .3rem; font-size: .88rem;">E-Certificate Komunitas</h6>
                                    <!-- <p style="color: #7a7d82; font-size: .8rem; line-height: 1.5; margin: 0;">Bukti nyata kontribusimu, diakui komunitas.</p> -->
                                </div>
                            </div>
                            <div style="display: flex; gap: 1rem; align-items: flex-start; background: #0f1419; border: 1px solid #2f3640; padding: 1rem; border-radius: 8px; transition: border-color .2s;" onmouseenter="this.style.borderColor='var(--cyan)'" onmouseleave="this.style.borderColor='#2f3640'">
                                <span style="font-size: 1.3rem;">🏡</span>
                                <div>
                                    <h6 style="color: #e8eaed; margin: 0 0 .3rem; font-size: .88rem;">Ruang Aman Berekspresi</h6>
                                    <!--<p style="color: #7a7d82; font-size: .8rem; line-height: 1.5; margin: 0;">Akses ke Omah Seni & Nongkopi untuk berkarya.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Form Link Card -->
                <div class="col-lg-4">
                    <div style="background: #141920; border: 1px solid #2f3640; border-radius: 12px; padding: 2rem; height: 100%; display: flex; flex-direction: column; position: relative; overflow: hidden;">
                        <!-- top accent line -->
                        <div style="position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, var(--cyan), var(--yellow));"></div>

                        <div style="text-align: center; flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 1.5rem 0;">
                            <!-- Icon -->
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(64,224,208,.12), rgba(255,215,0,.12)); border: 1px solid rgba(255,215,0,.25); border-radius: 20px; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin-bottom: 1.5rem;">
                                📋
                            </div>

                            <span style="font-size: .68rem; color: var(--yellow-bright); letter-spacing: 2px; text-transform: uppercase; font-weight: 600; background: rgba(255,215,0,.1); border: 1px solid rgba(255,215,0,.25); padding: .25rem .8rem; border-radius: 50px; margin-bottom: 1.2rem; display: inline-block;">FORMULIR NAKAMA AKK</span>

                            <h4 style="color: #e8eaed; font-weight: 700; font-size: 1.3rem; line-height: 1.35; margin-bottom: 1rem; font-family: 'Poppins', sans-serif;">
                                Daftar Jadi<br>
                                <span style="background: linear-gradient(135deg, var(--yellow), var(--cyan)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Volunteer / Nakama</span>
                            </h4>

                            <p style="color: #7a7d82; font-size: .85rem; line-height: 1.7; margin-bottom: 2rem; max-width: 260px;">
                                Klik tombol di bawah untuk mengisi formulir pendaftaran resmi AKK.
                            </p>

                            <!-- Steps singkat -->
                            <div style="width: 100%; display: flex; flex-direction: column; gap: .6rem; margin-bottom: 2rem; text-align: left;">
                                <div style="display: flex; align-items: center; gap: .8rem; background: #0f1419; border: 1px solid #2f3640; padding: .6rem 1rem; border-radius: 8px;">
                                    <span style="width: 22px; height: 22px; min-width: 22px; background: linear-gradient(135deg, var(--yellow), var(--cyan)); border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: .68rem; font-weight: 700; color: #0f1419;">1</span>
                                    <span style="color: #b8babd; font-size: .8rem;">Klik tombol <strong style="color: #e8eaed;">Isi Formulir</strong> di bawah</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: .8rem; background: #0f1419; border: 1px solid #2f3640; padding: .6rem 1rem; border-radius: 8px;">
                                    <span style="width: 22px; height: 22px; min-width: 22px; background: linear-gradient(135deg, var(--cyan), var(--yellow)); border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: .68rem; font-weight: 700; color: #0f1419;">2</span>
                                    <span style="color: #b8babd; font-size: .8rem;">Lengkapi data dirimu di Google Form</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: .8rem; background: #0f1419; border: 1px solid #2f3640; padding: .6rem 1rem; border-radius: 8px;">
                                    <span style="width: 22px; height: 22px; min-width: 22px; background: linear-gradient(135deg, var(--yellow), var(--cyan)); border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: .68rem; font-weight: 700; color: #0f1419;">3</span>
                                    <span style="color: #b8babd; font-size: .8rem;">Tim AKK hubungi kamu via WhatsApp</span>
                                </div>
                            </div>

                            <!-- CTA Button -->
                            <a href="https://forms.gle/Ym8QUjYgnYUh54icA" target="_blank" rel="noopener noreferrer"
                               style="display: flex; align-items: center; justify-content: center; gap: .6rem; width: 100%; background: linear-gradient(135deg, var(--cyan), var(--yellow)); color: #0f1419; font-weight: 700; font-size: .9rem; padding: .95rem 1.5rem; border-radius: 10px; text-decoration: none; letter-spacing: .5px; transition: all .3s; box-shadow: 0 4px 20px rgba(64,224,208,.2);"
                               onmouseenter="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 30px rgba(255,215,0,.35)'; this.style.background='linear-gradient(135deg, var(--yellow), var(--cyan))'"
                               onmouseleave="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(64,224,208,.2)'; this.style.background='linear-gradient(135deg, var(--cyan), var(--yellow))'">
                                <i class="fas fa-external-link-alt"></i>
                                Isi Formulir Sekarang
                            </a>

                            <p style="color: #4a5568; font-size: .72rem; margin-top: 1rem; margin-bottom: 0;">
                                <i class="fab fa-google" style="color: #7a7d82; margin-right: .3rem;"></i>
                                Powered by Google Forms · Aman & Gratis
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    @keyframes pulse-green {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: .4; transform: scale(1.4); }
    }
    #pengenalan, #gabung {
        transition: all .3s;
    }
    </style>


    <!-- Modern Compact Footer (DARK) -->
    <footer>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-12 text-center text-lg-start mb-3 mb-lg-0">
                <div class="footer-brand-wrapper justify-content-center justify-content-lg-start">
                    <img src="<?= base_url('assets/img/logo-akk.png'); ?>" alt="AKK" class="footer-brand-img">
                    <div class="footer-brand-text text-start">
                        <h5>Arti Kata Kita</h5>
                        <p>Memanusiakan Manusia Dengan Cara Manusiawi</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-12 text-center mb-3 mb-lg-0">
                <a href="https://www.instagram.com/arti_katakita?igsh=MW1ka3J1ZjhmNWI1MA==" class="social-link-modern"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@ArtiKataKita" class="social-link-modern"><i class="fab fa-youtube"></i></a>
            </div>

            <div class="col-lg-3 col-md-12 text-center text-lg-end">
                <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-end gap-2">
                    <div class="footer-contact-item py-1 px-3 border rounded-pill d-inline-flex align-items-center" style="white-space: nowrap; width: fit-content;">
                        <i class="fas fa-envelope me-2"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee868b828281ae8f8585c08d8183"><span class="__cf_email__" data-cfemail="660714120f0d0712070d0f12075f26010b070f0a4805090b"><span class="__cf_email__" data-cfemail="7c1d0e0815171d081d1715081d453c1b111d1510521f1311">[email&#160;protected]</span></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 text-center text-lg-end">
    <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-end gap-2">
        <a href="https://wa.me/628157642627" target="_blank" 
           class="footer-contact-item py-2 px-4 border rounded-pill d-inline-flex align-items-center text-decoration-none text-white transition-all shadow-sm" 
           style="white-space: nowrap; width: fit-content; cursor: pointer; background-color: #25D366; border-color: #25D366; font-weight: 600; font-size: 1.1rem;">
            
            <i class="fab fa-whatsapp me-2" style="font-size: 1.4rem;"></i> 
            Hubungi Kami
        </a>
    </div>
</div>

<style>
/* Efek Hover supaya lebih interaktif */
.footer-contact-item:hover {
    background-color: #128C7E !important; /* Warna hijau WA lebih gelap saat hover */
    border-color: #128C7E !important;
    transform: translateY(-2px); /* Tombol sedikit terangkat */
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
}
</style>
        
        <div class="text-center mt-4 pt-3 border-top opacity-50 small" style="border-color: rgba(255,255,255,0.05);">
            &copy; <?= date('Y') ?> AKK Community. All Rights Reserved.
        </div>
    </div>
</footer>

    <!-- Bootstrap Bundle -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Scripts -->
    <script>
        // Navbar Glassmorphism Scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const hero = document.querySelector('#hero');
            
            if (navbar && hero) {
                const threshold = hero.offsetHeight - navbar.offsetHeight;
                
                if (window.scrollY > threshold) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            } else {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            }
        });

        // Slider Logic
        let currentIndex = 0;
        const sliderTrack = document.getElementById('docSlider');
        const cards = document.querySelectorAll('.dokumentasi-card');
        const totalCards = cards.length;
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function getVisibleCards() {
            if (window.innerWidth < 768) return 1;
            if (window.innerWidth < 992) return 2;
            return 3;
        }

        function updateSlider() {
            const visible = getVisibleCards();
            const containerWidth = sliderTrack.parentElement.offsetWidth;
            const gap = 24;
            
            let cardWidth;
            if (visible === 1) {
                cardWidth = containerWidth; 
            } else {
                cardWidth = (containerWidth - (gap * (visible - 1))) / visible;
            }

            const maxIndex = Math.max(0, totalCards - visible);
            
            if (currentIndex > maxIndex) currentIndex = maxIndex;
            if (currentIndex < 0) currentIndex = 0;
            
            const moveAmount = currentIndex * (cardWidth + gap);
            sliderTrack.style.transform = `translateX(-${moveAmount}px)`;
            
            prevBtn.classList.toggle('disabled', currentIndex <= 0);
            nextBtn.classList.toggle('disabled', currentIndex >= maxIndex);
        }

        if(prevBtn) prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        if(nextBtn) nextBtn.addEventListener('click', () => {
            const visible = getVisibleCards();
            const maxIndex = totalCards - visible;
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSlider();
            }
        });

        // Touch Swipe
        let touchStartX = 0;
        let touchEndX = 0;

        sliderTrack.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, {passive: true});

        sliderTrack.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, {passive: true});

        function handleSwipe() {
            const threshold = 50;
            if (touchEndX < touchStartX - threshold) {
                const visible = getVisibleCards();
                if (currentIndex < totalCards - visible) {
                    currentIndex++;
                    updateSlider();
                }
            }
            if (touchEndX > touchStartX + threshold) {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSlider();
 