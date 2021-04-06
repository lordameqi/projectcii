<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Absen;
use App\Models\Siswa;
class AbsenController extends Controller{
    public function index()
    {
        $model = new Absen();
        $data['absen'] = $model->getAbsen();
        echo view('absen/index', $data);
    }
    public function createmasuk()
    {
        $model = new Siswa();
        $data['siswa'] = $model->getSiswa();
        //echo view('absen/masuk', $data);
     return view('absen/masuk', $data);
    }

    public function storemasuk()
{
    $validation =  \Config\Services::validation();
    $a= date("Y/m/d");
    date_default_timezone_set("Asia/Jakarta");
    $b=date('h:i:s A');
    $data = array(
        'id_siswa'     => $this->request->getPost('id_siswa'),
        'masuk_tgl'   => $a,
        'masuk_jam'   => $b,
    );
 
    // if($validation->run($data, 'absen') == FALSE){
    //     session()->setFlashdata('inputs', $this->request->getPost());
    //     session()->setFlashdata('errors', $validation->getErrors());
    //     return redirect()->to(base_url('absen/create'));
    // } else {
        $model = new Absen();
        $simpan = $model->insertAbsen($data);
        if($simpan)
        {
            session()->setFlashdata('success', 'Created Absen Masuk successfully');
            return redirect()->to(base_url('absencontroller')); 
        }
    //}
}
    public function createkeluar()
    {
    return view('absen/keluar');
    }
}