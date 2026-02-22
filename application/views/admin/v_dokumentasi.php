<?php $this->load->view('admin/header'); ?>

<div class="container-fluid pt-4 pb-5 px-4">
    
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 20px; background: linear-gradient(135deg, var(--dark-card), var(--dark-gray)); border: 1px solid var(--border-color);">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="d-flex align-items-center">
                        <div class="icon-box me-3" style="background: rgba(255, 215, 0, 0.1); padding: 12px; border-radius: 15px; box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);">
                            <i class="fa-solid fa-newspaper" style="color: var(--yellow-bright);"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0" style="color: var(--text-primary);">Manajemen Artikel</h3>
                            <p class="small mb-0" style="color: var(--text-secondary);">Kelola Artikel komunitas Arti Kata Kita.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 text-md-end mt-3 mt-md-0">
                    <button class="btn px-4 shadow-sm fw-bold" 
                            style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 12px; border: none; padding: 12px 25px; transition: all 0.3s ease;" 
                            data-bs-toggle="modal" data-bs-target="#addDoc">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Artikel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php if($this->session->flashdata('pesan')): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" 
             style="background: rgba(64, 224, 208, 0.15); color: var(--cyan-light); border-radius: 15px; border: 1px solid rgba(64, 224, 208, 0.3);" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" style="filter: brightness(2);"></button>
        </div>
    <?php endif; ?>

    <div class="card border-0 shadow-sm" style="border-radius: 20px; overflow: hidden; background: var(--dark-card); border: 1px solid var(--border-color);">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="background-color: transparent !important; color: #F3F4F6 !important;">
                <thead style="background: rgba(255, 255, 255, 0.03); border-bottom: 1px solid var(--border-color);">
                    <tr>
                        <th class="ps-4 py-3 small text-uppercase fw-bold" width="120" style="color: #9CA3AF; border: none;">Preview</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Judul Konten</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Kategori</th>
                        <th class="pe-4 py-3 small text-uppercase fw-bold text-center" width="180" style="color: #9CA3AF; border: none;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="border: none;">
                    <?php foreach($dokumentasi as $d): ?>
                    <tr style="border-bottom: 1px solid var(--border-color); background: transparent !important;">
                        <td class="ps-4" style="background: transparent !important; border: none;">
                            <img src="<?= base_url('assets/img/dokumentasi/'.$d['foto']) ?>" 
                                 class="rounded-3 shadow-sm" 
                                 style="width: 80px; height: 50px; object-fit: cover; border: 2px solid var(--border-color);"
                                 onerror="this.src='<?= base_url('assets/img/default.jpg'); ?>'">
                        </td>
                        <td style="background: transparent !important; border: none;">
                            <span class="fw-bold d-block" style="color: #F3F4F6;"><?= $d['judul'] ?></span>
                        </td>
                        <td style="background: transparent !important; border: none;">
                            <span class="badge px-3 py-2 fw-semibold" 
                                  style="background: rgba(100, 116, 139, 0.2); color: #94A3B8; border-radius: 8px; font-size: 0.75rem;">
                                <i class="fas fa-tag me-1 small"></i> <?= $d['kategori'] ?>
                            </span>
                        </td>
                        <td class="pe-4 text-center" style="background: transparent !important; border: none;">
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn-action view" data-bs-toggle="modal" data-bs-target="#detail<?= $d['id_dokumentasi'] ?>" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-action edit" data-bs-toggle="modal" data-bs-target="#edit<?= $d['id_dokumentasi'] ?>" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a href="<?= base_url('portfolio/hapus_dokumentasi/'.$d['id_dokumentasi']) ?>" 
                                   class="btn-action delete" 
                                   onclick="return confirm('Apakah Anda yakin ingin menghapus Artikel ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    /* Paksa tabel agar mengikuti tema gelap dashboard */
    .table {
        --bs-table-bg: transparent !important;
        --bs-table-hover-bg: rgba(255, 255, 255, 0.05) !important;
        --bs-table-color: #F3F4F6 !important;
    }

    .table td, .table th {
        background-color: transparent !important;
        color: #F3F4F6 !important;
    }

    /* Action Buttons */
    .btn-action {
        width: 38px; 
        height: 38px; 
        border-radius: 12px; 
        border: none;
        display: inline-flex; 
        align-items: center; 
        justify-content: center;
        transition: all 0.3s ease;
    }
    .btn-action.view { background: rgba(14, 165, 233, 0.15); color: #0ea5e9; }
    .btn-action.edit { background: rgba(255, 215, 0, 0.15); color: var(--yellow-bright); }
    .btn-action.delete { background: rgba(239, 68, 68, 0.15); color: #ef4444; }
    
    .btn-action:hover { 
        transform: translateY(-3px); 
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        filter: brightness(1.2);
    }

    /* Input Styling agar sama dengan program */
    .akk-input { 
        border-radius: 12px; 
        border: 2px solid var(--border-color); 
        background: #1E2530;
        color: #E8EAED;
        transition: 0.3s;
        padding: 10px 15px;
    }
    
    .akk-input:focus { 
        border-color: var(--yellow) !important;
        box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.15) !important;
        background: #252D3A;
        color: #FFFFFF;
    }

    /* Upload Box */
    .upload-box { 
        background: var(--dark-gray); 
        border: 2px dashed var(--border-color); 
        transition: 0.3s; 
    }
    .upload-box:hover { 
        border-color: var(--yellow); 
        background: rgba(255, 215, 0, 0.05); 
    }
</style>
<!-- Modal Add Documentation -->
<div class="modal fade" id="addDoc" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form action="<?= base_url('portfolio/tambah_dokumentasi') ?>" method="post" enctype="multipart/form-data" class="modal-content border-0 shadow-lg" style="border-radius: 25px; background: var(--dark-card); border: 1px solid var(--border-color);">
            <div class="modal-header border-0 p-4 pb-0" style="border-bottom: 1px solid var(--border-color) !important;">
                <h5 class="modal-title fw-bold" style="color: var(--yellow-bright);"><i class="fas fa-plus-circle me-2"></i> Tambah Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: brightness(2);"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <div class="col-md-7">
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Judul Artikel</label>
                            <input type="text" name="judul" class="form-control akk-input" placeholder="Masukkan judul..." required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Kategori</label>
                            <input type="text" name="kategori" class="form-control akk-input" placeholder="Contoh: Sosial, Pendidikan..." required>
                        </div>
                        <div class="mb-0">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control akk-input" rows="5" style="resize: none;" placeholder="Tulis deskripsi singkat..." required></textarea>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="upload-box p-4 rounded-4 text-center h-100 d-flex flex-column align-items-center justify-content-center">
                            <i class="fas fa-cloud-upload-alt fa-3x mb-3" style="color: #9CA3AF; opacity: 0.5;"></i>
                            <label class="form-label small fw-bold mb-3 d-block" style="color: #F3F4F6;">Pilih Foto</label>
                            <input type="file" name="foto" class="form-control form-control-sm border-0 shadow-sm" style="background: #1E2530; color: #E8EAED;" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 p-4 pt-0">
                <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn px-5 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 12px; border: none;">Simpan Dokumentasi</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Detail -->
<?php foreach($dokumentasi as $d): ?>
<div class="modal fade" id="detail<?= $d['id_dokumentasi'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; overflow: hidden; background: var(--dark-card); border: 1px solid var(--border-color);">
            <img src="<?= base_url('assets/img/dokumentasi/'.$d['foto']) ?>" class="w-100" style="height: 220px; object-fit: cover;">
            <div class="modal-body p-4">
                <span class="badge px-3 py-2 mb-2" style="background: rgba(100, 116, 139, 0.15); color: var(--text-secondary); border-radius: 8px;">
                    <i class="fas fa-tag me-1"></i> <?= $d['kategori'] ?>
                </span>
                <h4 class="fw-bold" style="color: var(--text-primary);"><?= $d['judul'] ?></h4>
                <hr style="border-color: var(--border-color);">
                <p class="small" style="line-height: 1.6; white-space: pre-line; color: var(--text-secondary);"><?= $d['deskripsi'] ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="edit<?= $d['id_dokumentasi'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form action="<?= base_url('portfolio/update_dokumentasi') ?>" method="post" enctype="multipart/form-data" class="modal-content border-0 shadow-lg" style="border-radius: 25px; background: var(--dark-card); border: 1px solid var(--border-color);">
            <div class="modal-header border-0 p-4 pb-0" style="border-bottom: 1px solid var(--border-color) !important;">
                <h5 class="modal-title fw-bold" style="color: var(--yellow-bright);"><i class="fas fa-edit me-2"></i> Perbarui Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" style="filter: brightness(2);"></button>
            </div>
            <div class="modal-body p-4">
                <input type="hidden" name="id_dokumentasi" value="<?= $d['id_dokumentasi'] ?>">
                <div class="row g-4">
                    <div class="col-md-7">
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Judul</label>
                            <input type="text" name="judul" class="form-control akk-input" value="<?= $d['judul'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Kategori</label>
                            <input type="text" name="kategori" class="form-control akk-input" value="<?= $d['kategori'] ?>" required>
                        </div>
                        <div class="mb-0">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control akk-input" rows="5" style="resize: none;" required><?= $d['deskripsi'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <label class="form-label small fw-bold d-block mb-3" style="color: #F3F4F6;">Foto Saat Ini</label>
                        <img src="<?= base_url('assets/img/dokumentasi/'.$d['foto']) ?>" class="rounded-4 mb-3 shadow-sm w-100" style="height: 160px; object-fit: cover; border: 2px solid var(--border-color);">
                        <div class="p-3 rounded-3" style="background: #1E2530;">
                            <input type="file" name="foto" class="form-control form-control-sm border-0 shadow-none" style="background: transparent; color: #E8EAED;">
                            <small class="d-block mt-2" style="font-size: 0.65rem; color: #FF8A80;">*Kosongkan jika tidak mengganti foto</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 p-4 pt-0">
                <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn px-5 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 12px; border: none;">Update Dokumentasi</button>
            </div>
        </form>
    </div>
</div>
<?php endforeach; ?>

<style>
    /* Table Dark Custom */
    .table-dark-custom tbody tr {
        background: transparent;
        transition: all 0.3s ease;
    }
    
    .table-dark-custom tbody tr:hover {
        background: var(--dark-card-hover);
    }

    /* Action Buttons Dark Theme */
    .btn-action {
        width: 38px; 
        height: 38px; 
        border-radius: 12px; 
        border: none;
        display: inline-flex; 
        align-items: center; 
        justify-content: center;
        transition: all 0.3s ease;
    }
    .btn-action.view { background: rgba(14, 165, 233, 0.15); color: #0ea5e9; }
    .btn-action.edit { background: rgba(255, 215, 0, 0.15); color: var(--yellow-bright); }
    .btn-action.delete { background: rgba(239, 68, 68, 0.15); color: #ef4444; }
    .btn-action:hover { 
        transform: translateY(-3px); 
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        filter: brightness(1.2);
    }

    /* Input Dark Styling */
    .akk-input { 
        border-radius: 12px; 
        border: 2px solid var(--border-color); 
        background: #1E2530;
        color: #E8EAED;
        transition: 0.3s;
        padding: 10px 15px;
    }
    
    .akk-input::placeholder {
        color: #7A7D82;
        opacity: 1;
    }
    
    .akk-input:focus { 
        border-color: var(--yellow) !important;
        box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.15) !important;
        background: #252D3A;
        color: #FFFFFF;
    }

    /* Upload Box Dark */
    .upload-box { 
        background: var(--dark-gray); 
        border: 2px dashed var(--border-color); 
        transition: 0.3s; 
    }
    .upload-box:hover { 
        border-color: var(--yellow); 
        background: rgba(255, 215, 0, 0.05); 
    }
    
    /* Button Hover Effect */
    .btn:hover {
        filter: brightness(1.1);
        transform: translateY(-2px);
    }

    /* Modal Dark */
    .modal-content {
        background: var(--dark-card);
    }

    /* Button Yellow Gradient Hover */
    .btn[style*="background: linear-gradient(135deg, var(--yellow)"] {
        transition: all 0.3s ease;
    }

    .btn[style*="background: linear-gradient(135deg, var(--yellow)"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4) !important;
    }
</style>

<?php $this->load->view('admin/footer'); ?>