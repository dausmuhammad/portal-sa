<?php
$this->load->view('layouts/header', [
    'page_title' => 'Dashboard' // Nanti manggil dashboard.css
]);
?>

<!-- ===== KONTEN DASHBOARD ===== -->
<div class="topbar">
    <div class="d-flex align-items-center gap-2">
        <button class="btn-hamburger" id="btnHamburger"><i class="bi bi-list"></i></button>
        <div>
            <h4>Dashboard</h4>
            <small class="text-muted d-none d-sm-block">Selamat datang kembali, Daus 👋</small>
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

<div class="d-flex gap-2 mb-4 flex-wrap">
    <button class="quick-btn"><i class="bi bi-plus-lg me-1"></i> Requirement Baru</button>
    <button class="quick-btn-outline"><i class="bi bi-arrow-repeat me-1"></i> Sync Jira Tim</button>
    <button class="quick-btn-outline"><i class="bi bi-upload me-1"></i> Import Excel</button>
    <button class="quick-btn-outline"><i class="bi bi-person-plus me-1"></i> Tambah Dev</button>
</div>

<div class="row g-3 mb-4">
    <div class="col-lg-3 col-6">
        <div class="stat-card">
            <div class="stat-icon blue"><i class="bi bi-file-earmark-text"></i></div>
            <div>
                <div class="stat-value">42</div>
                <div class="stat-label">Total Requirement</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="stat-card">
            <div class="stat-icon orange"><i class="bi bi-clock-history"></i></div>
            <div>
                <div class="stat-value">8</div>
                <div class="stat-label">Task Aktif (Tim)</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="stat-card">
            <div class="stat-icon green"><i class="bi bi-check2-circle"></i></div>
            <div>
                <div class="stat-value">5</div>
                <div class="stat-label">UAT Pending</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="stat-card">
            <div class="stat-icon red"><i class="bi bi-bug"></i></div>
            <div>
                <div class="stat-value">12</div>
                <div class="stat-label">Bug Open (Tim)</div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-3">
    <div class="col-lg-8">
        <div class="panel">
            <div class="panel-header">
                <h6><i class="bi bi-folder2-open me-2 text-primary"></i>Proyek Aktif & Developer</h6>
                <a href="#" style="font-size:.8rem;text-decoration:none;">Lihat semua</a>
            </div>
            <div class="table-responsive">
                <table class="table table-corp align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Nama Proyek</th>
                            <th>Modul</th>
                            <th>Developer</th>
                            <th>Status</th>
                            <th>Deadline</th>
                            <th>Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Nama Proyek"><strong>Revamp Pengajuan Kredit</strong></td>
                            <td data-label="Modul">Core Leasing</td>
                            <td data-label="Developer">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-stack">
                                        <span class="avatar-sm" style="background:#2e7dd1;">AR</span>
                                        <span class="avatar-sm" style="background:#1e8e5a;">BS</span>
                                    </div>
                                    <small class="text-muted" style="font-size:.75rem;">Ari, Budi</small>
                                </div>
                            </td>
                            <td data-label="Status"><span class="badge-soft badge-dev">Development</span></td>
                            <td data-label="Deadline">12 Nov 2026</td>
                            <td data-label="Progress" style="width:110px;">
                                <div class="progress w-100" style="height:6px;">
                                    <div class="progress-bar bg-warning" style="width:60%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Nama Proyek"><strong>Integrasi Payment Gateway</strong></td>
                            <td data-label="Modul">Penagihan</td>
                            <td data-label="Developer">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-stack"><span class="avatar-sm"
                                            style="background:#c77700;">CS</span></div>
                                    <small class="text-muted" style="font-size:.75rem;">Citra</small>
                                </div>
                            </td>
                            <td data-label="Status"><span class="badge-soft badge-uat">UAT</span></td>
                            <td data-label="Deadline">05 Nov 2026</td>
                            <td data-label="Progress">
                                <div class="progress w-100" style="height:6px;">
                                    <div class="progress-bar bg-success" style="width:85%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Nama Proyek"><strong>Digitalisasi Verifikasi Dokumen</strong></td>
                            <td data-label="Modul">Verifikasi</td>
                            <td data-label="Developer">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-stack">
                                        <span class="avatar-sm" style="background:#2e7dd1;">AR</span>
                                        <span class="avatar-sm" style="background:#5e35b1;">DP</span>
                                        <span class="avatar-sm" style="background:#1e8e5a;">BS</span>
                                    </div>
                                    <small class="text-muted" style="font-size:.75rem;">Ari, Dwi, Budi</small>
                                </div>
                            </td>
                            <td data-label="Status"><span class="badge-soft badge-analisis">Analisis</span></td>
                            <td data-label="Deadline">30 Nov 2026</td>
                            <td data-label="Progress">
                                <div class="progress w-100" style="height:6px;">
                                    <div class="progress-bar bg-primary" style="width:35%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Nama Proyek"><strong>Portal Nasabah Leasing</strong></td>
                            <td data-label="Modul">Customer</td>
                            <td data-label="Developer">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-stack">
                                        <span class="avatar-sm" style="background:#c77700;">CS</span>
                                        <span class="avatar-sm" style="background:#5e35b1;">DP</span>
                                    </div>
                                    <small class="text-muted" style="font-size:.75rem;">Citra, Dwi</small>
                                </div>
                            </td>
                            <td data-label="Status"><span class="badge-soft badge-live">Live</span></td>
                            <td data-label="Deadline">—</td>
                            <td data-label="Progress">
                                <div class="progress w-100" style="height:6px;">
                                    <div class="progress-bar" style="width:100%;background:#5e35b1"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="panel">
            <div class="panel-header">
                <h6><i class="bi bi-people me-2" style="color:#2e7dd1;"></i>Jira — Tim</h6>
                <select class="filter-select" id="jiraFilter">
                    <option value="all">Semua Tim</option>
                    <option value="ari">Ari</option>
                    <option value="budi">Budi</option>
                    <option value="citra">Citra</option>
                    <option value="dwi">Dwi</option>
                </select>
            </div>
            <div id="jiraList">
                <div class="jira-item" data-dev="ari">
                    <div class="jira-info">
                        <span class="jira-key">LEA-412</span>
                        <span class="jira-title">Fix validasi form pengajuan</span>
                    </div>
                    <div class="jira-status">
                        <span class="avatar-sm" style="background:#2e7dd1;">AR</span>
                        <span class="badge-soft badge-dev">In Progress</span>
                    </div>
                </div>
                <div class="jira-item" data-dev="budi">
                    <div class="jira-info">
                        <span class="jira-key">LEA-408</span>
                        <span class="jira-title">Mapping field API penagihan</span>
                    </div>
                    <div class="jira-status">
                        <span class="avatar-sm" style="background:#1e8e5a;">BS</span>
                        <span class="badge-soft badge-analisis">To Do</span>
                    </div>
                </div>
                <div class="jira-item" data-dev="citra">
                    <div class="jira-info">
                        <span class="jira-key">LEA-405</span>
                        <span class="jira-title">UAT feedback — modul kontrak</span>
                    </div>
                    <div class="jira-status">
                        <span class="avatar-sm" style="background:#c77700;">CS</span>
                        <span class="badge-soft badge-uat">Review</span>
                    </div>
                </div>
                <div class="jira-item" data-dev="dwi">
                    <div class="jira-info">
                        <span class="jira-key">LEA-401</span>
                        <span class="jira-title">Review BRD verifikasi dokumen</span>
                    </div>
                    <div class="jira-status">
                        <span class="avatar-sm" style="background:#5e35b1;">DP</span>
                        <span class="badge-soft badge-dev">In Progress</span>
                    </div>
                </div>
                <div class="jira-item" data-dev="ari">
                    <div class="jira-info">
                        <span class="jira-key">LEA-399</span>
                        <span class="jira-title">Refactor modul kalkulasi bunga</span>
                    </div>
                    <div class="jira-status">
                        <span class="avatar-sm" style="background:#2e7dd1;">AR</span>
                        <span class="badge-soft badge-dev">In Progress</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-lg-4 col-md-6">
        <div class="panel">
            <div class="panel-header">
                <h6><i class="bi bi-bar-chart-line me-2 text-primary"></i>Utilisasi Tim</h6>
                <small class="text-muted" style="font-size:.72rem;">Proyek aktif</small>
            </div>
            <div class="util-row">
                <div class="avatar-sm" style="background:#2e7dd1;">AR</div>
                <span class="name">Ari</span>
                <div class="progress">
                    <div class="progress-bar bg-primary" style="width:90%"></div>
                </div>
                <span class="pct">90%</span>
            </div>
            <div class="util-row">
                <div class="avatar-sm" style="background:#1e8e5a;">BS</div>
                <span class="name">Budi</span>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width:70%"></div>
                </div>
                <span class="pct">70%</span>
            </div>
            <div class="util-row">
                <div class="avatar-sm" style="background:#c77700;">CS</div>
                <span class="name">Citra</span>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width:55%"></div>
                </div>
                <span class="pct">55%</span>
            </div>
            <div class="util-row">
                <div class="avatar-sm" style="background:#5e35b1;">DP</div>
                <span class="name">Dwi</span>
                <div class="progress">
                    <div class="progress-bar" style="width:40%;background:#5e35b1;"></div>
                </div>
                <span class="pct">40%</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between" style="font-size:.78rem;color:#6c7a89;">
                <span><i class="bi bi-people me-1"></i>4 Dev terdaftar</span>
                <a href="<?= base_url('tim') ?>" style="text-decoration:none;font-size:.78rem;">Kelola tim →</a>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="panel">
            <div class="panel-header">
                <h6><i class="bi bi-journal-text me-2 text-primary"></i>Meeting Terakhir</h6>
                <a href="<?= base_url('meeting') ?>" style="font-size:.8rem;text-decoration:none;">Lihat</a>
            </div>
            <div class="meeting-item">
                <div class="title">Review BRD — Digitalisasi Verifikasi</div>
                <div class="meta"><i class="bi bi-calendar3 me-1"></i>24 Okt 2026 · 3 action item</div>
            </div>
            <div class="meeting-item">
                <div class="title">Sprint Planning — Payment Gateway</div>
                <div class="meta"><i class="bi bi-calendar3 me-1"></i>22 Okt 2026 · 5 action item</div>
            </div>
            <div class="meeting-item">
                <div class="title">Koordinasi Vendor — Core Leasing</div>
                <div class="meta"><i class="bi bi-calendar3 me-1"></i>20 Okt 2026 · 2 action item</div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="panel">
            <div class="panel-header">
                <h6><i class="bi bi-lightning-charge me-2 text-primary"></i>Quick Tools</h6>
            </div>
            <div class="row g-2">
                <div class="col-6"><button class="quick-btn-outline w-100 text-start"><i
                            class="bi bi-file-earmark-plus me-1"></i> Template BRD</button></div>
                <div class="col-6"><button class="quick-btn-outline w-100 text-start"><i
                            class="bi bi-arrow-left-right me-1"></i> Story → Use Case</button></div>
                <div class="col-6"><button class="quick-btn-outline w-100 text-start"><i
                            class="bi bi-code-square me-1"></i> Snippet Manager</button></div>
                <div class="col-6"><button class="quick-btn-outline w-100 text-start"><i
                            class="bi bi-file-earmark-arrow-down me-1"></i> Export Excel</button></div>
            </div>
            <hr>
            <div class="d-flex justify-content-between" style="font-size:.82rem;color:#6c7a89;">
                <span><i class="bi bi-database me-1"></i>MySQL</span>
                <span><i class="bi bi-cloud-check me-1"></i>Jira: Connected</span>
            </div>
        </div>
    </div>
</div>

<?php

$this->load->view('layouts/footer');
?>