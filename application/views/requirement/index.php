<?php
$this->load->view('layouts/header', [
    'page_title' => 'Requirement'
]);
?>

<!-- ===== KONTEN REQUIREMENT ===== -->
<div class="topbar">
    <div class="d-flex align-items-center gap-2">
        <button class="btn-hamburger" id="btnHamburger"><i class="bi bi-list"></i></button>
        <div>
            <h4>Requirement</h4>
            <div class="breadcrumb-mini d-none d-sm-block">
                <a href="<?= base_url('dashboard') ?>">Dashboard</a> / Requirement Management
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
        <div class="val" style="color:#1a4f8b;">42</div>
        <div class="lbl">Total</div>
    </div>
    <div class="item">
        <div class="val" style="color:#6c7a89;">12</div>
        <div class="lbl">Draft</div>
    </div>
    <div class="item">
        <div class="val" style="color:#c77700;">8</div>
        <div class="lbl">In Review</div>
    </div>
    <div class="item">
        <div class="val" style="color:#1e8e5a;">20</div>
        <div class="lbl">Approved</div>
    </div>
    <div class="item">
        <div class="val" style="color:#c0392b;">2</div>
        <div class="lbl">Rejected</div>
    </div>
</div>

<div class="panel">
    <div class="panel-header">
        <h6><i class="bi bi-file-earmark-text me-2 text-primary"></i>Daftar Requirement</h6>
        <small class="text-muted" style="font-size:.75rem;">Terakhir sync: 2 menit lalu</small>
    </div>

    <div class="toolbar">
        <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control" id="searchReq" placeholder="Cari ID, judul, atau modul...">
        </div>
        <select class="form-select" id="filterStatus" style="max-width:160px;">
            <option value="">Semua Status</option>
            <option value="draft">Draft</option>
            <option value="review">In Review</option>
            <option value="approved">Approved</option>
            <option value="rejected">Rejected</option>
        </select>
        <select class="form-select" id="filterPriority" style="max-width:160px;">
            <option value="">Semua Prioritas</option>
            <option value="p1">P1 - High</option>
            <option value="p2">P2 - Medium</option>
            <option value="p3">P3 - Low</option>
        </select>
        <button class="btn-corp-outline" id="btnExport"><i class="bi bi-file-earmark-excel"></i> Export</button>
        <button class="btn-corp" data-bs-toggle="modal" data-bs-target="#modalReq"><i class="bi bi-plus-lg"></i>
            Requirement Baru</button>
    </div>

    <div class="table-responsive">
        <table class="table table-corp align-middle mb-0" id="reqTable">
            <thead>
                <tr>
                    <th style="width:110px;">ID</th>
                    <th>Requirement</th>
                    <th style="width:130px;">Modul</th>
                    <th style="width:100px;">Prioritas</th>
                    <th style="width:120px;">Status</th>
                    <th style="width:130px;">PIC Dev</th>
                    <th style="width:110px;">Update</th>
                    <th style="width:120px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- (Isi Tabel Sama Persis Kayak Sebelumnya) -->
                <tr data-status="approved" data-priority="p1">
                    <td data-label="ID"><span class="req-id">REQ-042</span></td>
                    <td data-label="Requirement">
                        <div class="req-title">Validasi otomatis dokumen pengajuan kredit</div>
                        <div class="req-sub">BRD v2.1 · 5 user story</div>
                    </td>
                    <td data-label="Modul">Core Leasing</td>
                    <td data-label="Prioritas"><span class="badge-soft badge-p1">P1 - High</span></td>
                    <td data-label="Status"><span class="badge-soft badge-approved">Approved</span></td>
                    <td data-label="PIC Dev">
                        <div class="d-flex align-items-center gap-1 justify-content-end justify-content-md-start">
                            <span class="avatar-sm" style="background:#2e7dd1;">AR</span>
                            <small style="font-size:.78rem;">Ari</small>
                        </div>
                    </td>
                    <td data-label="Update">24 Okt 2026</td>
                    <td data-label="Aksi">
                        <div class="action-btns">
                            <button class="btn-icon" title="Lihat"><i class="bi bi-eye"></i></button>
                            <button class="btn-icon" title="Edit"><i class="bi bi-pencil"></i></button>
                            <button class="btn-icon danger" title="Hapus"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr data-status="review" data-priority="p1">
                    <td data-label="ID"><span class="req-id">REQ-041</span></td>
                    <td data-label="Requirement">
                        <div class="req-title">Integrasi API payment gateway (VA & QRIS)</div>
                        <div class="req-sub">FSD v1.0 · 8 user story</div>
                    </td>
                    <td data-label="Modul">Penagihan</td>
                    <td data-label="Prioritas"><span class="badge-soft badge-p1">P1 - High</span></td>
                    <td data-label="Status"><span class="badge-soft badge-review">In Review</span></td>
                    <td data-label="PIC Dev">
                        <div class="d-flex align-items-center gap-1 justify-content-end justify-content-md-start">
                            <span class="avatar-sm" style="background:#c77700;">CS</span>
                            <small style="font-size:.78rem;">Citra</small>
                        </div>
                    </td>
                    <td data-label="Update">23 Okt 2026</td>
                    <td data-label="Aksi">
                        <div class="action-btns">
                            <button class="btn-icon"><i class="bi bi-eye"></i></button>
                            <button class="btn-icon"><i class="bi bi-pencil"></i></button>
                            <button class="btn-icon danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr data-status="draft" data-priority="p2">
                    <td data-label="ID"><span class="req-id">REQ-040</span></td>
                    <td data-label="Requirement">
                        <div class="req-title">Dashboard monitoring kontrak jatuh tempo</div>
                        <div class="req-sub">Draft BRD · 3 user story</div>
                    </td>
                    <td data-label="Modul">Kontrak</td>
                    <td data-label="Prioritas"><span class="badge-soft badge-p2">P2 - Medium</span></td>
                    <td data-label="Status"><span class="badge-soft badge-draft">Draft</span></td>
                    <td data-label="PIC Dev">
                        <div class="d-flex align-items-center gap-1 justify-content-end justify-content-md-start">
                            <span class="avatar-sm" style="background:#5e35b1;">DP</span>
                            <small style="font-size:.78rem;">Dwi</small>
                        </div>
                    </td>
                    <td data-label="Update">22 Okt 2026</td>
                    <td data-label="Aksi">
                        <div class="action-btns">
                            <button class="btn-icon"><i class="bi bi-eye"></i></button>
                            <button class="btn-icon"><i class="bi bi-pencil"></i></button>
                            <button class="btn-icon danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr data-status="approved" data-priority="p2">
                    <td data-label="ID"><span class="req-id">REQ-039</span></td>
                    <td data-label="Requirement">
                        <div class="req-title">Notifikasi WhatsApp reminder angsuran</div>
                        <div class="req-sub">BRD v1.2 · 4 user story</div>
                    </td>
                    <td data-label="Modul">Penagihan</td>
                    <td data-label="Prioritas"><span class="badge-soft badge-p2">P2 - Medium</span></td>
                    <td data-label="Status"><span class="badge-soft badge-approved">Approved</span></td>
                    <td data-label="PIC Dev">
                        <div class="d-flex align-items-center gap-1 justify-content-end justify-content-md-start">
                            <span class="avatar-sm" style="background:#1e8e5a;">BS</span>
                            <small style="font-size:.78rem;">Budi</small>
                        </div>
                    </td>
                    <td data-label="Update">20 Okt 2026</td>
                    <td data-label="Aksi">
                        <div class="action-btns">
                            <button class="btn-icon"><i class="bi bi-eye"></i></button>
                            <button class="btn-icon"><i class="bi bi-pencil"></i></button>
                            <button class="btn-icon danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr data-status="rejected" data-priority="p3">
                    <td data-label="ID"><span class="req-id">REQ-038</span></td>
                    <td data-label="Requirement">
                        <div class="req-title">Fitur export laporan ke PDF</div>
                        <div class="req-sub">Draft · 2 user story</div>
                    </td>
                    <td data-label="Modul">Reporting</td>
                    <td data-label="Prioritas"><span class="badge-soft badge-p3">P3 - Low</span></td>
                    <td data-label="Status"><span class="badge-soft badge-rejected">Rejected</span></td>
                    <td data-label="PIC Dev">
                        <div class="d-flex align-items-center gap-1 justify-content-end justify-content-md-start">
                            <span class="avatar-sm" style="background:#2e7dd1;">AR</span>
                            <small style="font-size:.78rem;">Ari</small>
                        </div>
                    </td>
                    <td data-label="Update">18 Okt 2026</td>
                    <td data-label="Aksi">
                        <div class="action-btns">
                            <button class="btn-icon"><i class="bi bi-eye"></i></button>
                            <button class="btn-icon"><i class="bi bi-pencil"></i></button>
                            <button class="btn-icon danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr data-status="draft" data-priority="p3">
                    <td data-label="ID"><span class="req-id">REQ-037</span></td>
                    <td data-label="Requirement">
                        <div class="req-title">Penyesuaian form verifikasi dokumen</div>
                        <div class="req-sub">Draft BRD · 2 user story</div>
                    </td>
                    <td data-label="Modul">Verifikasi</td>
                    <td data-label="Prioritas"><span class="badge-soft badge-p3">P3 - Low</span></td>
                    <td data-label="Status"><span class="badge-soft badge-draft">Draft</span></td>
                    <td data-label="PIC Dev">
                        <div class="d-flex align-items-center gap-1 justify-content-end justify-content-md-start">
                            <span class="avatar-sm" style="background:#1e8e5a;">BS</span>
                            <small style="font-size:.78rem;">Budi</small>
                        </div>
                    </td>
                    <td data-label="Update">17 Okt 2026</td>
                    <td data-label="Aksi">
                        <div class="action-btns">
                            <button class="btn-icon"><i class="bi bi-eye"></i></button>
                            <button class="btn-icon"><i class="bi bi-pencil"></i></button>
                            <button class="btn-icon danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex flex-wrap justify-content-between align-items-center mt-3 gap-2">
        <small class="text-muted" style="font-size:.78rem;">Menampilkan 1–6 dari 42 requirement</small>
        <nav>
            <ul class="pagination pagination-corp mb-0">
                <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- ===== MODAL: Requirement Baru ===== -->
<!-- ===== MODAL: Requirement Baru ===== -->
<div class="modal fade" id="modalReq" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-plus-circle me-2"></i>Requirement Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">

                    <!-- ID (Readonly) -->
                    <div class="col-md-6">
                        <label class="form-label">ID Requirement</label>
                        <input type="text" class="form-control" id="reqId" value="REQ-043" readonly>
                    </div>

                    <!-- Modul (Wajib) -->
                    <div class="col-md-6">
                        <label class="form-label">Modul <span class="text-danger">*</span></label>
                        <select class="form-select" id="reqModul" required>
                            <option value="">Pilih modul...</option>
                            <option>Core Leasing</option>
                            <option>Pengajuan Kredit</option>
                            <option>Verifikasi</option>
                            <option>Kontrak</option>
                            <option>Penagihan</option>
                            <option>Reporting</option>
                        </select>
                        <!-- INI YANG KURANG -->
                        <div class="invalid-feedback">Modul wajib dipilih.</div>
                    </div>

                    <!-- Judul (Wajib) -->
                    <div class="col-12">
                        <label class="form-label">Judul Requirement <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="reqJudul"
                            placeholder="Contoh: Validasi otomatis dokumen pengajuan kredit" required minlength="5"
                            maxlength="200">
                        <!-- INI YANG KURANG -->
                        <div class="invalid-feedback">Judul wajib diisi (min. 5 karakter).</div>
                    </div>

                    <!-- Prioritas (Wajib) -->
                    <div class="col-md-6">
                        <label class="form-label">Prioritas <span class="text-danger">*</span></label>
                        <select class="form-select" id="reqPrioritas" required>
                            <option value="">Pilih prioritas...</option>
                            <option value="p1">P1 - High</option>
                            <option value="p2">P2 - Medium</option>
                            <option value="p3">P3 - Low</option>
                        </select>
                        <!-- INI YANG KURANG -->
                        <div class="invalid-feedback">Prioritas wajib dipilih.</div>
                    </div>

                    <!-- PIC (Opsional) -->
                    <div class="col-md-6">
                        <label class="form-label">PIC Developer</label>
                        <select class="form-select" id="reqPic">
                            <option value="">Belum ditentukan</option>
                            <option value="ari">Ari</option>
                            <option value="budi">Budi</option>
                            <option value="citra">Citra</option>
                            <option value="dwi">Dwi</option>
                        </select>
                    </div>

                    <!-- Deskripsi (Wajib) -->
                    <div class="col-12">
                        <label class="form-label">Deskripsi / User Story <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="reqDeskripsi" rows="4" required minlength="10"
                            placeholder="Sebagai [role], saya ingin [fitur] sehingga [manfaat]..."></textarea>
                        <!-- INI YANG KURANG -->
                        <div class="invalid-feedback">Deskripsi wajib diisi (min. 10 karakter).</div>
                    </div>

                    <!-- Lampiran (Opsional) -->
                    <div class="col-12">
                        <label class="form-label">Lampiran (BRD/FSD)</label>
                        <input type="file" class="form-control" id="reqFile" accept=".pdf,.doc,.docx,.xls,.xlsx">
                        <small class="text-muted" style="font-size:.75rem;">Format: PDF, DOCX, XLSX (maks 10MB)</small>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal" style="font-size:.85rem;">Batal</button>
                <button class="btn-corp" id="btnSimpanReq">
                    <i class="bi bi-check-lg"></i> Simpan Requirement
                </button>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('layouts/footer', [
    'page_js' => 'requirement'
]);
?>