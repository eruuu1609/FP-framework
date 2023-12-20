<?php echo view('template/header_admin')?>

<div class="container-fluid">
  <div class="row">
    <?php echo view('template/sidebar_admin')?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">  
        <a href="<?= base_url('merk/add') ?>" class="btn btn-sm btn-success mb-3 pb-1">Tambah Merk Sepatu</a>
      </div>
      <table class="table table-bordered" id="example1">
        <thead>
          <tr>
            <th class="text-center align-middle" >Nomor</th>
            <th class="align-middle">Nama Merk</th>
            <th class="text-center align-middle">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $count = 1;
          foreach ($merk as $key => $value) : ?>
            <tr>
              <td class="text-center"><?= $count++; ?></td>
              <td><?= $value['nama_merk']; ?></td>
              <td class="text-center">
                <a href="<?= base_url('merk/edit/' . $value['id_merk']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= base_url('merk/delete/' . $value['id_merk']) ?>" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      
    </main>
  </div>
</div>

<?php echo view('template/footer_admin')?>