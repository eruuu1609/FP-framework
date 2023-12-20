<?php 

namespace App\Models;

use CodeIgniter\Model;

class Model_checkout extends Model
{
  public function allData() {
    return $this->db->table('pembelian')
    ->get()
    ->getResultArray();
  }

  public function detailData($id_pembelian) {
    return $this->db->table('pembelian')
    ->where('id_pembelian', $id_pembelian)
    ->get()
    ->getRowArray();
  }

  public function add($data) {
    $this->db->table('pembelian')->insert($data);
  }
  
  public function edit($data) {
    $this->db->table('pembelian')
    ->where('id_pembelian', $data['id_pembelian'])
    ->update($data);
  }

  public function deleteData($data) {
    $this->db->table('pembelian')
    ->where('id_pembelian', $data['id_pembelian'])
    ->delete($data);
  }
}
