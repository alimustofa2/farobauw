<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM ti2b_portofolio";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio</title>
  <link rel="stylesheet" href="index.css">
    
<style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>

</head>
<body>

    <header>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Tentang Saya</a></li>
        <li><a href="#">Portofolio</a>Portofolio</li>
        <li class="dropdown">
          <a href="#">Lainnya</a>
          <div class="dropdown-content">
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
            <a href="#">Tiktok</a>
          </div>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="intro">
      <div class="foto">
        <div class="foto-kalian"><img src="faro.jpeg" alt="" width="150px" height="150px"></div>
      </div>
      <div class="deskripsi">
        <h1>Halo, Nama Saya Alfarozi Bauw</h1>
        <p>Seorang <span class="garis-bawah">programmer</span></p>
      </div>
    </section>

  <main>
    <section class="tentang-saya" style="max-width: 1000px; margin: 0 auto; padding: 20px; display: flex; align-items: center; gap: 30px;">
        <div style="flex: 1;">
            <h1 style="text-align: left;">Tentang Saya</h1>
            <p style="text-align: left;">Halo! Nama saya Alfarozi Bauw. Saya berusia 18 tahun dan saat ini sedang menekuni dunia teknologi dengan penuh semangat. Saya memiliki cita-cita untuk menjadi seorang programmer profesional di masa depan.</p>
            <p style="text-align: left;">Sejak kecil, saya selalu tertarik pada komputer dan bagaimana teknologi bisa membantu memecahkan berbagai masalah. Ketertarikan itu semakin kuat ketika saya mulai belajar tentang pemrograman, dari bahasa dasar hingga pengembangan aplikasi. Saya percaya bahwa dengan keterampilan ini, saya bisa berkontribusi untuk menciptakan solusi yang bermanfaat bagi banyak orang.</p>
            <p style="text-align: left;">Saya senang belajar bahasa pemrograman seperti Python dan JavaScript, serta mencoba membangun aplikasi sederhana yang bisa saya bagikan dengan teman-teman saya. Selain itu, saya juga suka mencari tahu tentang teknologi terbaru di dunia pemrograman dan selalu ingin menambah wawasan saya.</p>
            <p style="text-align: left;">Saya percaya bahwa menjadi programmer bukan hanya tentang menulis kode, tetapi juga tentang berpikir kreatif, bekerja sama dalam tim, dan memiliki ketekunan dalam menghadapi tantangan. Saya ingin menjadi seseorang yang bisa menginspirasi dan membantu orang lain melalui karya-karya saya di bidang teknologi.</p>
            <p style="text-align: left;">Dengan semangat belajar yang tinggi, saya siap melangkah lebih jauh untuk mewujudkan impian saya sebagai programmer.</p>
        </div>
        <div style="flex: 1; text-align: right;">
            <img src="foto2.jpeg" alt="Alfarozi Bauw" style="max-width: 300px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        </div>
     </section>

     </section>     
    
    <h2>Portofolio</h2>
        <!-- Form Tambah Data -->
    <h3>Tambah Data Mahasiswa</h3>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>id_portofolio:</label>
            <input type="text" name="id_portofolio" class="form-control" required>
        </div>
        <div class="form-group">
            <label>nama_kegiatan:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>waktu_kegiatan:</label>
            <input type="date" id="waktu_kegiatan" name="waktu_kegiatan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <table>
        <tr>
            <th>id_portofolio</th>
            <th>nama_kegiatan</th>
            <th>waktu_kegiatan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id_portofolio']; ?></td>
            <td><?php echo $row['nama_kegiatan']; ?></td>
            <td><?php echo $row['waktu_kegiatan']; ?></td>
            <td>
                <a href="hapus.php?id_portofolio=<?php echo $row['id_portofolio']; ?>" 
                   class="delete-btn" 
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

   </main><head>
    <body>
          
      </header>
  
      <section class="opini">
            <h2>Opini :</h2>
            <div class="grid-opini">
              <div class="item-opini">
                <a href="https://unugiri.ac.id/" target="_blank"><img src="unugiri.jpeg" alt="Opini 1"><p>"kampus Universitas Nahdlatul ulama sunan giri bojonegoro"</p></a>
              </div>
              <div class="item-opini">
                <a href="https://rencanamu.id/cari-jurusan/komputer-teknologi/teknik-informatika" target="_blank"><img src="Ti.jpg" alt="Opini 2"><p>"Teknik Infomatika"</p></a>
              </div>
              <div class="item-opini">
                <a href="https://fst.utnd.ac.id/" target="_blank"><img src="fst.jpg" alt="opini 3"><p>"Fakultas Sains dan Teknologi"</p></a>
              </div>
              <div class="item-opini">
                <a href="https://keluyuran.com/tempat-wisata-di-fakfak/" target="_blank"><img src="fakfak.jpg" alt="Opini 4"><p>"Pariwisata Kab.Fakfak"</p></a> 
              </div>
              <div class="item-opini">
                <a href="https://laligaexpert.com/2025/04/17/barcelona-schedule-key-dates/" target="_blank"><img src="barca.jpeg" alt="opini 5"><p>"Barcelona"</p></a>
              </div>
              <div class="item-opini">
                <a href="https://id.wikipedia.org/wiki/Tim_nasional_sepak_bola_Brasil" target="_blank"><img src="timnas brazil.jpg" alt="opini 6"><p>"Timnas Brazil"</p></a>
              </div>
            </div>
      
      </section>
      <title>Hubungi Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        input, textarea, button {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
        .map-container {
            width: 400px;
            height: 300px;
            border: 2px solid black;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>
<body>
    
  <title>Hubungi Saya</title>
  <style>
      body {
          font-family: Arial, sans-serif;
          padding: 20px;
      }
      h1 {
          text-align: center;
      }
      .container {
          display: flex;
          gap: 20px;
          flex-wrap: wrap;
          justify-content: center;
      }
      form {
          display: flex;
          flex-direction: column;
          width: 300px;
      }
      input, textarea, button {
          margin-bottom: 10px;
          padding: 10px;
          font-size: 16px;
      }
      .map-container {
          width: 400px;
          height: 300px;
          border: 2px solid black;
      }
      iframe {
          width: 100%;
          height: 100%;
          border: 0;
      }
  </style>
</head>
<body>
  <h1>Hubungi Saya</h1>
  <div class="container">
      <form action="#" method="post">
          <input type="email" name="email" placeholder="Email" required>
          <input type="text" name="nama" placeholder="Nama" required>
          <input type="text" name="subject" placeholder="Subject" required>
          <textarea name="pesan" placeholder="Isi pesan..." rows="5" required></textarea>
          <button type="submit">Kirim</button>
      </form>
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6047.4020711245175!2d111.86811756136827!3d-7.173937430300137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7781c6a7e6aa99%3A0xa61de88af486a140!2sPacul%2C%20Kec.%20Bojonegoro%2C%20Kabupaten%20Bojonegoro%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1749466704057!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
</div>
</section>


    </body>
  </head>
          
  <footer>
    <p>&copy; Copyright by Farobauw</p>
  </footer>

</body>
</html>