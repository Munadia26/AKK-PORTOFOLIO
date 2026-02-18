<?php $this->load->view('admin/header'); ?>

<div class="container-fluid pt-4 pb-5 px-4">
    
    <div class="card border-0 shadow-sm mb-4" style="border-radius: 20px; background: linear-gradient(135deg, var(--dark-card), var(--dark-gray)); border: 1px solid var(--border-color);">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="d-flex align-items-center mb-2">
                        <div class="icon-box me-3" style="background: rgba(255, 215, 0, 0.1); padding: 12px; border-radius: 15px; box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);">
                            <i class="fas fa-layer-group fa-lg" style="color: var(--yellow-bright);"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0" style="color: var(--text-primary);">Manajemen Program</h3>
                            <p class="small mb-0" style="color: var(--text-secondary);">Halaman pengelolaan dan program Arti Kata Kita.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 text-md-end mt-3 mt-md-0">
                    <button class="btn px-4 shadow-sm fw-bold" 
                            style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 12px; border: none; padding: 12px 25px; transition: 0.3s;" 
                            data-bs-toggle="modal" data-bs-target="#addProgram">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Program
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php if($this->session->flashdata('pesan')): ?>
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4" 
             style="background: rgba(64, 224, 208, 0.15); color: var(--cyan-light); border-radius: 15px; border: 1px solid rgba(64, 224, 208, 0.3);" role="alert">
            <i class="fas fa-check-circle me-2"></i> <?= $this->session->flashdata('pesan'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="filter: brightness(2);"></button>
        </div>
    <?php endif; ?>

    <div class="card border-0 shadow-sm" style="border-radius: 20px; overflow: hidden; background: var(--dark-card); border: 1px solid var(--border-color);">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="background-color: transparent !important; color: #ffffff !important;">
                <thead style="background: rgba(255, 255, 255, 0.03); border-bottom: 1px solid var(--border-color);">
                    <tr>
                        <th class="ps-4 py-3 small text-uppercase fw-bold" width="120" style="color: #9CA3AF; border: none;">Visual</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Nama Program</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Divisi</th>
                        <th class="pe-4 py-3 small text-uppercase fw-bold text-center" width="180" style="color: #9CA3AF; border: none;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="border: none;">
                    <?php foreach($program as $p): ?>
                    <tr style="border-bottom: 1px solid var(--border-color); background: transparent !important;">
                        <td class="ps-4" style="background: transparent !important; border: none;">
                            <img src="<?= base_url('assets/img/program/'.$p['foto_program']) ?>" 
                                 class="rounded-3 shadow-sm" 
                                 style="width: 80px; height: 50px; object-fit: cover; border: 2px solid var(--border-color);"
                                 onerror="this.src='<?= base_url('assets/img/default.jpg'); ?>'">
                        </td>
                        <td style="background: transparent !important; border: none;">
                            <span class="fw-bold d-block mb-0" style="color: #ffffff;"><?= $p['nama_program'] ?></span>
                        </td>
                        <td style="background: transparent !important; border: none;">
                            <span class="badge px-3 py-2 fw-semibold" 
                                  style="background: rgba(64, 224, 208, 0.15); color: var(--cyan-light); border-radius: 8px; font-size: 0.75rem;">
                                <?= $p['nama_divisi'] ?>
                            </span>
                        </td>
                        <td class="pe-4 text-center" style="background: transparent !important; border: none;">
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-sm btn-action view" data-bs-toggle="modal" data-bs-target="#viewModal<?= $p['id_program'] ?>" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-action edit" data-bs-toggle="modal" data-bs-target="#editModal<?= $p['id_program'] ?>" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <a href="<?= base_url('portfolio/hapus_program/'.$p['id_program']) ?>" 
                                   class="btn btn-sm btn-action delete" 
                                   onclick="return confirm('Yakin ingin menghapus program ini?')">
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
    /* CSS untuk memastikan tidak ada warna putih yang muncul */
    .table {
        --bs-table-bg: transparent !important;
        --bs-table-hover-bg: rgba(255, 255, 255, 0.05) !important;
        --bs-table-color: #ffffff !important;
    }

    .table td, .table th {
        background-color: transparent !important;
        color: #ffffff !important;
    }

    /* Action Buttons Style (Ikon tetap berfungsi) */
    .btn-action {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        border: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    .btn-action.view { background: rgba(14, 165, 233, 0.2); color: #0ea5e9; }
    .btn-action.edit { background: rgba(255, 215, 0, 0.2); color: var(--yellow-bright); }
    .btn-action.delete { background: rgba(239, 68, 68, 0.2); color: #ef4444; }
    
    .btn-action:hover { 
        transform: translateY(-3px); 
        filter: brightness(1.2);
    }
</style>
<!-- Modal Add Program -->
<div class="modal fade" id="addProgram" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form action="<?= base_url('portfolio/tambah_program') ?>" method="post" enctype="multipart/form-data" class="modal-content border-0 shadow-lg" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);">
            <div class="modal-header border-0 p-4 pb-0" style="border-bottom: 1px solid var(--border-color) !important;">
                <h5 class="modal-title fw-bold" style="color: var(--yellow-bright);"><i class="fas fa-plus-circle me-2"></i> Tambah Program Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: brightness(2);"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-4">
                    <div class="col-md-7">
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Nama Program</label>
                            <input type="text" name="nama_program" class="form-control akk-input" placeholder="Masukkan nama kegiatan..." required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Pilih Divisi</label>
                            <select name="id_divisi" class="form-select akk-input" required>
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                <?php foreach($divisi as $d): ?>
                                    <option value="<?= $d['id_divisi'] ?>"><?= $d['nama_divisi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;">Deskripsi Lengkap</label>
                            <textarea name="deskripsi" class="form-control akk-input" rows="5" style="resize: none;" placeholder="Jelaskan detail kegiatan..." required></textarea>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="upload-box p-4 rounded-4 text-center h-100 d-flex flex-column align-items-center justify-content-center">
                            <i class="fas fa-cloud-upload-alt fa-3x mb-3" style="color: #9CA3AF;"></i>
                            <label class="form-label small fw-bold mb-3 d-block" style="color: #F3F4F6;">Banner Program</label>
                            <input type="file" name="foto_program" class="form-control form-control-sm border-0 shadow-none p-2" style="background: #1E2530; color: #E8EAED;" required>
                            <p class="mt-3 mb-0" style="font-size: 0.7rem; color: #9CA3AF;">Rekomendasi: Landscape (16:9)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 p-4 pt-0">
                <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn px-4 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 10px; border: none;">Simpan Program</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal View Detail -->
<?php foreach($program as $p): ?>
    <div class="modal fade" id="viewModal<?= $p['id_program'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; overflow: hidden; background: var(--dark-card); border: 1px solid var(--border-color);">
                <img src="<?= base_url('assets/img/program/'.$p['foto_program']) ?>" class="w-100" style="height: 220px; object-fit: cover;">
                <div class="modal-body p-4">
                    <span class="badge px-3 py-2 mb-2" style="background: rgba(64, 224, 208, 0.15); color: var(--cyan-light); border-radius: 8px;"><?= $p['nama_divisi'] ?></span>
                    <h4 class="fw-bold" style="color: var(--text-primary);"><?= $p['nama_program'] ?></h4>
                    <hr style="border-color: var(--border-color);">
                    <p class="small" style="line-height: 1.6; white-space: pre-line; color: var(--text-secondary);"><?= $p['deskripsi_lengkap'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal<?= $p['id_program'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <form action="<?= base_url('portfolio/update_program') ?>" method="post" enctype="multipart/form-data" class="modal-content border-0 shadow-lg" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);">
                <div class="modal-header border-0 p-4 pb-0" style="border-bottom: 1px solid var(--border-color) !important;">
                    <h5 class="modal-title fw-bold" style="color: var(--yellow-bright);"><i class="fas fa-edit me-2"></i> Edit Program</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: brightness(2);"></button>
                </div>
                <div class="modal-body p-4">
                    <input type="hidden" name="id_program" value="<?= $p['id_program'] ?>">
                    <div class="row g-4">
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label class="form-label small fw-bold" style="color: #F3F4F6;">Nama Program</label>
                                <input type="text" name="nama_program" class="form-control akk-input" value="<?= $p['nama_program'] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold" style="color: #F3F4F6;">Pilih Divisi</label>
                                <select name="id_divisi" class="form-select akk-input" required>
                                    <?php foreach($divisi as $d): ?>
                                        <option value="<?= $d['id_divisi'] ?>" <?= ($d['id_divisi'] == $p['id_divisi']) ? 'selected' : '' ?>>
                                            <?= $d['nama_divisi'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-0">
                                <label class="form-label small fw-bold" style="color: #F3F4F6;">Deskripsi Lengkap</label>
                                <textarea name="deskripsi" class="form-control akk-input" rows="5" style="resize: none;" required><?= $p['deskripsi_lengkap'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-5 text-center">
                            <label class="form-label small fw-bold d-block mb-3" style="color: #F3F4F6;">Foto Saat Ini</label>
                            <img src="<?= base_url('assets/img/program/'.$p['foto_program']) ?>" class="rounded-3 shadow-sm mb-3 w-100" style="height: 130px; object-fit: cover; border: 2px solid var(--border-color);">
                            <div class="p-3 rounded-3" style="background: #1E2530;">
                                <input type="file" name="foto_program" class="form-control form-control-sm border-0" style="background: transparent; color: #E8EAED;">
                                <small class="d-block mt-2" style="font-size: 0.65rem; color: #FF8A80;">*Kosongkan jika tidak mengganti foto</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 p-4 pt-0">
                    <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn px-4 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 10px; border: none;">Perbarui Data</button>
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

    /* Button Hover Yellow */
    .btn[style*="background: linear-gradient(135deg, var(--yellow)"] {
        transition: all 0.3s ease;
    }

    .btn[style*="background: linear-gradient(135deg, var(--yellow)"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4) !important;
        filter: brightness(1.1);
    }

    /* Action Buttons Dark */
    .btn-action {
        width: 36px;
        height: 36px;
        border-radius: 10px;
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
        filter: brightness(1.2);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    /* Input Dark Styling */
    .akk-input, .form-select.akk-input {
        border-radius: 10px;
        border: 2px solid var(--border-color);
        background: #1E2530;
        color: #E8EAED;
        font-size: 0.9rem;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }
    
    .akk-input::placeholder {
        color: #7A7D82;
        opacity: 1;
    }
    
    .akk-input:focus, .form-select.akk-input:focus {
        border-color: var(--yellow);
        box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.15);
        background: #252D3A;
        color: #FFFFFF;
    }

    /* Select Dark Mode */
    .form-select.akk-input option {
        background: #1E2530;
        color: #E8EAED;
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

    /* Modal Dark Styling */
    .modal-content {
        background: var(--dark-card);
    }
    
    .modal-header {
        border-bottom-color: var(--border-color);
    }
</style>

<?php $this->load->view('admin/footer'); ?>