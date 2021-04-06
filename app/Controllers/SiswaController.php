<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Siswa;
class SiswaController extends Controller{
    public function index()
    {
        $model = new Siswa();
        $data['siswa'] = $model->getSiswa();
        echo view('siswa/index', $data);
    }
    public function create()
{
    return view('siswa/create');
}
 
public function store()
{
    $validation =  \Config\Services::validation();
 
    $data = array(
        'nik_siswa'     => $this->request->getPost('nik_siswa'),
        'nama_siswa'   => $this->request->getPost('nama_siswa'),
        'jenis_kelamin_siswa'   => $this->request->getPost('jenis_kelamin_siswa'),
    );
 
    if($validation->run($data, 'siswa') == FALSE){
        session()->setFlashdata('inputs', $this->request->getPost());
        session()->setFlashdata('errors', $validation->getErrors());
        return redirect()->to(base_url('siswa/create'));
    } else {
        $model = new Siswa();
        $simpan = $model->insertSiswa($data);
        if($simpan)
        {
            session()->setFlashdata('success', 'Created Siswa successfully');
            return redirect()->to(base_url('siswacontroller')); 
        }
    }
}
public function edit($id)
{  
    $model = new Category_model();
    $data['category'] = $model->getCategory($id)->getRowArray();
    echo view('category/edit', $data);
}
 
public function update()
{
    $id = $this->request->getPost('id_siswa');
 
    $validation =  \Config\Services::validation();
 
    // $data = array(
    //     'category_name'     => $this->request->getPost('category_name'),
    //     'category_status'   => $this->request->getPost('category_status'),
    // );
     
    if($validation->run($data, 'siswa') == FALSE){
        session()->setFlashdata('inputs', $this->request->getPost());
        session()->setFlashdata('errors', $validation->getErrors());
        return redirect()->to(base_url('siswa/edit/'.$id));
    } else {
        $model = new Siswa();
        $ubah = $model->updateSiswa($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated Siswa successfully');
            return redirect()->to(base_url('category')); 
        }
    }
}
}