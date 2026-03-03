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
                        <th class="ps-4 py-3 small text-uppercase fw-bold" width="100" style="color: #9CA3AF; border: none;">Preview</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Judul Konten</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Penulis</th>
                        <th class="py-3 small text-uppercase fw-bold" style="color: #9CA3AF; border: none;">Kategori</th>
                        <th class="pe-4 py-3 small text-uppercase fw-bold text-center" width="160" style="color: #9CA3AF; border: none;">Aksi</th>
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
                            <span class="fw-bold d-block" style="color: #F3F4F6;"><?= htmlspecialchars($d['judul']) ?></span>
                            <?php if(!empty($d['subtittle'])): ?>
                            <small style="color: var(--text-muted); display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;"><?= htmlspecialchars($d['subtittle']) ?></small>
                            <?php endif; ?>
                        </td>
                        <td style="background: transparent !important; border: none;">
                            <span class="small" style="color: var(--text-secondary);">
                                <i class="fas fa-user me-1" style="color: var(--yellow); opacity:0.6;"></i>
                                <?= !empty($d['penulis']) ? htmlspecialchars($d['penulis']) : '<span style="color:var(--text-muted)">-</span>' ?>
                            </span>
                            <?php if(!empty($d['tgl_artikel'])): ?>
                            <small class="d-block" style="color: var(--text-muted); font-size: 0.72rem;">
                                <i class="fas fa-calendar me-1"></i><?= date('d M Y', strtotime($d['tgl_artikel'])) ?>
                            </small>
                            <?php endif; ?>
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
<!-- Quill.js Rich Text Editor CSS -->
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">

<style>
/* ── Quill Dark Theme ── */
.ql-toolbar.ql-snow {
    border: 2px solid var(--border-color) !important;
    border-bottom: 1px solid var(--border-color) !important;
    border-radius: 12px 12px 0 0 !important;
    background: #1a2030 !important;
    padding: 8px 12px !important;
    flex-wrap: wrap;
}
.ql-container.ql-snow {
    border: 2px solid var(--border-color) !important;
    border-top: none !important;
    border-radius: 0 0 12px 12px !important;
    background: #1E2530 !important;
    color: #E8EAED !important;
    min-height: 220px;
    font-size: 0.95rem;
}
.ql-editor { min-height: 220px; color: #E8EAED !important; line-height: 1.7; }
.ql-editor.ql-blank::before { color: #7A7D82 !important; font-style: italic; }
.ql-snow .ql-stroke { stroke: #9CA3AF !important; }
.ql-snow .ql-fill, .ql-snow .ql-stroke.ql-fill { fill: #9CA3AF !important; }
.ql-snow .ql-picker { color: #9CA3AF !important; }
.ql-snow .ql-picker-options { background: #1a2030 !important; border-color: var(--border-color) !important; color: #E8EAED !important; }
.ql-toolbar.ql-snow button:hover .ql-stroke,
.ql-toolbar.ql-snow button.ql-active .ql-stroke { stroke: var(--yellow-bright) !important; }
.ql-toolbar.ql-snow button:hover .ql-fill,
.ql-toolbar.ql-snow button.ql-active .ql-fill { fill: var(--yellow-bright) !important; }
.ql-snow .ql-picker-label:hover,
.ql-snow .ql-picker.ql-expanded .ql-picker-label { color: var(--yellow-bright) !important; }
.ql-snow .ql-picker.ql-expanded .ql-picker-label .ql-stroke { stroke: var(--yellow-bright) !important; }
.ql-editor h1, .ql-editor h2, .ql-editor h3 { color: #F3F4F6 !important; }
.ql-editor a { color: var(--cyan) !important; }
.ql-editor blockquote {
    border-left: 4px solid var(--yellow) !important;
    color: #9CA3AF !important;
    background: rgba(255,215,0,0.05) !important;
    margin: 10px 0 !important;
    padding: 8px 16px !important;
    border-radius: 0 8px 8px 0 !important;
}
/* Modal scrollable */
.modal-body-scroll { max-height: 70vh; overflow-y: auto; padding-right: 4px; }
.modal-body-scroll::-webkit-scrollbar { width: 5px; }
.modal-body-scroll::-webkit-scrollbar-track { background: transparent; }
.modal-body-scroll::-webkit-scrollbar-thumb { background: var(--border-color); border-radius: 4px; }
</style>

<!-- ═══════════════════════════════════════════════ -->
<!-- Modal TAMBAH Artikel -->
<!-- ═══════════════════════════════════════════════ -->
<div class="modal fade" id="addDoc" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <form action="<?= base_url('portfolio/tambah_dokumentasi') ?>" method="post" enctype="multipart/form-data" 
              class="modal-content border-0 shadow-lg" 
              style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);"
              id="formTambah">
            <!-- Header -->
            <div class="modal-header p-4 pb-3" style="border-bottom: 1px solid var(--border-color);">
                <div class="d-flex align-items-center gap-3">
                    <div style="background: rgba(255,215,0,0.1); padding: 10px 14px; border-radius: 12px;">
                        <i class="fas fa-plus-circle" style="color: var(--yellow-bright); font-size: 1.1rem;"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold mb-0" style="color: var(--yellow-bright);">Tambah Artikel Baru</h5>
                        <small style="color: var(--text-muted);">Isi semua informasi artikel dengan lengkap</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: brightness(2);"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-4 modal-body-scroll">
                <div class="row g-4">
                    <!-- Kolom Kiri: Info Artikel -->
                    <div class="col-lg-8">

                        <!-- Judul -->
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-heading me-1" style="color: var(--yellow);"></i> Judul Artikel</label>
                            <input type="text" name="judul" class="form-control akk-input" placeholder="Masukkan judul artikel..." required>
                        </div>

                        <!-- Sub Judul -->
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-align-left me-1" style="color: var(--yellow);"></i> Sub Judul <span style="color: var(--text-muted); font-weight: 400;">(opsional)</span></label>
                            <input type="text" name="subtittle" class="form-control akk-input" placeholder="Masukkan sub judul atau ringkasan singkat...">
                        </div>

                        <!-- Row: Penulis & Tanggal -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-user-pen me-1" style="color: var(--yellow);"></i> Penulis</label>
                                <input type="text" name="penulis" class="form-control akk-input" placeholder="Nama penulis..." required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-calendar-days me-1" style="color: var(--yellow);"></i> Tanggal Artikel</label>
                                <input type="date" name="tgl_artikel" class="form-control akk-input" required>
                            </div>
                        </div>

                        <!-- Kategori -->
                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-tag me-1" style="color: var(--yellow);"></i> Kategori</label>
                            <input type="text" name="kategori" class="form-control akk-input" placeholder="Contoh: Sosial, Pendidikan, Inspirasi..." required>
                        </div>

                        <!-- Konten / Deskripsi (Quill) -->
                        <div class="mb-0">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-file-lines me-1" style="color: var(--yellow);"></i> Konten Artikel</label>
                            <div id="quill-add" style="min-height: 220px;"></div>
                            <input type="hidden" name="deskripsi" id="deskripsi-add">
                        </div>
                    </div>

                    <!-- Kolom Kanan: Upload Foto -->
                    <div class="col-lg-4">
                        <label class="form-label small fw-bold d-block mb-3" style="color: #F3F4F6;"><i class="fas fa-image me-1" style="color: var(--yellow);"></i> Foto Utama Artikel</label>
                        
                        <!-- Preview Box -->
                        <div id="previewBoxAdd" class="rounded-4 mb-3 d-flex align-items-center justify-content-center" 
                             style="height: 200px; background: #1E2530; border: 2px dashed var(--border-color); border-radius: 12px !important; overflow: hidden; cursor: pointer;" 
                             onclick="document.getElementById('fotoInputAdd').click()">
                            <div id="previewPlaceholderAdd" class="text-center">
                                <i class="fas fa-cloud-upload-alt fa-3x mb-2" style="color: #4A5568; opacity: 0.6;"></i>
                                <p class="small mb-0" style="color: #7A7D82;">Klik untuk pilih gambar</p>
                                <p class="small mb-0" style="color: #7A7D82; font-size: 0.7rem;">JPG, PNG, GIF</p>
                            </div>
                            <img id="previewImgAdd" src="" alt="" style="display:none; width:100%; height:100%; object-fit:cover;">
                        </div>
                        <input type="file" name="foto" id="fotoInputAdd" class="form-control akk-input" accept="image/*" 
                               style="font-size: 0.82rem;" 
                               onchange="previewImage(this, 'previewImgAdd', 'previewPlaceholderAdd')">
                        <small class="d-block mt-2" style="font-size: 0.7rem; color: var(--text-muted);">* Rekomendasi ukuran 1200×600px</small>

                        <!-- Info Box -->
                        <div class="mt-4 p-3 rounded-3" style="background: rgba(255,215,0,0.05); border: 1px solid rgba(255,215,0,0.15);">
                            <p class="small mb-1 fw-bold" style="color: var(--yellow-bright);"><i class="fas fa-lightbulb me-1"></i> Tips Penulisan</p>
                            <ul class="small mb-0 ps-3" style="color: var(--text-muted); line-height: 1.8;">
                                <li>Judul yang menarik & deskriptif</li>
                                <li>Sub judul membantu pembaca</li>
                                <li>Gunakan paragraf yang pendek</li>
                                <li>Tambahkan heading untuk struktur</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer p-4 pt-3" style="border-top: 1px solid var(--border-color);">
                <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Batal
                </button>
                <button type="submit" class="btn px-5 py-2 fw-bold shadow-sm" 
                        style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 12px; border: none;"
                        onclick="syncQuill('quill-add', 'deskripsi-add')">
                    <i class="fas fa-save me-2"></i> Simpan Artikel
                </button>
            </div>
        </form>
    </div>
</div>

<!-- ═══════════════════════════════════════════════ -->
<!-- Modal DETAIL & EDIT per artikel -->
<!-- ═══════════════════════════════════════════════ -->
<?php foreach($dokumentasi as $d): ?>

<!-- Modal Detail -->
<div class="modal fade" id="detail<?= $d['id_dokumentasi'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);">
            <img src="<?= base_url('assets/img/dokumentasi/'.$d['foto']) ?>" class="w-100" 
                 style="height: 240px; object-fit: cover; border-radius: 20px 20px 0 0;"
                 onerror="this.src='<?= base_url('assets/img/default.jpg') ?>'">
            <div class="modal-body p-4">
                <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
                    <span class="badge px-3 py-2" style="background: rgba(100,116,139,0.15); color: var(--text-secondary); border-radius: 8px;">
                        <i class="fas fa-tag me-1"></i> <?= htmlspecialchars($d['kategori']) ?>
                    </span>
                    <?php if(!empty($d['penulis'])): ?>
                    <span class="badge px-3 py-2" style="background: rgba(255,215,0,0.1); color: var(--yellow-bright); border-radius: 8px;">
                        <i class="fas fa-user me-1"></i> <?= htmlspecialchars($d['penulis']) ?>
                    </span>
                    <?php endif; ?>
                    <?php if(!empty($d['tgl_artikel'])): ?>
                    <span class="badge px-3 py-2" style="background: rgba(64,224,208,0.1); color: var(--cyan-light); border-radius: 8px;">
                        <i class="fas fa-calendar me-1"></i> <?= date('d M Y', strtotime($d['tgl_artikel'])) ?>
                    </span>
                    <?php endif; ?>
                </div>
                <h4 class="fw-bold mt-2" style="color: var(--text-primary);"><?= htmlspecialchars($d['judul']) ?></h4>
                <?php if(!empty($d['subtittle'])): ?>
                <p class="fst-italic mb-3" style="color: var(--yellow-bright); font-size: 0.95rem; border-left: 3px solid var(--yellow); padding-left: 12px;"><?= htmlspecialchars($d['subtittle']) ?></p>
                <?php endif; ?>
                <hr style="border-color: var(--border-color);">
                <div class="small" style="line-height: 1.7; color: var(--text-secondary);"><?= $d['deskripsi'] ?></div>
            </div>
            <div class="modal-footer" style="border-top: 1px solid var(--border-color);">
                <button type="button" class="btn btn-link text-decoration-none" style="color: var(--text-secondary);" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="edit<?= $d['id_dokumentasi'] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <form action="<?= base_url('portfolio/update_dokumentasi') ?>" method="post" enctype="multipart/form-data" 
              class="modal-content border-0 shadow-lg" 
              style="border-radius: 20px; background: var(--dark-card); border: 1px solid var(--border-color);"
              id="formEdit<?= $d['id_dokumentasi'] ?>">

            <!-- Header -->
            <div class="modal-header p-4 pb-3" style="border-bottom: 1px solid var(--border-color);">
                <div class="d-flex align-items-center gap-3">
                    <div style="background: rgba(255,215,0,0.1); padding: 10px 14px; border-radius: 12px;">
                        <i class="fas fa-edit" style="color: var(--yellow-bright); font-size: 1.1rem;"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold mb-0" style="color: var(--yellow-bright);">Edit Artikel</h5>
                        <small style="color: var(--text-muted);">Perbarui informasi artikel</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" style="filter: brightness(2);"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-4 modal-body-scroll">
                <input type="hidden" name="id_dokumentasi" value="<?= $d['id_dokumentasi'] ?>">
                <div class="row g-4">
                    <!-- Kolom Kiri -->
                    <div class="col-lg-8">

                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-heading me-1" style="color: var(--yellow);"></i> Judul Artikel</label>
                            <input type="text" name="judul" class="form-control akk-input" value="<?= htmlspecialchars($d['judul']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-align-left me-1" style="color: var(--yellow);"></i> Sub Judul <span style="color: var(--text-muted); font-weight: 400;">(opsional)</span></label>
                            <input type="text" name="subtittle" class="form-control akk-input" value="<?= htmlspecialchars($d['subtittle'] ?? '') ?>" placeholder="Sub judul atau ringkasan singkat...">
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-user-pen me-1" style="color: var(--yellow);"></i> Penulis</label>
                                <input type="text" name="penulis" class="form-control akk-input" value="<?= htmlspecialchars($d['penulis'] ?? '') ?>" placeholder="Nama penulis..." required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-calendar-days me-1" style="color: var(--yellow);"></i> Tanggal Artikel</label>
                                <input type="date" name="tgl_artikel" class="form-control akk-input" value="<?= !empty($d['tgl_artikel']) ? date('Y-m-d', strtotime($d['tgl_artikel'])) : '' ?>" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-tag me-1" style="color: var(--yellow);"></i> Kategori</label>
                            <input type="text" name="kategori" class="form-control akk-input" value="<?= htmlspecialchars($d['kategori']) ?>" required>
                        </div>

                        <div class="mb-0">
                            <label class="form-label small fw-bold" style="color: #F3F4F6;"><i class="fas fa-file-lines me-1" style="color: var(--yellow);"></i> Konten Artikel</label>
                            <div id="quill-edit-<?= $d['id_dokumentasi'] ?>" style="min-height: 220px;"></div>
                            <input type="hidden" name="deskripsi" id="deskripsi-edit-<?= $d['id_dokumentasi'] ?>">
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-lg-4">
                        <label class="form-label small fw-bold d-block mb-3" style="color: #F3F4F6;"><i class="fas fa-image me-1" style="color: var(--yellow);"></i> Foto Artikel</label>
                        
                        <div id="previewBoxEdit<?= $d['id_dokumentasi'] ?>" class="rounded-4 mb-3" 
                             style="height: 200px; background: #1E2530; border: 2px solid var(--border-color); border-radius: 12px !important; overflow: hidden; cursor: pointer;"
                             onclick="document.getElementById('fotoEdit<?= $d['id_dokumentasi'] ?>').click()">
                            <img src="<?= base_url('assets/img/dokumentasi/'.$d['foto']) ?>" 
                                 id="previewImgEdit<?= $d['id_dokumentasi'] ?>"
                                 style="width:100%; height:100%; object-fit:cover;"
                                 onerror="this.src='<?= base_url('assets/img/default.jpg') ?>'">
                        </div>
                        <input type="file" name="foto" id="fotoEdit<?= $d['id_dokumentasi'] ?>" class="form-control akk-input" accept="image/*" 
                               style="font-size: 0.82rem;"
                               onchange="previewImageEdit(this, 'previewImgEdit<?= $d['id_dokumentasi'] ?>')">
                        <small class="d-block mt-2" style="font-size: 0.7rem; color: #FF8A80;"><i class="fas fa-info-circle me-1"></i> Kosongkan jika tidak mengganti foto</small>
                        
                        <div class="mt-3 p-3 rounded-3" style="background: rgba(64,224,208,0.05); border: 1px solid rgba(64,224,208,0.15);">
                            <p class="small mb-1" style="color: var(--text-muted);">
                                <i class="fas fa-clock me-1" style="color: var(--cyan);"></i> 
                                Upload: <strong style="color: var(--text-secondary);"><?= !empty($d['tgl_upload']) ? date('d M Y', strtotime($d['tgl_upload'])) : '-' ?></strong>
                            </p>
                            <p class="small mb-0" style="color: var(--text-muted);">
                                <i class="fas fa-id-badge me-1" style="color: var(--cyan);"></i> 
                                ID: <strong style="color: var(--text-secondary);">#<?= $d['id_dokumentasi'] ?></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer p-4 pt-3" style="border-top: 1px solid var(--border-color);">
                <button type="button" class="btn btn-link text-decoration-none px-4" style="color: var(--text-secondary);" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i> Batal
                </button>
                <button type="submit" class="btn px-5 py-2 fw-bold shadow-sm"
                        style="background: linear-gradient(135deg, var(--yellow), var(--yellow-bright)); color: var(--dark-bg); border-radius: 12px; border: none;"
                        onclick="syncQuill('quill-edit-<?= $d['id_dokumentasi'] ?>', 'deskripsi-edit-<?= $d['id_dokumentasi'] ?>')">
                    <i class="fas fa-save me-2"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<?php endforeach; ?>

<!-- Quill.js Library -->
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script>
// ── Konfigurasi Toolbar Quill (seperti MS Word) ──
const quillToolbar = [
    [{ 'header': [1, 2, 3, 4, false] }],
    [{ 'font': [] }],
    ['bold', 'italic', 'underline', 'strike'],
    [{ 'color': [] }, { 'background': [] }],
    [{ 'align': [] }],
    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
    [{ 'indent': '-1' }, { 'indent': '+1' }],
    ['blockquote', 'code-block'],
    ['link'],
    ['clean']
];

// Init Quill untuk modal TAMBAH
const quillAdd = new Quill('#quill-add', {
    theme: 'snow',
    placeholder: 'Tulis konten artikel di sini... Gunakan toolbar di atas untuk memformat teks.',
    modules: { toolbar: quillToolbar }
});

// Init Quill untuk setiap modal EDIT
<?php foreach($dokumentasi as $d): ?>
(function() {
    const quillEdit = new Quill('#quill-edit-<?= $d['id_dokumentasi'] ?>', {
        theme: 'snow',
        modules: { toolbar: quillToolbar }
    });
    // Set isi konten yang ada
    const existingContent = <?= json_encode($d['deskripsi']) ?>;
    if (existingContent) {
        quillEdit.root.innerHTML = existingContent;
    }
    // Simpan referensi
    window['quillInstance_<?= $d['id_dokumentasi'] ?>'] = quillEdit;
})();
<?php endforeach; ?>

// ── Sync Quill ke hidden input sebelum submit ──
function syncQuill(editorId, inputId) {
    const editor = document.querySelector('#' + editorId + ' .ql-editor');
    document.getElementById(inputId).value = editor ? editor.innerHTML : '';
}

// Sync otomatis saat form submit (tambah)
document.getElementById('formTambah').addEventListener('submit', function() {
    syncQuill('quill-add', 'deskripsi-add');
});

// Sync otomatis saat form edit submit
<?php foreach($dokumentasi as $d): ?>
document.getElementById('formEdit<?= $d['id_dokumentasi'] ?>').addEventListener('submit', function() {
    syncQuill('quill-edit-<?= $d['id_dokumentasi'] ?>', 'deskripsi-edit-<?= $d['id_dokumentasi'] ?>');
});
<?php endforeach; ?>

// ── Preview Gambar (Tambah) ──
function previewImage(input, imgId, placeholderId) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(imgId).src = e.target.result;
            document.getElementById(imgId).style.display = 'block';
            document.getElementById(placeholderId).style.display = 'none';
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// ── Preview Gambar (Edit) ──
function previewImageEdit(input, imgId) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById(imgId).src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// ── Reset Quill Add ketika modal ditutup ──
document.getElementById('addDoc').addEventListener('hidden.bs.modal', function() {
    quillAdd.setContents([]);
    document.getElementById('deskripsi-add').value = '';
});
</script>

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