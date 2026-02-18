<?php $this->load->view('admin/header'); ?>

<div class="container-fluid pt-4 pb-5 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            
            <div class="card border-0 shadow-sm mb-4" style="border-radius: 20px; background: linear-gradient(135deg, var(--dark-card), var(--dark-gray)); border: 1px solid var(--border-color);">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <div class="icon-box me-3" style="background: rgba(255, 215, 0, 0.1); padding: 12px; border-radius: 15px; box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);">
                                    <i class="fas fa-id-card fa-lg" style="color: var(--yellow-bright);"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bold mb-0" style="color: var(--text-primary);">Manajemen Profil AKK</h3>
                                    <p class="small mb-0" style="color: var(--text-secondary);">Perbarui narasi perjalanan dan foto utama</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($this->session->flashdata('pesan')): ?>
                <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" role="alert" style="background: rgba(64, 224, 208, 0.15); color: var(--cyan-light); border-radius: 15px; border: 1px solid rgba(64, 224, 208, 0.3);">
                    <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="filter: brightness(2);"></button>
                </div>
            <?php endif; ?>

            <div class="card border-0 shadow-sm" style="border-radius: 20px; overflow: hidden; background: var(--dark-card); border: 1px solid var(--border-color);">
                <div class="card-body p-4 p-md-5">
                    <form action="<?= base_url('portfolio/update_profil'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row g-5">
                            <div class="col-md-4 border-end-md">
                                <div class="px-2">
                                    <label class="form-label d-block fw-bold mb-3" style="color: #F3F4F6;">Foto Visual</label>
                                    <div class="position-relative mb-4 group">
                                        <img src="<?= base_url('assets/img/profil/' . ($profil['foto_sejarah'] ?? 'default.jpg')); ?>" 
                                             class="img-fluid rounded-4 shadow-sm w-100" 
                                             style="height: 250px; object-fit: cover; border: 3px solid var(--border-color) !important;" 
                                             onerror="this.src='<?= base_url('assets/img/default.jpg'); ?>'">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-uppercase" style="color: #9CA3AF;">Ganti Foto Baru</label>
                                        <input type="file" name="foto_sejarah" class="form-control border-2 shadow-none akk-input-file">
                                        <div class="mt-3 p-3 rounded-4" style="background: rgba(255, 215, 0, 0.05); border: 1px dashed rgba(255, 215, 0, 0.3);">
                                            <small class="d-block" style="font-size: 0.75rem; line-height: 1.4; color: #9CA3AF;">
                                                <i class="fas fa-info-circle me-1" style="color: var(--yellow-bright);"></i> 
                                                Gunakan foto resolusi tinggi (Landscape) untuk tampilan terbaik di halaman profil publik.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="mb-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <i class="fas fa-pen-nib me-2" style="color: #9CA3AF;"></i>
                                        <label class="form-label fw-bold mb-0" style="color: #F3F4F6;">Narasi Perjalanan Komunitas</label>
                                    </div>
                                    <textarea name="sejarah" class="form-control border-2 akk-textarea" rows="12" 
                                              placeholder="Tuliskan perjalanan, latar belakang, dan cita-cita AKK di sini..."><?= $profil['sejarah']; ?></textarea>
                                </div>
                                
                                <div class="d-flex justify-content-end align-items-center gap-3 mt-4">
                                    <a href="<?= base_url('portfolio/dashboard'); ?>" class="btn btn-link text-decoration-none fw-medium px-4" style="color: var(--text-secondary);">Batal</a>
                                    <button type="submit" class="btn btn-lg px-5 shadow-sm text-dark fw-bold" 
                                            style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); border: none; border-radius: 12px; font-size: 1rem; transition: all 0.3s ease;">
                                        <i class="fas fa-save me-2"></i> Simpan Perubahan Profil
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Input File Styling Dark */
    .akk-input-file {
        border-radius: 10px;
        border-color: var(--border-color);
        background: #1E2530;
        color: #E8EAED;
        padding: 8px;
    }

    .akk-input-file:focus {
        border-color: var(--yellow);
        background: #252D3A;
        color: #FFFFFF;
    }

    /* Textarea Dark Styling */
    .akk-textarea {
        border-color: var(--border-color);
        border-radius: 15px;
        resize: none;
        font-size: 0.95rem;
        line-height: 1.7;
        padding: 20px;
        transition: all 0.3s ease;
        background: #1E2530;
        color: #E8EAED;
    }

    .akk-textarea::placeholder {
        color: #7A7D82;
        opacity: 1;
    }

    .akk-textarea:focus {
        border-color: var(--yellow) !important;
        box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.15) !important;
        background: #252D3A;
        color: #FFFFFF;
    }

    /* Button Hover Effect */
    .btn-lg:hover {
        background: linear-gradient(135deg, var(--yellow-bright), var(--yellow)) !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(255, 215, 0, 0.4) !important;
    }

    /* Border responsive adjustment */
    @media (min-width: 768px) {
        .border-end-md {
            border-right: 1px solid var(--border-color) !important;
        }
    }

    /* File input custom styling */
    .akk-input-file::file-selector-button {
        background: var(--yellow);
        color: var(--dark-bg);
        border: none;
        padding: 6px 15px;
        border-radius: 8px;
        font-weight: 600;
        margin-right: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .akk-input-file::file-selector-button:hover {
        background: var(--yellow-bright);
        transform: scale(1.05);
    }
</style>

<?php $this->load->view('admin/footer'); ?>