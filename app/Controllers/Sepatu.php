<?php

namespace App\Controllers;
use App\Models\Model_sepatu;
use App\Models\Model_merk;
use App\Models\Model_tipe;

use App\Controllers\BaseController;

class Sepatu extends BaseController
{
    public function __construct() {
        $this->Model_sepatu = new Model_sepatu();
        $this->Model_merk = new Model_merk();
        $this->Model_tipe = new Model_tipe();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'sepatu' => $this->Model_sepatu->allData(),
            'merk' => $this->Model_merk->allData(),
            'tipe' => $this->Model_tipe->allData(),
        );

        return view ('admin/v_sepatu', $data);
    }

    public function add() {
        $data = array(
            'sepatu' => $this->Model_sepatu->allData(),
            'merk' => $this->Model_merk->allData(),
            'tipe' => $this->Model_tipe->allData(),
        );
        return view('admin/v_add_sepatu', $data);
    }

    public function insert() {
        // mengambil file foto yang akan diupload
        $foto = $this->request->getFile('foto');
        // mengacak nama file foto
        $nama_file = $foto->getRandomName();

        $data = [
            'nama_sepatu' => $this->request->getPost('nama_sepatu'),
            'id_merk' => $this->request->getPost('id_merk'),
            'id_tipe' => $this->request->getPost('id_tipe'),
            'harga_sepatu' => $this->request->getPost('harga_sepatu'),
            'foto' => $nama_file,
        ];

        // direktori upload file
        $foto->move('foto', $nama_file);

        $this->Model_sepatu->add($data);
        return redirect()->to(base_url('sepatu'));
    }

    public function edit($id_sepatu) {
        $data = array(
            'sepatu' => $this->Model_sepatu->detailData($id_sepatu),
            'merk' => $this->Model_merk->allData(),
            'tipe' => $this->Model_tipe->allData(),
        );
        return view('admin/v_edit_sepatu', $data);
    }

    public function update($id_sepatu) {
        // mengambil file foto yang akan diupload
        $foto = $this->request->getFile('foto');
        // mengacak nama file foto
        $nama_file = $foto->getRandomName();

        if ($foto->getError() == 4) {
        $data = [
            'id_sepatu' => $id_sepatu,
            'nama_sepatu' => $this->request->getPost('nama_sepatu'),
            'id_merk' => $this->request->getPost('id_merk'),
            'id_tipe' => $this->request->getPost('id_tipe'),
            'harga_sepatu' => $this->request->getPost('harga_sepatu'),
        ];

        $this->Model_sepatu->edit($data);
        } else {
            // menghapus foto lama
            $sepatu = $this->Model_sepatu->detailData($id_sepatu);
            if ($sepatu['foto'] != '') {
            unlink('foto/' . $sepatu['foto']);
            }

            $data = [
            'id_sepatu' => $id_sepatu,
            'nama_sepatu' => $this->request->getPost('nama_sepatu'),
            'id_merk' => $this->request->getPost('id_merk'),
            'id_tipe' => $this->request->getPost('id_tipe'),
            'harga_sepatu' => $this->request->getPost('harga_sepatu'),
            'foto' => $nama_file,
            ];

            // direktori upload file
            $foto->move('foto', $nama_file);

            $this->Model_sepatu->edit($data);
        }

        return redirect()->to(base_url('sepatu'));
    }

    public function delete($id_sepatu) {
        $data = [
            'id_sepatu' => $id_sepatu,
        ];

        $this->Model_sepatu->deleteData($data);
        return redirect()->to(base_url('sepatu'));
    }


}
