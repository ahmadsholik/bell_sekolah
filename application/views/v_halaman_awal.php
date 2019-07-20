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
  <form class="form-signin" id="logForm">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="username" class="form-control" name="username" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"><span id="logText"></span></button>
      <p class="mt-5 mb-3 text-muted">&copy; UJIKOM RPL 2019</p>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<script>
	$(document).ready(function(){
		$('#logText').html('Login');
		$('#logForm').submit(function(e){
			e.preventDefault();
			$('#logText').html('Checking...');
			var url = '<?php echo base_url(); ?>';
			var user = $('#logForm').serialize();
			var login = function(){
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url('c_login'); ?>',
					dataType: 'json',
					data: user,
					success:function(response){
						console.log(response.message);
						$('#message').html(response.message);
						$('#logText').html('Login');
						if(response.error){
						alert("Username Atau Password Salah");
						}
						else{
							alert("Login Berhasil");
							$('#logForm')[0].reset();
							setTimeout(function(){
								location.reload();
							}, 1000);
						}
					}
				});
			};
			setTimeout(login, 3000);
		});
		$(document).on('click', '#clearMsg', function(){
			$('#responseDiv').hide();
		});
	});
	</script>
  </body>
</html>