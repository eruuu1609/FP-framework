<?php echo view('template/header_admin')?>

<div class="container-fluid">
  <div class="row">
    <?php echo view('template/sidebar_admin')?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard Pembelian Sepatu</h1>
      </div>

      <table class="table table-bordered" id="example1">
        <thead>
          <tr>
            <th class="text-center align-middle" >Nomor</th>
            <th class="align-middle">Nama Pembeli</th>
            <th class="align-middle">Alamat Pembeli</th>
            <th class="align-middle">Jenis Pembayaran</th>
            <th class="align-middle">Nomor Telepon</th>
            <th class="align-middle">Total Belanja</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $count = 1;
          foreach ($checkout as $key => $value) : ?>
            <tr>
              <td class="text-center"><?= $count++; ?></td>
              <td><?= $value['nama_pembeli']; ?></td>
              <td><?= $value['alamat']; ?></td>
              <td><?= $value['jenis_pembayaran']; ?></td>
              <td><?= $value['no_telp']; ?></td>
              <td><?= $value['total_harga']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      </div>
    </main>
  </div>
</div>

<?php echo view('template/footer_admin')?>