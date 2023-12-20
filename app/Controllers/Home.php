<?php

namespace App\Controllers;
use App\Models\Model_sepatu;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function __construct() {
        $this->Model_sepatu = new Model_sepatu();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'sepatu' => $this->Model_sepatu->allData(),
            'cart' => \Config\Services::cart(),
        );

        return view ('v_home', $data);
    }

    public function cek() {
        $cart = \Config\Services::cart();
        $response = $cart->contents();
        echo '<pre>';
        print_r($response);
        echo '</pre>';
    }

    // Insert Shopping Cart
    public function add() {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'price'   => $this->request->getPost('price'),
            'name'    => $this->request->getPost('name'),
            'options' => array(
                'foto' => $this->request->getPost('foto'),
                'merk' => $this->request->getPost('merk'),
                'tipe' => $this->request->getPost('tipe'),
            )
        ));
        session()->setFlashdata('pesan', 'Berhasil menambahkan barang ke keranjang!');

        return redirect()->to(base_url('home'));
    }

    public function clear() {
        $cart = \Config\Services::cart();
        $cart->destroy();

        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert"> Berhasil mengosongkan keranjang!</div>');

        return redirect()->to(base_url('home/cart'));
    }

    public function cart() {
        $data = array(
            'cart' => \Config\Services::cart(),
        );

        return view ('v_cart', $data);
    }

    public function update() {
        $cart = \Config\Services::cart();
        $i = 1;
        foreach($cart->contents() as $key => $value) {
            $cart->update(array(
                'rowid'   => $value['rowid'],
                'qty'     => $this->request->getPost('qty' . $i++),
            ));
        }
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert"> Berhasil mengupdate keranjang!</div>');

        return redirect()->to(base_url('home/cart'));
    }

    public function delete($rowid) {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);

        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert"> Berhasil menghapus item keranjang!</div>');

        return redirect()->to(base_url('home/cart'));
    }

}
