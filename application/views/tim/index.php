<?php 
$this->load->view('layouts/header', ['page_title' => 'Tim & Developer']); 
?>

<!-- ===== KONTEN TIM & DEVELOPER ===== -->
<div class="topbar">
  <div class="d-flex align-items-center gap-2">
    <button class="btn-hamburger" id="btnHamburger"><i class="bi bi-list"></i></button>
    <div>
      <h4>Tim & Developer</h4>
      <div class="breadcrumb-mini d-none d-sm-block">
        <a href="<?= base_url('dashboard') ?>">Dashboard</a> / Tim & Developer
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
  <div class="item"><div class="val" style="color:#1a4f8b;">6</div><div class="lbl">Total Dev</div></div>
  <div class="item"><div class="val" style="color:#1e8e5a;">5</div><div class="lbl">Aktif</div></div>
  <div class="item"><div class="val" style="color:#c77700;">1</div><div class="lbl">Nonaktif</div></div>
  <div class="item"><div class="val" style="color:#2e7dd1;">5</div><div class="lbl">Jira Mapped</div></div>
  <div class="item"><div class="val" style="color:#c0392b;">1</div><div class="lbl">Belum Mapped</div></div>
</div>

<div class="panel">
  <div class="panel-header">
    <h6><i class="bi bi-people me-2 text-primary"></i>Anggota Tim</h6>
    <small class="text-muted" style="font-size:.75rem;">Klik card untuk edit</small>
  </div>

  <div class="toolbar">
    <div class="search-box">
      <i class="bi bi-search"></i>
      <input type="text" class="form-control" id="searchDev" placeholder="Cari nama atau role...">
    </div>
    <select class="form-select" id="filterDevStatus" style="max-width:160px;">
      <option value="">Semua Status</option>
      <option value="active">Aktif</option>
      <option value="inactive">Nonaktif</option>
    </select>
    <select class="form-select" id="filterJira" style="max-width:170px;">
      <option value="">Semua Jira</option>
      <option value="mapped">Sudah Mapped</option>
      <option value="unmapped">Belum Mapped</option>
    </select>
    <button class="btn-corp" data-bs-toggle="modal" data-bs-target="#modalDev">
      <i class="bi bi-person-plus"></i> Tambah Dev
    </button>
  </div>

  <div class="dev-grid" id="devGrid">
    <!-- Card Ari -->
    <div class="dev-card" data-name="ari" data-status="active" data-jira="mapped">
      <div class="dev-menu">
        <button class="btn-icon" title="Edit" data-bs-toggle="modal" data-bs-target="#modalDev"><i class="bi bi-pencil"></i></button>
        <button class="btn-icon danger" title="Hapus"><i class="bi bi-trash"></i></button>
      </div>
      <div class="dev-top">
        <div class="avatar-md" style="background:#2e7dd1;">AR</div>
        <div class="dev-info">
          <div class="dev-name">Ari Ramadhan</div>
          <div class="dev-role"><span class="status-dot active"></span>Backend Developer</div>
        </div>
      </div>
      <div class="dev-meta">
        <div class="row-item"><i class="bi bi-bug"></i><span>Jira: <span class="jira-badge">ari.ramadhan</span></span></div>
        <div class="row-item"><i class="bi bi-folder2-open"></i><span>3 proyek aktif</span></div>
      </div>
      <div class="cap-bar-wrap">
        <div class="cap-label"><span>Utilisasi</span><span>90%</span></div>
        <div class="progress"><div class="progress-bar" style="width:90%;background:#2e7dd1;"></div></div>
      </div>
    </div>

    <!-- Card Budi -->
    <div class="dev-card" data-name="budi" data-status="active" data-jira="mapped">
      <div class="dev-menu">
        <button class="btn-icon" title="Edit" data-bs-toggle="modal" data-bs-target="#modalDev"><i class="bi bi-pencil"></i></button>
        <button class="btn-icon danger" title="Hapus"><i class="bi bi-trash"></i></button>
      </div>
      <div class="dev-top">
        <div class="avatar-md" style="background:#1e8e5a;">BS</div>
        <div class="dev-info">
          <div class="dev-name">Budi Santoso</div>
          <div class="dev-role"><span class="status-dot active"></span>Fullstack Developer</div>
        </div>
      </div>
      <div class="dev-meta">
        <div class="row-item"><i class="bi bi-bug"></i><span>Jira: <span class="jira-badge">budi.santoso</span></span></div>
        <div class="row-item"><i class="bi bi-folder2-open"></i><span>2 proyek aktif</span></div>
      </div>
      <div class="cap-bar-wrap">
        <div class="cap-label"><span>Utilisasi</span><span>70%</span></div>
        <div class="progress"><div class="progress-bar bg-success" style="width:70%;"></div></div>
      </div>
    </div>
  </div>
</div>

<!-- ===== MODAL: Tambah / Edit Dev ===== -->
<div class="modal fade" id="modalDev" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="bi bi-person-plus me-2"></i>Tambah / Edit Developer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="inpNama" required minlength="3" placeholder="Contoh: Ari Ramadhan">
            <div class="invalid-feedback">Nama wajib diisi (min. 3 karakter).</div>
          </div>
          <div class="col-md-6">
            <label class="form-label">Role <span class="text-danger">*</span></label>
            <select class="form-select" id="inpRole" required>
              <option value="">Pilih role...</option>
              <option>Backend Developer</option>
              <option>Frontend Developer</option>
              <option>Fullstack Developer</option>
              <option>QA Engineer</option>
            </select>
            <div class="invalid-feedback">Role wajib dipilih.</div>
          </div>

          <div class="col-md-4">
            <label class="form-label">Inisial Avatar <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="inpInisial" required pattern="[A-Za-z]{1,2}" placeholder="AR" maxlength="2">
            <div class="invalid-feedback">Inisial 1–2 huruf (A–Z).</div>
          </div>
          <div class="col-md-8">
            <label class="form-label">Warna Avatar <span class="text-danger">*</span></label>
            <div class="color-picker-row" id="colorPicker">
              <div class="color-swatch selected" style="background:#2e7dd1;" data-color="#2e7dd1"></div>
              <div class="color-swatch" style="background:#1e8e5a;" data-color="#1e8e5a"></div>
              <div class="color-swatch" style="background:#c77700;" data-color="#c77700"></div>
              <div class="color-swatch" style="background:#5e35b1;" data-color="#5e35b1"></div>
            </div>
            <input type="hidden" id="inpWarna" value="#2e7dd1">
          </div>

          <div class="col-md-6">
            <label class="form-label">Jira Account ID</label>
            <input type="text" class="form-control" id="inpJira" placeholder="ari.ramadhan">
          </div>
          <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="inpEmail" placeholder="ari@perusahaan.com">
            <div class="invalid-feedback">Format email tidak valid.</div>
          </div>

          <div class="col-md-6">
            <label class="form-label">Kapasitas Maksimal (%) <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="inpKapasitas" value="100" min="10" max="100" required>
            <div class="invalid-feedback">Nilai 10–100.</div>
          </div>
          <div class="col-md-6">
            <label class="form-label">Status <span class="text-danger">*</span></label>
            <select class="form-select" id="inpStatus" required>
              <option value="active" selected>Aktif</option>
              <option value="inactive">Nonaktif</option>
            </select>
          </div>

          <!-- Multi-select Proyek -->
          <div class="col-12">
            <label class="form-label">Proyek yang Di-handle <span class="text-danger">*</span></label>
            <div class="dropdown multi-select" id="projectMultiSelect">
              <button class="multi-select-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="ms-placeholder">Pilih proyek...</span>
                <span class="ms-chips"></span>
                <i class="bi bi-chevron-down ms-arrow"></i>
              </button>
              <div class="dropdown-menu w-100 p-2">
                <div class="ms-search-wrap mb-1">
                  <i class="bi bi-search"></i>
                  <input type="text" class="form-control form-control-sm ms-search" placeholder="Cari proyek...">
                </div>
                <div class="ms-actions d-flex justify-content-between px-2 pb-1">
                  <button type="button" class="btn-link-sm ms-select-all">Pilih semua</button>
                  <button type="button" class="btn-link-sm ms-clear-all">Hapus semua</button>
                </div>
                <div class="ms-options">
                  <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="1" data-label="Revamp Pengajuan Kredit"><span>Revamp Pengajuan Kredit</span></label>
                  <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="2" data-label="Integrasi Payment Gateway"><span>Integrasi Payment Gateway</span></label>
                  <label class="dropdown-item ms-option"><input class="form-check-input" type="checkbox" value="3" data-label="Digitalisasi Verifikasi"><span>Digitalisasi Verifikasi</span></label>
                </div>
              </div>
            </div>
            <div class="invalid-feedback d-block" id="proyekError" style="display:none;">Pilih minimal 1 proyek.</div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-light" data-bs-dismiss="modal" style="font-size:.85rem;">Batal</button>
        <button class="btn-corp" id="btnSimpanDev"><i class="bi bi-check-lg"></i> Simpan Developer</button>
      </div>
    </div>
  </div>
</div>

<?php 
// Panggil footer dengan parameter page_js
$this->load->view('layouts/footer', ['page_js' => 'tim']); 
?>