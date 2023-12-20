<?php echo view('template/header.php')?>

<div class="container">
  <main>
    <div class="py-5 text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="20.5" r="1"/><circle cx="18" cy="20.5" r="1"/><path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1"/></svg>
      <h2>Form Checkout</h2>
      <p class="lead">Silahkan melanjutkan pembayaran transaksi anda pada formulir di bawah ini.</p>
    </div>

    <div class="row g-5">
      <?php 
      $keranjang = $cart->contents();
      $jml_item = 0;

      foreach($keranjang as $key => $value) {
        $jml_item += $value['qty'];
      }
      ?>
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Keranjang Anda</span>
          <span class="badge bg-primary rounded-pill"><?= $jml_item; ?></span>
        </h4>
        <ul class="list-group mb-3">
          <?php foreach($keranjang as $key => $value) : ?>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><?= $value['name']; ?></h6>
              <small class="text-body-secondary"><?= $value['qty']; ?> item(s)</small>
            </div>
            <span class="text-body-secondary">Rp <?= $value['subtotal']; ?></span>
          </li>
          <?php endforeach; ?>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong>Rp <?= $cart->total(); ?></strong>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Alamat Pengiriman</h4>
        <?= form_open('checkout/insert') ?>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Anda" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nomor Telephone</label>
              <div class="input-group has-validation">
                <span class="input-group-text">+62</span>
                <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Pengiriman" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
          </div>

          <h4 class="mb-3">Pembayaran</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="transfer" name="jenis_pembayaran" value="transfer" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="transfer">Transfer Bank</label>
            </div>
            <div class="form-check">
              <input id="e-money" name="jenis_pembayaran" value="e-money" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="e-money">Go-Pay/OVO/Shopee-Pay</label>
            </div>
            <div class="form-check">
              <input id="cash" name="jenis_pembayaran" value="cash" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="cash">Cash</label>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Lanjutkan checkout</button>
        <?= form_close() ?>
      </div>
    </div>
  </main>

<?php echo view('template/footer.php')?>