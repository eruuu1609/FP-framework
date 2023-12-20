<?php 

namespace App\Models;

use CodeIgniter\Model;

class Model_tipe extends Model
{
  public function allData() {
    return $this->db->table('tipe')
    ->get()
    ->getResultArray();
  }

  public function detailData($id_tipe) {
    return $this->db->table('tipe')
    ->where('id_tipe', $id_tipe)
    ->get()
    ->getRowArray();
  }

  public function add($data) {
    $this->db->table('tipe')->insert($data);
  }
  
  public function edit($data) {
    $this->db->table('tipe')
    ->where('id_tipe', $data['id_tipe'])
    ->update($data);
  }

  public function deleteData($data) {
    $this->db->table('tipe')
    ->where('id_tipe', $data['id_tipe'])
    ->delete($data);
  }
}
