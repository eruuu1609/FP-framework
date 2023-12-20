<?php

namespace App\Controllers;
use App\Models\Model_tipe;

class Tipe extends BaseController
{
    public function __construct() {
      $this->Model_tipe = new Model_tipe();
      helper('form');
    }

    public function index(): string
    {
        $data = array(
            'tipe' => $this->Model_tipe->allData(),
        );
        return view('admin/v_tipe', $data);
    }

    public function add() {
        $data = array(
            'tipe' => $this->Model_tipe->allData(),
        );
        return view('admin/v_add_tipe', $data);
    }

    public function insert() {
        $data = [
            'nama_tipe' => $this->request->getPost('nama_tipe'),
        ];

        $this->Model_tipe->add($data);
        return redirect()->to(base_url('tipe'));
    }

    public function edit($id_tipe) {
        $data = array(
            'tipe' => $this->Model_tipe->detailData($id_tipe),
        );
        return view('admin/v_edit_tipe', $data);
    }

    public function update($id_tipe) {
        $data = [
            'id_tipe' => $id_tipe,
            'nama_tipe' => $this->request->getPost('nama_tipe'),
        ];

        $this->Model_tipe->edit($data);
        return redirect()->to(base_url('tipe'));
    }

    public function delete($id_tipe) {
        $data = [
            'id_tipe' => $id_tipe,
        ];

        $this->Model_tipe->deleteData($data);
        return redirect()->to(base_url('tipe'));
    }
}
