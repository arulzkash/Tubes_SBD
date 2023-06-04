<?php
include 'function.php';

$user = readTekananDarahNotBlankUser();

?>

<!DOCTYPE html>
<html>

<head>
  <title>Data User dengan BMI</title>
  <!-- Tautan ke file Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .modal-custom {
      max-width: 600px;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Data User dengan BMI</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Berat (kg)</th>
          <th>Tinggi (cm)</th>
          <th>BMI</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John Doe</td>
          <td>70</td>
          <td>175</td>
          <td>22.86</td>
          <td>Normal</td>
          <td>
            <!-- Tombol untuk memicu modal -->
            <a class="small-box-footer" data-toggle="modal" data-target="#myModal">
              Lihat Detail
            </a>
          </td>
        </tr>
        <!-- Tambahkan baris lain untuk data user lainnya -->
      </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-custom modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Users with BMI Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="overflow-y: auto;">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Golongan Darah</th>
                  <th>Tekanan Darah</th>
                  <th>Status Tekanan Darah</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($user as $a) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $a['usn_user'] ?></td>
                    <td><?= $a['golongan_darah'] ?></td>
                    <td><?= $a['tekanan_darah'] ?></td>
                    <td><?= $a['status_tdarah'] ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Skrip untuk Bootstrap dan jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>