<?php

namespace App\Controllers;
use App\Models\Model_checkout;
use App\Models\Model_sepatu;

use App\Controllers\BaseController;

class Checkout extends BaseController
{
    public function __construct() {
      $this->Model_checkout = new Model_checkout();
      $this->Model_sepatu = new Model_sepatu();
      helper('form');
    }

    public function index()
    {
        $data = array(
            'cart' => \Config\Services::cart(),
        );
        return view ('v_checkout', $data);
    }

    public function insert() {
        $cart = \Config\Services::cart();
        $data = [
            'nama_pembeli' => $this->request->getPost('nama_pembeli'),
            'no_telp' => $this->request->getPost('no_telp'),
            'alamat' => $this->request->getPost('alamat'),
            'jenis_pembayaran' => $this->request->getPost('jenis_pembayaran'),
            'total_harga' => $cart->total(),
        ];

        $this->Model_checkout->add($data);

        $cart->destroy();
        return redirect()->to(base_url(''));
    }
}
