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
public function getSiswa() {
    $query = $this->db->query("select * from siswa");
    return $query->result();
    }
}