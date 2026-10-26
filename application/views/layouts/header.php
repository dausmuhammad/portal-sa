<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal SA — <?= isset($page_title) ? $page_title : 'Dashboard' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Load CSS Global -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Load CSS Spesifik Halaman (jika ada) -->
    <!-- <?php if (isset($page_css)): ?>
        <link rel="stylesheet" href="<?= base_url('assets/css/' . $page_css . '.css') ?>">
    <?php endif; ?> -->
</head>

<body>

    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>

    <!-- ===== SIDEBAR ===== -->
    <div class="sidebar" id="sidebar">
        <div class="brand"><i class="bi bi-diagram-3-fill"></i> Portal SA</div>
        <div class="nav-section">Utama</div>
        <ul class="nav flex-column">
            <li><a class="nav-link <?= ($page_title == 'Dashboard') ? 'active' : '' ?>"
                    href="<?= base_url('dashboard') ?>"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
            <li><a class="nav-link <?= ($page_title == 'Requirement') ? 'active' : '' ?>"
                    href="<?= base_url('requirement') ?>"><i class="bi bi-file-earmark-text"></i> Requirement</a></li>
            <li><a class="nav-link <?= ($page_title == 'Meeting Notes') ? 'active' : '' ?>"
                    href="<?= base_url('meeting') ?>"><i class="bi bi-journal-text"></i> Meeting Notes</a></li>
        </ul>
        <div class="nav-section">Proyek</div>
        <ul class="nav flex-column">
            <li><a class="nav-link" href="#"><i class="bi bi-diagram-2"></i> Process Modeling</a></li>
            <li><a class="nav-link" href="#"><i class="bi bi-check2-square"></i> Testing / UAT</a></li>
            <li><a class="nav-link" href="#"><i class="bi bi-hdd-network"></i> Sistem & Integrasi</a></li>
        </ul>
        <div class="nav-section">Integrasi</div>
        <ul class="nav flex-column">
            <li><a class="nav-link" href="#"><i class="bi bi-bug"></i> Jira Sync</a></li>
            <li><a class="nav-link" href="#"><i class="bi bi-file-earmark-excel"></i> Excel Import</a></li>
        </ul>
        <div class="nav-section">Tim</div>
        <ul class="nav flex-column">
            <li><a class="nav-link <?= ($page_title == 'Tim & Developer') ? 'active' : '' ?>"
                    href="<?= base_url('tim') ?>"><i class="bi bi-people"></i> Tim & Developer</a></li>
        </ul>
        <div class="nav-section">Personal</div>
        <ul class="nav flex-column">
            <li><a class="nav-link" href="#"><i class="bi bi-lightbulb"></i> Freelance / R&D</a></li>
            <li><a class="nav-link" href="#"><i class="bi bi-gear"></i> Pengaturan</a></li>
        </ul>
    </div>

    <!-- ===== MAIN CONTENT WRAPPER ===== -->
    <div class="main-content" id="mainContent">