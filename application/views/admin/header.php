<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - AKK</title>
    
    <link rel="icon" href="<?= base_url('assets/img/logo-akk.png') ?>" type="image/png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* Dark Theme Colors - Matching Frontend */
            --dark-bg: #0F1419;
            --dark-card: #1A1F26;
            --dark-card-hover: #242931;
            --dark-gray: #2C3540;
            --text-primary: #E8EAED;
            --text-secondary: #B8BABD;
            --text-muted: #7A7D82;
            --border-color: #2F3640;
            
            /* AKK Brand Colors */
            --cyan: #40E0D0;
            --cyan-light: #5FFAF0;
            --yellow: #FFD700;
            --yellow-bright: #FFE44D;
            
            /* Sidebar */
            --sidebar-width: 260px;
            
            /* Shadows */
            --shadow-dark-subtle: 0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
            --shadow-dark-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 10px 10px -5px rgba(0, 0, 0, 0.3);
            --shadow-glow-yellow: 0 0 25px rgba(255, 215, 0, 0.4);
            --shadow-glow-cyan: 0 0 20px rgba(64, 224, 208, 0.3);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-secondary);
            overflow-x: hidden;
        }

        /* --- DARK SIDEBAR STYLE --- */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(180deg, var(--dark-card) 0%, var(--dark-bg) 100%);
            position: fixed;
            top: 0; left: 0;
            transition: all 0.3s ease;
            z-index: 1000;
            border-right: 1px solid var(--border-color);
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.3);
        }

        .sidebar-header {
            padding: 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            height: auto;
            border-bottom: 2px solid transparent;
            background: linear-gradient(135deg, var(--dark-card), var(--dark-gray));
            border-image: linear-gradient(90deg, var(--cyan), var(--yellow)) 1;
            border-bottom: 2px solid;
        }

        /* Logo dengan Glow Effect */
        .sidebar-logo {
            width: 80px; 
            height: auto;
            transition: all 0.3s ease;
            filter: drop-shadow(0 0 10px rgba(64, 224, 208, 0.3));
        }
        
        .sidebar-logo:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.5));
        }

        .brand-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            background: linear-gradient(135deg, var(--cyan-light), var(--yellow-bright));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 0.5px;
        }

        .sidebar-menu {
            padding: 15px;
        }

        .menu-label {
            font-size: 0.7rem;
            text-transform: uppercase;
            color: var(--text-muted);
            padding: 0 15px;
            margin: 20px 0 10px 0;
            letter-spacing: 1px;
            font-weight: 600;
        }

        /* Nav Link Dark Theme */
        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: var(--text-secondary);
            text-decoration: none;
            border-radius: 10px;
            margin-bottom: 5px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.9rem;
            position: relative;
        }

        .nav-link i {
            width: 24px;
            margin-right: 10px;
            font-size: 1.1rem;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--yellow-bright);
            background: rgba(255, 215, 0, 0.1);
            transform: translateX(5px);
        }

        .nav-link:hover i {
            color: var(--yellow-bright);
            opacity: 1;
        }

        .nav-link.active {
            background: linear-gradient(135deg, rgba(64, 224, 208, 0.15), rgba(255, 215, 0, 0.15));
            color: var(--yellow-bright);
            font-weight: 600;
            border-left: 4px solid var(--yellow);
            border-radius: 0 10px 10px 0;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);
        }

        .nav-link.active i {
            color: var(--yellow-bright);
            opacity: 1;
        }

        /* Logout Button Special */
        .nav-link.text-danger {
            color: #ff6b6b !important;
        }

        .nav-link.text-danger:hover {
            background: rgba(255, 107, 107, 0.1);
            color: #ff5252 !important;
        }

        /* --- DARK TOPBAR --- */
        .main-content {
            margin-left: var(--sidebar-width);
            transition: all 0.3s ease;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .top-navbar {
            background: rgba(26, 31, 38, 0.95);
            backdrop-filter: blur(10px);
            height: 70px;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 900;
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .page-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0;
        }

        /* Menu Toggle Button */
        .menu-toggle {
            cursor: pointer;
            color: var(--yellow-bright);
            font-size: 1.3rem;
            transition: 0.3s;
        }

        .menu-toggle:hover {
            color: var(--cyan-light);
            transform: scale(1.1);
        }

        /* User Dropdown */
        .user-dropdown .nav-link {
            padding: 0;
            border-radius: 0;
            margin: 0;
        }

        .user-name {
            color: var(--text-primary);
            font-weight: 600;
        }

        /* Avatar with Gradient Border */
        .user-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid;
            border-image: linear-gradient(135deg, var(--cyan), var(--yellow)) 1;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }

        /* Dropdown Menu Dark */
        .dropdown-menu {
            background: var(--dark-card);
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-dark-hover);
        }

        .dropdown-item {
            color: var(--text-secondary);
            transition: 0.3s;
        }

        .dropdown-item:hover {
            background: rgba(255, 215, 0, 0.1);
            color: var(--yellow-bright);
        }

        .dropdown-item.text-danger {
            color: #ff6b6b !important;
        }

        .dropdown-item.text-danger:hover {
            background: rgba(255, 107, 107, 0.1);
        }

        /* Content Wrapper */
        .content-wrapper {
            flex: 1;
            padding: 30px;
        }

        /* --- DARK FOOTER --- */
        footer {
            background: linear-gradient(135deg, #0a0e13 0%, #141920 100%);
            color: var(--text-secondary);
            padding: 25px 0;
            border-top: 3px solid var(--yellow);
            box-shadow: 0 -4px 20px rgba(0,0,0,0.5), 0 -2px 10px rgba(255, 215, 0, 0.1);
            margin-top: auto;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        footer strong {
            background: linear-gradient(135deg, var(--cyan-light), var(--yellow-bright));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .sidebar { 
                transform: translateX(-100%); 
            }
            .sidebar.show { 
                transform: translateX(0);
                box-shadow: 8px 0 20px rgba(0, 0, 0, 0.5);
            }
            .main-content { 
                margin-left: 0; 
            }
            .sidebar-header { 
                padding: 15px; 
            }
            .sidebar-logo { 
                width: 60px; 
            }
            .content-wrapper {
                padding: 20px 15px;
            }
        }

        /* Scrollbar Dark Theme */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--dark-gray);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, var(--cyan), var(--yellow));
        }
    </style>
</head>
<body>

<nav class="sidebar" id="sidebar">
    <div class="sidebar-header text-center">
        <img src="<?= base_url('assets/img/logo-akk.png') ?>" alt="Logo" class="sidebar-logo">
       
    </div>

    <div class="sidebar-menu">
        <div class="menu-label">Main Menu</div>
        
        <?php $segment = $this->uri->segment(2); ?>
        
        <a href="<?= base_url('portfolio/dashboard'); ?>" class="nav-link <?= ($segment == 'dashboard') ? 'active' : ''; ?>">
            <i class="fa-solid fa-house-chimney-window"></i> Dashboard
        </a>
        
        <a href="<?= base_url('portfolio/profil'); ?>" class="nav-link <?= ($segment == 'profil') ? 'active' : ''; ?>">
            <i class="fa-solid fa-id-card"></i> Profil AKK
        </a>
        <a href="<?= base_url('portfolio/divisi'); ?>" class="nav-link <?= ($segment == 'divisi') ? 'active' : ''; ?>">
            <i class="fas fa-sitemap fa-lg"></i> Divisi
        </a>
        <a href="<?= base_url('portfolio/program'); ?>" class="nav-link <?= ($segment == 'program') ? 'active' : ''; ?>">
            <i class="fa-solid fa-layer-group"></i> Program
        </a>
        
        <a href="<?= base_url('portfolio/dokumentasi'); ?>" class="nav-link <?= ($segment == 'dokumentasi') ? 'active' : ''; ?>">
            <i class="fa-solid fa-images"></i> Dokumentasi
        </a>

        <div class="menu-label">System</div>

        <a href="<?= base_url('login/logout'); ?>" class="nav-link text-danger">
            <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar
        </a>
    </div>
</nav>

<div class="main-content">
    <header class="top-navbar">
        <div class="d-flex align-items-center gap-3">
            <div class="menu-toggle d-md-none" onclick="document.getElementById('sidebar').classList.toggle('show')">
                <i class="fas fa-bars-staggered"></i>
            </div>
            <h5 class="page-title mb-0">
                <i class="fas fa-chart-line me-2" style="color: var(--yellow-bright);"></i>
                Admin Dashboard
            </h5>
        </div>

        <div class="dropdown user-dropdown">
            <a class="nav-link p-0 d-flex align-items-center gap-2" href="#" data-bs-toggle="dropdown">
                <span class="user-name d-none d-sm-inline small"><?= $this->session->userdata('nama') ?? 'Admin'; ?></span>
                <img src="https://ui-avatars.com/api/?name=<?= $this->session->userdata('nama') ?? 'Admin'; ?>&background=FFD700&color=0F1419&bold=true" class="user-avatar" alt="User">
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg mt-2 py-2" style="border-radius: 12px;">
                <li>
                    <a class="dropdown-item small py-2" href="<?= base_url('portfolio/profil'); ?>">
                        <i class="fas fa-user-edit me-2" style="color: var(--cyan);"></i> Edit Profil
                    </a>
                </li>
                <li><hr class="dropdown-divider" style="border-color: var(--border-color);"></li>
                <li>
                    <a class="dropdown-item small py-2 text-danger" href="<?= base_url('login/logout'); ?>">
                        <i class="fas fa-power-off me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <div class="content-wrapper">