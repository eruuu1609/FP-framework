<?php

namespace App\Controllers;
use App\Models\Model_merk;

class Merk extends BaseController
{
    public function __construct() {
      $this->Model_merk = new Model_merk();
      helper('form');
    }

    public function index(): string
    {
        $data = array(
            'merk' => $this->Model_merk->allData(),
        );
        return view('admin/v_merk', $data);
    }

    public function add() {
        $data = array(
            'merk' => $this->Model_merk->allData(),
        );
        return view('admin/v_add_merk', $data);
    }

    public function insert() {
        $data = [
            'nama_merk' => $this->request->getPost('nama_merk'),
        ];

        $this->Model_merk->add($data);
        return redirect()->to(base_url('merk'));
    }

    public function edit($id_merk) {
        $data = array(
            'merk' => $this->Model_merk->detailData($id_merk),
        );
        return view('admin/v_edit_merk', $data);
    }

    public function update($id_merk) {
        $data = [
            'id_merk' => $id_merk,
            'nama_merk' => $this->request->getPost('nama_merk'),
        ];

        $this->Model_merk->edit($data);
        return redirect()->to(base_url('merk'));
    }

    public function delete($id_merk) {
        $data = [
            'id_merk' => $id_merk,
        ];

        $this->Model_merk->deleteData($data);
        return redirect()->to(base_url('merk'));
    }
}
