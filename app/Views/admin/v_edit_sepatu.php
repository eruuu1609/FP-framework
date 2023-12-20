<?php echo view('template/header_admin')?>

<div class="container-fluid">
  <div class="row">
    <?php echo view('template/sidebar_admin')?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <?= form_open_multipart('sepatu/update/' . $sepatu['id_sepatu']); ?>
          <div class="form-group">
            <label>Nama Sepatu</label>
            <input name="nama_sepatu" class="form-control" value="<?= $sepatu['nama_sepatu']; ?>">
          </div>
          
          <div class="form-group">
            <label>Merk</label>
            <select name="id_merk" class="form-control">
              <option value="<?= $sepatu['id_merk']; ?>"><?= $sepatu['nama_merk']; ?></option>
              <?php foreach ($merk as $key => $value) : ?>
                <option value="<?= $value['id_merk']; ?>"><?= $value['nama_merk']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
            
          <div class="form-group">
            <label>Tipe</label>
            <select name="id_tipe" class="form-control">
              <option value="<?= $sepatu['id_tipe']; ?>"><?= $sepatu['nama_tipe']; ?></option>
              <?php foreach ($tipe as $key => $value) : ?>
                <option value="<?= $value['id_tipe']; ?>"><?= $value['nama_tipe']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
              
          <div class="form-group">
            <label>Harga</label>
            <input name="harga_sepatu" class="form-control" value="<?= $sepatu['harga_sepatu']; ?>">
          </div>

          <div class="form-group">
            <div class="col-sm-4">
              <label>Foto Sepatu</label>
                <img src="<?= base_url('foto/' . $sepatu['foto']) ?>" width="100px">
            </div>
            <div class="col-sm-8">
              <div class="form-group">
                <label>Ganti Foto</label>
                <input name="foto" class="form-control" type="file">
              </div>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= base_url('sepatu') ?>" class="btn btn-primary">Kembali</a>
          </div>
        <?= form_close(); ?>

    </main>
  </div>
</div>

<?php echo view('template/footer_admin')?>