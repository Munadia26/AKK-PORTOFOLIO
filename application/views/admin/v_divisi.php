<?php $this->load->view('admin/header'); ?>

<div class="container-fluid pt-4 pb-5 px-4">

    <div class="card border-0 shadow-sm mb-4" style="border-radius: 20px; background: linear-gradient(135deg, var(--dark-card), var(--dark-gray)); border: 1px solid var(--border-color);">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="d-flex align-items-center mb-2">
                        <div class="icon-box me-3" style="background: rgba(255, 215, 0, 0.1); padding: 12px; border-radius: 15px; box-shadow: 0 0 15px rgba(255, 215, 0, 0.2);">
                            <i class="fas fa-sitemap fa-lg" style="color: var(--yellow-bright);"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0" style="color: var(--text-primary);">Manajemen Divisi</h3>
                            <p class="small mb-0" style="color: var(--text-secondary);">Halaman pengelolaan divisi Arti Kata Kita.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 text-md-end mt-3 mt-md-0">
                    <button class="btn px-4 shadow-sm fw-bold"
                            style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 12px; border: none; padding: 12px 25px; transition: 0.3s;"
                            data-bs-toggle="modal" data-bs-target="#addDivisi">
                        <i class="fas fa-plus-circle me-2"></i> Tambah Divisi
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
                        <th class="ps-4 py-3 small text-uppercase fw-bold" width="60" style="color: #9CA3AF; border: none;">#</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Nama Divisi</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Deskripsi Singkat</th>
                        <th class="pe-4 py-3 small text-uppercase fw-bold text-center" width="180" style="color: #9CA3AF; border: none;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="border: none;">
                    <?php if(!empty($divisi)): ?>
                        <?php $no = 1; foreach($divisi as $d): ?>
                        <tr style="border-bottom: 1px solid var(--border-color); background: transparent !important;">
                            <td class="ps-4" style="background: transparent !important; border: none;">
                                <span class="fw-bold" style="color: var(--text-secondary);"><?= $no++ ?></span>
                            </td>
                            <td style="background: transparent !important; border: none;">
                                <span class="fw-bold d-block mb-0" style="color: #ffffff;"><?= htmlspecialchars($d['nama_divisi']) ?></span>
                            </td>
                            <td style="background: transparent !important; border: none;">
                                <span style="color: var(--text-secondary); font-size: 0.875rem;">
                                    <?= htmlspecialchars(character_limiter($d['deskripsi_singkat'], 80)) ?>
                                </span>
                            </td>
                            <td class="pe-4 text-center" style="background: transparent !important; border: none;">
                                <div class="d-flex justify-content-center gap-2">
                                    <button class="btn btn-sm btn-action view" data-bs-toggle="modal" data-bs-target="#viewModal<?= $d['id_divisi'] ?>" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-action edit" data-bs-toggle="modal" data-bs-target="#editModal<?= $d['id_divisi'] ?>" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <a href="<?= base_url('portfolio/hapus_divisi/'.$d['id_divisi']) ?>"
                                       class="btn btn-sm btn-action delete"
                                       onclick="return confirm('Yakin ingin menghapus divisi ini? Data program terkait mungkin terpengaruh.')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center py-5" style="background: transparent !important; border: none; color: var(--text-secondary);">
                                <i class="fas fa-sitemap fa-2x mb-3 d-block" style="color: var(--border-color);"></i>
                                Belum ada data divisi. Silakan tambah divisi baru.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .table {
        --bs-table-bg: transparent !important;
        --bs-table-hover-bg: rgba(255, 255, 255, 0.05) !important;
        --bs-table-color: #ffffff !important;
    }
    .table td, .table th {
        background-color: transparent !important;
        color: #ffffff !important;
    }
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
    .btn-action.view  { background: rgba(14, 165, 233, 0.2); color: #0ea5e9; }
    .btn-action.edit  { background: rgba(255, 215, 0, 0.2); color: var(--yellow-bright); }
    .btn-action.delete{ background: rgba(239, 68, 68, 0.2); color: #ef4444; }
    .btn-action:hover { transform: translateY(-3px); filter: brightness(1.2); box-shadow: 0 5px 15px rgba(0,0,0,0.3); }

    .akk-input, .form-select.akk-input {
        border-radius: 10px;
        border: 2px solid var(--border-color);
        background: #1E2530;
        color: #E8EAED;
        font-size: 0.9rem;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }
    .akk-input::placeholder { color: #7A7D82; opacity: 1; }
    .akk-input:focus, .form-select.akk-input:focus {
        border-color: var(--yellow);
        box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.15);
        background: #252D3A;
        color: #FFFFFF;
    }
    .form-select.akk-input option { background: #1E2530; color: #E8EAED; }
    .modal-content { background: var(--dark-card); }
    .btn[style*="background: linear-gradient(135deg, var(--yellow)"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4) !important;
        filter: brightness(1.1);
    }
</style>

<!-- ===================== Modal Tambah Divisi ===================== -->
<div class="modal fade" id="addDivisi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="<?= base_url('portfolio/tambah_divisi') ?>" method="post" class="modal-content border-0 shadow-lg" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);">
            <div class="modal-header border-0 p-4 pb-0" style="border-bottom: 1px solid var(--border-color) !important;">
                <h5 class="modal-title fw-bold" style="color: var(--yellow-bright);">
                    <i class="fas fa-plus-circle me-2"></i> Tambah Divisi Baru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: brightness(2);"></button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-3">
                    <label class="form-label small fw-bold" style="color: #F3F4F6;">Nama Divisi</label>
                    <input type="text" name="nama_divisi" class="form-control akk-input" placeholder="Contoh: Divisi Kreatif..." required>
                </div>
                <div class="mb-0">
                    <label class="form-label small fw-bold" style="color: #F3F4F6;">Deskripsi Singkat</label>
                    <textarea name="deskripsi_singkat" class="form-control akk-input" rows="4" placeholder="Tuliskan deskripsi singkat tentang divisi ini..." style="resize: none;"></textarea>
                </div>
            </div>
            <div class="modal-footer border-0 p-4 pt-0">
                <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn px-4 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 10px; border: none;">
                    <i class="fas fa-save me-2"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- ===================== Modal View & Edit per baris ===================== -->
<?php if(!empty($divisi)): foreach($divisi as $d): ?>

    <!-- Modal View -->
    <div class="modal fade" id="viewModal<?= $d['id_divisi'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);">
                <div class="modal-header border-0 p-4 pb-0" style="border-bottom: 1px solid var(--border-color) !important;">
                    <h5 class="modal-title fw-bold" style="color: #0ea5e9;">
                        <i class="fas fa-eye me-2"></i> Detail Divisi
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: brightness(2);"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="mb-3 p-3 rounded-3" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-color);">
                        <small class="text-uppercase fw-bold d-block mb-1" style="color: #9CA3AF; font-size: 0.7rem;">Nama Divisi</small>
                        <span class="fw-bold" style="color: #ffffff; font-size: 1.1rem;"><?= htmlspecialchars($d['nama_divisi']) ?></span>
                    </div>
                    <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-color);">
                        <small class="text-uppercase fw-bold d-block mb-1" style="color: #9CA3AF; font-size: 0.7rem;">Deskripsi Singkat</small>
                        <p class="mb-0" style="color: var(--text-secondary); line-height: 1.7;">
                            <?= !empty($d['deskripsi_singkat']) ? nl2br(htmlspecialchars($d['deskripsi_singkat'])) : '<em style="color:#555">Belum ada deskripsi.</em>' ?>
                        </p>
                    </div>
                </div>
                <div class="modal-footer border-0 p-4 pt-0">
                    <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal<?= $d['id_divisi'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="<?= base_url('portfolio/update_divisi') ?>" method="post" class="modal-content border-0 shadow-lg" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);">
                <div class="modal-header border-0 p-4 pb-0" style="border-bottom: 1px solid var(--border-color) !important;">
                    <h5 class="modal-title fw-bold" style="color: var(--yellow-bright);">
                        <i class="fas fa-edit me-2"></i> Edit Divisi
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: brightness(2);"></button>
                </div>
                <div class="modal-body p-4">
                    <input type="hidden" name="id_divisi" value="<?= $d['id_divisi'] ?>">
                    <div class="mb-3">
                        <label class="form-label small fw-bold" style="color: #F3F4F6;">Nama Divisi</label>
                        <input type="text" name="nama_divisi" class="form-control akk-input" value="<?= htmlspecialchars($d['nama_divisi']) ?>" required>
                    </div>
                    <div class="mb-0">
                        <label class="form-label small fw-bold" style="color: #F3F4F6;">Deskripsi Singkat</label>
                        <textarea name="deskripsi_singkat" class="form-control akk-input" rows="4" style="resize: none;"><?= htmlspecialchars($d['deskripsi_singkat']) ?></textarea>
                    </div>
                </div>
                <div class="modal-footer border-0 p-4 pt-0">
                    <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn px-4 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 10px; border: none;">
                        <i class="fas fa-save me-2"></i> Perbarui Data
                    </button>
                </div>
            </form>
        </div>
    </div>

<?php endforeach; endif; ?>

<?php $this->load->view('admin/footer'); ?>