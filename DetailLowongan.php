<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Job Detail</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Main Content -->
    <main class="container py-5">
      <!-- Job Card -->
      <section class="mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="https://storage.googleapis.com/a1aa/image/db3855cb-02a6-4a37-57de-baa74494c8da.jpg" alt="Tokopedia logo" class="me-3" style="width: 40px; height: 40px; object-fit: contain;"/>
              <div>
                <h5 class="mb-1">Ecommerce Supervisor</h5>
                <p class="mb-0 text-muted small">Tokopedia - Malang, Jawa Timur</p>
              </div>
            </div>
            <div class="bg-primary text-white rounded p-3 mb-3 small">
              <p><i class="fas fa-dollar-sign me-2"></i>IDR 9.500.000 - 14.000.000/Bulan</p>
              <p><i class="fas fa-user-friends me-2"></i>Semua tipe disabilitas</p>
              <p><i class="fas fa-clock me-2"></i>Penuh Waktu - Kerja di kantor</p>
              <p><i class="fas fa-graduation-cap me-2"></i>Minimal Sarjana (S1)</p>
              <p><i class="fas fa-briefcase me-2"></i>3 - 5 tahun pengalaman</p>
            </div>
            <div class="d-flex justify-content-between">
              <button class="btn btn-outline-primary btn-sm"><i class="fas fa-share-alt me-1"></i>Bagikan</button>
              <button class="btn btn-outline-primary btn-sm"><i class="far fa-bookmark me-1"></i>Tandai</button>
              <button class="btn btn-warning btn-sm text-white fw-semibold">Lamar</button>
            </div>
          </div>
        </div>
      </section>

      <!-- Detail Section -->
      <section class="mb-5">
        <h4 class="fw-bold mb-4">Detail</h4>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="bg-primary text-white p-3 rounded shadow-sm small">
              <h6 class="fw-semibold">Tanggung Jawab</h6>
              <ol class="mb-0 ps-3">
                <li>Pantau operasional harian</li>
                <li>Koordinasi antar tim</li>
                <li>Analisis data penjualan</li>
                <li>Tingkatkan konversi dan pengalaman pelanggan</li>
                <li>Buat laporan dan strategi</li>
              </ol>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-primary text-white p-3 rounded shadow-sm small">
              <h6 class="fw-semibold">Aktivitas Utama</h6>
              <ol class="mb-0 ps-3">
                <li>Kelola katalog & harga</li>
                <li>Rancang promosi</li>
                <li>Tinjau performa produk</li>
                <li>Tangapi feedback pelanggan</li>
                <li>Bangun relasi dengan mitra</li>
              </ol>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-primary text-white p-3 rounded shadow-sm small">
              <h6 class="fw-semibold">Persyaratan dan Kualifikasi</h6>
              <ol class="mb-0 ps-3">
                <li>S1 Manajemen/Bisnis terkait</li>
                <li>3-5 tahun pengalaman</li>
                <li>Mahir Excel & tools analitik</li>
                <li>Komunikatif & solutif</li>
                <li>Terbuka untuk semua disabilitas</li>
              </ol>
            </div>
          </div>
          <div class="col-md-6">
            <div class="bg-primary text-white p-3 rounded shadow-sm small">
              <h6 class="fw-semibold">Tunjangan dan Keuntungan</h6>
              <ol class="mb-0 ps-3">
                <li>Gaji + bonus</li>
                <li>Asuransi & BPJS</li>
                <li>Program pelatihan</li>
                <li>Fasilitas ramah disabilitas</li>
                <li>Cuti tahunan & cuti inklusif</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Skill dan Fasilitas Disabilitas -->
      <section class="mb-5 row g-4">
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="fw-bold mb-3">Skill</h5>
              <div class="d-flex flex-wrap gap-2">
                <span class="badge bg-primary">Manajemen tim</span>
                <span class="badge bg-primary">Analisis data</span>
                <span class="badge bg-primary">Komunikasi</span>
                <span class="badge bg-primary">Microsoft Excel</span>
                <span class="badge bg-primary">Negosiasi</span>
                <span class="badge bg-primary">Adaptabilitas</span>
                <span class="badge bg-primary">E-commerce platform</span>
                <span class="badge bg-primary">Google Analytics</span>
                <span class="badge bg-primary">Time management</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-primary text-white rounded p-4 shadow-sm">
            <h5 class="fw-bold mb-3">Fasilitas Disabilitas</h5>
            <ul class="mb-0 small ps-3">
              <li>Akses kursi roda</li>
              <li>Lift dan toilet ramah disabilitas</li>
              <li>Area kerja ergonomis</li>
              <li>Waktu kerja fleksibel</li>
              <li>Alat bantu kerja (jika diperlukan)</li>
              <li>Dukungan tim inklusi internal</li>
              <li>Rekan kerja terlatih inklusi</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Informasi Perusahaan -->
      <section class="mb-5">
        <h4 class="fw-bold mb-4">Informasi Perusahaan</h4>
        <div class="bg-primary text-white rounded p-4 d-flex flex-column flex-md-row align-items-center shadow-sm">
          <img src="https://storage.googleapis.com/a1aa/image/804e2cca-7414-4436-a3d1-6865035be9cf.jpg" class="me-md-4 mb-3 mb-md-0" alt="Tokopedia logo" style="width: 80px; height: 80px; object-fit: contain;"/>
          <div>
            <h6 class="fw-bold mb-1">Tokopedia</h6>
            <p class="mb-1">Tokopedia Care Malang – Malang, Jawa Timur</p>
            <p class="text-warning mb-3"><i class="fas fa-box me-2"></i>E-commerce / Teknologi Digital</p>
            <p class="mb-0 small">Tokopedia adalah salah satu platform e-commerce terbesar di Indonesia ...</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <button class="btn btn-warning text-white fw-semibold">Lamar</button>
        </div>
      </section>

      <!-- Lowongan Serupa -->
      <section class="mb-5">
        <h4 class="fw-bold mb-4">Lowongan Serupa</h4>
        <div class="row g-4">
          <!-- Repeat this col for each job -->
          <div class="col-md-4">
            <div class="card shadow-sm">
              <div class="card-body small">
                <h6 class="text-primary fw-semibold">Digital Marketing</h6>
                <ul class="mb-2 ps-3">
                  <li><i class="fas fa-user-tie me-1"></i>Keuangan dan Akuntansi</li>
                  <li><i class="fas fa-wheelchair me-1"></i>Semua Jenis Disabilitas</li>
                  <li><i class="fas fa-map-marker-alt me-1"></i>Malang, Jawa Timur</li>
                </ul>
                <div class="d-flex align-items-center mb-3">
                  <img src="https://storage.googleapis.com/a1aa/image/3cd290e9-0b86-4276-92d5-8eeadf3fbfd8.jpg" class="me-2" style="width: 20px; height: 20px; object-fit: contain;" alt="Telkom logo"/>
                  <span class="fw-semibold">Telkom Indonesia</span>
                </div>
                <button class="btn btn-outline-primary btn-sm">Selengkapnya</button>
              </div>
            </div>
          </div>
          <!-- Repeat end -->
        </div>
      </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>