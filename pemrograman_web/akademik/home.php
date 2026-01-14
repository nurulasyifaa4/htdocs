<?php
// JANGAN ada session_start() atau tag HTML/Body di sini
?>
<div class="container py-4">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0 text-center p-4">
                <div class="card-body">
                    <img src="https://ui-avatars.com/api/?name=<?= urlencode($_SESSION['nama_lengkap']); ?>&size=128&background=0D6EFD&color=fff" 
                         class="rounded-circle mb-3" alt="Foto Profil" width="100">
                    <h5 class="fw-bold mb-0">Selamat Datang,</h5>
                    <p class="text-muted"><?= $_SESSION['nama_lengkap']; ?></p>
                    <hr>
                    <div class="text-start small mb-3">
                        <p class="mb-1"><strong>Status:</strong> <span class="badge bg-success">Aktif</span></p>
                        <p class="mb-1"><strong>Program Studi:</strong> Teknologi Rekayasa Perangkat Lunak</p>
                    </div>
                    <div class="d-grid">
                        <a href="index.php?p=edit_profil" class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="bi bi-person-gear me-2"></i>Edit Profil
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body p-4">
                    <h1 class="display-6 fw-bold text-primary">Selamat Datang di SIAK</h1>
                    <p class="lead text-secondary">Sistem Informasi Akademik Mahasiswa</p>
                    <hr>
                    <p class="text-muted" style="text-align: justify;">
                        Silakan gunakan menu navigasi untuk mengelola data akademik Anda. Anda dapat mengubah informasi profil, melihat daftar mahasiswa, dan mengecek program studi melalui menu yang tersedia.
                    </p>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <i class="bi bi-book-half fs-1 text-primary"></i>
                        <div class="card-body"><h6 class="card-title">KRS Online</h6></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <i class="bi bi-file-earmark-bar-graph fs-1 text-success"></i>
                        <div class="card-body"><h6 class="card-title">Transkrip Nilai</h6></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <i class="bi bi-wallet2 fs-1 text-warning"></i>
                        <div class="card-body"><h6 class="card-title">Tagihan UKT</h6></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>