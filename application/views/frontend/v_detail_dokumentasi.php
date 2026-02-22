<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $doc['judul'] ?> | AKK | Arti Kata Kita</title>
    
    <!-- Branding & Fonts -->
    <link rel="icon" href="<?= base_url('assets/img/logo-akk.png') ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
         html {
    scroll-behavior: smooth;
    }

    /* Ini akan memberikan ruang agar header galeri tidak tertutup navbar */
    #kegiatan-akk {
        scroll-margin-top: 100px; 
    }
        :root {
            /* AKK Brand Colors */
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
            --section-padding: 80px;
            --card-radius: 16px;
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
            color: var(--text-secondary);
            background-color: var(--dark-bg);
            line-height: 1.7;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            color: var(--text-primary);
            font-weight: 600;
            letter-spacing: -0.5px;
        }
        
        a { text-decoration: none; transition: 0.3s ease; }
        
        /* ── NAVBAR ── */
        .navbar {
            padding: 18px 0;
            background-color: rgba(0,0,0,.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,.08);
            transition: all .4s ease;
            z-index: 1030;
        }
        .navbar-scrolled {
            background-color: rgba(15,20,25,.97);
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(0,0,0,.5);
            padding: 12px 0;
        }
        .navbar-toggler { border: none; padding: 0; }
        .navbar-toggler:focus { box-shadow: none; }
        .navbar-toggler-icon { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }
        .navbar-brand { padding: 0; }
        .navbar-brand img { height: 58px; width: auto; transition: .3s; }
        .nav-link { font-weight: 500; color: rgba(255,255,255,.9) !important; margin-left: 1.8rem; font-size: .92rem; }
        .nav-link:hover, .nav-link.active { color: var(--yellow) !important; }
        @media (max-width: 991px) {
            .navbar-collapse { background: rgba(15,20,25,.98); padding: 20px; border-radius: 12px; border: 1px solid var(--border-color); margin-top: 12px; }
            .nav-link { color: var(--text-primary) !important; margin-left: 0; padding: 10px 0; border-bottom: 1px solid var(--border-color); }
            .nav-link:last-child { border-bottom: none; }
        }
        
        .btn-login {
            background-color: var(--cyan);
            color: white !important;
            padding: 10px 28px;
            border-radius: var(--btn-radius);
            font-weight: 500;
            box-shadow: var(--shadow-subtle);
        }
        .btn-login:hover { background-color: #3DD4C4; transform: translateY(-1px); box-shadow: var(--shadow-hover); }

        /* --- DETAIL HERO SECTION (Updated for Slider) --- */
.detail-hero {
    position: relative;
    padding: 140px 0 80px;
    min-height: 350px;
    display: flex;
    align-items: center;
    color: white;
    overflow: hidden; /* Penting agar slide tidak keluar jalur */
    background: #2c3e50; /* Fallback color */
}

/* Mengatur Slider Latar Belakang */
.detail-hero #detailHeroCarousel {
    position: absolute;
    inset: 0;
    z-index: 1;
}

.detail-hero .carousel-inner,
.detail-hero .carousel-item,
.detail-hero .hero-slide-bg {
    height: 100%;
    width: 100%;
}

.detail-hero .hero-slide-bg {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    /* Tetap menggunakan fixed jika diinginkan, namun scroll lebih aman untuk slider */
    background-attachment: scroll; 
}

/* Overlay Gradient (Menggantikan ::before) */
.hero-slider-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(44, 62, 80, 0.95) 0%, rgba(64, 224, 208, 0.4) 100%);
    z-index: 2;
}

/* Memastikan Konten berada di atas slider & overlay */
.detail-hero .container { 
    position: relative; 
    z-index: 3; 
}

/* Style Badge & Breadcrumb Tetap Sesuai Permintaan */
.badge-soft {
    background-color: var(--yellow);
    color: var(--dark);
    padding: 6px 16px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 1rem;
    display: inline-block;
    border: 1px solid rgba(255, 215, 0, 0.3);
}

.breadcrumb-custom {
    display: flex;
    gap: 8px;
    font-size: 0.85rem;
    margin-bottom: 1rem;
    opacity: 0.8;
}
.breadcrumb-custom a { color: white; opacity: 0.7; text-decoration: none; transition: 0.3s; }
.breadcrumb-custom a:hover { opacity: 1; color: var(--yellow); }
.breadcrumb-separator { opacity: 0.4; }
.breadcrumb-custom .current { color: var(--cyan); opacity: 1; }
        /* --- DARK CONTENT SECTION --- */
        .main-content { 
            padding: 80px 0; 
            background-color: var(--dark-bg);
        }
        
        .article-card {
            background: var(--dark-card);
            border-radius: var(--card-radius);
            padding: 40px;
            box-shadow: var(--shadow-dark-subtle);
            border: 1px solid var(--border-color);
            position: relative;
        }

        .article-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--cyan), var(--yellow));
            border-radius: var(--card-radius) var(--card-radius) 0 0;
        }
        
        .main-image-wrapper {
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: var(--shadow-dark-subtle);
            border: 1px solid var(--border-color);
        }
        .main-image-wrapper img { 
            width: 100%; 
            height: auto; 
            display: block; 
        }
        
        .content-body {
            font-size: 1.1rem;
            color: var(--text-secondary);
            line-height: 1.8;
        }

        .content-body::first-letter {
            font-size: 3.5rem;
            font-weight: 700;
            float: left;
            line-height: 1;
            margin: 0 10px 0 0;
            background: linear-gradient(135deg, var(--cyan), var(--yellow));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .meta-info {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            font-size: 0.9rem;
            color: var(--text-secondary);
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }
        .meta-item { 
            display: flex; 
            align-items: center; 
            gap: 8px; 
        }
        .meta-item i { 
            color: var(--yellow-bright);
        }

        /* --- DARK SIDEBAR --- */
        .sidebar-sticky {
            position: sticky;
            top: 100px;
            max-height: calc(100vh - 120px);
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: var(--border-color) transparent;
        }

        .sidebar-sticky::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar-sticky::-webkit-scrollbar-track {
            background: transparent;
        }
        .sidebar-sticky::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 4px;
        }
        
        .sidebar-card {
            background: var(--dark-card);
            border-radius: var(--card-radius);
            padding: 30px;
            box-shadow: var(--shadow-dark-subtle);
            border: 1px solid var(--border-color);
            margin-bottom: 24px;
            position: relative;
        }

        .sidebar-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--yellow), var(--cyan));
            border-radius: var(--card-radius) var(--card-radius) 0 0;
        }
        
        .sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar-title i { 
            color: var(--yellow-bright);
        }
        
        .rec-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            transition: 0.3s;
            padding: 10px;
            border-radius: 8px;
        }
        .rec-item:last-child { margin-bottom: 0; }
        .rec-item:hover { 
            transform: translateX(5px); 
            background: var(--dark-card-hover);
        }
        
        .rec-img {
            width: 90px;
            height: 65px;
            border-radius: 8px;
            object-fit: cover;
            flex-shrink: 0;
            box-shadow: var(--shadow-dark-subtle);
            border: 1px solid var(--border-color);
        }
        
        .rec-content h6 {
            font-size: 0.95rem;
            margin-bottom: 5px;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .rec-content h6 a { 
            color: var(--text-primary);
        }
        .rec-content h6 a:hover { 
            color: var(--yellow-bright);
        }
        .rec-date { 
            font-size: 0.8rem; 
            color: var(--text-muted);
        }

        /* Buttons */
        .btn-outline-primary {
            color: var(--yellow-bright);
            border-color: var(--yellow);
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            border-color: var(--yellow);
            color: var(--dark-bg);
            box-shadow: var(--shadow-glow-yellow);
        }

        .share-box a {
            color: var(--text-secondary) !important;
            font-size: 1.2rem;
            transition: 0.3s;
        }
        .share-box a:hover {
            color: var(--yellow-bright) !important;
            transform: translateY(-2px);
        }

        /* --- DARK FOOTER (Same as Home) --- */
        footer {
            background: linear-gradient(135deg, #0a0e13 0%, #141920 100%);
            color: var(--text-secondary);
            padding: 30px 0;
            border-top: 3px solid var(--yellow);
            box-shadow: 0 -4px 20px rgba(0,0,0,0.5), 0 -2px 10px rgba(255, 215, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .footer-brand-wrapper { display: flex; align-items: center; gap: 15px; }
        .footer-brand-img { height: 40px; width: auto; }
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
            width: 36px; 
            height: 36px; 
            border-radius: 10px;
            background: linear-gradient(135deg, rgba(64, 224, 208, 0.1), rgba(255, 215, 0, 0.1));
            color: var(--text-primary);
            display: inline-flex; 
            align-items: center; 
            justify-content: center;
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
        }

        /* Animations */
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            color: var(--dark-bg);
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
            box-shadow: var(--shadow-glow-yellow);
            transition: 0.3s;
        }
        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(255, 215, 0, 0.5);
        }
        .back-to-top.show {
            display: flex;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/img/logo-akk.png'); ?>" alt="AKK Community">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#program">Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#kegiatan-akk">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('dokumentasi') ?>">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#gabung">Gabung Volunteer</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="detail-hero hero-slider-wrapper" id="hero">
    <div id="detailHeroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide-bg" style="background-image: url('<?= base_url('assets/img/Background1.JPG') ?>');"></div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide-bg" style="background-image: url('<?= base_url('assets/img/Background2.JPG') ?>');"></div>
            </div>
            <div class="carousel-item">
                <div class="hero-slide-bg" style="background-image: url('<?= base_url('assets/img/Background3.JPG') ?>');"></div>
            </div>
        </div>
    </div>

    <div class="hero-slider-overlay"></div>

    <div class="container hero-content-fixed">
        <div class="row">
            <div class="col-lg-10 fade-in-up">
                <div class="breadcrumb-custom">
                    <a href="<?= base_url() ?>">Home</a>
                    <span class="breadcrumb-separator">/</span>
                    <a href="<?= base_url() ?>#dokumentasi">Artikel</a>
                    <span class="breadcrumb-separator">/</span>
                    <span class="current">Detail Artikel</span>
                </div>
                <span class="badge-soft"><?= $doc['kategori'] ?></span>
                <h1 class="display-4 fw-bold text-white mb-0" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.5);"><?= $doc['judul'] ?></h1>
            </div>
        </div>
    </div>
</header>

    <!-- Main Content Section -->
    <main class="main-content">
        <div class="container">
            <div class="row g-5 align-items-start">
                <!-- Left Column: Article -->
                <div class="col-lg-8">
                    <div class="article-card fade-in-up">
                        <div class="meta-info">
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt"></i>
                                <?= date('d F Y', strtotime($doc['tgl_upload'])) ?>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-tag"></i>
                                <?= $doc['kategori'] ?>
                            </div>
                        </div>
                        
                        <div class="main-image-wrapper">
                            <img src="<?= base_url('assets/img/dokumentasi/'.$doc['foto']) ?>" 
                                 alt="<?= $doc['judul'] ?>"
                                 onerror="this.src='https://via.placeholder.com/1200x600?text=No+Image'">
                        </div>
                        
                        <div class="content-body" style="text-align: justify;">
                            <?= nl2br($doc['deskripsi']) ?>
                        </div>
                        
                        <div class="mt-5 pt-4 border-top d-flex justify-content-between align-items-center" style="border-color: var(--border-color) !important;">
                            <a href="<?= base_url() ?>#dokumentasi" class="btn btn-outline-primary rounded-pill px-4">
                                <i class="fas fa-arrow-left me-2"></i> Kembali ke Home
                            </a>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky fade-in-up" style="animation-delay: 0.2s;">
                        <div class="sidebar-card">
                            <h5 class="sidebar-title">
                                <i class="fa-solid fa-newspaper"></i> 
                                Artikel Lain
                            </h5>
                            
                            <div class="recommendation-list">
                                <?php if(empty($sidebar_docs)): ?>
                                    <p class="text-center py-3" style="color: var(--text-muted); font-size: 0.9rem;">
                                        Belum ada data lainnya.
                                    </p>
                                <?php else: foreach($sidebar_docs as $item): 
                                    $slug = url_title($item['judul'], 'dash', true);
                                ?>
                                    <div class="rec-item">
                                        <a href="<?= base_url('dokumentasi/'.$item['id_dokumentasi'].'/'.$slug) ?>">
                                            <img src="<?= base_url('assets/img/dokumentasi/'.$item['foto']) ?>" 
                                                 class="rec-img" 
                                                 alt="Thumb"
                                                 onerror="this.src='https://via.placeholder.com/100x70?text=No+Image'">
                                        </a>
                                        <div class="rec-content">
                                            <h6 class="fw-bold">
                                                <a href="<?= base_url('dokumentasi/'.$item['id_dokumentasi'].'/'.$slug) ?>">
                                                    <?= $item['judul'] ?>
                                                </a>
                                            </h6>
                                            <div class="rec-date">
                                                <i class="far fa-calendar-alt me-1"></i>
                                                <?= date('d M Y', strtotime($item['tgl_upload'])) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Modern Compact Footer (Same as Home) -->
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

             <div class="col-lg-3 col-md-12 text-center text-lg-end mb-2 mb-lg-0">
            <div class="footer-contact-item py-1 px-3 border rounded-pill d-inline-flex align-items-center">
                <i class="fas fa-envelope me-2"></i> 
                <a href="mailto:artikatakita9@gmail.com">artikatakita9@gmail.com</a>
            </div>
             </div>
            <div class="col-lg-3 col-md-12 text-center text-lg-end">
                <a href="https://wa.me/628157642627" target="_blank" class="footer-contact-item py-1 px-3 border rounded-pill d-inline-flex align-items-center text-decoration-none">
                    <i class="fab fa-whatsapp"></i> Hubungi Kami
                </a>
            </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4 pt-3 border-top opacity-50 small" style="border-color: rgba(255,255,255,0.05);">
            &copy; <?= date('Y') ?> AKK Community. All Rights Reserved.
        </div>
    </div>
</footer>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar Scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Back to Top
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        backToTop.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>