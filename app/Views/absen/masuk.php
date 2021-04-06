<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create Masuk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Masuk</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('absencontroller/storemasuk'); ?>" method="post">
              <div class="card">
                <div class="card-body">
                  <?php 
                  $inputs = session()->getFlashdata('inputs');
                  $errors = session()->getFlashdata('errors');
                  if(!empty($errors)){ ?>
                  <div class="alert alert-danger" role="alert">
                    Whoops! Ada kesalahan saat input data, yaitu:
                    <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                    </ul>
                  </div>
                  <?php } ?>
 
                  <div class="form-group">
                      <label for="">Siswa</label>
                      <select name="id_siswa" id="" class="form-control">
                          <option value="">Pilih Siswa</option>
                          <?php                                
        foreach ($siswa as $row) {  
		  echo "<option value='".$row['id_siswa']."'>".$row['nama_siswa']."</option>";
		  }
		  echo"
		</select>"
		?>
                      </select>
                  </div>
                  <div class="form-group">
                  <?php 
                $a= date("Y/m/d");
       
                  ?>
                      <label for="">Tanggal</label>
                      <input type="text" class="form-control" name="masuk_tgl" value="<?php echo $a ?>" disabled>
                  </div>
                  <div class="form-group">
                  <?php 
date_default_timezone_set("Asia/Jakarta");
$b=date('h:i:s A');
                  ?>
                      <label for="">Jam</label>
                      <input type="text" class="form-control" name="masuk_jam" value="<?php echo $b ?>" disabled>
                  </div>
                   
                  <!-- <div class="form-group">
                      <label for="">Status</label>
                      <select name="category_status" id="" class="form-control">
                          <option value="">Pilih Kategori</option>
                          <option <?php //echo $inputs['category_status'] == "Active" ? "selected" : ""; ?> value="Active">Active</option>
                          <option <?php //echo $inputs['category_status'] == "Inactive" ? "selected" : ""; ?> value="Inactive">Inactive</option>
                      </select>
                  </div> -->
                </div>
                <div class="card-footer">
                    <a href="<?php echo base_url('category'); ?>" class="btn btn-outline-info">Back</a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
<?php echo view('_partials/footer'); ?>