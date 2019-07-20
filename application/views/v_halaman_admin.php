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
	 <div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		  <a class="nav-item nav-link active" href="<?php echo base_url('c_input_jadwal')?>">Input Jadwal Jam Pelajaran <span class="sr-only">(current)</span></a>
		  <a class="nav-item nav-link" href="<?php echo base_url('c_input_lagu')?>">Input Lagu/Musik Bell</a>
		</div>
	  </div>
	</nav>
      <div class="jumbotron mt-3">
        <h1 id="date"></h1>
        <h3 id="time"></h3>
				<input type="hidden" id="test" value="">
				<input type="hidden" id="testtgl" value="">
        <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
        <a class="btn btn-lg btn-primary" href="../../components/navbar/index.html" role="button">View navbar docs &raquo;</a>
      </div>
    </div>
<audio id="suara">
<source id ="sourcesuara" src="<?php echo base_url('assets/bell/bell.mp3')?>" type="audio/mpeg">
</audio>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/moment-with-locales.js')?>"></script>
	<script>
		var url = '<?php echo base_url('assets/bell/')?>';
$(document).ready(function() {

    var interval = setInterval(function() {
        var momentNow = moment();
				moment.locale('id');
				$('#date').html(momentNow.format('dddd , Do MMMM YYYY'));
        $('#time').html(momentNow.format('HH:mm:ss A'));
				$('#test').val(momentNow.format('HH:mm:ss'));
				$('#testtgl').val(momentNow.format('dddd'));
				var hari = $('#testtgl').val();
				var jam = $('#test').val();
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url('admin/loadjam'); ?>',
					dataType: 'json',
					data: {hari:hari},
					success:function(response){
						 for(i=0; i<response.length; i++){
							if(response[i].hari == hari && response[i].jam == jam){
								$('#sourcesuara').attr('src', '<?php echo base_url('ringtone/')?>'+response[i].bell);
								$("#suara")[0].play();
							}
		          }
					
					}
				});
    }, 100);

});


	// setInterval(getwaktu,1000);
	// function ajaxrequest(hari,jam){
	// 				$.ajax({
	// 				type: 'POST',
	// 				url: '<?php echo base_url('admin/loadjam'); ?>',
	// 				dataType: 'json',
	// 				data: {hari:hari,jam:jam},
	// 				success:function(response){
						
	// 					if(response.bellberbunyi){
	// 					console.log(response);
	// 					}
	// 					else{
						
	// 					}
	// 				}
	// 			});
	// return;
	// }
	// function gethari(n){
	// 	var hari="";
	// 	switch(n){
	// 		case 0:
	// 		hari="Minggu";
	// 		break;
	// 		case 1:
	// 		hari="Senin";
	// 		break;
	// 		case 2:
	// 		hari="Selasa";
	// 		break;
	// 		case 3:
	// 		hari="Rabu";
	// 		break;
	// 		case 4:
	// 		hari="Kamis";
	// 		break;
	// 		case 5:
	// 		hari="Jumat";
	// 		break;
	// 		case 6:
	// 		hari="Sabtu";
	// 		break;
	// 	}
	// 	return hari;
	// }
	// function getwaktu(){
	// var a  = document.getElementById('date');
	// var date = new Date();
	// var hari = date.getDay();
	// var jam = date.getHours();
	// var menit = date.getMinutes();
	// var detik = date.getSeconds();
	// a.innerHTML = jam.toString()+":"+menit.toString()+":"+detik.toString();
	// var hariini = gethari(hari);
	// jamskrg = jam.toString()+":"+menit.toString()+":"+detik.toString();
	// ajaxrequest(hariini,jamskrg);
	// if(detik==35){
	// 	suara.play();
	// }
	// }
	
	</script>
  </body>
</html>