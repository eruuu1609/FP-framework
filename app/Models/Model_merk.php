<?php 

namespace App\Models;

use CodeIgniter\Model;

class Model_merk extends Model
{
  public function allData() {
    return $this->db->table('merk')
    ->get()
    ->getResultArray();
  }

  public function detailData($id_merk) {
    return $this->db->table('merk')
    ->where('id_merk', $id_merk)
    ->get()
    ->getRowArray();
  }

  public function add($data) {
    $this->db->table('merk')->insert($data);
  }
  
  public function edit($data) {
    $this->db->table('merk')
    ->where('id_merk', $data['id_merk'])
    ->update($data);
  }

  public function deleteData($data) {
    $this->db->table('merk')
    ->where('id_merk', $data['id_merk'])
    ->delete($data);
  }
}
