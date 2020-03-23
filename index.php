<!DOCTYPE html>
<html>
<head>
	<title>Kontrol Siram Tanaman</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
</head>
<body>
	<?php 
	include_once 'config/dao.php';
	$dao = new Dao();
	$pompa = $dao->tampil();
	$status_air;
	?>
	<div class="container-fluid">
		<br><br>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header"><center>Kontrol & Monitoring</center></div>
				<div class="card-body">
					<?php foreach ($pompa as $value) { 
						$status_air = $value['status_air'];
						?>
						<div class="row">
							<div class="col-md-6">
								<label><?php echo strtoupper($value['nama']) ?></label>
							</div>
							<div class="col-md-6">
								<?php 
								if($value['status_pompa'] == "on"){
									$aksi = "aksi?id=".$value['id']."&aksi=off";
									$tombol = "OFF";
									$style = "btn-primary";
								}
								else{
									$aksi = "aksi?id=".$value['id']."&aksi=on";
									$tombol = "ON";
									$style = "btn-success";
								}
								?>
								<a href="<?php echo $aksi; ?>"><button class="btn <?php echo $style ?>"><?php echo $tombol ?></button></a>
							</div>
						</div><br>
					<?php } ?>
					<div class="row">
						<div class="col-md-6">
							<label>Status Air</label>
						</div>
						<div class="col-md-6">
							<span class="badge" style="color:blue;font-size: 18px"><?php echo $status_air ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>