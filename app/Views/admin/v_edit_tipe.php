<?php echo view('template/header_admin')?>

<div class="container-fluid">
  <div class="row">
    <?php echo view('template/sidebar_admin')?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <?= form_open_multipart('tipe/update/' . $tipe['id_tipe']); ?>
        <div class="form-group">
          <label class="mb-2">Nama Tipe</label>
          <input name="nama_tipe" class="form-control mb-2" value="<?= $tipe['nama_tipe']; ?>">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success">Update</button>
          <a href="<?= base_url('tipe') ?>" class="btn btn-primary">Kembali</a>
        </div>
      <?= form_close(); ?>

    </main>
  </div>
</div>

<?php echo view('template/footer_admin')?>