<?php 
namespace App\Models;

use CodeIgniter\Model;

class Siswa extends Model{
    protected $table      = 'siswa';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    public function getSiswa($id = false){
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id_siswa' => $id]);
        }   
    }
    public function insertSiswa($data)
{
    return $this->db->table($this->table)->insert($data);
}
public function updateSiswa($data, $id)
{
    return $this->db->table($this->table)->update($data, ['id_siswa' => $id]);
}
}