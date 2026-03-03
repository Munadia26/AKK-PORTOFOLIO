<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($doc['judul']) ?> | AKK | Arti Kata Kita</title>

    <link rel="icon" href="<?= base_url('assets/img/logo-akk.png') ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@500;600;700;800&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --cyan:               #40E0D0;
            --cyan-light:         #5FFAF0;
            --yellow:             #FFD700;
            --yellow-bright:      #FFE44D;
            --dark-bg:            #0F1419;
            --dark-card:          #1A1F26;
            --dark-card-hover:    #242931;
            --text-primary:       #E8EAED;
            --text-secondary:     #B8BABD;
            --text-muted:         #7A7D82;
            --border-color:       #2F3640;
            --card-radius:        14px;
            --shadow-dark:        0 4px 20px rgba(0,0,0,.4);
            --shadow-glow-yellow: 0 0 25px rgba(255,215,0,.35);
            --shadow-glow-cyan:   0 0 20px rgba(64,224,208,.3);
        }

        html { scroll-behavior: smooth; }
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-bg);
            color: var(--text-secondary);
            overflow-x: hidden;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family: 'Poppins', sans-serif;
            color: var(--text-primary);
            font-weight: 700;
        }
        a { text-decoration: none; transition: .3s; }

        /* ── NAVBAR ── */
        .navbar {
            padding: 14px 0;
            background: rgba(15,20,25,.97);
            border-bottom: 1px solid var(--border-color);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 1030;
            transition: all .3s;
        }
        .navbar-scrolled { box-shadow: 0 4px 20px rgba(0,0,0,.5); padding: 10px 0; }
        .navbar-toggler { border: none; padding: 0; }
        .navbar-toggler:focus { box-shadow: none; }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255,255,255,.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        .navbar-brand img { height: 52px; width: auto; }
        .nav-link {
            font-weight: 500; color: rgba(255,255,255,.85) !important;
            margin-left: 1.6rem; font-size: .9rem; position: relative;
        }
        .nav-link::after {
            content: ''; position: absolute; bottom: -2px; left: 0;
            width: 0; height: 2px; background: var(--yellow);
            transition: width .3s; border-radius: 2px;
        }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }
        .nav-link:hover, .nav-link.active { color: var(--yellow) !important; }
        @media (max-width:991px) {
            .navbar-collapse {
                background: rgba(15,20,25,.98); padding: 20px;
                border-radius: 12px; border: 1px solid var(--border-color); margin-top: 12px;
            }
            .nav-link { margin-left: 0; padding: 10px 0; border-bottom: 1px solid var(--border-color); }
            .nav-link:last-child { border-bottom: none; }
            .nav-link::after { display: none; }
        }

        /* ── BREADCRUMB BAR (pengganti hero) ── */
        .breadcrumb-bar {
            background: var(--dark-card);
            border-bottom: 1px solid var(--border-color);
            padding: 12px 0;
            margin-top: 81px;
        }
        .breadcrumb { margin: 0; font-size: .82rem; }
        .breadcrumb-item a { color: var(--text-muted); }
        .breadcrumb-item a:hover { color: var(--yellow); }
        .breadcrumb-item.active { color: var(--text-secondary); }
        .breadcrumb-item + .breadcrumb-item::before {
            content: "›"; color: var(--border-color); padding: 0 8px;
        }

        /* ── LAYOUT UTAMA ── */
        .main-wrapper { padding: 36px 0 70px; }

        /* ── HEADER ARTIKEL ── */
        .cat-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--yellow), var(--yellow-bright));
            color: #0F1419;
            font-size: .68rem; font-weight: 700; letter-spacing: 1.2px;
            text-transform: uppercase; padding: 4px 14px;
            border-radius: 50px; margin-bottom: 14px;
        }

        .article-title {
            font-family: 'Poppins', sans-serif;
            font-size: clamp(1.55rem, 3.5vw, 2.15rem);
            font-weight: 800; color: var(--text-primary);
            line-height: 1.3; letter-spacing: -.4px; margin-bottom: 10px;
        }

        .article-subtitle {
            font-size: 1rem; color: var(--text-secondary); line-height: 1.65;
            border-left: 3px solid var(--yellow); padding-left: 14px;
            margin-bottom: 20px; font-style: italic;
        }

        /* Meta bar */
        .meta-bar {
            display: flex; flex-wrap: wrap; gap: 0;
            padding: 14px 0;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 24px;
        }
        .meta-item {
            display: flex; align-items: center; gap: 8px;
            font-size: .82rem; color: var(--text-muted);
            padding-right: 20px; margin-right: 20px;
            border-right: 1px solid var(--border-color);
        }
        .meta-item:last-child { border-right: none; margin-right: 0; padding-right: 0; }
        .meta-item i { color: var(--yellow); font-size: .78rem; }
        .meta-item .mi-label {
            display: block; font-size: .67rem; color: var(--text-muted);
            line-height: 1; margin-bottom: 1px;
        }
        .meta-item .mi-val { color: var(--text-secondary); font-weight: 600; font-size: .82rem; }

        /* Foto cover */
        .article-cover {
            width: 100%; border-radius: var(--card-radius);
            overflow: hidden; margin-bottom: 8px;
            border: 1px solid var(--border-color); box-shadow: var(--shadow-dark);
        }
        .article-cover img {
            width: 100%; height: auto;
            max-height: 460px; object-fit: cover; display: block;
        }
        .caption-text {
            font-size: .73rem; color: var(--text-muted);
            text-align: center; margin-bottom: 26px; font-style: italic;
        }

        /* Divider dekoratif */
        .art-divider {
            display: flex; align-items: center; gap: 10px; margin-bottom: 22px;
        }
        .art-divider::before, .art-divider::after {
            content: ''; flex: 1; height: 1px; background: var(--border-color);
        }
        .art-divider .dot {
            width: 7px; height: 7px; border-radius: 50%;
            background: var(--yellow); box-shadow: 0 0 8px rgba(255,215,0,.6);
            flex-shrink: 0;
        }

        /* Konten artikel (Merriweather = serif nyaman baca) */
        .article-body {
            font-family: 'Merriweather', Georgia, serif;
            font-size: 1rem; line-height: 1.9;
            color: var(--text-secondary); text-align: justify;
        }
        .article-body h1,.article-body h2,.article-body h3,
        .article-body h4,.article-body h5,.article-body h6 {
            font-family: 'Poppins', sans-serif;
            color: var(--text-primary); margin: 1.8rem 0 .8rem; line-height: 1.35;
        }
        .article-body h1 { font-size: 1.65rem; }
        .article-body h2 { font-size: 1.35rem; border-left: 4px solid var(--yellow); padding-left: 12px; }
        .article-body h3 { font-size: 1.15rem; }
        .article-body p { margin-bottom: 1.25rem; }
        /* Drop cap hanya untuk paragraf pertama */
        .article-body > p:first-of-type::first-letter {
            font-size: 3.4rem; font-weight: 800; float: left;
            line-height: 1; margin: 2px 10px 0 0;
            background: linear-gradient(135deg, var(--cyan), var(--yellow));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            background-clip: text; font-family: 'Poppins', sans-serif;
        }
        .article-body strong { color: var(--text-primary); }
        .article-body a { color: var(--cyan); border-bottom: 1px dashed rgba(64,224,208,.4); }
        .article-body a:hover { color: var(--yellow); border-color: var(--yellow); }
        .article-body ul,.article-body ol { padding-left: 1.4rem; margin-bottom: 1.25rem; }
        .article-body li { margin-bottom: .45rem; }
        .article-body blockquote {
            border-left: 4px solid var(--yellow);
            background: rgba(255,215,0,.05);
            margin: 1.4rem 0; padding: 14px 18px;
            border-radius: 0 10px 10px 0;
            color: var(--text-secondary); font-style: italic;
        }
        .article-body code {
            background: rgba(64,224,208,.1); color: var(--cyan-light);
            padding: 2px 6px; border-radius: 4px; font-size: .88em;
        }
        .article-body pre {
            background: #0d1117; border: 1px solid var(--border-color);
            border-radius: 10px; padding: 14px; overflow-x: auto; margin-bottom: 1.25rem;
        }
        .article-body img {
            max-width: 100%; border-radius: 8px;
            margin: .5rem 0 1rem; border: 1px solid var(--border-color);
        }

        /* Share bar */
        .share-bar {
            display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
            padding: 16px 0; margin-top: 30px;
            border-top: 1px solid var(--border-color);
        }
        .share-label { font-size: .8rem; font-weight: 600; color: var(--text-muted); margin-right: 2px; }
        .share-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 7px 16px; border-radius: 50px;
            font-size: .77rem; font-weight: 600;
            border: 1px solid var(--border-color);
            color: var(--text-secondary); background: var(--dark-card);
            transition: .25s; cursor: pointer;
        }
        .share-btn:hover { transform: translateY(-2px); filter: brightness(1.2); }
        .share-btn.wa { border-color: rgba(37,211,102,.4); color: #25D366; }
        .share-btn.tw { border-color: rgba(29,161,242,.4); color: #1DA1F2; }
        .share-btn.cp { border-color: rgba(255,215,0,.3); color: var(--yellow); }
        .share-btn.wa:hover { background: rgba(37,211,102,.08); }
        .share-btn.tw:hover { background: rgba(29,161,242,.08); }
        .share-btn.cp:hover { background: rgba(255,215,0,.08); }

        /* Kembali */
        .back-btn {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 10px 22px; border-radius: 50px;
            border: 1px solid var(--border-color); color: var(--text-secondary);
            font-size: .84rem; font-weight: 600; background: var(--dark-card); transition: .25s; margin-top: 10px;
        }
        .back-btn:hover {
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            border-color: transparent; color: var(--dark-bg); transform: translateX(-3px);
        }

        /* ── SIDEBAR ── */
        .sidebar-sticky { position: sticky; top: 100px; }

        .sidebar-widget {
            background: var(--dark-card);
            border: 1px solid var(--border-color);
            border-radius: var(--card-radius);
            overflow: hidden; margin-bottom: 22px;
        }

        .widget-header {
            padding: 13px 18px;
            background: rgba(255,215,0,.05);
            border-bottom: 1px solid var(--border-color);
            display: flex; align-items: center; gap: 9px;
        }
        .widget-header i { color: var(--yellow-bright); font-size: .9rem; }
        .widget-header h6 {
            font-size: .87rem; font-weight: 700;
            color: var(--text-primary); margin: 0;
        }

        /* Artikel sidebar */
        .rec-item {
            display: flex; gap: 11px; padding: 13px 18px;
            border-bottom: 1px solid var(--border-color);
            transition: background .2s; align-items: flex-start;
        }
        .rec-item:last-child { border-bottom: none; }
        .rec-item:hover { background: var(--dark-card-hover); }
        .rec-num {
            display: inline-flex; align-items: center; justify-content: center;
            width: 20px; height: 20px;
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            color: var(--dark-bg); border-radius: 4px;
            font-size: .68rem; font-weight: 700; flex-shrink: 0; margin-top: 2px;
        }
        .rec-thumb {
            width: 76px; height: 54px; border-radius: 7px;
            object-fit: cover; flex-shrink: 0; border: 1px solid var(--border-color);
        }
        .rec-content { flex: 1; min-width: 0; }
        .rec-title {
            font-size: .82rem; font-weight: 600; color: var(--text-primary);
            line-height: 1.4; margin-bottom: 5px;
            display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
        }
        .rec-title:hover { color: var(--yellow-bright); }
        .rec-meta { font-size: .71rem; color: var(--text-muted); display: flex; flex-wrap: wrap; gap: 6px; }
        .rec-meta i { color: var(--yellow); opacity: .7; }

        /* ── FOOTER ── */
        footer {
            background: linear-gradient(135deg, #0a0e13 0%, #141920 100%);
            color: var(--text-secondary); padding: 30px 0;
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
        @media (max-width:991px) {
            .footer-brand-wrapper { flex-direction: column; text-align: center; margin-bottom: 1rem; }
            .footer-contact-item { margin: 5px; display: flex; width: 100%; justify-content: center; }
        }

        /* ── BACK TO TOP ── */
        .back-to-top {
            position: fixed; bottom: 28px; right: 28px;
            width: 44px; height: 44px;
            background: linear-gradient(135deg, var(--yellow), var(--cyan));
            color: var(--dark-bg); border-radius: 50%;
            display: none; align-items: center; justify-content: center;
            cursor: pointer; z-index: 999;
            box-shadow: var(--shadow-glow-yellow); transition: .3s;
        }
        .back-to-top:hover { transform: translateY(-4px); }
        .back-to-top.show { display: flex; }

        /* ── ANIMATIONS ── */
        .fade-up { opacity: 0; transform: translateY(22px); transition: opacity .55s ease, transform .55s ease; }
        .fade-up.visible { opacity: 1; transform: none; }

        @media (max-width:991px) {
            .meta-item { border-right: none; margin-right: 0; padding-right: 0; }
            .article-body { font-size: .94rem; }
            .breadcrumb-bar { margin-top: 78px; }
        }
    </style>
</head>
<body>

<!-- ══════════ NAVBAR ══════════ -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url('assets/img/logo-akk.png') ?>" alt="AKK Community">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
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

<!-- ══════════ BREADCRUMB BAR ══════════ -->
<div class="breadcrumb-bar">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= base_url() ?>"><i class="fas fa-home me-1"></i>Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?= base_url('dokumentasi') ?>">Artikel</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= mb_strimwidth(htmlspecialchars($doc['judul']), 0, 60, '…') ?>
                </li>
            </ol>
        </nav>
    </div>
</div>

<!-- ══════════ MAIN ══════════ -->
<div class="main-wrapper">
    <div class="container">
        <div class="row g-4 align-items-start">

            <!-- ─── ARTIKEL ─── -->
            <div class="col-lg-8">

                <!-- Badge & Judul -->
                <div class="fade-up">
                    <span class="cat-badge">
                        <i class="fas fa-tag me-1"></i><?= htmlspecialchars($doc['kategori']) ?>
                    </span>
                    <h1 class="article-title"><?= htmlspecialchars($doc['judul']) ?></h1>
                    <?php if(!empty($doc['subtittle'])): ?>
                    <p class="article-subtitle"><?= htmlspecialchars($doc['subtittle']) ?></p>
                    <?php endif; ?>

                    <!-- Meta Bar -->
                    <div class="meta-bar">
                        <?php if(!empty($doc['penulis'])): ?>
                        <div class="meta-item">
                            <i class="fas fa-user-pen"></i>
                            <div>
                                <span class="mi-label">Penulis</span>
                                <span class="mi-val"><?= htmlspecialchars($doc['penulis']) ?></span>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="meta-item">
                            <i class="fas fa-calendar-days"></i>
                            <div>
                                <span class="mi-label">Tanggal Artikel</span>
                                <span class="mi-val">
                                    <?= !empty($doc['tgl_artikel'])
                                        ? date('d F Y', strtotime($doc['tgl_artikel']))
                                        : date('d F Y', strtotime($doc['tgl_upload'])) ?>
                                </span>
                            </div>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <span class="mi-label">Diunggah</span>
                                <span class="mi-val"><?= date('d M Y · H:i', strtotime($doc['tgl_upload'])) ?> WIB</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Foto Cover -->
                <?php if(!empty($doc['foto'])): ?>
                <div class="article-cover fade-up" style="animation-delay:.08s;">
                    <img src="<?= base_url('assets/img/dokumentasi/'.$doc['foto']) ?>"
                         alt="<?= htmlspecialchars($doc['judul']) ?>"
                         onerror="this.src='https://via.placeholder.com/1200x600/1A1F26/FFD700?text=AKK'">
                </div>
                <p class="caption-text fade-up" style="animation-delay:.1s;">
                    <i class="fas fa-camera me-1"></i>
                    <?= htmlspecialchars($doc['judul']) ?>
                    <?= !empty($doc['penulis']) ? ' &mdash; ' . htmlspecialchars($doc['penulis']) : '' ?>
                </p>
                <?php endif; ?>

                <!-- Divider -->
                <div class="art-divider fade-up" style="animation-delay:.12s;">
                    <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                </div>

                <!-- Isi Konten -->
                <div class="article-body fade-up" style="animation-delay:.15s;">
                    <?= $doc['deskripsi'] ?>
                </div>

                <!-- Share Bar -->
                <div class="share-bar fade-up" style="animation-delay:.2s;">
                    <span class="share-label"><i class="fas fa-share-nodes me-1"></i>Bagikan:</span>
                    <?php
                        $shareUrl   = urlencode(current_url());
                        $shareTitle = urlencode($doc['judul']);
                    ?>
                    <a href="https://wa.me/?text=<?= $shareTitle ?>%20<?= $shareUrl ?>" target="_blank" class="share-btn wa">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                    <a href="https://twitter.com/intent/tweet?text=<?= $shareTitle ?>&url=<?= $shareUrl ?>" target="_blank" class="share-btn tw">
                        <i class="fab fa-x-twitter"></i> Twitter/X
                    </a>
                    <button class="share-btn cp" onclick="copyLink()" id="copyBtn">
                        <i class="fas fa-link"></i> Salin Link
                    </button>
                </div>

                <!-- Tombol Kembali -->
                <div class="fade-up" style="animation-delay:.25s;">
                    <a href="<?= base_url('dokumentasi') ?>" class="back-btn">
                        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Artikel
                    </a>
                </div>

            </div><!-- /col-lg-8 -->

            <!-- ─── SIDEBAR ─── -->
            <div class="col-lg-4">
                <div class="sidebar-sticky">

                    <!-- Widget Artikel Lainnya -->
                    <div class="sidebar-widget fade-up" style="animation-delay:.16s;">
                        <div class="widget-header">
                            <i class="fas fa-newspaper"></i>
                            <h6>Artikel Lainnya</h6>
                        </div>

                        <?php if(empty($sidebar_docs)): ?>
                            <div class="p-4 text-center" style="color:var(--text-muted); font-size:.84rem;">
                                <i class="fas fa-inbox fa-2x mb-2 d-block" style="opacity:.3;"></i>
                                Belum ada artikel lain.
                            </div>
                        <?php else: ?>
                            <?php foreach($sidebar_docs as $i => $item):
                                $slug = url_title($item['judul'], 'dash', true);
                            ?>
                            <div class="rec-item">
                                <span class="rec-num"><?= $i + 1 ?></span>
                                <a href="<?= base_url('dokumentasi/'.$item['id_dokumentasi'].'/'.$slug) ?>">
                                    <img src="<?= base_url('assets/img/dokumentasi/'.$item['foto']) ?>"
                                         class="rec-thumb"
                                         alt="<?= htmlspecialchars($item['judul']) ?>"
                                         onerror="this.src='https://via.placeholder.com/152x108/1A1F26/FFD700?text=AKK'">
                                </a>
                                <div class="rec-content">
                                    <a href="<?= base_url('dokumentasi/'.$item['id_dokumentasi'].'/'.$slug) ?>" class="rec-title d-block">
                                        <?= htmlspecialchars($item['judul']) ?>
                                    </a>
                                    <div class="rec-meta">
                                        <?php if(!empty($item['penulis'])): ?>
                                        <span><i class="fas fa-user"></i> <?= htmlspecialchars($item['penulis']) ?></span>
                                        <?php endif; ?>
                                        <span>
                                            <i class="fas fa-calendar"></i>
                                            <?= !empty($item['tgl_artikel'])
                                                ? date('d M Y', strtotime($item['tgl_artikel']))
                                                : date('d M Y', strtotime($item['tgl_upload'])) ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="p-3 text-center" style="border-top: 1px solid var(--border-color);">
                                <a href="<?= base_url('dokumentasi') ?>"
                                   style="font-size:.8rem; color:var(--yellow-bright); font-weight:600;">
                                    Lihat Semua Artikel <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Widget Kategori -->
                    <div class="sidebar-widget fade-up" style="animation-delay:.24s;">
                        <div class="widget-header">
                            <i class="fas fa-layer-group"></i>
                            <h6>Kategori</h6>
                        </div>
                        <div class="p-3">
                            <a href="<?= base_url('dokumentasi?kategori='.urlencode($doc['kategori'])) ?>"
                               class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill me-2 mb-2"
                               style="background:rgba(255,215,0,.1); border:1px solid rgba(255,215,0,.25); color:var(--yellow-bright); font-size:.77rem; font-weight:600;">
                                <i class="fas fa-tag" style="font-size:.68rem;"></i>
                                <?= htmlspecialchars($doc['kategori']) ?>
                            </a>
                            <a href="<?= base_url('dokumentasi') ?>"
                               class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill me-2 mb-2"
                               style="background:var(--dark-card-hover); border:1px solid var(--border-color); color:var(--text-muted); font-size:.77rem; font-weight:600;">
                                <i class="fas fa-th-large" style="font-size:.68rem;"></i>
                                Semua Artikel
                            </a>
                        </div>
                    </div>

                </div><!-- /sidebar-sticky -->
            </div><!-- /col-lg-4 -->

        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /main-wrapper -->

<!-- Back to Top -->
<div class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
</div>

<!-- ══════════ FOOTER ══════════ -->
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
                <a href="https://www.instagram.com/arti_katakita?igsh=MW1ka3J1ZjhmNWI1MA==" class="social-link-modern"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@ArtiKataKita" class="social-link-modern"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="col-lg-3 col-md-12 text-center text-lg-end mb-2 mb-lg-0">
                <div class="footer-contact-item py-1 px-3 border rounded-pill d-inline-flex align-items-center">
                    <i class="fas fa-envelope me-2"></i>
                    <a href="/cdn-cgi/l/email-protection#61001315080a0015000a0815005821060c00080d4f020e0c" style="color:inherit;"><span class="__cf_email__" data-cfemail="d6b7a4a2bfbdb7a2b7bdbfa2b7ef96b1bbb7bfbaf8b5b9bb">artikatakita9@gmail.com</span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 text-center text-lg-end">
                <a href="https://wa.me/628157642627" target="_blank" class="footer-contact-item py-1 px-3 border rounded-pill d-inline-flex align-items-center text-decoration-none">
                    <i class="fab fa-whatsapp me-1"></i> Hubungi Kami
                </a>
            </div>
        </div>
        <div class="text-center mt-4 pt-3 border-top opacity-50 small" style="border-color:rgba(255,255,255,.05);">
            &copy; <?= date('Y') ?> AKK Community. All Rights Reserved.
        </div>
    </div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Navbar scroll
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('navbar-scrolled', window.scrollY > 40);
    });

    // Back to Top
    const btt = document.getElementById('backToTop');
    window.addEventListener('scroll', () => btt.classList.toggle('show', window.scrollY > 350));
    btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // Fade-up reveal on scroll
    const fadeEls = document.querySelectorAll('.fade-up');
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
    }, { threshold: 0.06 });
    fadeEls.forEach(el => obs.observe(el));

    // Auto visible elemen yang sudah di viewport saat load
    setTimeout(() => {
        document.querySelectorAll('.fade-up').forEach(el => {
            if (el.getBoundingClientRect().top < window.innerHeight) el.classList.add('visible');
        });
    }, 80);

    // Copy link ke clipboard
    function copyLink() {
        navigator.clipboard.writeText(window.location.href).then(() => {
            const btn = document.getElementById('copyBtn');
            btn.innerHTML = '<i class="fas fa-check"></i> Tersalin!';
            btn.style.background = 'rgba(255,215,0,.12)';
            btn.style.borderColor = 'rgba(255,215,0,.45)';
            setTimeout(() => {
                btn.innerHTML = '<i class="fas fa-link"></i> Salin Link';
                btn.style.background = ''; btn.style.borderColor = '';
            }, 2500);
        });
    }
</script>
</body>
</html>