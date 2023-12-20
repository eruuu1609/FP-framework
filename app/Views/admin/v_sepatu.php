<?php echo view('template/header_admin')?>

<div class="container-fluid">
  <div class="row">
  <?php echo view('template/sidebar_admin')?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3"> 
        <a href="<?= base_url('sepatu/add') ?>" class="btn btn-sm btn-success mb-3 pb-1">Tambah Sepatu</a>
      </div>
      <table class="table table-bordered" id="example1">
        <thead>
          <tr>
            <th class="text-center align-middle" >Nomor</th>
            <th class="align-middle">Nama Sepatu</th>
            <th class="align-middle">Merk</th>
            <th class="align-middle">Tipe</th>
            <th class="align-middle">Foto</th>
            <th class="align-middle">Harga</th>
            <th class="text-center align-middle">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $count = 1;
          foreach ($sepatu as $key => $value) : ?>
            <tr>
              <td class="text-center"><?= $count++; ?></td>
              <td><?= $value['nama_sepatu']; ?></td>
              <td><?= $value['nama_merk']; ?></td>
              <td><?= $value['nama_tipe']; ?></td>
              <td><img src="<?= base_url('foto/' . $value['foto']); ?>" alt="" srcset="" width="50px"></td>
              <td><?= $value['harga_sepatu']; ?></td>
              <td class="text-center">
                <a href="<?= base_url('sepatu/edit/' . $value['id_sepatu']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= base_url('sepatu/delete/' . $value['id_sepatu']) ?>" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      
    </main>
  </div>
</div>

<?php echo view('template/footer_admin')?>