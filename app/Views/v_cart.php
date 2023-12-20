<?php echo view('template/header.php')?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">  
    <?php 
      if(session()->getFlashdata('pesan')) {
        echo '';
        echo session()->getFlashdata('pesan');
        echo '';
      }
    ?>
    <?php
      $keranjang = $cart->contents();
      $jml_item = 0;
      foreach($keranjang as $key => $value) {
        $jml_item += $value['qty'];
      }
    ?>
    <button type="button" class="btn btn-sm btn-outline-secondary mb-2">Keranjang <?= $jml_item; ?></button>
    <a class="btn btn-sm btn-primary mb-2" href="<?= base_url('home/cart') ?>" role="button">Lihat Keranjang</a>
    <a class="btn btn-sm btn-success mb-2" href="<?= base_url('checkout') ?>" role="button">Checkout</a>
    <?= 
    form_open('home/update');
    $i = 1;
    ?>
    <div class="row">
      <table class="table table-borderless" id="example1">
        <thead>
          <tr>
            <th class="text-center" width="50px">Quantity</th>
            <th class="text-center">Nama Sepatu</th>
            <th class="text-center">Harga Sepatu</th>
            <th class="text-center">Subtotal</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $count = 1;
          foreach ($cart->contents() as $key => $value) : ?>
            <tr>
              <td class="text-center"><input type="number" min="1" name="qty<?= $i++; ?>" class="form-control" value="<?= $value['qty']; ?>"></td>
              <td class="text-center"><?= $value['name']; ?></td>
              <td class="text-center">(Rp <?= $value['price']; ?>/item)</td>
              <td class="text-center">Rp <?= $value['subtotal']; ?></td>
              <td class="text-center"><a href="<?= base_url('home/delete/' . $value['rowid']) ?>" class="btn btn-sm btn-danger">Remove</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <div class=" d-flex justify-content-between mb-3">
        <strong>Total</strong>
        <strong>Rp <?= $cart->total(); ?></strong>
      </div>
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Update</button>
    <a href="<?= base_url('home/clear/') ?>" class="btn btn-sm btn-danger">Remove All</a>
    <?= form_close() ?>
  </div>
</div>

<?php echo view('template/footer.php')?>