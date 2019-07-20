<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap4-offline-docs-master/examples/sign-in/signin.css')?>">

    <title>Halaman Awal</title>
  </head>
  <body>
<body class="bg-light">

    <div class="container">


      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Input Jadwal</h4>
          <form class="needs-validation" action="" method="post">
          <?= validation_errors();?>
          <?= $error?>
          <?= $this->session->flashdata('flash');?>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Hari</label>
				  <select class="custom-select d-block w-100" id="hari" name="hari" >
                  <option value="">Pilih Hari</option>
                  <option>Senin</option>
                  <option>Selasa</option>
				  <option>Rabu</option>
				  <option>Kamis</option>
				  <option>Jumat</option>
				  <option>Sabtu</option>
				  <option>Minggu</option>
                </select>
                
           
              </div>
            </div>
			 <div class="row">
            <div class="col-sm-2">
              <label for="address">Jam</label>
              <input type="number" name="jam" class="form-control" id="jam" min="00" max="24" >
            </div>
			    <div class="col-sm-2">
              <label for="address">Menit</label>
              <input type="number" name="menit" class="form-control" min="00" max="60" id="menit" >
            </div>
			    <div class="col-sm-2">
              <label for="address">Detik</label>
              <input type="number" name="detik" class="form-control" min="00" max="60" id="detik" >
            </div>
			</div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="deskripsi">Deskripsi</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
          
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Ringtone</label>
				  <select class="custom-select d-block w-100" id="ringtone" name="ringtone" >
                  <option value="">Pilih Ringtone</option>
                  <?php 

            foreach($groups as $row)
            { 
              echo '<option value="'.$row->nama_file.'">'.$row->nama_file.'</option>';
            }
            ?>
                
                </select>
                
           
              </div>
            </div>
            <hr class="mb-4">

 
            <button class="btn btn-primary btn-lg btn-block" id="btn_save" type="submit">Submit</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
      
      </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

  </body>
</html>