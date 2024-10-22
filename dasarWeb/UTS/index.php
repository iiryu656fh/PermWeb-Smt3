<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tugas UTS: Web Statis</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css" />

  <script>
    function hitungMakanan() {
      // Ambil nilai berat badan dari input
      var beratBadan = document.getElementById("beratBadan").value;

      // Validasi input
      if (beratBadan === "" || beratBadan <= 0) {
        alert("Masukkan berat badan kucing yang benar.");
        return;
      }

      // Perhitungan jumlah makanan kering
      var makananMinimal = 30 * beratBadan;
      var makananMaksimal = 40 * beratBadan;

      // Tampilkan hasil
      document.getElementById("hasil").innerHTML =
        "Kucing dengan berat " + beratBadan + " kg memerlukan antara " + makananMinimal + " hingga " + makananMaksimal + " gram makanan kering per hari.";
    }

    function kirimPesan(event) {
      event.preventDefault(); // Mencegah reload halaman setelah submit

      // Ambil nilai dari form
      var nama = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var pesan = document.getElementById("message").value;

      document.getElementById("hasilPesan").innerHTML =
        "<div class='alert alert-success mt-3'>Pesan terkirim! Terima kasih, " + nama + ".</div>";

      // Reset form setelah submit
      document.getElementById("contactForm").reset();
    }

    function showSection(sectionId) {
      // Sembunyikan semua section
      var sections = document.querySelectorAll("section");
      sections.forEach(function(section) {
        section.style.display = "none";
      });

      // Tampilkan section yang dipilih
      document.getElementById(sectionId).style.display = "block";
    }

    // Menampilkan section pertama saat halaman dimuat
    window.onload = function() {
      showSection('about');
    };
  </script>
</head>

<body>
  <header class="bg-orange text-center p-1 fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand fw-bold" href="#">Dunia Kucing</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav"> <!-- untuk mengkontainer -->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="showSection('about')">Tentang Kucing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="showSection('gallery')">Galeri Kucing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="showSection('hitung')">Hitung Makanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="showSection('contact')">Kontak</a>
          </li>

        </ul>
      </div>
    </nav>
  </header>


  <main class="container mt-5 pt-5"> <!-- konten utama -->
    <section id="about">
      <div class="text-center">
        <h1 class="display-4">Selamat Datang di Dunia Kucing!</h1>
        <p class="lead">Jelajahi tentang kucing disini!</p>
        <img src="images/kucing.png" alt="Kucing" style="max-width: 400px" />
        <h2>Tentang Kucing</h2>
        <p>
          Kucing, atau dalam bahasa Latin disebut <i>Felis catus</i>, adalah salah satu hewan peliharaan yang paling populer di dunia. Dengan kepribadian yang unik dan penampilan yang menggemaskan, kucing telah menjadi teman setia bagi banyak orang.
        </p>
        <p>
          Kucing memiliki berbagai ras dengan karakteristik fisik dan perilaku yang berbeda. Beberapa ras terkenal seperti <b>Persian</b>, <b>Siamese</b>, dan <b>Maine Coon</b>, masing-masing memiliki keunikan tersendiri.
        </p>
        <p>
          Salah satu hal menarik tentang kucing adalah kemampuan mereka untuk menjaga kebersihan diri. Selain itu, kucing juga terkenal dengan insting berburu mereka, yang membuatnya sangat baik dalam mengontrol populasi hama di sekitar rumah.
        </p>
        <p>
          Memelihara kucing memiliki banyak manfaat, baik secara emosional maupun kesehatan. Kucing dapat memberikan kenyamanan dan mengurangi stres bagi pemiliknya. Penelitian menunjukkan bahwa memiliki kucing dapat membantu menurunkan risiko penyakit jantung dan meningkatkan kesehatan mental.
        </p>
        <p>
          Kucing adalah hewan yang sangat menyenangkan untuk dipelihara. Dengan perawatan yang baik dan kasih sayang, kucing dapat menjadi anggota keluarga yang berharga.
        </p>
      </div>
    </section>

    <section id="gallery">
      <h2>Galeri Kucing</h2>
      <div class="row">
        <?php
        $cats = array(
          array(
            "Kucing Persia","images/kucing_persia.jpg","Kucing Persia dikenal dengan wajah datar dan bulu panjangnya yang indah. Mereka memiliki sifat lembut dan ramah.",
            "8 hingga 12 pon (3,5 hingga 5,5 kg)","11 hingga 15 inci (28 hingga 38 cm)","16 hingga 20 tahun","Panjang dan mewah",
            "⭐⭐⭐⭐⭐","⭐⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐⭐⭐","⭐","⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐","⭐⭐⭐"
          ),
          array(
            "Kucing Maine Coon","images/kucing_maine_coon.jpg","Maine Coon adalah kucing besar dengan kepribadian baik, sangat cocok untuk keluarga.","13 hingga 18 pon (6 hingga 8 kg)",
            "Dapat mencapai 16 inci (40 cm)","hingga 15 tahun","Bermantel bulu panjang","⭐⭐⭐⭐⭐","⭐⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐⭐⭐","⭐","⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐","⭐⭐⭐"
          ),
          array(
            "Kucing Siamese","images/kucing_siamese.jpg","Kucing Siam aktif dan suka berinteraksi dengan pemiliknya, serta memiliki bulu khas.","8 hingga 12 pon (3,5 hingga 5,5 kg)",
            "8 hingga 10 inci (20 hingga 25 cm)","15 hingga 20 tahun","Pendek dan padat",
            "⭐⭐⭐⭐⭐","⭐⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐⭐⭐","⭐","⭐⭐⭐⭐","⭐⭐⭐⭐","⭐⭐⭐","⭐⭐⭐"
          )
        );

        foreach ($cats as $index => $cat): ?>
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="<?= $cat[1] ?>" alt="<?= $cat[0] ?>" class="card-img-top" />
              <div class="card-body">
                <h5 class="card-title"><?= $cat[0] ?></h5>
                <p><?= $cat[2] ?></p>
                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#details_<?= $index ?>">Lihat Detail</button>
                <div class="collapse" id="details_<?= $index ?>">
                  <div class="card card-body mt-3">
                    <b>Petunjuk Utama:</b><br>
                    Berat: <?= $cat[3] ?><br>
                    Tinggi: <?= $cat[4] ?><br>
                    Umur: <?= $cat[5] ?><br>
                    Mantel bulu: <?= $cat[6] ?><br><br>
                    <b>Rangking:</b><br>
                    Keramahan: <?= $cat[7] ?><br>
                    Adaptasi: <?= $cat[8] ?><br>
                    Perilaku terhadap hewan lain: <?= $cat[9] ?><br>
                    Perilaku terhadap manusia: <?= $cat[10] ?><br>
                    Keceriaan: <?= $cat[11] ?><br>
                    Kecenderungan obesitas: <?= $cat[12] ?><br>
                    Kesehatan: <?= $cat[13] ?><br>
                    Harapan hidup: <?= $cat[14] ?><br>
                    Mudah dilatih: <?= $cat[15] ?><br>
                    Disarankan untuk pemilik baru: <?= $cat[16] ?><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <br><br>
    <section id="hitung" class="mt-5">
      <div class="d-flex justify-content-center">
          <div class="card shadow p-4">
            <h3 class="text-center mb-3">Hitung Kebutuhan Makanan Kucing</h3>
            <form id="foodForm">
              <div class="mb-3">
                <label for="beratBadan" class="form-label">Berat Badan Kucing (kg)</label>
                <input type="number" class="form-control" id="beratBadan" placeholder="Masukkan berat badan kucing" min="0" step="0.1" required />
                <div class="invalid-feedback">Berat badan harus diisi dan lebih besar dari 0.</div>
              </div>
              <button type="button" class="btn btn-primary w-100" onclick="hitungMakanan()">Hitung Makanan</button>
            </form>

            <div id="hasil" class="mt-4 text-center"></div>
          </div>
        </div>
    </section>
    <br><br>

    <section id="contact" class="mt-5">
      <h3 class="text-center mb-4">Kontak Kami</h3>
      <div class="row justify-content-center">
          <form id="contactForm" onsubmit="kirimPesan(event)">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" name="name" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required />
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
          </form>
          <div id="hasilPesan"></div>
        </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-orange text-dark text-center py-2 mt-5">
    <p>&copy; 2024 DuniaKucing - Semua Hak Dilindungi</p>
  </footer>

</body>

</html>