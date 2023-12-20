<?php echo view('template/header.php')?>

<div class="album py-5 bg-body-tertiary">
  <div class="container">
        <div class="col-lg-12">
          <?php 
            if(session()->getFlashdata('pesan')) {
              echo '<div class="alert alert-success" role="alert"> Sepatu berhasil ditambahkan!';
            }
          ?>
        </div>
        <?php 
        $keranjang = $cart->contents();
        $jml_item = 0;

        foreach($keranjang as $key => $value) {
          $jml_item += $value['qty'];
        }
        ?>
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-secondary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="20.5" r="1"/><circle cx="18" cy="20.5" r="1"/><path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1"/></svg> <?= $jml_item; ?></button>
          <a class="btn btn-sm btn-primary mb-2" href="<?= base_url('home/cart') ?>" role="button">Lihat Keranjang</a>
          <a class="btn btn-sm btn-success mb-2" href="<?= base_url('checkout') ?>" role="button">Checkout</a>
        </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       <?php foreach ($sepatu as $key => $value) : ?>
         <div class="col">
           <?php
           echo form_open('home/add');
           echo form_hidden('id', $value['id_sepatu']);
           echo form_hidden('price', $value['harga_sepatu']);
           echo form_hidden('name', $value['nama_sepatu']);
           // option
           echo form_hidden('foto', $value['foto']);
           echo form_hidden('merk', $value['id_merk']);
           echo form_hidden('tipe', $value['id_tipe']);
           ?>
           <div class="card shadow-sm">
           <img src="<?= base_url('foto/' . $value['foto']); ?>" alt="" srcset="" width="100%">
             <div class="card-body">
               <h5 class="card-text"><?= $value['nama_sepatu']; ?></h5>
               <h6 class="card-text">Merk: <?= $value['nama_merk']; ?></h6>
               <h6 class="card-text">Tipe: <?= $value['nama_tipe']; ?></h6>
               <div class="d-flex justify-content-between align-items-center">
                 <div class="btn-group">
                   
                   <button type="submit" class="btn btn-sm btn-success">
                     Add to Cart
                   </button>
                 </div>
                 <h6 class="card-text">Rp <?= $value['harga_sepatu']; ?></h6>
               </div>
             </div>
           </div>
           <?= form_close(); ?>
         </div>
       <?php endforeach; ?>
    </div>
  </div>
</div>

<?php echo view('template/footer.php')?>