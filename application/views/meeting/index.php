<?php
$this->load->view('layouts/header', ['page_title' => 'Meeting Notes']);
?>

<!-- ===== KONTEN MEETING NOTES ===== -->
<div class="topbar">
    <div class="d-flex align-items-center gap-2">
        <button class="btn-hamburger" id="btnHamburger"><i class="bi bi-list"></i></button>
        <div>
            <h4>Meeting Notes</h4>
            <div class="breadcrumb-mini d-none d-sm-block">
                <a href="<?= base_url('dashboard') ?>">Dashboard</a> / Meeting Notes
            </div>
        </div>
    </div>
    <div class="user-chip">
        <div class="avatar">DS</div>
        <div class="user-info">
            <div style="font-size:.85rem;font-weight:600;">Daus</div>
            <div style="font-size:.72rem;color:#9aa7b5;">System Analyst</div>
        </div>
    </div>
</div>

<div class="stat-strip">
    <div class="item">
        <div class="val" style="color:#1a4f8b;">18</div>
        <div class="lbl">Total Meeting</div>
    </div>
    <div class="item">
        <div class="val" style="color:#c77700;">7</div>
        <div class="lbl">Action Pending</div>
    </div>
    <div class="item">
        <div class="val" style="color:#1e8e5a;">24</div>
        <div class="lbl">Action Done</div>
    </div>
    <div class="item">
        <div class="val" style="color:#c0392b;">2</div>
        <div class="lbl">Overdue</div>
    </div>
</div>

<div class="panel">
    <div class="panel-header">
        <h6><i class="bi bi-journal-text me-2 text-primary"></i>Daftar Meeting</h6>
        <small class="text-muted" style="font-size:.75rem;">Klik card untuk lihat detail</small>
    </div>

    <div class="toolbar">
        <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control" id="searchMeeting" placeholder="Cari judul meeting atau peserta...">
        </div>
        <select class="form-select" id="filterType" style="max-width:170px;">
            <option value="">Semua Tipe</option>
            <option value="review">Review</option>
            <option value="planning">Planning</option>
            <option value="vendor">Vendor</option>
            <option value="internal">Internal</option>
        </select>
        <button class="btn-corp" data-bs-toggle="modal" data-bs-target="#modalMeeting">
            <i class="bi bi-plus-lg"></i> Meeting Baru
        </button>
    </div>

    <div id="meetingList">
        <!-- Card 1 -->
        <div class="meeting-card" data-type="review">
            <div class="mc-top">
                <div>
                    <div class="d-flex align-items-center gap-2 mb-1 flex-wrap">
                        <span class="type-badge type-review">Review</span>
                        <span class="mc-title">Review BRD — Digitalisasi Verifikasi Dokumen</span>
                    </div>
                    <div class="mc-meta">
                        <span><i class="bi bi-calendar3"></i>24 Okt 2026 · 10:00</span>
                        <span><i class="bi bi-geo-alt"></i>Ruang Meeting A</span>
                        <span class="avatar-stack">
                            <span class="avatar-sm" style="background:#2e7dd1;">AR</span>
                            <span class="avatar-sm" style="background:#1e8e5a;">BS</span>
                        </span>
                    </div>
                </div>
                <div class="action-btns">
                    <button class="btn-icon" title="Edit"><i class="bi bi-pencil"></i></button>
                    <button class="btn-icon danger" title="Hapus"><i class="bi bi-trash"></i></button>
                </div>
            </div>
            <div class="mc-excerpt">
                Pembahasan alur verifikasi dokumen digital: OCR untuk KTP & NPWP, validasi tanda tangan, dan integrasi ke core leasing.
            </div>
            <div class="action-pills">
                <span class="action-pill done"><i class="bi bi-check-circle"></i>Kirim BRD v2.1 — Ari</span>
                <span class="action-pill pending"><i class="bi bi-clock"></i>Konfirmasi vendor OCR — Citra</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="meeting-card" data-type="planning">
            <div class="mc-top">
                <div>
                    <div class="d-flex align-items-center gap-2 mb-1 flex-wrap">
                        <span class="type-badge type-planning">Planning</span>
                        <span class="mc-title">Sprint Planning — Payment Gateway</span>
                    </div>
                    <div class="mc-meta">
                        <span><i class="bi bi-calendar3"></i>22 Okt 2026 · 14:00</span>
                        <span><i class="bi bi-geo-alt"></i>Zoom Meeting</span>
                        <span class="avatar-stack">
                            <span class="avatar-sm" style="background:#2e7dd1;">AR</span>
                            <span class="avatar-sm" style="background:#1e8e5a;">BS</span>
                        </span>
                    </div>
                </div>
                <div class="action-btns">
                    <button class="btn-icon" title="Edit"><i class="bi bi-pencil"></i></button>
                    <button class="btn-icon danger" title="Hapus"><i class="bi bi-trash"></i></button>
                </div>
            </div>
            <div class="mc-excerpt">
                Sprint 3 fokus integrasi VA & QRIS. Estimasi 5 user story, 2 di antaranya butuh konfirmasi endpoint dari vendor.
            </div>
            <div class="action-pills">
                <span class="action-pill done"><i class="bi bi-check-circle"></i>Update sprint board — Ari</span>
                <span class="action-pill pending"><i class="bi bi-clock"></i>Minta dokumentasi API — Citra</span>
            </div>
        </div>
    </div>

    <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 gap-2">
        <small class="text-muted" style="font-size:.78rem;">Menampilkan 1–2 dari 18 meeting</small>
        <nav>
            <ul class="pagination pagination-corp mb-0">
                <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- ===== MODAL: Meeting Baru ===== -->
<div class="modal fade" id="modalMeeting" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-journal-plus me-2"></i>Meeting Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">

                    <div class="col-md-8">
                        <label class="form-label">Judul Meeting <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="mtJudul" required minlength="5" maxlength="200" placeholder="Contoh: Review BRD">
                        <div class="invalid-feedback">Judul wajib diisi (min. 5 karakter).</div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tipe <span class="text-danger">*</span></label>
                        <select class="form-select" id="mtTipe" required>
                            <option value="">Pilih tipe...</option>
                            <option value="review">Review</option>
                            <option value="planning">Planning</option>
                            <option value="vendor">Vendor</option>
                            <option value="internal">Internal</option>
                        </select>
                        <div class="invalid-feedback">Tipe wajib dipilih.</div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tanggal <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="mtTanggal" required>
                        <div class="invalid-feedback">Tanggal wajib diisi.</div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Jam <span class="text-danger">*</span></label>
                        <input type="time" class="form-control" id="mtJam" required>
                        <div class="invalid-feedback">Jam wajib diisi.</div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Lokasi / Link</label>
                        <input type="text" class="form-control" id="mtLokasi" placeholder="Ruang Meeting A / Zoom">
                    </div>

                    <!-- Peserta Multi-select -->
                    <!-- <div class="col-12">
                        <label class="form-label">Peserta <span class="text-danger">*</span></label>
                        <div class="dropdown multi-select" id="pesertaMultiSelect">
                            <button class="multi-select-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="ms-placeholder">Pilih peserta...</span>
                                <span class="ms-chips"></span>
                                <i class="bi bi-chevron-down ms-arrow"></i>
                            </button>
                            <div class="dropdown-menu w-100 p-2">
                                <div class="ms-search-wrap mb-1">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="form-control form-control-sm ms-search" placeholder="Cari peserta...">
                                </div>
                                <div class="ms-actions d-flex justify-content-between px-2 pb-1">
                                    <button type="button" class="btn-link-sm ms-select-all">Pilih semua</button>
                                    <button type="button" class="btn-link-sm ms-clear-all">Hapus semua</button>
                                </div>
                                <div class="ms-options">
                                    <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="ari" data-label="Ari (Dev)"><span>Ari (Dev)</span></label>
                                    <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="budi" data-label="Budi (Dev)"><span>Budi (Dev)</span></label>
                                    <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="citra" data-label="Citra (Dev)"><span>Citra (Dev)</span></label>
                                    <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="dwi" data-label="Dwi (Dev)"><span>Dwi (Dev)</span></label>
                                    <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="bisnis" data-label="Tim Bisnis"><span>Tim Bisnis</span></label>
                                    <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="vendor" data-label="Vendor"><span>Vendor</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="invalid-feedback d-block" id="pesertaError" style="display:none;">Pilih minimal 1 peserta.</div>
                    </div> -->

                    <div class="col-12">
                        <label class="form-label">Catatan Meeting <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="mtCatatan" rows="4" required minlength="10" placeholder="Tulis poin pembahasan..."></textarea>
                        <div class="invalid-feedback">Catatan wajib diisi (min. 10 karakter).</div>
                    </div>

                    <!-- Action Items -->
                    <div class="col-12">
                        <label class="form-label d-flex justify-content-between align-items-center">
                            <span>Action Items</span>
                            <button type="button" class="btn-add-ai" id="btnAddAi"><i class="bi bi-plus-circle"></i> Tambah Action</button>
                        </label>
                        <div id="actionItemContainer">
                            <div class="ai-row">
                                <div class="ai-fields">
                                    <input type="text" class="form-control ai-desc" placeholder="Deskripsi action...">
                                    <select class="form-select ai-pic">
                                        <option value="">PIC</option>
                                        <option>Ari</option>
                                        <option>Budi</option>
                                        <option>Citra</option>
                                        <option>Dwi</option>
                                        <option>Daus</option>
                                    </select>
                                    <input type="date" class="form-control ai-date">
                                </div>
                                <button type="button" class="btn-remove-ai"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal" style="font-size:.85rem;">Batal</button>
                <button class="btn-corp" id="btnSimpanMeeting"><i class="bi bi-check-lg"></i> Simpan Meeting</button>
            </div>
        </div>
    </div>
</div>

<?php
// Kirim page_js ke footer
$this->load->view('layouts/footer', ['page_js' => 'meeting']);
?>