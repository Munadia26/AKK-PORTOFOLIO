<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumentasi Kegiatan | AKK | Arti Kata Kita</title>

    <link rel="icon" href="<?= base_url('assets/img/logo-akk.png') ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --cyan: #40E0D0;
            --cyan-light: #5FFAF0;
            --yellow: #FFD700;
            --yellow-bright: #FFE44D;
            --dark: #2C3E50;
            --dark-bg: #0F1419;
            --dark-card: #1A1F26;
            --dark-card-hover: #242931;
            --text-primary: #E8EAED;
            --text-secondary: #B8BABD;
            --text-muted: #7A7D82;
            --border-color: #2F3640;
            --card-radius: 14px;
            --shadow-dark-subtle: 0 4px 6px -1px rgba(0,0,0,.3), 0 2px 4px -1px rgba(0,0,0,.2);
            --shadow-dark-hover: 0 20px 25px -5px rgba(0,0,0,.4), 0 10px 10px -5px rgba(0,0,0,.3);
            --shadow-glow-yellow: 0 0 25px rgba(255,215,0,.4);
            --shadow-glow-cyan: 0 0 20px rgba(64,224,208,.3);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; color: var(--text-secondary); background-color: var(--dark-bg); overflow-x: hidden; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Poppins', sans-serif; color: var(--text-primary); font-weight: 600; letter-spacing: -.5px; }
        a { text-decoration: none; transition: .3s ease; }

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

        /* ── HERO ── */
        .list-hero {
            position: relative;
            padding: 140px 0 90px;
            background: url('<?= base_url("assets/img/Background.jpeg") ?>') center/cover no-repeat fixed;
            min-height: 380px;
            display: flex;
            align-items: center;
        }
        .list-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(15,20,25,.95) 0%, rgba(44,62,80,.85) 50%, rgba(64,224,208,.25) 100%);
            z-index: 1;
        }
        .list-hero .container { position: relative; z-index: 2; }

        .badge-hero {
            display: inline-block;
            background: rgba(255,215,0,.15);
            border: 1px solid rgba(255,215,0,.4);
            color: var(--yellow-bright);
            font-size: .72rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: .35rem 1rem;
            border-radius: 50px;
            margin-bottom: 1.2rem;
        }

        .breadcrumb-custom { display: flex; gap: 8px; font-size: .83rem; margin-bottom: 1rem; align-items: center; }
        .breadcrumb-custom a { color: rgba(255,255,255,.6); }
        .breadcrumb-custom a:hover { color: var(--yellow); }
        .breadcrumb-custom .sep { color: rgba(255,255,255,.3); }
        .breadcrumb-custom .current { color: rgba(255,255,255,.85); }

        /* ── SEARCH BOX ── */
        .search-box-wrapper {
            max-width: 620px;
            margin-top: 2rem;
        }
        .search-box {
            display: flex;
            background: rgba(26,31,38,.9);
            border: 1px solid var(--border-color);
            border-radius: 50px;
            overflow: hidden;
            transition: border-color .3s, box-shadow .3s;
        }
        .search-box:focus-within {
            border-color: var(--cyan);
            box-shadow: 0 0 0 3px rgba(64,224,208,.15);
        }
        .search-box input {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            padding: .85rem 1.5rem;
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            font-size: .9rem;
        }
        .search-box input::placeholder { color: var(--text-muted); }
        .search-box button {
            background: linear-gradient(135deg, var(--cyan), var(--yellow));
            border: none;
            padding: .85rem 1.8rem;
            color: var(--dark-bg);
            font-weight: 700;
            font-size: .88rem;
            cursor: pointer;
            transition: .3s;
            display: flex;
            align-items: center;
            gap: .5rem;
        }
        .search-box button:hover { filter: brightness(1.1); }

        /* Hero stats strip */
        .hero-stats {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }
        .hero-stat { font-size: .85rem; color: rgba(255,255,255,.6); display: flex; align-items: center; gap: .5rem; }
        .hero-stat strong { color: var(--yellow-bright); font-weight: 700; }

        /* ── MAIN CONTENT ── */
        .main-content { padding: 70px 0 80px; background: var(--dark-bg); }

        /* Filter & Sort bar */
        .filter-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
        }
        .filter-info { color: var(--text-muted); font-size: .88rem; }
        .filter-info strong { color: var(--text-primary); }

        .filter-tags { display: flex; gap: .6rem; flex-wrap: wrap; }
        .filter-tag {
            background: var(--dark-card);
            border: 1px solid var(--border-color);
            color: var(--text-secondary);
            font-size: .78rem;
            padding: .35rem .9rem;
            border-radius: 50px;
            cursor: pointer;
            transition: .2s;
            font-family: 'Inter', sans-serif;
        }
        .filter-tag:hover, .filter-tag.active {
            background: rgba(255,215,0,.15);
            border-color: var(--yellow);
            color: var(--yellow-bright);
        }

        /* ── DOC CARDS ── */
        .doc-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        @media (max-width: 991px) { .doc-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 576px) { .doc-grid { grid-template-columns: 1fr; } }

        .dokumentasi-card {
            background: var(--dark-card);
            border-radius: var(--card-radius);
            overflow: hidden;
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            transition: transform .3s, box-shadow .3s, border-color .3s;
            position: relative;
        }
        .dokumentasi-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--cyan), var(--yellow));
            opacity: 0;
            transition: opacity .3s;
            z-index: 2;
        }
        .dokumentasi-card:hover::before { opacity: 1; }
        .dokumentasi-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-dark-hover);
            border-color: rgba(255,215,0,.4);
        }

        .doc-img-box {
            position: relative;
            width: 100%;
            aspect-ratio: 16/9;
            overflow: hidden;
            flex-shrink: 0;
        }
        .doc-img-box img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform .5s ease;
        }
        .dokumentasi-card:hover .doc-img-box img { transform: scale(1.06); }
        .doc-img-box::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 40%, rgba(15,20,25,.8) 100%);
        }
        .doc-date-badge {
            position: absolute;
            top: 12px; left: 12px;
            z-index: 3;
            background: rgba(15,20,25,.85);
            border: 1px solid rgba(255,215,0,.3);
            color: var(--yellow-bright);
            font-size: .7rem;
            font-weight: 600;
            padding: .25rem .7rem;
            border-radius: 50px;
            backdrop-filter: blur(4px);
        }
        .doc-cat-badge {
            position: absolute;
            bottom: 12px; left: 12px;
            z-index: 3;
            background: linear-gradient(135deg, var(--cyan), var(--yellow));
            color: var(--dark-bg);
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .5px;
            text-transform: uppercase;
            padding: .25rem .75rem;
            border-radius: 50px;
        }

        .doc-body {
            padding: 1.4rem 1.4rem 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .doc-title {
            font-size: .98rem;
            font-weight: 700;
            color: var(--text-primary);
            line-height: 1.45;
            margin-bottom: .7rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .doc-desc {
            font-size: .82rem;
            color: var(--text-muted);
            line-height: 1.6;
            flex-grow: 1;
            margin-bottom: 1.2rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .doc-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
            padding: .6rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-secondary);
            font-size: .82rem;
            font-weight: 600;
            transition: .2s;
            background: transparent;
        }
        .doc-btn:hover {
            background: linear-gradient(135deg, var(--cyan), var(--yellow));
            border-color: transparent;
            color: var(--dark-bg);
        }

        /* ── EMPTY STATE ── */
        .empty-state {
            text-align: center;
            padding: 5rem 2rem;
            grid-column: 1 / -1;
        }
        .empty-icon { font-size: 4rem; margin-bottom: 1.5rem; opacity: .4; }
        .empty-state h4 { color: var(--text-primary); margin-bottom: .8rem; }
        .empty-state p { color: var(--text-muted); font-size: .9rem; }

        /* ── PAGINATION ── */
        .pagination-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: .5rem;
            margin-top: 3.5rem;
            flex-wrap: wrap;
        }
        .page-btn {
            width: 40px; height: 40px;
            display: flex; align-items: center; justify-content: center;
            background: var(--dark-card);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-secondary);
            font-size: .85rem;
            font-weight: 600;
            cursor: pointer;
            transition: .2s;
            text-decoration: none;
        }
        .page-btn:hover, .page-btn.active {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            border-color: transparent;
            color: var(--dark-bg);
        }
        .page-btn.disabled { opacity: .3; pointer-events: none; }

        /* ── FOOTER ── */
        footer {
            background: linear-gradient(135deg, #0a0e13 0%, #141920 100%);
            color: var(--text-secondary);
            padding: 30px 0;
            border-top: 3px solid var(--yellow);
            box-shadow: 0 -4px 20px rgba(0,0,0,.5), 0 -2px 10px rgba(255,215,0,.1);
        }
        .footer-brand-wrapper { display: flex; align-items: center; gap: 15px; }
        .footer-brand-img { height: 40px; width: auto; }
        .footer-brand-text h5 {
            background: linear-gradient(135deg, var(--cyan-light), var(--yellow-bright));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            background-clip: text; margin: 0; font-size: 1.1rem; font-weight: 700;
        }
        .footer-brand-text p { margin: 0; font-size: .8rem; color: var(--text-muted); }
        .footer-contact-item {
            display: inline-flex; align-items: center; gap: 8px; margin-left: 15px;
            font-size: .85rem; color: var(--text-secondary);
            background: rgba(64,224,208,.1); padding: 6px 12px; border-radius: 50px;
            transition: .3s; border: 1px solid rgba(255,215,0,.2);
        }
        .footer-contact-item:hover { background: rgba(255,215,0,.2); color: var(--yellow-bright); border-color: var(--yellow); }
        .footer-contact-item i { color: var(--yellow-bright); }
        .social-link-modern {
            width: 36px; height: 36px; border-radius: 10px;
            background: linear-gradient(135deg, rgba(64,224,208,.1), rgba(255,215,0,.1));
            color: var(--text-primary); display: inline-flex; align-items: center; justify-content: center;
            margin: 0 4px; transition: all .3s; border: 1px solid rgba(255,215,0,.2);
        }
        .social-link-modern:hover {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            border-color: var(--yellow); color: var(--dark-bg);
            transform: translateY(-3px); box-shadow: var(--shadow-glow-yellow);
        }
        @media (max-width: 991px) {
            .footer-brand-wrapper { flex-direction: column; text-align: center; margin-bottom: 1rem; }
            .footer-contact-item { margin: 5px; display: flex; width: 100%; justify-content: center; }
        }

        /* ── BACK TO TOP ── */
        .back-to-top {
            position: fixed; bottom: 28px; right: 28px;
            width: 46px; height: 46px;
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            color: var(--dark-bg); border-radius: 50%;
            display: none; align-items: center; justify-content: center;
            cursor: pointer; z-index: 999;
            box-shadow: var(--shadow-glow-yellow); transition: .3s;
        }
        .back-to-top:hover { transform: translateY(-4px); }
        .back-to-top.show { display: flex; }

        /* ── ANIMATE ── */
        .fade-up { opacity: 0; transform: translateY(24px); transition: opacity .5s ease, transform .5s ease; }
        .fade-up.visible { opacity: 1; transform: none; }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url('assets/img/logo-akk.png') ?>" alt="AKK Community">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#hero">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#program">Program</a></li>
                <li class="nav-item"><a class="nav-link active" href="<?= base_url('dokumentasi') ?>">Dokumentasi</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>#gabung">Gabung Volunteer</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<header class="list-hero">
    <div class="container">
        <div class="breadcrumb-custom fade-up">
            <a href="<?= base_url() ?>">Home</a>
            <span class="sep">/</span>
            <span class="current">Dokumentasi</span>
        </div>
        <div class="badge-hero fade-up">📸 Galeri Kegiatan</div>
        <h1 class="display-4 fw-bold text-white mb-2 fade-up" style="max-width: 700px; line-height: 1.15;">
            Dokumentasi <span style="background: linear-gradient(135deg, var(--cyan), var(--yellow)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Kegiatan AKK</span>
        </h1>
        <p class="fade-up" style="color: rgba(255,255,255,.7); font-size: 1.05rem; max-width: 520px; line-height: 1.7;">
            Rekam jejak setiap perjalanan — dari lapangan, panggung seni, hingga ruang diskusi yang mengubah pandangan.
        </p>

        <!-- Search Box in Hero -->
        <div class="search-box-wrapper fade-up">
            <form method="GET" action="<?= base_url('dokumentasi') ?>">
                <div class="search-box">
                    <input type="text" name="q" placeholder="Cari dokumentasi kegiatan..."
                           value="<?= htmlspecialchars($search ?? '') ?>" autocomplete="off">
                    <button type="submit">
                        <i class="fas fa-search"></i> Cari
                    </button>
                </div>
            </form>
        </div>

        <div class="hero-stats fade-up">
            <div class="hero-stat"><i class="fas fa-images" style="color: var(--yellow);"></i> <strong><?= count($dokumentasi) ?></strong> total dokumentasi</div>
            <div class="hero-stat"><i class="fas fa-calendar-alt" style="color: var(--cyan);"></i> Diperbarui secara berkala</div>
        </div>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class="main-content">
    <div class="container">

        <!-- Filter Bar -->
        <div class="filter-bar fade-up">
            <div class="filter-info">
                <?php if(!empty($search)): ?>
                    Hasil pencarian untuk <strong>"<?= htmlspecialchars($search) ?>"</strong>
                    — ditemukan <strong><?= count($dokumentasi) ?></strong> hasil
                    &nbsp;<a href="<?= base_url('dokumentasi') ?>" style="color: var(--cyan); font-size: .82rem;"><i class="fas fa-times-circle me-1"></i>Hapus filter</a>
                <?php else: ?>
                    Menampilkan <strong><?= count($dokumentasi) ?></strong> dokumentasi
                <?php endif; ?>
            </div>
            <div class="filter-tags">
                <a href="<?= base_url('dokumentasi') ?>" class="filter-tag <?= empty($kategori) ? 'active' : '' ?>">Semua</a>
                <?php
                $kategori_list = array_unique(array_column($dokumentasi_all ?? $dokumentasi, 'kategori'));
                foreach($kategori_list as $kat):
                ?>
                <a href="<?= base_url('dokumentasi?kategori='.urlencode($kat)) ?>"
                   class="filter-tag <?= (($kategori ?? '') === $kat) ? 'active' : '' ?>">
                    <?= htmlspecialchars($kat) ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Documentation Grid -->
        <?php if(empty($dokumentasi)): ?>
        <div class="doc-grid">
            <div class="empty-state">
                <div class="empty-icon">🔍</div>
                <h4>Dokumentasi Tidak Ditemukan</h4>
                <p>Coba kata kunci lain atau hapus filter untuk melihat semua dokumentasi.</p>
                <a href="<?= base_url('dokumentasi') ?>" class="btn mt-3" style="background: linear-gradient(135deg, var(--cyan), var(--yellow)); color: var(--dark-bg); border-radius: 8px; padding: .7rem 1.8rem; font-weight: 600;">
                    Lihat Semua
                </a>
            </div>
        </div>
        <?php else: ?>
        <div class="doc-grid" id="docGrid">
            <?php foreach($dokumentasi as $i => $doc):
                $slug = url_title($doc['judul'], 'dash', true);
            ?>
            <div class="dokumentasi-card fade-up" style="transition-delay: <?= ($i % 3) * 0.08 ?>s;">
                <div class="doc-img-box">
                    <span class="doc-date-badge">
                        <i class="far fa-calendar-alt me-1"></i><?= date('d M Y', strtotime($doc['tgl_upload'])) ?>
                    </span>
                    <span class="doc-cat-badge"><?= htmlspecialchars($doc['kategori']) ?></span>
                    <img src="<?= base_url('assets/img/dokumentasi/'.$doc['foto']) ?>"
                         alt="<?= htmlspecialchars($doc['judul']) ?>"
                         onerror="this.src='https://via.placeholder.com/600x340/1A1F26/FFD700?text=AKK'">
                </div>
                <div class="doc-body">
                    <h5 class="doc-title"><?= htmlspecialchars($doc['judul']) ?></h5>
                    <p class="doc-desc"><?= strip_tags($doc['deskripsi']) ?></p>
                    <a href="<?= base_url('dokumentasi/'.$doc['id_dokumentasi'].'/'.$slug) ?>" class="doc-btn">
                        <i class="fas fa-eye"></i> Lihat Detail
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if(isset($pagination) && $pagination['total_pages'] > 1): ?>
        <div class="pagination-wrap fade-up">
            <a href="<?= base_url('dokumentasi?page='.max(1, $pagination['current']-1).(!empty($search)?'&q='.urlencode($search):'')) ?>"
               class="page-btn <?= $pagination['current'] <= 1 ? 'disabled' : '' ?>">
                <i class="fas fa-chevron-left"></i>
            </a>
            <?php for($p = 1; $p <= $pagination['total_pages']; $p++): ?>
            <a href="<?= base_url('dokumentasi?page='.$p.(!empty($search)?'&q='.urlencode($search):'')) ?>"
               class="page-btn <?= $pagination['current'] == $p ? 'active' : '' ?>"><?= $p ?></a>
            <?php endfor; ?>
            <a href="<?= base_url('dokumentasi?page='.min($pagination['total_pages'], $pagination['current']+1).(!empty($search)?'&q='.urlencode($search):'')) ?>"
               class="page-btn <?= $pagination['current'] >= $pagination['total_pages'] ? 'disabled' : '' ?>">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        <?php endif; ?>
        <?php endif; ?>

    </div>
</main>

<!-- Back to Top -->
<div class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-12 text-center text-lg-start mb-3 mb-lg-0">
                <div class="footer-brand-wrapper justify-content-center justify-content-lg-start">
                    <img src="<?= base_url('assets/img/logo-akk.png') ?>" alt="AKK" class="footer-brand-img">
                    <div class="footer-brand-text text-start">
                        <h5>Arti Kata Kita</h5>
                        <p>Memanusiakan Manusia Dengan Cara Manusiawi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 text-center mb-3 mb-lg-0">
                <a href="https://www.instagram.com/arti_katakita" class="social-link-modern"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@ArtiKataKita" class="social-link-modern"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="col-lg-3 col-md-12 text-center text-lg-end mb-2 mb-lg-0">
                <div class="footer-contact-item py-1 px-3 border rounded-pill d-inline-flex align-items-center">
                    <i class="fas fa-envelope me-2"></i> hello@akk.com
                </div>
            </div>
            <div class="col-lg-3 col-md-12 text-center text-lg-end">
                <div class="footer-contact-item py-1 px-3 border rounded-pill d-inline-flex align-items-center">
                    <i class="fab fa-whatsapp me-2"></i> +62 858-7987-4187
                </div>
            </div>
        </div>
        <div class="text-center mt-4 pt-3 border-top opacity-50 small" style="border-color: rgba(255,255,255,.05);">
            &copy; <?= date('Y') ?> AKK Community. All Rights Reserved.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Navbar scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 60) navbar.classList.add('navbar-scrolled');
        else navbar.classList.remove('navbar-scrolled');
    });

    // Back to top
    const btt = document.getElementById('backToTop');
    window.addEventListener('scroll', () => btt.classList.toggle('show', window.scrollY > 400));
    btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // Fade-up reveal
    const reveals = document.querySelectorAll('.fade-up');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.08 });
    reveals.forEach(el => observer.observe(el));

    // Hero fade-up on load
    document.querySelectorAll('.list-hero .fade-up').forEach((el, i) => {
        setTimeout(() => el.classList.add('visible'), 100 + i * 120);
    });

    // Filter tag active state (category filter via URL)
    document.querySelectorAll('.filter-tag').forEach(tag => {
        tag.addEventListener('click', function(e) {
            if(this.href) return; // let links work
        });
    });
</script>
</body>
</html>
