<?php 
namespace App\Models;

use CodeIgniter\Model;

class Absen extends Model{
    protected $table      = 'absen';
    
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    public function getAbsen($id = false){
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id_absen' => $id]);
        }   
    }
    public function insertAbsen($data)
{
    return $this->db->table($this->table)->insert($data);
}
public function updateAbsen($data, $id)
{
    return $this->db->table($this->table)->update($data, ['id_absen' => $id]);
}
public function getSiswa($query = false) {
  

    $query = $this->db->query("SELECT * FROM absen JOIN siswa on siswa.id_siswa = absen.id_siswa");

    // your array result
    $result_array = $query->getResultArray();
    // your object result
    $result_object = $query->getResult();

    return  $result_array = $query->getResultArray();
    }
}