<?php $this->load->view('admin/header'); ?>

<div class="container-fluid pt-4 pb-5 px-4">

    <div class="card border-0 shadow-sm mb-4" style="border-radius: 20px; background: linear-gradient(135deg, var(--dark-card), var(--dark-gray));">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <div class="icon-box me-3" style="background: rgba(255, 215, 0, 0.1); padding: 12px; border-radius: 15px; box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);">
                            <i class="fas fa-house-chimney-window fa-lg" style="color: var(--yellow-bright);"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0" style="color: var(--text-primary);">Dashboard</h3>
                            <p class="mb-0 small" style="color: var(--text-secondary);">Selamat datang kembali di panel kendali Website Arti Kata Kita.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <!-- Total Program Card -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 stat-card" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color); transition: all 0.3s ease;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="small fw-bold mb-1 text-uppercase" style="color: var(--text-muted); letter-spacing: 0.05em;">Total Program</p>
                            <h2 class="mb-0 fw-bold" style="color: var(--text-primary);"><?= count($program); ?></h2>
                        </div>
                        <div class="icon-shape shadow-sm d-flex align-items-center justify-content-center" 
                             style="width: 56px; height: 56px; background: rgba(64, 224, 208, 0.1); color: var(--cyan-light); border-radius: 15px; box-shadow: 0 0 20px rgba(64, 224, 208, 0.3);">
                            <i class="fas fa-tasks fa-lg"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge px-2 py-1" style="background: rgba(64, 224, 208, 0.15); color: var(--cyan-light); border-radius: 8px; font-size: 0.7rem;">
                            <i class="fas fa-sync-alt me-1"></i> Terupdate
                        </span>
                    </div>
                    <a href="<?= base_url('portfolio/program'); ?>" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <!-- Dokumentasi Card -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 stat-card" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color); transition: all 0.3s ease;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="small fw-bold mb-1 text-uppercase" style="color: var(--text-muted); letter-spacing: 0.05em;">Dokumentasi</p>
                            <h2 class="mb-0 fw-bold" style="color: var(--text-primary);">12</h2> 
                        </div>
                        <div class="icon-shape shadow-sm d-flex align-items-center justify-content-center" 
                             style="width: 56px; height: 56px; background: rgba(255, 215, 0, 0.1); color: var(--yellow-bright); border-radius: 15px; box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);">
                            <i class="fas fa-image fa-lg"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge px-2 py-1" style="background: rgba(255, 215, 0, 0.15); color: var(--yellow-bright); border-radius: 8px; font-size: 0.7rem;">
                            <i class="fas fa-folder-open me-1"></i> Album Galeri
                        </span>
                    </div>
                    <a href="<?= base_url('portfolio/dokumentasi'); ?>" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <!-- Admin Aktif Card -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 stat-card" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color); transition: all 0.3s ease;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="small fw-bold mb-1 text-uppercase" style="color: var(--text-muted); letter-spacing: 0.05em;">Admin Aktif</p>
                            <h2 class="mb-0 fw-bold" style="color: var(--text-primary);">1</h2>
                        </div>
                        <div class="icon-shape shadow-sm d-flex align-items-center justify-content-center" 
                             style="width: 56px; height: 56px; background: rgba(100, 116, 139, 0.1); color: var(--text-secondary); border-radius: 15px; box-shadow: 0 0 15px rgba(100, 116, 139, 0.2);">
                            <i class="fas fa-user-shield fa-lg"></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge px-2 py-1" style="background: rgba(100, 116, 139, 0.15); color: var(--text-secondary); border-radius: 8px; font-size: 0.7rem;">
                            <i class="fas fa-check-circle me-1"></i> Sesi Aktif
                        </span>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Card -->
    <div class="card border-0 shadow-sm mt-2" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);">
        <div class="card-header py-4 border-bottom" style="background: transparent; border-radius: 20px 20px 0 0; border-color: var(--border-color) !important;">
            <div class="d-flex align-items-center">
                <div style="width: 4px; height: 20px; background: linear-gradient(180deg, var(--cyan), var(--yellow)); border-radius: 10px; margin-right: 12px; box-shadow: 0 0 10px rgba(255, 215, 0, 0.3);"></div>
                <h6 class="mb-0 fw-bold" style="color: var(--text-primary);">Aktivitas Terbaru</h6>
            </div>
        </div>
        <div class="card-body text-center py-5">
            <img src="https://illustrations.popsy.co/gray/success.svg" alt="empty" style="width: 150px; opacity: 0.3; filter: brightness(0.7);">
            <p class="mt-3 mb-0 small fw-medium" style="color: var(--text-muted);">Sistem berjalan dengan baik. Belum ada aktivitas baru hari ini.</p>
        </div>
    </div>

</div>

<style>
    /* Styling Hover Stat Cards */
    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-dark-hover) !important;
        border-color: rgba(255, 215, 0, 0.3) !important;
        background: var(--dark-card-hover) !important;
    }
    
    .stat-card:hover .icon-shape {
        transform: scale(1.1);
    }
    
    /* Icon Shape Animation */
    .icon-shape {
        transition: all 0.3s ease;
    }
    
    /* Font Smoothing */
    body {
        -webkit-font-smoothing: antialiased;
    }

    /* Tracking wider untuk text-uppercase agar lebih modern */
    .tracking-wider {
        letter-spacing: 0.05em;
    }

    /* Badge Hover Effect */
    .badge {
        transition: all 0.3s ease;
    }

    .stat-card:hover .badge {
        transform: translateX(3px);
    }

    /* Card Glow Effect on Hover */
    .stat-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(135deg, var(--cyan), var(--yellow));
        border-radius: 20px;
        opacity: 0;
        z-index: -1;
        transition: opacity 0.3s ease;
        filter: blur(10px);
    }

    .stat-card {
        position: relative;
        z-index: 1;
    }

    .stat-card:hover::before {
        opacity: 0.3;
    }
</style>

<?php $this->load->view('admin/footer'); ?>