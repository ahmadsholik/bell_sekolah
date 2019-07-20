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
          <h4 class="mb-3">Input Lagu</h4>
			<?php echo $error;?>

			<?php echo form_open_multipart('c_input_lagu/do_upload');?>
			 <div class="custom-file">
				<input type="file" class="custom-file-input" id="inputGroupFile01" name="userfile" aria-describedby="inputGroupFileAddon01">
				<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
			  </div>
			   <button class="btn btn-primary btn-lg btn-block mt-2" id="btn_save" type="submit">Submit</button>
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