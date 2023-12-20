<?php 

namespace App\Models;

use CodeIgniter\Model;

class Model_sepatu extends Model
{
  public function allData() {
    return $this->db->table('sepatu')
    ->join('merk', 'merk.id_merk = sepatu.id_merk', 'left')
    ->join('tipe', 'tipe.id_tipe = sepatu.id_tipe', 'left')
    ->get()
    ->getResultArray();
  }

  public function detailData($id_sepatu) {
    return $this->db->table('sepatu')
    ->join('merk', 'merk.id_merk = sepatu.id_merk', 'left')
    ->join('tipe', 'tipe.id_tipe = sepatu.id_tipe', 'left')
    ->where('id_sepatu', $id_sepatu)
    ->get()
    ->getRowArray();
  }

  public function add($data) {
    $this->db->table('sepatu')->insert($data);
  }
  
  public function edit($data) {
    $this->db->table('sepatu')
    ->where('id_sepatu', $data['id_sepatu'])
    ->update($data);
  }

  public function deleteData($data) {
    $this->db->table('sepatu')
    ->where('id_sepatu', $data['id_sepatu'])
    ->delete($data);
  }
}
